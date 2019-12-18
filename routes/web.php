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

    use Illuminate\Routing\Console\MiddlewareMakeCommand;
    use Illuminate\Auth\Middleware\Authenticate;

    Auth::routes();
    // Route::get('/admin', 'adminController@index');
    Route::get('/dapur', 'HomeController@dapur')->name('kasir');
    Route::get('/kasir', 'HomeController@index')->name('dapur')->middleware('auth.admin', 'auth');
    Route::get('/{customer}/confirm', 'HomeController@confirm')->name('Pembayaran');
    Route::get('/{customer}/detail', 'HomeController@detail')->name('Pembayaran');
    Route::get('/{tran}/edit', 'HomeController@update');
    Route::get('/home/customer', 'HomeController@customer')->name('Kritik|Saran');
    Route::get('/print/{customer}/', 'HomeController@print');
    Route::get('/', 'MenuController@index');
    Route::get('/index/{customer}', 'productController@index');
    Route::get('/index/{customer}/confirm', 'tranController@index');
    Route::get('/customer-servis', 'MenuController@help');
    Route::get('/logout', 'Auth\LoginController@logout');

    // Route::get('/admin', 'Admin\UsersController@index');
    // Route::get('/login', 'Admin\UsersController@login');

    Route::post('/index/{customer}', 'tranController@store');
    Route::post('/', 'MenuController@store');
    Route::post('/transaksi', 'HomeController@antrian')->name('home');
    Route::post('/customer-servis', 'MenuController@storeHelp');

    Route::patch('/{customer}/confirm', 'HomeController@updateUser');
    Route::delete('/index/{tran}/', 'tranController@destroy');
