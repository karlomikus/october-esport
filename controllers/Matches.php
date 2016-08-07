<?php
namespace Kami\Esport\Controllers;

use Flash;
use Request;
use BackendMenu;
use Kami\Esport\Models\Match;
use Backend\Classes\Controller;
use Kami\Esport\Models\MatchScore;

/**
 * Matches Back-end Controller
 */
class Matches extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Kami.Esport', 'esport', 'matches');
    }

    public function index()
    {
        $this->addCss('/plugins/kami/esport/assets/css/matches.css');

        $this->asExtension('ListController')->index();
    }

    /**
     * We save scores after a new match was added
     *
     * @param  Match $model
     * @return void
     */
    public function formAfterSave($model)
    {
        $scores = Request::input('Match.scores');

        // Let's delete all old scores
        MatchScore::where('match_id', $model->id)->delete();

        // And add new ones
        foreach ($scores as $score) {
            MatchScore::insert([
                'match_id' => $model->id,
                'home' => $score['home'],
                'guest' => $score['guest']
            ]);
        }
    }

    public function index_onDelete()
    {
        if (($checkedIds = post('checked')) && is_array($checkedIds) && count($checkedIds)) {

            foreach ($checkedIds as $matchID) {
                if ((!$match = Match::find($matchID)))
                    continue;

                $match->match_scores()->delete();
                $match->delete();
            }

            Flash::success('Successfully deleted those matches.');
        }

        return $this->listRefresh();
    }

    public function listExtendQuery($query)
    {
        $query->with('match_scores');
    }
}
