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
Route::group([
    'middleware' => ['web'], //you need to add the last middleware to array to fix it (version < v.1.0.6)
   
    
    
], function () {
Route::get('/mentor/register', ['as'=>'master.register', 'uses'=>'MasterController@create']);
Route::post('/register_mentor', ['as'=>'master.store', 'uses'=>'MasterController@store']);
Route::get('/', ['as'=>'home', 'uses'=>'HomeController@home']);
Route::post('question', ['as'=>'question.add', 'uses'=>'QuestionController@add']);
// Route::get('/event/register/{slug}', ['as'=>'event.register', 'uses'=>'ParticipantController@form']);
Route::post('/event/register', ['as'=>'event.register1', 'uses'=>'ParticipantController@register']);
Route::post('/payment/verify', ['as'=>'callback', 'uses'=>'ParticipantController@callback']);

Route::get('/hodhod', ['as'=>'hodhod', 'uses'=>'HomeController@hodhod']);
Route::get('/homa', ['as'=>'homa', 'uses'=>'HomeController@homa']);
Route::get('/ghoghnoos', ['as'=>'ghoghnoos', 'uses'=>'HomeController@ghoghnoos']);
Route::get('/30morgh', ['as'=>'30morgh', 'uses'=>'HomeController@cmorgh']);
Route::get('/30morgh/register', ['as'=>'30morgh.register', 'uses'=>'HomeController@trainer_register']);
Route::post('/30morgh/register', ['as'=>'30morgh.add_team', 'uses'=>'HomeController@add_team']);
Route::get('/register/trainer', ['as'=>'trainer.register', 'uses'=>'HomeController@trainer_register']);
Route::get('/register/trainer/{mode}', ['as'=>'trainer.register.mode', 'uses'=>'HomeController@trainer_mode_register']);
Route::get('/thankyou', ['as'=>'thankyou', 'uses'=>'HomeController@thankyou']);

Route::get('/hodhod/register', ['as'=>'hodhod.register', 'uses'=>'HomeController@hodhod_register']);   
Route::post('/hodhod/register', ['as'=>'hodhod.add_event', 'uses'=>'HomeController@add_event']);

Route::get('/homa/upload', ['as'=>'homa.upload', 'uses'=>'HomeController@homa_upload']); 
Route::post('/homa/upload', ['as'=>'homa.add', 'uses'=>'HomeController@homa_add']);
Route::get('/hodhod/{name_eng}', ['as'=>'hodhod.event', 'uses'=>'HomeController@hodhod_event']); 
 
Route::get('/ghoghnoos/register', ['as'=>'ghoghnoos.register', 'uses'=>'HomeController@ghoghnoos_register']);
Route::post('/ghoghnoos/register', ['as'=>'ghoghnoos.add_service', 'uses'=>'HomeController@add_service']);

Route::get('/homa/register', ['as'=>'homa.register', 'uses'=>'HomeController@homa_register']); 
Route::post('/homa/register', ['as'=>'homa.register', 'uses'=>'HomeController@homa_workshop_request']);

Route::get('/hodhod/gardeshkar/request', ['as'=>'hodhod.gardeshkar.form', 'uses'=>'HomeController@hodhod_request']);   
Route::post('/hodhod/gardeshkar/request', ['as'=>'hodhod.gardeshkar.request', 'uses'=>'HomeController@add_gardeshkar']);


Route::get('/news', ['as'=>'blog', 'uses'=>'HomeController@blog']); 
Route::get('/news/{post}', ['as'=>'blog.post', 'uses'=>'HomeController@blog_post']); 
});


Route::get('/test', function () {
    return view('test');
});


Route::get('/telegramupdate', ['as'=>'telegram.update', 'uses'=>'HomeController@getUpdates']); 


Route::group(['prefix' => 'admin'], function () {
  Route::get('/teams', 'TeamController@teams')->name('admin_teams');
  Route::get('/teams/show/{team}', 'TeamController@teams_show')->name('admin.teams.show');
  Route::get('/teams/uploads/{team}', 'TeamController@teams_upload')->name('admin.teams.upload');
  Route::post('/teams/uploads/{upload}/opinion', 'TeamController@teams_upload_opinion')->name('admin.teams.upload.opinion');
  Route::post('/teams/teams/{task}/opinion', 'TeamController@teams_task_opinion')->name('admin.teams.task.opinion');
  Route::get('/tasks/{task}/approve', 'TeamController@task_approve')->name('admin.tasks.approve');
  Route::get('/tasks/{task}/disapprove', 'TeamController@task_disapprove')->name('admin.tasks.disapprove');
  Route::get('/team/{team}/task/create', 'TeamController@tasks_create')->name('admin.tasks.create');
  Route::post('/team/task/store', 'TeamController@tasks_store')->name('admin.tasks.store');
  Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'AdminAuth\LoginController@login');
  Route::post('/logout', 'AdminAuth\LoginController@logout')->name('logout');

//   Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm')->name('register');
//   Route::post('/register', 'AdminAuth\RegisterController@register');

  Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');
});


Route::group([
    'middleware' => ['web', 'auth:admin'], //you need to add the last middleware to array to fix it (version < v.1.0.6)
    'prefix' => 'admin',
    
    
], function () {
   Route::get('/mentors', ['as'=>'masters.index', 'uses'=>'MasterController@index']);
   Route::get('/mentors/show/{master}', ['as'=>'masters.show', 'uses'=>'MasterController@show']);
    Route::get('all', 'CmorghTeamController@allteams');
   Route::resource('cmorgh','CmorghTeamController');
   Route::resource('filename','UploadNameController');
   Route::resource('blog','BlogPostController');
   Route::resource('startup','StartupController');
   Route::resource('workshop','PastWorkshopController');
   Route::post('/workshop/update_active/{id}', ['as'=>'workshop.update_active', 'uses'=>'PastWorkshopController@update_active']);
   Route::get('/event/participants', ['as'=>'event.index', 'uses'=>'ParticipantController@index']);
});


Route::group([
    'middleware' => ['web', 'auth:team'],
    'prefix' => 'team',
     
    ], function () {
  Route::resource('tasks','TaskController');
  Route::resource('uploads','UploadController');

});
Route::get('/storage/app/{file_name}', 'FileController')->where(['file_name' => '.*']);
Route::group([
    'prefix' => 'team',
     
    ], function () {
  Route::get('/home', 'TeamController@tasks')->name('team_home');
  
  Route::get('/login', 'TeamAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'TeamAuth\LoginController@login');
  Route::post('/logout', 'TeamAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'TeamAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'TeamAuth\RegisterController@register');

  Route::post('/password/email', 'TeamAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'TeamAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'TeamAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'TeamAuth\ResetPasswordController@showResetForm');
});


Route::group(['prefix' => 'vadmin'], function () {
    Voyager::routes();
    
});
