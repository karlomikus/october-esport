<?php namespace Kami\Esport\Models;

use Model;

/**
 * Opponent Model
 */
class Opponent extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'kami_esport_opponents';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    public $rules = [
        'name' => 'required'
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
        'image' => 'System\Models\File'
    ];
    public $attachMany = [];

    public function getLogoAttribute()
    {
        if (!$this->image) {
            return '<img src="http://placehold.it/50x50" />';
        }

        return '<img src="'.$this->image->getThumb(50, 50, 'crop').'" />';
    }
}