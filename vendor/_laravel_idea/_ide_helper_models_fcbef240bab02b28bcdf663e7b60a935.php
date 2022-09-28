<?php //cfcfc87a67d804bbabcd8670bde3d569
/** @noinspection all */

namespace App\Models {

    use Database\Factories\UserFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Database\Eloquent\Relations\BelongsToMany;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\App\Models\_IH_About_us_C;
    use LaravelIdea\Helper\App\Models\_IH_About_us_QB;
    use LaravelIdea\Helper\App\Models\_IH_Admin_C;
    use LaravelIdea\Helper\App\Models\_IH_Admin_QB;
    use LaravelIdea\Helper\App\Models\_IH_Category_C;
    use LaravelIdea\Helper\App\Models\_IH_Category_QB;
    use LaravelIdea\Helper\App\Models\_IH_ContactUs_C;
    use LaravelIdea\Helper\App\Models\_IH_ContactUs_QB;
    use LaravelIdea\Helper\App\Models\_IH_FeaturesRealEstate_C;
    use LaravelIdea\Helper\App\Models\_IH_FeaturesRealEstate_QB;
    use LaravelIdea\Helper\App\Models\_IH_Feature_C;
    use LaravelIdea\Helper\App\Models\_IH_Feature_QB;
    use LaravelIdea\Helper\App\Models\_IH_RealEstateImage_C;
    use LaravelIdea\Helper\App\Models\_IH_RealEstateImage_QB;
    use LaravelIdea\Helper\App\Models\_IH_RealEstate_C;
    use LaravelIdea\Helper\App\Models\_IH_RealEstate_QB;
    use LaravelIdea\Helper\App\Models\_IH_Reservation_C;
    use LaravelIdea\Helper\App\Models\_IH_Reservation_QB;
    use LaravelIdea\Helper\App\Models\_IH_Setting_C;
    use LaravelIdea\Helper\App\Models\_IH_Setting_QB;
    use LaravelIdea\Helper\App\Models\_IH_Social_C;
    use LaravelIdea\Helper\App\Models\_IH_Social_QB;
    use LaravelIdea\Helper\App\Models\_IH_Token_C;
    use LaravelIdea\Helper\App\Models\_IH_Token_QB;
    use LaravelIdea\Helper\App\Models\_IH_Type_C;
    use LaravelIdea\Helper\App\Models\_IH_Type_QB;
    use LaravelIdea\Helper\App\Models\_IH_User_C;
    use LaravelIdea\Helper\App\Models\_IH_User_QB;

    /**
     * @method static _IH_About_us_QB onWriteConnection()
     * @method _IH_About_us_QB newQuery()
     * @method static _IH_About_us_QB on(null|string $connection = null)
     * @method static _IH_About_us_QB query()
     * @method static _IH_About_us_QB with(array|string $relations)
     * @method _IH_About_us_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_About_us_C|About_us[] all()
     * @mixin _IH_About_us_QB
     */
    class About_us extends Model {}

    /**
     * @method static _IH_Admin_QB onWriteConnection()
     * @method _IH_Admin_QB newQuery()
     * @method static _IH_Admin_QB on(null|string $connection = null)
     * @method static _IH_Admin_QB query()
     * @method static _IH_Admin_QB with(array|string $relations)
     * @method _IH_Admin_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Admin_C|Admin[] all()
     * @mixin _IH_Admin_QB
     */
    class Admin extends Model {}

    /**
     * @method static _IH_Category_QB onWriteConnection()
     * @method _IH_Category_QB newQuery()
     * @method static _IH_Category_QB on(null|string $connection = null)
     * @method static _IH_Category_QB query()
     * @method static _IH_Category_QB with(array|string $relations)
     * @method _IH_Category_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Category_C|Category[] all()
     * @mixin _IH_Category_QB
     */
    class Category extends Model {}

    /**
     * @method static _IH_ContactUs_QB onWriteConnection()
     * @method _IH_ContactUs_QB newQuery()
     * @method static _IH_ContactUs_QB on(null|string $connection = null)
     * @method static _IH_ContactUs_QB query()
     * @method static _IH_ContactUs_QB with(array|string $relations)
     * @method _IH_ContactUs_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ContactUs_C|ContactUs[] all()
     * @mixin _IH_ContactUs_QB
     */
    class ContactUs extends Model {}

    /**
     * @property int $id
     * @property string $name
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_Feature_QB onWriteConnection()
     * @method _IH_Feature_QB newQuery()
     * @method static _IH_Feature_QB on(null|string $connection = null)
     * @method static _IH_Feature_QB query()
     * @method static _IH_Feature_QB with(array|string $relations)
     * @method _IH_Feature_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Feature_C|Feature[] all()
     * @mixin _IH_Feature_QB
     */
    class Feature extends Model {}

