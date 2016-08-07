<?php namespace Kami\Esport\Models;

use Model;
use Kami\Esport\Models\Match;

/**
 * MatchScore Model
 */
class MatchScore extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'kami_esport_matches_scores';

    /**
     * @var array Guarded fields
     */
    protected $guarded = [];

    public $timestamps = false;

    /**
     * @var array Fillable fields
     */
    protected $fillable = ['*'];
    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [
        'match' => Match::class
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}