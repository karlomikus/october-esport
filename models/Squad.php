<?php namespace Kami\Esport\Models;

use Model;
use System\Models\File;
use Kami\Esport\Models\Game;
use Kami\Esport\Models\Match;
use RainLab\User\Models\User;

/**
 * Squad Model
 */
class Squad extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'kami_esport_squads';

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
        'name' => 'required'
    ];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [
        'matches' => [Match::class],
        'matches_count' => [Match::class, 'count' => true]
    ];
    public $belongsTo = [
        'game' => Game::class
    ];
    public $belongsToMany = [
        'members' => [User::class, 'table' => 'kami_esport_squads_members'],
        'members_count' => [User::class, 'table' => 'kami_esport_squads_members', 'count' => true]
    ];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [
        'image' => File::class
    ];
    public $attachMany = [];

}