    /**
     * @method static _IH_FeaturesRealEstate_QB onWriteConnection()
     * @method _IH_FeaturesRealEstate_QB newQuery()
     * @method static _IH_FeaturesRealEstate_QB on(null|string $connection = null)
     * @method static _IH_FeaturesRealEstate_QB query()
     * @method static _IH_FeaturesRealEstate_QB with(array|string $relations)
     * @method _IH_FeaturesRealEstate_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_FeaturesRealEstate_C|FeaturesRealEstate[] all()
     * @mixin _IH_FeaturesRealEstate_QB
     */
    class FeaturesRealEstate extends Model {}

    /**
     * @property Category $category
     * @method BelongsTo|_IH_Category_QB category()
     * @property _IH_Feature_C|Feature[] $fetures
     * @property-read int $fetures_count
     * @method BelongsToMany|_IH_Feature_QB fetures()
     * @property _IH_RealEstateImage_C|RealEstateImage[] $images
     * @property-read int $images_count
     * @method HasMany|_IH_RealEstateImage_QB images()
     * @property _IH_Reservation_C|Reservation[] $reservation
     * @property-read int $reservation_count
     * @method BelongsToMany|_IH_Reservation_QB reservation()
     * @property Type $type
     * @method BelongsTo|_IH_Type_QB type()
     * @method static _IH_RealEstate_QB onWriteConnection()
     * @method _IH_RealEstate_QB newQuery()
     * @method static _IH_RealEstate_QB on(null|string $connection = null)
     * @method static _IH_RealEstate_QB query()
     * @method static _IH_RealEstate_QB with(array|string $relations)
     * @method _IH_RealEstate_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_RealEstate_C|RealEstate[] all()
     * @mixin _IH_RealEstate_QB
     */
    class RealEstate extends Model {}

    /**
     * @property int $id
     * @property int $real_estate_id
     * @property string $image
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_RealEstateImage_QB onWriteConnection()
     * @method _IH_RealEstateImage_QB newQuery()
     * @method static _IH_RealEstateImage_QB on(null|string $connection = null)
     * @method static _IH_RealEstateImage_QB query()
     * @method static _IH_RealEstateImage_QB with(array|string $relations)
     * @method _IH_RealEstateImage_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_RealEstateImage_C|RealEstateImage[] all()
     * @ownLinks
     * @mixin _IH_RealEstateImage_QB
     */
    class RealEstateImage extends Model {}

    /**
     * @property _IH_RealEstate_C|RealEstate[] $realestate
     * @property-read int $realestate_count
     * @method BelongsToMany|_IH_RealEstate_QB realestate()
     * @property User $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static _IH_Reservation_QB onWriteConnection()
     * @method _IH_Reservation_QB newQuery()
     * @method static _IH_Reservation_QB on(null|string $connection = null)
     * @method static _IH_Reservation_QB query()
     * @method static _IH_Reservation_QB with(array|string $relations)
     * @method _IH_Reservation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Reservation_C|Reservation[] all()
     * @mixin _IH_Reservation_QB
     */
    class Reservation extends Model {}

    /**
     * @property int $id
     * @property string $title
     * @property string $image
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_Setting_QB onWriteConnection()
     * @method _IH_Setting_QB newQuery()
     * @method static _IH_Setting_QB on(null|string $connection = null)
     * @method static _IH_Setting_QB query()
     * @method static _IH_Setting_QB with(array|string $relations)
     * @method _IH_Setting_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Setting_C|Setting[] all()
     * @mixin _IH_Setting_QB
     */
    class Setting extends Model {}

    /**
     * @method static _IH_Social_QB onWriteConnection()
     * @method _IH_Social_QB newQuery()
     * @method static _IH_Social_QB on(null|string $connection = null)
     * @method static _IH_Social_QB query()
     * @method static _IH_Social_QB with(array|string $relations)
     * @method _IH_Social_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Social_C|Social[] all()
     * @mixin _IH_Social_QB
     */
    class Social extends Model {}

    /**
     * @property User $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static _IH_Token_QB onWriteConnection()
     * @method _IH_Token_QB newQuery()
     * @method static _IH_Token_QB on(null|string $connection = null)
     * @method static _IH_Token_QB query()
     * @method static _IH_Token_QB with(array|string $relations)
     * @method _IH_Token_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Token_C|Token[] all()
     * @mixin _IH_Token_QB
     */
    class Token extends Model {}

    /**
     * @method static _IH_Type_QB onWriteConnection()
     * @method _IH_Type_QB newQuery()
     * @method static _IH_Type_QB on(null|string $connection = null)
     * @method static _IH_Type_QB query()
     * @method static _IH_Type_QB with(array|string $relations)
     * @method _IH_Type_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Type_C|Type[] all()
     * @mixin _IH_Type_QB
     */
    class Type extends Model {}

    /**
     * @property-read $image attribute
     * @method static _IH_User_QB onWriteConnection()
     * @method _IH_User_QB newQuery()
     * @method static _IH_User_QB on(null|string $connection = null)
     * @method static _IH_User_QB query()
     * @method static _IH_User_QB with(array|string $relations)
     * @method _IH_User_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_User_C|User[] all()
     * @mixin _IH_User_QB
     * @method static UserFactory factory(...$parameters)
     */
    class User extends Model {}
}
