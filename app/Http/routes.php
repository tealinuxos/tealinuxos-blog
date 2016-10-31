<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/en/home',['as' => 'home', 'uses' => 'PostController@index']);

Route::get('/home',['as' => 'home', 'uses' => 'PostController@index']);

// EN
Route::get('/en','EnBlogController@index');
Route::get('/en/wiki','EnBlogController@wiki');
Route::get('/en/contribution','EnBlogController@kontribusi');
Route::get('/en/support','EnBlogController@dukungan');
Route::get('/en/support/installation','EnBlogController@instalasi');
Route::get('/en/support/guid','EnBlogController@panduan');
Route::get('/en/blog','EnBlogController@blog');

Route::get('/en/store','EnBlogController@toko');
Route::get('/en/report','EnBugController@create');
Route::get('/en/report/thank', function (){
	return view('en.lapor.terimakasih');
});

Route::get('/','BlogController@index');
Route::get('/wiki','BlogController@wiki');
Route::get('/kontribusi','BlogController@kontribusi');
Route::get('/dukungan','BlogController@dukungan');
Route::get('/dukungan/instalasi','BlogController@instalasi');
Route::get('/dukungan/panduan','BlogController@panduan');
Route::get('/blog','BlogController@blog');

Route::get('/toko','BlogController@toko');
Route::get('/lapor','BugController@create');
Route::get('/lapor/terimakasih', function (){
	return view('lapor.terimakasih');
});
Route::post('/lapor','BugController@store');
Route::get('/desktop/lapor','BugController@desktop');
Route::post('/desktop/lapor','BugController@desktopstore');
Route::get('/desktop/lapor/list','BugController@desktoplist');
Route::get('/desktop/lapor/terimakasih', function (){
	return view('lapor.desktop.terimakasih');
});

//-----------readmore----/


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
Route::group(['middleware' => ['auth']], function()
{

	// show new post form
	Route::get('new-post','PostController@create');
	
	// save new post
	Route::post('new-post','PostController@store');
	
	// edit post form
	Route::get('edit/{slug}','PostController@edit');
	
	// update post
	Route::post('update','PostController@update');
	
	// delete post
	Route::get('delete/{id}','PostController@destroy');
	
	// display user's all posts
	Route::get('my-all-posts','UserController@user_posts_all');
	
	// display user's drafts
	Route::get('my-drafts','UserController@user_posts_draft');
	
	
	// add comment
	Route::post('comment/add','CommentController@store');
	
	// delete comment
	//en


	Route::get('/en/bugedit/{id}','EnBugController@edit');
	Route::post('/en/bugupdate/','EnBugController@update');
	Route::get('/en/reportall','EnBugController@index');
	Route::post('/en/delete/{id}','EnBugController@destroy');
	Route::post('/en/updatestatus/','EnBugController@updatestatus');

	//id
	Route::post('comment/delete/{id}','CommentController@distroy');
	Route::get('/bugedit/{id}','BugController@edit');
	Route::post('/bugupdate/','BugController@update');
	Route::get('/reportall','BugController@index');
	Route::post('/delete/{id}','BugController@destroy');
	Route::post('/updatestatus/','BugController@updatestatus');
});


//en
Route::get('en/user/{id}','EnUserController@profile')->where('id', '[0-9]+');
//id
Route::get('user/{id}','UserController@profile')->where('id', '[0-9]+');

// display list of posts
//en
Route::get('en/user/{id}/posts','EnUserController@user_posts')->where('id', '[0-9]+');
//id
Route::get('user/{id}/posts','UserController@user_posts')->where('id', '[0-9]+');

// display single post
//en
Route::get('en/blog/{slug}',['as' => 'post', 'uses' => 'EnBlogController@show'])->where('slug', '[A-Za-z0-9-_]+');
//id
Route::get('blog/{slug}',['as' => 'post', 'uses' => 'BlogController@show'])->where('slug', '[A-Za-z0-9-_]+');
// lapor slug
//en
Route::get('/en/lapor/{slug}',['as' => 'post', 'uses' => 'EnBugController@show'])->where('slug', '[A-Za-z0-9-_]+');

//id
Route::get('/lapor/{slug}',['as' => 'post', 'uses' => 'BugController@show'])->where('slug', '[A-Za-z0-9-_]+');

Route::get('/desktop/list/{slug}',['as' => 'post', 'uses' => 'BugController@showlist'])->where('slug', '[A-Za-z0-9-_]+');
