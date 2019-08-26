<?php

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
//
Route::get('/', function () {
return view('homes');
});


//
Auth::routes();

//
Route::get('/', 'HomeController@index')->name('home');
Route::get('/','PageController@home')->name('welcome');

//middleware
Route::middleware('auth')->group(function () {
    Route::middleware('admin')->group(function(){        

        Route::middleware('admin')->get('/admin',function(){
            return view('dashboard.dashboard');
        });
        //admin
        Route::get('/admin/argon',function(){
            return view('dashboard.dashboard');
        });
    
        Route::get('/admin/user', function () {
            return view('admin.user');
        });
        Route::get('/admin/table_team', function () {
            return view('admin.table');
        });
        Route::get('/admin/artikel', function () {
            return view('admin.artikel');
        });
        // Route::get('/admin/highlight',function() {
        //     return view('admin.highlight');
        // });
        Route::get('/admin/highlight/new',function() {
            return view('admin.highlightnews');
        });
        Route::get('/admin/contact',function(){
            return view('admin.contact');
        });
       
        Route::get('/admin/table_team/edit/{id}','TeamController@edit')->name('edit-member');
        // Route::get('/admin/highlight','HeaderController@indexHighlight');
        Route::get('/admin/news/edit/{id}','NewsArtikelController@editNews')->name('edit-news');        
        Route::get('/admin/project/edit/{id}','ProjectController@edit')->name('edit-project');
        Route::get('/admin/highlight/edit/{id}','HighlightController@edit')->name('edit-highlight');
        Route::get('/set/admin/edit/{id}','AdminController@edit')->name('edit-admin');

        Route::get('/admin/artikel','NewsArtikelController@index');
        Route::get('/admin/all-mails','ContactController@indexData')->name('mail');        
        Route::get('/admin/jobs','JobController@index')->name('job');
        Route::get('/admin/job','JobController@create')->name('create-job-view');
        Route::get('/admin/job/edit/{id}','JobController@edit')->name('edit-job');
        Route::get('/admin/news','NewsArtikelController@index')->name('news-view');        
        Route::get('/admin/news/releaser','ReleaserController@index')->name('news-releaser');
        Route::get('/admin/projects','ProjectController@index')->name('project');
        Route::get('/admin/create/news','NewsArtikelController@create')->name('create-news');
        Route::get('/admin/highlight/','HighlightController@index')->name('highlight');
        Route::get('/admin/create/highlight','HighlightController@create')->name('create-highlight-view');
        Route::get('/admin/mails/partnership','ContactController@showPartner')->name('mail-partner');
        
        Route::get('/admin/teams','TeamController@adminIndex')->name('team');
        Route::get('/admin/create/team','TeamController@create')->name('create-team-view');
        Route::get('/set/admin','AdminController@index')->name('set-admin');
        Route::get('/setting/{name}','AdminController@indexSetting')->name('setting');
        Route::get('/admin/create/project','ProjectController@create')->name('create-project-view');
        Route::get('set/create/admin','AdminController@create')->name('create-admin-view');                

        Route::post('/admin/update/profile/{name}','AdminController@updateSetting')->name('update-setting');
        Route::post('/set/admin/create','AdminController@store')->name('create-admin');
        Route::post('/admin/project/create','ProjectController@store')->name('create-project');
        Route::post('/admin/create/job','JobController@store')->name('create-job');
      
        Route::post('/admin/create_team ','TeamController@store')->name('create-member');
   
        Route::post('/admin/news/create','NewsArtikelController@createArtikel')->name('create-news');        
        Route::post('/admin/highlight/create','HighlightController@store')->name('create-highlight');
    
        Route::post('admin/highlight/update/{id}','HighlightController@update')->name('update-highlight');
        Route::post('admin/table_team/update/{id}','TeamController@update')->name('update-member');
        Route::post('/admin/artikel/update/{id}','NewsArtikelController@updateNews')->name('update-news');        
        Route::post('/admin/career/update/{id}','JobController@update')->name('update-job');
        Route::post('/admin/job/update/status/{id}','JobController@updateStatus')->name('update-status-job');
        Route::post('/admin/project/update/{id}','ProjectController@update')->name('update-project');
        Route::post('/admin/update/status/highlight/{id}','HighlightController@updateStatus')->name('update-status-highlight');
        Route::post('set/admin/update/{id}','AdminController@update')->name('update-admin');

        Route::get('delete/admin/{id}','AdminController@delete')->name('delete-admin');
        Route::get('deleteproject/{id}','ProjectController@delete')->name('delete-project');
        Route::get('hapuscontact/{id}','ContactController@deleteContact');
        Route::get('deletehighlight/{id}','HighlightController@delete')->name('delete-highlight');
        Route::get('delete/team/{id}','TeamController@delete')->name('delete-member');
        Route::get('delete/news/{id}','NewsArtikelController@deleteNews')->name('delete-news'); 
        Route::get('deletecareer/{id}','JobController@delete')->name('delete-career');
        Route::get('deletemail/{id}','ContactController@delete')->name('delete-contact');
        
        Route::get('deletecategory/{id}','CategoryNewsController@delete')->name('delete-category-news');
        Route::get('/admin/news/category/edit/{id}','CategoryNewsController@edit')->name('edit-category-news');
        Route::get('/admin/news/category','CategoryNewsController@index')->name('news-category');
        Route::get('/admin/create/news/category','CategoryNewsController@create')->name('create-category-news-view');
        Route::post('/admin/create/category-news','CategoryNewsController@store')->name('create-category-news');
        Route::post('/admin/news/category/update/{id}','CategoryNewsController@update')->name('update-category-news');
        
        Route::get('deletereleaser/{id}','ReleaserController@delete')->name('delete-releaser');
        Route::get('/admin/news/releaser/edit/{id}','ReleaserController@edit')->name('edit-releaser');
        Route::get('/admin/news/releaser','ReleaserController@index')->name('news-releaser');
        Route::get('/admin/news/create/releaser','ReleaserController@create')->name('create-releaser-view');
        Route::post('/admin/create/releaser','ReleaserController@store')->name('create-releaser');
        Route::post('/admin/news/releaser/update/{id}','ReleaserController@update')->name('update-releaser');

        Route::get('/admin/highlight/search','HighlightController@search')->name('search-high');
        Route::get('/admin/highlight/searchDate','HighlightController@searchDate')->name('search-high-date');
        Route::get('/admin/projects/search','ProjectController@search')->name('search-project');
        Route::get('/admin/teams/search','TeamController@search')->name('search-team');
        Route::get('/admin/news/search','NewsArtikelController@searchArtikel')->name('search-news');
        Route::get('/admin/news/searchDate','NewsArtikelController@searchDateArtikel')->name('search-news-date');
        Route::get('/admin/jobs/search','JobController@searchJob')->name('ajaxSearch.job');
        Route::get('/set/admin/search','AdminController@search')->name('search-admin');
    });
});

