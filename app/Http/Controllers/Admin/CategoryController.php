<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Category;
use App\Traits\PhotoTrait;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class CategoryController extends Controller
{
    use PhotoTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request)
    {
        $pinned = Category::where('name','مراسى')->get();
        if ($request->ajax()) {
            $data = Category::orderBy('id', 'DESC')->get();
            return Datatables::of($data)
                ->addColumn('action', function ($data) {
                    return '
                            <button type="button" data-id="' . $data->id . '" class="btn btn-pill btn-info-light editBtn"><i class="fa fa-edit"></i></button>
                            <button class="btn btn-pill btn-danger-light" data-toggle="modal" data-target="#delete_modal"
                                    data-id="' . $data->id . '" data-title="' . $data->name . '">
                                    <i class="fas fa-trash"></i>
                            </button>
                       ';
                })
                ->editColumn('image', function ($data) {
                    return '
                    <img alt="image" onclick="window.open(this.src)" class="avatar avatar-md rounded-circle" src="' . get_user_file($data->image) . '">
                    ';
                })
                ->escapeColumns([])
                ->make(true);
        } else {
            return view('Admin.category.index', compact('pinned'));
        }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('Admin/category.parts.create');
//        $category = Category::get();
//        return view('Admin.category.parts.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|unique:category,name',
            'image' => 'required|image'
        ], [
            'name.required' => 'يرجي اضافة اسم للتصنيف',
            'name.unique' => 'تم اضافة التصنيف من قبل',
            'image.required' => 'يرجي رفع صورة',
        ]);
        $data['image'] = $this->saveImage($request->image, 'assets/uploads/category');
        if (Category::create($data)) {
            return response()->json(['status' => 200]);
        } else {
            return response()->json(['status' => 405]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view('Admin.category.parts.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $data = $request->validate([
            'name' => 'required|unique:category,name,'.$id,
            'image' => 'nullable|image'
        ], [
            'name.required' => 'يرجي اضافة اسم للتصنيف',
            'name.unique' => 'تم اضافة التصنيف من قبل',
        ]);

        $data = $request->except('_token','_method');

        $category = Category::findOrFail($id);

         if ($request->has('image'))
             $data['image'] = $this->saveImage($request->image, 'assets/uploads/category');
         else
             unset($data['image']);


        if ($category->update($data)) {
            return response()->json(['status' => 200]);
        } else {
            return response()->json(['status' => 405]);
        }




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function delete(Request $request)
    {
        $row = Category::find($request->id);
        if (file_exists($row->image)) {
            unlink($row->image);
        }
        $row->delete();
        return response(['message' => 'تم الحذف بنجاح', 'status' => 200], 200);
    }
}
