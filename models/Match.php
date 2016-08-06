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
    const MATCH_LOST = 0;
    const MATCH_WON = 1;
    const MATCH_DRAW = 2;

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

    public function matchOutcome()
    {
        $scores = $this->match_scores;

        $resultHome = $scores->sum('home');
        $resultGuest = $scores->sum('guest');

        if ($resultHome > $resultGuest) {
            return self::MATCH_WON;
        } else if ($resultHome < $resultGuest) {
            return self::MATCH_LOST;
        } else {
            return self::MATCH_DRAW;
        }
    }

    public function getOutcomeAttribute()
    {
        $outcome = $this->matchOutcome();

        switch ($outcome) {
            case self::MATCH_WON:
                return '<span class="score score-win">won</span>';
                break;
            case self::MATCH_LOST:
                return '<span class="score score-lost">lost</span>';
                break;
            default:
                return '<span class="score score-draw">draw</span>';
                break;
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