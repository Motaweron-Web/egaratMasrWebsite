<?php //f702d4bce01b989b9579684355bab251
/** @noinspection all */

namespace LaravelIdea\Helper\App\Models {

    use App\Models\About_us;
    use App\Models\Admin;
    use App\Models\Category;
    use App\Models\ContactUs;
    use App\Models\Feature;
    use App\Models\FeaturesRealEstate;
    use App\Models\RealEstate;
    use App\Models\RealEstateImage;
    use App\Models\Reservation;
    use App\Models\Setting;
    use App\Models\Social;
    use App\Models\Token;
    use App\Models\Type;
    use App\Models\User;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;

    /**
     * @method About_us|null getOrPut($key, $value)
     * @method About_us|$this shift(int $count = 1)
     * @method About_us|null firstOrFail($key = null, $operator = null, $value = null)
     * @method About_us|$this pop(int $count = 1)
     * @method About_us|null pull($key, $default = null)
     * @method About_us|null last(callable $callback = null, $default = null)
     * @method About_us|$this random(int|null $number = null)
     * @method About_us|null sole($key = null, $operator = null, $value = null)
     * @method About_us|null get($key, $default = null)
     * @method About_us|null first(callable $callback = null, $default = null)
     * @method About_us|null firstWhere(string $key, $operator = null, $value = null)
     * @method About_us|null find($key, $default = null)
     * @method About_us[] all()
     */
    class _IH_About_us_C extends _BaseCollection {
        /**
         * @param int $size
         * @return About_us[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method About_us baseSole(array|string $columns = ['*'])
     * @method About_us create(array $attributes = [])
     * @method _IH_About_us_C|About_us[] cursor()
     * @method About_us|null|_IH_About_us_C|About_us[] find($id, array $columns = ['*'])
     * @method _IH_About_us_C|About_us[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method About_us|_IH_About_us_C|About_us[] findOrFail($id, array $columns = ['*'])
     * @method About_us|_IH_About_us_C|About_us[] findOrNew($id, array $columns = ['*'])
     * @method About_us first(array|string $columns = ['*'])
     * @method About_us firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method About_us firstOrCreate(array $attributes = [], array $values = [])
     * @method About_us firstOrFail(array $columns = ['*'])
     * @method About_us firstOrNew(array $attributes = [], array $values = [])
     * @method About_us firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method About_us forceCreate(array $attributes)
     * @method _IH_About_us_C|About_us[] fromQuery(string $query, array $bindings = [])
     * @method _IH_About_us_C|About_us[] get(array|string $columns = ['*'])
     * @method About_us getModel()
     * @method About_us[] getModels(array|string $columns = ['*'])
     * @method _IH_About_us_C|About_us[] hydrate(array $items)
     * @method About_us make(array $attributes = [])
     * @method About_us newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|About_us[]|_IH_About_us_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|About_us[]|_IH_About_us_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method About_us sole(array|string $columns = ['*'])
     * @method About_us updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_About_us_QB extends _BaseBuilder {}

    /**
     * @method Admin|null getOrPut($key, $value)
     * @method Admin|$this shift(int $count = 1)
     * @method Admin|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Admin|$this pop(int $count = 1)
     * @method Admin|null pull($key, $default = null)
     * @method Admin|null last(callable $callback = null, $default = null)
     * @method Admin|$this random(int|null $number = null)
     * @method Admin|null sole($key = null, $operator = null, $value = null)
     * @method Admin|null get($key, $default = null)
     * @method Admin|null first(callable $callback = null, $default = null)
     * @method Admin|null firstWhere(string $key, $operator = null, $value = null)
     * @method Admin|null find($key, $default = null)
     * @method Admin[] all()
     */
    class _IH_Admin_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Admin[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method Admin baseSole(array|string $columns = ['*'])
     * @method Admin create(array $attributes = [])
     * @method _IH_Admin_C|Admin[] cursor()
     * @method Admin|null|_IH_Admin_C|Admin[] find($id, array $columns = ['*'])
     * @method _IH_Admin_C|Admin[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Admin|_IH_Admin_C|Admin[] findOrFail($id, array $columns = ['*'])
     * @method Admin|_IH_Admin_C|Admin[] findOrNew($id, array $columns = ['*'])
     * @method Admin first(array|string $columns = ['*'])
     * @method Admin firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Admin firstOrCreate(array $attributes = [], array $values = [])
     * @method Admin firstOrFail(array $columns = ['*'])
     * @method Admin firstOrNew(array $attributes = [], array $values = [])
     * @method Admin firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Admin forceCreate(array $attributes)
     * @method _IH_Admin_C|Admin[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Admin_C|Admin[] get(array|string $columns = ['*'])
     * @method Admin getModel()
     * @method Admin[] getModels(array|string $columns = ['*'])
     * @method _IH_Admin_C|Admin[] hydrate(array $items)
     * @method Admin make(array $attributes = [])
     * @method Admin newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Admin[]|_IH_Admin_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Admin[]|_IH_Admin_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Admin sole(array|string $columns = ['*'])
     * @method Admin updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Admin_QB extends _BaseBuilder {}

    /**
     * @method Category|null getOrPut($key, $value)
     * @method Category|$this shift(int $count = 1)
     * @method Category|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Category|$this pop(int $count = 1)
     * @method Category|null pull($key, $default = null)
     * @method Category|null last(callable $callback = null, $default = null)
     * @method Category|$this random(int|null $number = null)
     * @method Category|null sole($key = null, $operator = null, $value = null)
     * @method Category|null get($key, $default = null)
     * @method Category|null first(callable $callback = null, $default = null)
     * @method Category|null firstWhere(string $key, $operator = null, $value = null)
     * @method Category|null find($key, $default = null)
     * @method Category[] all()
     */
    class _IH_Category_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Category[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method Category baseSole(array|string $columns = ['*'])
     * @method Category create(array $attributes = [])
     * @method _IH_Category_C|Category[] cursor()
     * @method Category|null|_IH_Category_C|Category[] find($id, array $columns = ['*'])
     * @method _IH_Category_C|Category[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Category|_IH_Category_C|Category[] findOrFail($id, array $columns = ['*'])
     * @method Category|_IH_Category_C|Category[] findOrNew($id, array $columns = ['*'])
     * @method Category first(array|string $columns = ['*'])
     * @method Category firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Category firstOrCreate(array $attributes = [], array $values = [])
     * @method Category firstOrFail(array $columns = ['*'])
     * @method Category firstOrNew(array $attributes = [], array $values = [])
     * @method Category firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Category forceCreate(array $attributes)
     * @method _IH_Category_C|Category[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Category_C|Category[] get(array|string $columns = ['*'])
     * @method Category getModel()
     * @method Category[] getModels(array|string $columns = ['*'])
     * @method _IH_Category_C|Category[] hydrate(array $items)
     * @method Category make(array $attributes = [])
     * @method Category newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Category[]|_IH_Category_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Category[]|_IH_Category_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Category sole(array|string $columns = ['*'])
     * @method Category updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Category_QB extends _BaseBuilder {}

    /**
     * @method ContactUs|null getOrPut($key, $value)
     * @method ContactUs|$this shift(int $count = 1)
     * @method ContactUs|null firstOrFail($key = null, $operator = null, $value = null)
     * @method ContactUs|$this pop(int $count = 1)
     * @method ContactUs|null pull($key, $default = null)
     * @method ContactUs|null last(callable $callback = null, $default = null)
     * @method ContactUs|$this random(int|null $number = null)
     * @method ContactUs|null sole($key = null, $operator = null, $value = null)
     * @method ContactUs|null get($key, $default = null)
     * @method ContactUs|null first(callable $callback = null, $default = null)
     * @method ContactUs|null firstWhere(string $key, $operator = null, $value = null)
     * @method ContactUs|null find($key, $default = null)
     * @method ContactUs[] all()
     */
    class _IH_ContactUs_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ContactUs[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method ContactUs baseSole(array|string $columns = ['*'])
     * @method ContactUs create(array $attributes = [])
     * @method _IH_ContactUs_C|ContactUs[] cursor()
     * @method ContactUs|null|_IH_ContactUs_C|ContactUs[] find($id, array $columns = ['*'])
     * @method _IH_ContactUs_C|ContactUs[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method ContactUs|_IH_ContactUs_C|ContactUs[] findOrFail($id, array $columns = ['*'])
     * @method ContactUs|_IH_ContactUs_C|ContactUs[] findOrNew($id, array $columns = ['*'])
     * @method ContactUs first(array|string $columns = ['*'])
     * @method ContactUs firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method ContactUs firstOrCreate(array $attributes = [], array $values = [])
     * @method ContactUs firstOrFail(array $columns = ['*'])
     * @method ContactUs firstOrNew(array $attributes = [], array $values = [])
     * @method ContactUs firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ContactUs forceCreate(array $attributes)
     * @method _IH_ContactUs_C|ContactUs[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ContactUs_C|ContactUs[] get(array|string $columns = ['*'])
     * @method ContactUs getModel()
     * @method ContactUs[] getModels(array|string $columns = ['*'])
     * @method _IH_ContactUs_C|ContactUs[] hydrate(array $items)
     * @method ContactUs make(array $attributes = [])
     * @method ContactUs newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ContactUs[]|_IH_ContactUs_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|ContactUs[]|_IH_ContactUs_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ContactUs sole(array|string $columns = ['*'])
     * @method ContactUs updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ContactUs_QB extends _BaseBuilder {}

    /**
     * @method Feature|null getOrPut($key, $value)
     * @method Feature|$this shift(int $count = 1)
     * @method Feature|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Feature|$this pop(int $count = 1)
     * @method Feature|null pull($key, $default = null)
     * @method Feature|null last(callable $callback = null, $default = null)
     * @method Feature|$this random(int|null $number = null)
     * @method Feature|null sole($key = null, $operator = null, $value = null)
     * @method Feature|null get($key, $default = null)
     * @method Feature|null first(callable $callback = null, $default = null)
     * @method Feature|null firstWhere(string $key, $operator = null, $value = null)
     * @method Feature|null find($key, $default = null)
     * @method Feature[] all()
     */
    class _IH_Feature_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Feature[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Feature_QB whereId($value)
     * @method _IH_Feature_QB whereName($value)
     * @method _IH_Feature_QB whereCreatedAt($value)
     * @method _IH_Feature_QB whereUpdatedAt($value)
     * @method Feature baseSole(array|string $columns = ['*'])
     * @method Feature create(array $attributes = [])
     * @method _IH_Feature_C|Feature[] cursor()
     * @method Feature|null|_IH_Feature_C|Feature[] find($id, array $columns = ['*'])
     * @method _IH_Feature_C|Feature[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Feature|_IH_Feature_C|Feature[] findOrFail($id, array $columns = ['*'])
     * @method Feature|_IH_Feature_C|Feature[] findOrNew($id, array $columns = ['*'])
     * @method Feature first(array|string $columns = ['*'])
     * @method Feature firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Feature firstOrCreate(array $attributes = [], array $values = [])
     * @method Feature firstOrFail(array $columns = ['*'])
     * @method Feature firstOrNew(array $attributes = [], array $values = [])
     * @method Feature firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Feature forceCreate(array $attributes)
     * @method _IH_Feature_C|Feature[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Feature_C|Feature[] get(array|string $columns = ['*'])
     * @method Feature getModel()
     * @method Feature[] getModels(array|string $columns = ['*'])
     * @method _IH_Feature_C|Feature[] hydrate(array $items)
     * @method Feature make(array $attributes = [])
     * @method Feature newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Feature[]|_IH_Feature_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Feature[]|_IH_Feature_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Feature sole(array|string $columns = ['*'])
     * @method Feature updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Feature_QB extends _BaseBuilder {}

    /**
     * @method FeaturesRealEstate|null getOrPut($key, $value)
     * @method FeaturesRealEstate|$this shift(int $count = 1)
     * @method FeaturesRealEstate|null firstOrFail($key = null, $operator = null, $value = null)
     * @method FeaturesRealEstate|$this pop(int $count = 1)
     * @method FeaturesRealEstate|null pull($key, $default = null)
     * @method FeaturesRealEstate|null last(callable $callback = null, $default = null)
     * @method FeaturesRealEstate|$this random(int|null $number = null)
     * @method FeaturesRealEstate|null sole($key = null, $operator = null, $value = null)
     * @method FeaturesRealEstate|null get($key, $default = null)
     * @method FeaturesRealEstate|null first(callable $callback = null, $default = null)
     * @method FeaturesRealEstate|null firstWhere(string $key, $operator = null, $value = null)
     * @method FeaturesRealEstate|null find($key, $default = null)
     * @method FeaturesRealEstate[] all()
     */
    class _IH_FeaturesRealEstate_C extends _BaseCollection {
        /**
         * @param int $size
         * @return FeaturesRealEstate[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method FeaturesRealEstate baseSole(array|string $columns = ['*'])
     * @method FeaturesRealEstate create(array $attributes = [])
     * @method _IH_FeaturesRealEstate_C|FeaturesRealEstate[] cursor()
     * @method FeaturesRealEstate|null|_IH_FeaturesRealEstate_C|FeaturesRealEstate[] find($id, array $columns = ['*'])
     * @method _IH_FeaturesRealEstate_C|FeaturesRealEstate[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method FeaturesRealEstate|_IH_FeaturesRealEstate_C|FeaturesRealEstate[] findOrFail($id, array $columns = ['*'])
     * @method FeaturesRealEstate|_IH_FeaturesRealEstate_C|FeaturesRealEstate[] findOrNew($id, array $columns = ['*'])
     * @method FeaturesRealEstate first(array|string $columns = ['*'])
     * @method FeaturesRealEstate firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method FeaturesRealEstate firstOrCreate(array $attributes = [], array $values = [])
     * @method FeaturesRealEstate firstOrFail(array $columns = ['*'])
     * @method FeaturesRealEstate firstOrNew(array $attributes = [], array $values = [])
     * @method FeaturesRealEstate firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method FeaturesRealEstate forceCreate(array $attributes)
     * @method _IH_FeaturesRealEstate_C|FeaturesRealEstate[] fromQuery(string $query, array $bindings = [])
     * @method _IH_FeaturesRealEstate_C|FeaturesRealEstate[] get(array|string $columns = ['*'])
     * @method FeaturesRealEstate getModel()
     * @method FeaturesRealEstate[] getModels(array|string $columns = ['*'])
     * @method _IH_FeaturesRealEstate_C|FeaturesRealEstate[] hydrate(array $items)
     * @method FeaturesRealEstate make(array $attributes = [])
     * @method FeaturesRealEstate newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|FeaturesRealEstate[]|_IH_FeaturesRealEstate_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|FeaturesRealEstate[]|_IH_FeaturesRealEstate_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method FeaturesRealEstate sole(array|string $columns = ['*'])
     * @method FeaturesRealEstate updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_FeaturesRealEstate_QB extends _BaseBuilder {}

    /**
     * @method RealEstateImage|null getOrPut($key, $value)
     * @method RealEstateImage|$this shift(int $count = 1)
     * @method RealEstateImage|null firstOrFail($key = null, $operator = null, $value = null)
     * @method RealEstateImage|$this pop(int $count = 1)
     * @method RealEstateImage|null pull($key, $default = null)
     * @method RealEstateImage|null last(callable $callback = null, $default = null)
     * @method RealEstateImage|$this random(int|null $number = null)
     * @method RealEstateImage|null sole($key = null, $operator = null, $value = null)
     * @method RealEstateImage|null get($key, $default = null)
     * @method RealEstateImage|null first(callable $callback = null, $default = null)
     * @method RealEstateImage|null firstWhere(string $key, $operator = null, $value = null)
     * @method RealEstateImage|null find($key, $default = null)
     * @method RealEstateImage[] all()
     */
    class _IH_RealEstateImage_C extends _BaseCollection {
        /**
         * @param int $size
         * @return RealEstateImage[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_RealEstateImage_QB whereId($value)
     * @method _IH_RealEstateImage_QB whereRealEstateId($value)
     * @method _IH_RealEstateImage_QB whereImage($value)
     * @method _IH_RealEstateImage_QB whereCreatedAt($value)
     * @method _IH_RealEstateImage_QB whereUpdatedAt($value)
     * @method RealEstateImage baseSole(array|string $columns = ['*'])
     * @method RealEstateImage create(array $attributes = [])
     * @method _IH_RealEstateImage_C|RealEstateImage[] cursor()
     * @method RealEstateImage|null|_IH_RealEstateImage_C|RealEstateImage[] find($id, array $columns = ['*'])
     * @method _IH_RealEstateImage_C|RealEstateImage[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method RealEstateImage|_IH_RealEstateImage_C|RealEstateImage[] findOrFail($id, array $columns = ['*'])
     * @method RealEstateImage|_IH_RealEstateImage_C|RealEstateImage[] findOrNew($id, array $columns = ['*'])
     * @method RealEstateImage first(array|string $columns = ['*'])
     * @method RealEstateImage firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method RealEstateImage firstOrCreate(array $attributes = [], array $values = [])
     * @method RealEstateImage firstOrFail(array $columns = ['*'])
     * @method RealEstateImage firstOrNew(array $attributes = [], array $values = [])
     * @method RealEstateImage firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method RealEstateImage forceCreate(array $attributes)
     * @method _IH_RealEstateImage_C|RealEstateImage[] fromQuery(string $query, array $bindings = [])
     * @method _IH_RealEstateImage_C|RealEstateImage[] get(array|string $columns = ['*'])
     * @method RealEstateImage getModel()
     * @method RealEstateImage[] getModels(array|string $columns = ['*'])
     * @method _IH_RealEstateImage_C|RealEstateImage[] hydrate(array $items)
     * @method RealEstateImage make(array $attributes = [])
     * @method RealEstateImage newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|RealEstateImage[]|_IH_RealEstateImage_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|RealEstateImage[]|_IH_RealEstateImage_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method RealEstateImage sole(array|string $columns = ['*'])
     * @method RealEstateImage updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_RealEstateImage_QB extends _BaseBuilder {}

    /**
     * @method RealEstate|null getOrPut($key, $value)
     * @method RealEstate|$this shift(int $count = 1)
     * @method RealEstate|null firstOrFail($key = null, $operator = null, $value = null)
     * @method RealEstate|$this pop(int $count = 1)
     * @method RealEstate|null pull($key, $default = null)
     * @method RealEstate|null last(callable $callback = null, $default = null)
     * @method RealEstate|$this random(int|null $number = null)
     * @method RealEstate|null sole($key = null, $operator = null, $value = null)
     * @method RealEstate|null get($key, $default = null)
     * @method RealEstate|null first(callable $callback = null, $default = null)
     * @method RealEstate|null firstWhere(string $key, $operator = null, $value = null)
     * @method RealEstate|null find($key, $default = null)
     * @method RealEstate[] all()
     */
    class _IH_RealEstate_C extends _BaseCollection {
        /**
         * @param int $size
         * @return RealEstate[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method RealEstate baseSole(array|string $columns = ['*'])
     * @method RealEstate create(array $attributes = [])
     * @method _IH_RealEstate_C|RealEstate[] cursor()
     * @method RealEstate|null|_IH_RealEstate_C|RealEstate[] find($id, array $columns = ['*'])
     * @method _IH_RealEstate_C|RealEstate[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method RealEstate|_IH_RealEstate_C|RealEstate[] findOrFail($id, array $columns = ['*'])
     * @method RealEstate|_IH_RealEstate_C|RealEstate[] findOrNew($id, array $columns = ['*'])
     * @method RealEstate first(array|string $columns = ['*'])
     * @method RealEstate firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method RealEstate firstOrCreate(array $attributes = [], array $values = [])
     * @method RealEstate firstOrFail(array $columns = ['*'])
     * @method RealEstate firstOrNew(array $attributes = [], array $values = [])
     * @method RealEstate firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method RealEstate forceCreate(array $attributes)
     * @method _IH_RealEstate_C|RealEstate[] fromQuery(string $query, array $bindings = [])
     * @method _IH_RealEstate_C|RealEstate[] get(array|string $columns = ['*'])
     * @method RealEstate getModel()
     * @method RealEstate[] getModels(array|string $columns = ['*'])
     * @method _IH_RealEstate_C|RealEstate[] hydrate(array $items)
     * @method RealEstate make(array $attributes = [])
     * @method RealEstate newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|RealEstate[]|_IH_RealEstate_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|RealEstate[]|_IH_RealEstate_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method RealEstate sole(array|string $columns = ['*'])
     * @method RealEstate updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_RealEstate_QB extends _BaseBuilder {}

    /**
     * @method Reservation|null getOrPut($key, $value)
     * @method Reservation|$this shift(int $count = 1)
     * @method Reservation|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Reservation|$this pop(int $count = 1)
     * @method Reservation|null pull($key, $default = null)
     * @method Reservation|null last(callable $callback = null, $default = null)
     * @method Reservation|$this random(int|null $number = null)
     * @method Reservation|null sole($key = null, $operator = null, $value = null)
     * @method Reservation|null get($key, $default = null)
     * @method Reservation|null first(callable $callback = null, $default = null)
     * @method Reservation|null firstWhere(string $key, $operator = null, $value = null)
     * @method Reservation|null find($key, $default = null)
     * @method Reservation[] all()
     */
    class _IH_Reservation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Reservation[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method Reservation baseSole(array|string $columns = ['*'])
     * @method Reservation create(array $attributes = [])
     * @method _IH_Reservation_C|Reservation[] cursor()
     * @method Reservation|null|_IH_Reservation_C|Reservation[] find($id, array $columns = ['*'])
     * @method _IH_Reservation_C|Reservation[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Reservation|_IH_Reservation_C|Reservation[] findOrFail($id, array $columns = ['*'])
     * @method Reservation|_IH_Reservation_C|Reservation[] findOrNew($id, array $columns = ['*'])
     * @method Reservation first(array|string $columns = ['*'])
     * @method Reservation firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Reservation firstOrCreate(array $attributes = [], array $values = [])
     * @method Reservation firstOrFail(array $columns = ['*'])
     * @method Reservation firstOrNew(array $attributes = [], array $values = [])
     * @method Reservation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Reservation forceCreate(array $attributes)
     * @method _IH_Reservation_C|Reservation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Reservation_C|Reservation[] get(array|string $columns = ['*'])
     * @method Reservation getModel()
     * @method Reservation[] getModels(array|string $columns = ['*'])
     * @method _IH_Reservation_C|Reservation[] hydrate(array $items)
     * @method Reservation make(array $attributes = [])
     * @method Reservation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Reservation[]|_IH_Reservation_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Reservation[]|_IH_Reservation_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Reservation sole(array|string $columns = ['*'])
     * @method Reservation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Reservation_QB extends _BaseBuilder {}

    /**
     * @method Setting|null getOrPut($key, $value)
     * @method Setting|$this shift(int $count = 1)
     * @method Setting|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Setting|$this pop(int $count = 1)
     * @method Setting|null pull($key, $default = null)
     * @method Setting|null last(callable $callback = null, $default = null)
     * @method Setting|$this random(int|null $number = null)
     * @method Setting|null sole($key = null, $operator = null, $value = null)
     * @method Setting|null get($key, $default = null)
     * @method Setting|null first(callable $callback = null, $default = null)
     * @method Setting|null firstWhere(string $key, $operator = null, $value = null)
     * @method Setting|null find($key, $default = null)
     * @method Setting[] all()
     */
    class _IH_Setting_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Setting[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Setting_QB whereId($value)
     * @method _IH_Setting_QB whereTitle($value)
     * @method _IH_Setting_QB whereImage($value)
     * @method _IH_Setting_QB whereCreatedAt($value)
     * @method _IH_Setting_QB whereUpdatedAt($value)
     * @method Setting baseSole(array|string $columns = ['*'])
     * @method Setting create(array $attributes = [])
     * @method _IH_Setting_C|Setting[] cursor()
     * @method Setting|null|_IH_Setting_C|Setting[] find($id, array $columns = ['*'])
     * @method _IH_Setting_C|Setting[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Setting|_IH_Setting_C|Setting[] findOrFail($id, array $columns = ['*'])
     * @method Setting|_IH_Setting_C|Setting[] findOrNew($id, array $columns = ['*'])
     * @method Setting first(array|string $columns = ['*'])
     * @method Setting firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Setting firstOrCreate(array $attributes = [], array $values = [])
     * @method Setting firstOrFail(array $columns = ['*'])
     * @method Setting firstOrNew(array $attributes = [], array $values = [])
     * @method Setting firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Setting forceCreate(array $attributes)
     * @method _IH_Setting_C|Setting[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Setting_C|Setting[] get(array|string $columns = ['*'])
     * @method Setting getModel()
     * @method Setting[] getModels(array|string $columns = ['*'])
     * @method _IH_Setting_C|Setting[] hydrate(array $items)
     * @method Setting make(array $attributes = [])
     * @method Setting newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Setting[]|_IH_Setting_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Setting[]|_IH_Setting_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Setting sole(array|string $columns = ['*'])
     * @method Setting updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Setting_QB extends _BaseBuilder {}

    /**
     * @method Social|null getOrPut($key, $value)
     * @method Social|$this shift(int $count = 1)
     * @method Social|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Social|$this pop(int $count = 1)
     * @method Social|null pull($key, $default = null)
     * @method Social|null last(callable $callback = null, $default = null)
     * @method Social|$this random(int|null $number = null)
     * @method Social|null sole($key = null, $operator = null, $value = null)
     * @method Social|null get($key, $default = null)
     * @method Social|null first(callable $callback = null, $default = null)
     * @method Social|null firstWhere(string $key, $operator = null, $value = null)
     * @method Social|null find($key, $default = null)
     * @method Social[] all()
     */
    class _IH_Social_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Social[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method Social baseSole(array|string $columns = ['*'])
     * @method Social create(array $attributes = [])
     * @method _IH_Social_C|Social[] cursor()
     * @method Social|null|_IH_Social_C|Social[] find($id, array $columns = ['*'])
     * @method _IH_Social_C|Social[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Social|_IH_Social_C|Social[] findOrFail($id, array $columns = ['*'])
     * @method Social|_IH_Social_C|Social[] findOrNew($id, array $columns = ['*'])
     * @method Social first(array|string $columns = ['*'])
     * @method Social firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Social firstOrCreate(array $attributes = [], array $values = [])
     * @method Social firstOrFail(array $columns = ['*'])
     * @method Social firstOrNew(array $attributes = [], array $values = [])
     * @method Social firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Social forceCreate(array $attributes)
     * @method _IH_Social_C|Social[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Social_C|Social[] get(array|string $columns = ['*'])
     * @method Social getModel()
     * @method Social[] getModels(array|string $columns = ['*'])
     * @method _IH_Social_C|Social[] hydrate(array $items)
     * @method Social make(array $attributes = [])
     * @method Social newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Social[]|_IH_Social_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Social[]|_IH_Social_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Social sole(array|string $columns = ['*'])
     * @method Social updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Social_QB extends _BaseBuilder {}

    /**
     * @method Token|null getOrPut($key, $value)
     * @method Token|$this shift(int $count = 1)
     * @method Token|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Token|$this pop(int $count = 1)
     * @method Token|null pull($key, $default = null)
     * @method Token|null last(callable $callback = null, $default = null)
     * @method Token|$this random(int|null $number = null)
     * @method Token|null sole($key = null, $operator = null, $value = null)
     * @method Token|null get($key, $default = null)
     * @method Token|null first(callable $callback = null, $default = null)
     * @method Token|null firstWhere(string $key, $operator = null, $value = null)
     * @method Token|null find($key, $default = null)
     * @method Token[] all()
     */
    class _IH_Token_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Token[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method Token baseSole(array|string $columns = ['*'])
     * @method Token create(array $attributes = [])
     * @method _IH_Token_C|Token[] cursor()
     * @method Token|null|_IH_Token_C|Token[] find($id, array $columns = ['*'])
     * @method _IH_Token_C|Token[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Token|_IH_Token_C|Token[] findOrFail($id, array $columns = ['*'])
     * @method Token|_IH_Token_C|Token[] findOrNew($id, array $columns = ['*'])
     * @method Token first(array|string $columns = ['*'])
     * @method Token firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Token firstOrCreate(array $attributes = [], array $values = [])
     * @method Token firstOrFail(array $columns = ['*'])
     * @method Token firstOrNew(array $attributes = [], array $values = [])
     * @method Token firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Token forceCreate(array $attributes)
     * @method _IH_Token_C|Token[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Token_C|Token[] get(array|string $columns = ['*'])
     * @method Token getModel()
     * @method Token[] getModels(array|string $columns = ['*'])
     * @method _IH_Token_C|Token[] hydrate(array $items)
     * @method Token make(array $attributes = [])
     * @method Token newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Token[]|_IH_Token_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Token[]|_IH_Token_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Token sole(array|string $columns = ['*'])
     * @method Token updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Token_QB extends _BaseBuilder {}

    /**
     * @method Type|null getOrPut($key, $value)
     * @method Type|$this shift(int $count = 1)
     * @method Type|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Type|$this pop(int $count = 1)
     * @method Type|null pull($key, $default = null)
     * @method Type|null last(callable $callback = null, $default = null)
     * @method Type|$this random(int|null $number = null)
     * @method Type|null sole($key = null, $operator = null, $value = null)
     * @method Type|null get($key, $default = null)
     * @method Type|null first(callable $callback = null, $default = null)
     * @method Type|null firstWhere(string $key, $operator = null, $value = null)
     * @method Type|null find($key, $default = null)
     * @method Type[] all()
     */
    class _IH_Type_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Type[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method Type baseSole(array|string $columns = ['*'])
     * @method Type create(array $attributes = [])
     * @method _IH_Type_C|Type[] cursor()
     * @method Type|null|_IH_Type_C|Type[] find($id, array $columns = ['*'])
     * @method _IH_Type_C|Type[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Type|_IH_Type_C|Type[] findOrFail($id, array $columns = ['*'])
     * @method Type|_IH_Type_C|Type[] findOrNew($id, array $columns = ['*'])
     * @method Type first(array|string $columns = ['*'])
     * @method Type firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Type firstOrCreate(array $attributes = [], array $values = [])
     * @method Type firstOrFail(array $columns = ['*'])
     * @method Type firstOrNew(array $attributes = [], array $values = [])
     * @method Type firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Type forceCreate(array $attributes)
     * @method _IH_Type_C|Type[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Type_C|Type[] get(array|string $columns = ['*'])
     * @method Type getModel()
     * @method Type[] getModels(array|string $columns = ['*'])
     * @method _IH_Type_C|Type[] hydrate(array $items)
     * @method Type make(array $attributes = [])
     * @method Type newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Type[]|_IH_Type_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Type[]|_IH_Type_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Type sole(array|string $columns = ['*'])
     * @method Type updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Type_QB extends _BaseBuilder {}

    /**
     * @method User|null getOrPut($key, $value)
     * @method User|$this shift(int $count = 1)
     * @method User|null firstOrFail($key = null, $operator = null, $value = null)
     * @method User|$this pop(int $count = 1)
     * @method User|null pull($key, $default = null)
     * @method User|null last(callable $callback = null, $default = null)
     * @method User|$this random(int|null $number = null)
     * @method User|null sole($key = null, $operator = null, $value = null)
     * @method User|null get($key, $default = null)
     * @method User|null first(callable $callback = null, $default = null)
     * @method User|null firstWhere(string $key, $operator = null, $value = null)
     * @method User|null find($key, $default = null)
     * @method User[] all()
     */
    class _IH_User_C extends _BaseCollection {
        /**
         * @param int $size
         * @return User[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method User baseSole(array|string $columns = ['*'])
     * @method User create(array $attributes = [])
     * @method _IH_User_C|User[] cursor()
     * @method User|null|_IH_User_C|User[] find($id, array $columns = ['*'])
     * @method _IH_User_C|User[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method User|_IH_User_C|User[] findOrFail($id, array $columns = ['*'])
     * @method User|_IH_User_C|User[] findOrNew($id, array $columns = ['*'])
     * @method User first(array|string $columns = ['*'])
     * @method User firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method User firstOrCreate(array $attributes = [], array $values = [])
     * @method User firstOrFail(array $columns = ['*'])
     * @method User firstOrNew(array $attributes = [], array $values = [])
     * @method User firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method User forceCreate(array $attributes)
     * @method _IH_User_C|User[] fromQuery(string $query, array $bindings = [])
     * @method _IH_User_C|User[] get(array|string $columns = ['*'])
     * @method User getModel()
     * @method User[] getModels(array|string $columns = ['*'])
     * @method _IH_User_C|User[] hydrate(array $items)
     * @method User make(array $attributes = [])
     * @method User newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|User[]|_IH_User_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|User[]|_IH_User_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method User sole(array|string $columns = ['*'])
     * @method User updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_User_QB extends _BaseBuilder {}
}
