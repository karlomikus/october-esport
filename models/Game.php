<?php namespace Kami\Esport\Models;

use Model;
use System\Models\File;

/**
 * Games Model
 */
class Game extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'kami_esport_games';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /*
     * Validation
     */
    public $rules = [
        'name' => 'required',
        'slug' => 'required|between:3,64|unique:kami_esport_games'
    ];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [
        'image' => File::class
    ];
    public $attachMany = [];

    public function getLogoAttribute()
    {
        if (!$this->image) {
            return '<img src="http://placehold.it/20x20" />';
        }

        return '<img src="'.$this->image->getPath().'" />';
    }

}