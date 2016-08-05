<?php namespace Kami\Esport\Models;

use Model;

/**
 * MatchScore Model
 */
class MatchScore extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'kami_esport_match_scores';

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