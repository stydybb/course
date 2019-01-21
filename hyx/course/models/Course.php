<?php namespace Hyx\Course\Models;
use Db;
use Input;
use Model;

/**
 * Model
 */
class Course extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;
    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'hyx_course_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    
    /**
     * @var array Attributes that support translation, if available.
     */
    public $translatable = [
    		'title',
    		'unit'
    ];
    
    public function getVideo($id){
    	$videoArray = DB::table('hyx_course_')->select('id','title','body')->where('id','=',$id)->first();
    	return (array)$videoArray;
    }  
}
