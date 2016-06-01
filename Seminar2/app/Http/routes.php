<?php


Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {


    Route::group(['middleware' => 'admin'], function () {

        Route::get('/', function () {
            return view('admin.admin');
        });

        Route::get('/data', [
            'as' => 'getData',
            'uses' => 'AdminController@getData'
        ]);

        Route::get('/cars', [
            'as' => 'getCarsView',
            'uses' => 'AdminController@getCarsView'
        ]);

        Route::get('/makes', [
            'as' => 'getMakesModelsView',
            'uses' => 'AdminController@getMakesModelsView'
        ]);

        Route::get('/branches', [
            'as' => 'getBranchesCitiesView',
            'uses' => 'AdminController@getBranchesCitiesView'
        ]);

        Route::get('/fuels', [
            'as' => 'getFuelsView',
            'uses' => 'AdminController@getFuelsView'
        ]);

        Route::get('/extras', [
            'as' => 'getExtrasView',
            'uses' => 'AdminController@getExtrasView'
        ]);

        Route::get('/classes', [
            'as' => 'getClassesView',
            'uses' => 'AdminController@getClassesView'
        ]);
        
        Route::get('/reservations', [
            'as' => 'getReservationsView',
            'uses' => 'AdminController@getReservationsView'
        ]);
        
        Route::get('/api/reservations', [
            'as' => 'getReservations',
            'uses' => 'ApiController@getReservations'
        ]);
        
        Route::post('/api/reservations/confirm', [
            'as' => 'confirmReservation',
            'uses' => 'ApiController@confirmReservation'
        ]);
        
        Route::post('/api/reservations/deliver', [
            'as' => 'carDelivered',
            'uses' => 'ApiController@carDelivered'
        ]);
        
        Route::post('/api/reservations/returned', [
            'as' => 'carReturned',
            'uses' => 'ApiController@carReturned'
        ]);

    });
});


Route::group(['middleware' => 'auth'], function () {
    
    Route::post('/api/reservation/save', [
        'as' => 'reservationSave',
        'uses' => 'ApiController@reservationSave'
    ]);

    Route::get('/api/users/reservations', [
        'as' => 'getUserReservations',
        'uses' => 'ApiController@getUserReservations'
    ]);

    Route::get('/reservations', [
        'as' => 'getUserReservationsView',
        'uses' => 'HomeController@getUserReservationsView'
    ]);

});

Route::get('/', [
    'as' => 'home',
    'uses' => 'HomeController@index'
    ]);

Route::get('/flota', [
    'as' => 'flota',
    'uses' => 'HomeController@index'            
    ]);

Route::get('/home', 'HomeController@index');


Route::get('/api/authenticated', [
    'as' => 'checkIfUserIsAuthenticated',
    'uses' => 'ApiController@authenticated'
]);

Route::get('/api/makes', [
    'as' => 'getMakes',
    'uses' => 'ApiController@getMakes'
]);

Route::get('/api/fuels', [
    'as' => 'getFuels',
    'uses' => 'ApiController@getFuels'
]);

Route::get('/api/extras', [
    'as' => 'getExtras',
    'uses' => 'ApiController@getExtras'
]);

Route::get('/api/cities', [
    'as' => 'getCities',
    'uses' => 'ApiController@getCities'
]);

Route::get('/api/classes', [
    'as' => 'getClasses',
    'uses' => 'ApiController@getClasses'
]);

Route::get('/api/colors', [
    'as' => 'getColors',
    'uses' => 'ApiController@getColors'
]);

Route::get('/api/branches', [
    'as' => 'getBranches',
    'uses' => 'ApiController@getBranches'
]);

Route::get('/api/models', [
    'as' => 'getModels',
    'uses' => 'ApiController@getModels'
]);

Route::get('/api/cars', [
    'as' => 'getCars',
    'uses' => 'ApiController@getCars'
]);

Route::post('/api/makes/add', [
    'as' => 'addMake',
    'uses' => 'ApiController@addMake'
]);

Route::post('/api/fuels/add', [
    'as' => 'addFuel',
    'uses' => 'ApiController@addFuel'
]);

Route::post('/api/extras/add', [
    'as' => 'addExtra',
    'uses' => 'ApiController@addExtra'
]);

Route::post('/api/cities/add', [
    'as' => 'addCity',
    'uses' => 'ApiController@addCity'
]);

Route::post('/api/classes/add', [
    'as' => 'addClass',
    'uses' => 'ApiController@addClass'
]);

Route::post('/api/colors/add', [
    'as' => 'addColor',
    'uses' => 'ApiController@addColor'
]);

Route::post('/api/branches/add', [
    'as' => 'addBranch',
    'uses' => 'ApiController@addBranch'
]);

Route::post('/api/models/add', [
    'as' => 'addModel',
    'uses' => 'ApiController@addModel'
]);

Route::post('/api/cars/add', [
    'as' => 'addCar',
    'uses' => 'ApiController@addCar'
]);

Route::auth();