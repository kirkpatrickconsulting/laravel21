<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Traits\FootballDataApiTrait;
use Carbon\Carbon;

class FootballController extends Controller {

    use FootballDataApiTrait;

    /**
     * FootballController constructor.
     */
    public function __construct($id = NULL) {
        $this->middleware(['auth:web', 'verified']);
        $this->baseUri = config('footballdata.baseUri');
        //dd($this->start);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $resource = 'competitions';
        $uri = $this->baseUri . $resource;
        $api = $this->pullAPI($uri);
        //dd($api);
        return view('back.pages.football', ['data' => $api]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function findCompetitionStandings($id = 2021) {
        $resource = 'competitions/' . $id . '/standings';
        $uri = $this->baseUri . $resource;
        $api = $this->pullAPI($uri);
        return view('back.pages.footballapi.showcompetitionstandings', ['data' => $api]);
    }

    public function findCompetitionMatches($id = 2021) {
        $resource = 'competitions/' . $id . '/matches';
        $uri = $this->baseUri . $resource;
        $api = $this->pullAPI($uri);
        return view('back.pages.footballapi.showcompetitionmatches', ['data' => $api]);
    }

    /**
     * Function returns all available matches for a given date range.
     *
     * @param DateString 'Y-m-d' $start
     * @param DateString 'Y-m-d' $end
     *
     * @return array of matches
     */
    public function findMatchesForDateRange() {

        $today = Carbon::today();
        $start = $today->toDateString();
        $end = $today->toDateString();

        $resource = 'matches/?dateFrom=' . $start . '&dateTo=' . $end;
        $uri = $this->baseUri . $resource;
        $api = $this->pullAPI($uri);
        //dd($api);
        return view('back.pages.footballapi.showmatchesfordaterange', ['data' => $api]);
    }










    /**
     * Function returns a particular competition identified by an id.
     *
     * @param Integer $id
     * @return array
     */
    public function findCompetitionById($id) {
        $resource = 'competitions/' . $id;
        $response = file_get_contents($this->baseUri . $resource, false,
                stream_context_create($this->reqPrefs));

        return json_decode($response);
    }

    public function findMatchesByCompetitionAndMatchday($c, $m) {
        $resource = 'competitions/' . $c . '/matches/?matchday=' . $m;

        $response = file_get_contents($this->baseUri . $resource, false,
                stream_context_create($this->reqPrefs));

        return json_decode($response);
    }

    public function findHomeMatchesByTeam($teamId) {
        $resource = 'teams/' . $teamId . '/matches/?venue=HOME';
        //http://api.football-data.org/v2/teams/62/matches?venue=home

        $response = file_get_contents($this->baseUri . $resource, false,
                stream_context_create($this->reqPrefs));

        return json_decode($response)->matches;
    }

    /**
     * Function returns one unique match identified by a given id.
     *
     * @param int $id
     * @return stdObject fixture
     */
    public function findMatchById($id) {
        $resource = 'matches/' . $id;
        $response = file_get_contents($this->baseUri . $resource, false,
                stream_context_create($this->reqPrefs));

        return json_decode($response);
    }

    /**
     * Function returns one unique team identified by a given id.
     *
     * @param int $id
     * @return stdObject team
     */
    public function findTeamById($id) {
        $resource = 'teams/' . $id;
        $response = file_get_contents($this->baseUri . $resource, false,
                stream_context_create($this->reqPrefs));

        return json_decode($response);
    }

    /**
     * Function returns all teams matching a given keyword.
     *
     * @param string $keyword
     * @return list of team objects
     */
    public function searchTeam($keyword) {
        $resource = 'teams/?name=' . $keyword;
        $response = file_get_contents($this->baseUri . $resource, false,
                stream_context_create($this->reqPrefs));

        return json_decode($response);
    }

}
