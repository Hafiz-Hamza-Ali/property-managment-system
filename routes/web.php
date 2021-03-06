<?php
Route::get('/', function () { return redirect('/admin/home'); });

// Authentication Routes...
$this->get('login', 'Auth\LoginController@showLoginForm')->name('auth.login');
$this->post('login', 'Auth\LoginController@login')->name('auth.login');
$this->post('logout', 'Auth\LoginController@logout')->name('auth.logout');

// Change Password Routes...
$this->get('change_password', 'Auth\ChangePasswordController@showChangePasswordForm')->name('auth.change_password');
$this->patch('change_password', 'Auth\ChangePasswordController@changePassword')->name('auth.change_password');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('auth.password.reset');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('auth.password.reset');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset')->name('auth.password.reset');

// Registration Routes..
$this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('auth.register');
$this->post('register', 'Auth\RegisterController@register')->name('auth.register');

$this->get('invitation/{invitation_token}', 'Auth\RegisterController@processInvitation')->name('auth.invitation');

Route::get('index', 'FrontendController@index')->name('frontend.index');
Route::get('about', 'FrontendController@about')->name('frontend.about');
Route::get('properties', 'FrontendController@properties')->name('frontend.properties');
Route::get('property_detail/{id}', 'FrontendController@property_detail')->name('frontend.property_detail');
Route::get('property_search/{search}', 'FrontendController@search')->name('frontend.property.search');
Route::get('contact', 'FrontendController@contact')->name('frontend.contact');
Route::get('team', 'FrontendController@team')->name('frontend.team');
Route::get('sale', 'FrontendController@sale')->name('frontend.sale');
Route::get('rent', 'FrontendController@rent')->name('frontend.rent');
Route::post('property_detail/invite', 'FrontendController@store')->name('frontend.invite');
Route::group(['middleware' => ['auth', 'check_invitation'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/home', 'HomeController@index');
    Route::resource('/invitations', 'Admin\InvitationController');
    Route::resource('permissions', 'Admin\PermissionsController');
    Route::post('permissions_mass_destroy', ['uses' => 'Admin\PermissionsController@massDestroy', 'as' => 'permissions.mass_destroy']);
    Route::resource('roles', 'Admin\RolesController');
    Route::post('roles_mass_destroy', ['uses' => 'Admin\RolesController@massDestroy', 'as' => 'roles.mass_destroy']);
    Route::resource('users', 'Admin\UsersController');
    Route::post('users_mass_destroy', ['uses' => 'Admin\UsersController@massDestroy', 'as' => 'users.mass_destroy']);
    Route::resource('properties', 'Admin\PropertiesController');
    Route::post('properties_mass_destroy', ['uses' => 'Admin\PropertiesController@massDestroy', 'as' => 'properties.mass_destroy']);
    Route::post('properties_restore/{id}', ['uses' => 'Admin\PropertiesController@restore', 'as' => 'properties.restore']);
    Route::delete('properties_perma_del/{id}', ['uses' => 'Admin\PropertiesController@perma_del', 'as' => 'properties.perma_del']);
    Route::resource('documents', 'Admin\DocumentsController');
    Route::post('documents_mass_destroy', ['uses' => 'Admin\DocumentsController@massDestroy', 'as' => 'documents.mass_destroy']);
    Route::post('documents_restore/{id}', ['uses' => 'Admin\DocumentsController@restore', 'as' => 'documents.restore']);
    Route::delete('documents_perma_del/{id}', ['uses' => 'Admin\DocumentsController@perma_del', 'as' => 'documents.perma_del']);
    Route::resource('notes', 'Admin\NotesController');
    Route::post('notes_mass_destroy', ['uses' => 'Admin\NotesController@massDestroy', 'as' => 'notes.mass_destroy']);
    Route::post('notes_restore/{id}', ['uses' => 'Admin\NotesController@restore', 'as' => 'notes.restore']);
    Route::delete('notes_perma_del/{id}', ['uses' => 'Admin\NotesController@perma_del', 'as' => 'notes.perma_del']);

    Route::model('messenger', 'App\MessengerTopic');
    Route::get('messenger/inbox', 'Admin\MessengerController@inbox')->name('messenger.inbox');
    Route::get('messenger/outbox', 'Admin\MessengerController@outbox')->name('messenger.outbox');
    Route::resource('messenger', 'Admin\MessengerController');

    Route::resource('tenants', 'Admin\TenantsController');
    Route::resource('teams', 'Admin\TeamsController');
    //Frontend Controller
    Route::get('index', 'FrontendController@index')->name('frontend.index');
    

});
// Route::get('/clear-cache', function() {
//     $exitCode = Artisan::call('config:cache');
//     $exitCode = Artisan::call('cache:clear');
//     $exitCode = Artisan::call('view:clear');
//     $exitCode = Artisan::call('route:cache');
//     dd('done');
// });
Route::get('/call-cache', function () {
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    return 'cleared';
});

Route::get('/call-config-cache', function () {
    Artisan::call('config:cache');
    return 'cleared';
});