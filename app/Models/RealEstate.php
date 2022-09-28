<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RealEstate extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $table='real_estate';
    public function type(){
        return $this->belongsTo(Type::class,'type_id');
    }
    public function category(){
        return $this->belongsTo(Category::class,'category_id');

    }
    public function images(){
        return $this->hasMany(RealEstateImage::class,'real_estate_id');
    }
    public function fetures(){
        return $this->belongsToMany(Feature::class,'features_real_estate','real_estate_id','feature_id');
    }

    public function reservation()
    {
        return $this->belongsToMany(Reservation::class,'real_estate_id');
    }

}
