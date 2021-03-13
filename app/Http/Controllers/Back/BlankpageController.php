<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GeoIp2\Database\Reader;


/**
 * Class BlankpageController
 *
 * @package App\Http\Controllers\Back
 */
class BlankpageController extends Controller
{

    /**
     * @var Request
     */
    protected $request;

    /**
     * BlankpageController constructor.
     *
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->middleware('auth');
        $this->request = $request;
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showBlankpage()
    {

        // $location = GeoIP::getLocation($this->request->ip());
        
        $location = array(
            "ip" => "202.125.25.23",
            "iso_code" => "us",
            "country" => "United Stated",
            "city" => "Turlock",
            "state" => "ca",
            "state_name" => "california",
            "postal_code" => "95382",
            "lat" => "253.253.275",
            "lon" => "bar",
            "timezone" => "pacific/los angeles",
            "continent" => "north america",
            "currency" => "dollar",
            "default" => "default",
            "cached" => "no",
        );

        // This creates the Reader object, which should be reused across
        // lookups.
        //$reader = new Reader('F:\www\Install\GeoLite2-City_20210223.tar\GeoLite2-City_20210223\GeoIP2-City.mmdb');

        // Replace "city" with the appropriate method for your database, e.g.,
        // "country".
        //$location = $reader->city('128.101.101.101');
        
        
        return view('back.pages.blankpage', array('data' => $location));
        // return view('back.pages.blankpage');
        }
}