<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\Relation;
use App\Image;
/**
 * Class Property
 *
 * @package App
 * @property string $name
 * @property string $address
 * @property string $photo
*/
class Property extends Model
{
    use SoftDeletes;
  //  protected $with = ['Image'];
    protected $fillable = ['name', 'address', 'photo', 'user_id','type','location','area','price','phone','description','bedroom','garage','sqft','balcony','bathroom', 'tv','data','floors','title','pro_type','link'];
    public function image()
    {
        return $this->morphMany('App\Image', 'imageable');
    }
    
    
}
