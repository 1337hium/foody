<?php
use App\Rezept;

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
URL::forceScheme('https');
Route::resource('rezepts', 'RezeptController');
Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'LanguageController@switchLang']);
Route::get('all', 'RezeptController@all')->name('rezepts.all');
Auth::routes(['register' => false]);
Route::post('/category', 'RezeptController@category')->name('rezepts.category');


Route::any('/category', array('as' => 'category', 'uses' => 'RezeptController@category'));

//Route::any('/category', function () {
//        $category1 = Request::get('category');
//        $rezepts = Rezept::where('category', '=', $category1)->orderBy('id', 'DESC')->sortable()->paginate(24);
//        return view('rezepts.category', ['rezepts' => $rezepts]);
//});




Route::get('/', 'RezeptController@index')->name('rezepts');
Route::get('/home', 'RezeptController@index')->name('rezepts');
Route::get('/profile', 'ProfileController@index')->name('profile');
Route::post('/profile/update', 'ProfileController@updateProfile')->name('profile.update');
Route::any('/search', function () {
    $q = Request::get('q');
    $query = Rezept::query();
    $columns = ['name', 'z1', 'z2', 'z3', 'z4', 'z5', 'z6', 'z7', 'z8', 'z9', 'z10', 'z11', 'z12', 'z13', 'z14', 'z15', 'z16', 'z17', 'z18', 'z19', 'z20', 'z21'];
    foreach ($columns as $column) {
        $query->orWhere($column, 'LIKE', '%' . $q . '%');
    }
    $user = $query->get();
    if (count($user) > 0) {
        return view('rezepts.search')->withDetails($user)->withQuery($q);
    } else {
        return view('rezepts.search')->withMessage('No Details found. Try to search again !');
    }
});
