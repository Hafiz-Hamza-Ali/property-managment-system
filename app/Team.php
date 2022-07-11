<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\Relation;
use App\Team;
/**
 * Class Property
 *
 * @package App
 * @property string $name
 * @property string $address
 * @property string $photo
*/
class Team extends Model
{
   // use SoftDeletes;
    //protected $with = ['teams'];
    protected $fillable = ['name', 'designation', 'photo', 'fb','twitter','insta','linkedin'];

    
    
}
