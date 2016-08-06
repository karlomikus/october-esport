<?php namespace Kami\Esport\Models;

use Model;
use Kami\Esport\Models\Game;
use Kami\Esport\Models\Squad;
use Kami\Esport\Models\Opponent;
use Kami\Esport\Models\MatchScore;

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

    public function getOutcomeAttribute()
    {
        $scores = $this->match_scores;

        $resultHome = $scores->sum('home');
        $resultGuest = $scores->sum('guest');

        if ($resultHome > $resultGuest) {
            return '<span class="score score-win">won</span>';
        } else if ($resultHome < $resultGuest) {
            return '<span class="score score-lost">lost</span>';
        } else {
            return '<span class="score score-draw">draw</span>';
        }
    }

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [
        'match_scores' => MatchScore::class
    ];
    public $belongsTo = [
        'opponent' => Opponent::class,
        'squad' => Squad::class,
        'game' => Game::class,
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}