Route::get('/news', function () {
    return view('content.news');
});
Route::get('/news/newsartikel',function(){
    return view('content.newsartikel');
});
Route::get('/careers','JobController@career')->name('career');

Route::get('/careers/search','JobController@search')->name('search-careers');
Route::get('/careers/{year?}/{month?}/{id?}/{slug?}','JobController@detailCareer')->name('detail-career');

Route::get('/whats-news','NewsArtikelController@indexwhats');

Route::get('/about-us','PageController@about');

Route::get('/contact-us',function(){
    return view('homes.contact');
});
Route::get('/privacy-policy',function(){
    return view('homes.privacy');
});

Route::get('/our-work','ProjectController@show')->name('our-work');
Route::get('/our-work/{year?}/{month?}/{id?}/{slug?}','ProjectController@detailProject')->name('detail-ourwork');
// contact
Route::post('sending-messages','ContactController@store')->name('send-msg');
Route::get('/contact-us','ContactController@index');
// 
Route::post('updateVisitCount','NewsArtikelController@updateVisitCount')->name('update.visit.count');
Route::post('updateVisitCountProject','ProjectController@updateVisitCount')->name('update.visit.count.project');
Route::post('updateVisitCountJob','JobController@updateVisitCount')->name('update.visit.count.job');
Route::post('updateReadEmail','ContactController@updateReadCount')->name('update.read.email');

Route::get('/news/category/{year}/{month}/{id}/{category}','NewsArtikelController@categoryArtikel')->name('category-artikel');
Route::get('/news/archive/{year}/{month}','NewsArtikelController@indexArchiveArtikel')->name('archive-artikel');
Route::get('/news/{year?}/{month?}/{id?}/{slug?}', 'NewsArtikelController@indexDetailArtikel')->name('detail-artikel');

Route::get('/news', 'PageController@news')->name('slug');

// Route::get('/news/{created_at}','ArtikelController@getArtikelTime')->name('time-artikel');