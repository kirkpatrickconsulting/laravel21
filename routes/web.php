<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Back\TestController;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\Back\PasswordController;
use App\Http\Controllers\Back\Resource\RoleController;
use App\Http\Controllers\Back\Resource\ProductController;
use App\Http\Controllers\Back\StripePaymentController;

use App\Http\Controllers\Back\DashboardController;

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register web routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | contains the "web" middleware group. Now create something great!
  |
 */

// Front

Route::get('/', 'App\Http\Controllers\Front\FrontController@showFront');
Route::get('/contactus', 'App\Http\Controllers\Front\ContactFormController@showContactForm');
Route::post('contactus', ['as' => 'contactus.save', 'uses' => 'App\Http\Controllers\Front\ContactFormController@postContactForm']);
Route::get('/about', 'App\Http\Controllers\Front\AboutController@showAbout');
Route::get('/services', 'App\Http\Controllers\Front\ServicesController@showServices');
Route::get('/blog', 'App\Http\Controllers\Front\BlogController@showBlog');
Route::get('test', [TestController::class, 'index'])->name('test.index');

// Back

//Route::get('/dashboard', function () {
    // ...
//})->middleware(['verified']);

Route::get('/dashboard', [DashboardController::class, 'showDashboard'])->name('dashboard');
//Route::get('/dashboard', 'App\Http\Controllers\Back\DashboardController@showDashboard');
Route::get('/blankpage', 'App\Http\Controllers\Back\BlankpageController@showBlankpage');
Route::get('/weather', 'App\Http\Controllers\Back\WeatherController@showWeather');
Route::get('/football', 'App\Http\Controllers\Back\FootballController@index');
Route::get('/football/show-competition-standings', 'App\Http\Controllers\Back\FootballController@findCompetitionStandings');
Route::get('/football/show-competition-matches', 'App\Http\Controllers\Back\FootballController@findCompetitionMatches');
Route::get('/football/show-matches-for-date-range', 'App\Http\Controllers\Back\FootballController@findMatchesForDateRange');
Route::get('/wiki', 'App\Http\Controllers\Back\WikiController@showWiki');
Route::get('/test/index', 'App\Http\Controllers\Back\TestController@index');
Route::get('/stripe', 'App\Http\Controllers\Back\StripeController@index');
Route::get('stripe', [StripePaymentController::class, 'stripe']);
Route::post('stripe', [StripePaymentController::class, 'stripePost'])->name('stripe.post');
//Route::get('/user/password', [PasswordController::class, 'showPasswordForm'])->name('user-password.edit');

// Resource

Route::resource('phone', 'App\Http\Controllers\PhoneController');
Route::resource('address', 'App\Http\Controllers\AddressController');
Route::resource('contact', 'App\Http\Controllers\Back\Resource\ContactController');

// Auth Group

Route::group(['middleware' => ['auth']], function() {
    Route::resource('users', 'App\Http\Controllers\UserController');
    Route::resource('roles', RoleController::class);
    Route::resource('products', ProductController::class);
});

// Logs
Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

// Test
Route::get('ajax', function() {
    return view('test.message');
});
Route::post('/getmsg', 'App\Http\Controllers\AjaxController@index');
Route::get('ajaxRequest', [AjaxController::class, 'ajaxRequest']);
Route::post('ajaxRequest', [AjaxController::class, 'ajaxRequestPost'])->name('ajaxRequest.post');

// Route Callbacks
//Route::get('/run', function(Request $request){
//    $this->request = $request;
//    dd($request);
//});
//Route::get('/db', function(){
//
//});
//Route::get('/', function () {
//    return view('welcome');
//});

Route::middleware(['auth:web', 'verified'])->get('/admin', function () {
    return view('dashboard');
})->name('admin');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
