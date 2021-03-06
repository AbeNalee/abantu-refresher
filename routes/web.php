<?php
use Illuminate\Support\Facades\Mail;
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

Route::view('/', 'refresher');

/*
 * Testing resource controllers
 * Checking routes that access resources
 */
Route::resource('people', 'MyController');

/*
 * Constructor and method injection
 */
Class MyClass{
    public $foo = 'bar';
}
Route::get('myClass', 'ImplicitController@index');
Route::get('myClass/{id}', 'ImplicitController@show');


/*
 * Cookie Implementations
 */
Route::get('cookie/set', 'CookieController@setCookie');
Route::get('cookie/get', 'CookieController@getCookie');

/*
 * Redirecting to route actions
 */
Route::get('rr', 'RedirectController@index');
Route::get('redirect', function() {
   return redirect()->action('RedirectController@index');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*
 * Testing mails
 */
Route::get('/mail', function (){
    Mail::to('user@email.com')->send(new \App\Mail\WelcomeEmail());
   return new \App\Mail\WelcomeEmail();
});

Route::get('/landing-page', function(){
    return view('site.landing.index');
});
