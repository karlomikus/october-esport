<?php namespace Kami\Esport\Models;

use Model;

/**
 * Match Model
 */
class Match extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'kami_esport_matches';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

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
    public $attachOne = [];
    public $attachMany = [];

}