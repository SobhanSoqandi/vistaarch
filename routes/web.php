<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\companies\CompanyController;
use App\Http\Controllers\Home\LandingController;
use App\Http\Controllers\Pages\AboutController;
use App\Http\Controllers\Pages\ContactController;
use App\Http\Controllers\Pages\ProjectListController;
use App\Http\Controllers\Projects\ProjectController;
use App\Http\Controllers\Services\ServiceController;
use App\Http\Controllers\Styles\StyleController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect('/fa');
});

// Home : 
// Route::get('/', [LandingController::class, 'index']);


// Route::get('/projects', [ProjectListController::class, 'list'])
//     ->name('projects.list');


Route::prefix('{locale}')
    ->where(['locale' => 'fa|en|de'])
    ->middleware('locale')
    ->group(function () {

        Route::get('/', [LandingController::class, 'index']);

        Route::get('/about', [AboutController::class, 'index'])
            ->name('about');

        Route::get('/contact', [ContactController::class, 'index'])
            ->name('contact');

        Route::prefix('projects')->group(function () {

            Route::get('/', [ProjectListController::class, 'list'])
                ->name('projects.list');

            Route::get('/{slug}', [ProjectListController::class, 'show'])
                ->name('projects.show');
        });
    });



// Route::get('/about', [AboutController::class, 'index'])->name('about');

// Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::get('/login', [AuthController::class, 'showLoginForm'])
    ->name('login');

Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');






Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        return view('admin/dashboard');
    });


    Route::get('/companies', [CompanyController::class, 'index'])
        ->name('companies.index');

    Route::get('/companies/create', [CompanyController::class, 'create'])
        ->name('companies.create');

    Route::post('/companies', [CompanyController::class, 'store'])
        ->name('companies.store');

    Route::get('/companies/{company}/edit', [CompanyController::class, 'edit'])
        ->name('companies.edit');

    Route::put('/companies/{company}', [CompanyController::class, 'update'])
        ->name('companies.update');

    Route::delete('/companies/{company}', [CompanyController::class, 'destroy'])
        ->name('companies.destroy');




    // styles : 
    Route::get('/styles', [StyleController::class, 'index'])
        ->name('styles.index');

    Route::get('/styles/create', [StyleController::class, 'create'])
        ->name('styles.create');

    Route::post('/styles', [StyleController::class, 'store'])
        ->name('styles.store');

    Route::get('/styles/{style}/edit', [StyleController::class, 'edit'])
        ->name('styles.edit');

    Route::put('/styles/{style}', [StyleController::class, 'update'])
        ->name('styles.update');

    Route::delete('/styles/{style}', [StyleController::class, 'destroy'])
        ->name('styles.destroy');





    // services : 
    Route::get('/services', [ServiceController::class, 'index'])
        ->name('services.index');

    Route::get('/services/create', [ServiceController::class, 'create'])
        ->name('services.create');

    Route::post('/services', [ServiceController::class, 'store'])
        ->name('services.store');

    Route::get('/services/{service}/edit', [ServiceController::class, 'edit'])
        ->name('services.edit');

    Route::put('/services/{service}', [ServiceController::class, 'update'])
        ->name('services.update');

    Route::delete('/services/{service}', [ServiceController::class, 'destroy'])
        ->name('services.destroy');




    // admin panel Projects : 
    Route::get('admin/projects', [ProjectController::class, 'index'])
        ->name('projects.index');

    Route::get('admin/projects/create', [ProjectController::class, 'create'])
        ->name('projects.create');

    Route::post('admin/projects', [ProjectController::class, 'store'])
        ->name('projects.store');

    Route::get('admin/projects/{project}/edit', [ProjectController::class, 'edit'])
        ->name('projects.edit');

    Route::put('admin/projects/{project}', [ProjectController::class, 'update'])
        ->name('projects.update');

    Route::delete('admin/projects/{project}', [ProjectController::class, 'destroy'])
        ->name('projects.destroy');

    Route::delete(
        'admin/projects/images/{image}',
        [ProjectController::class, 'destroyImage']
    )->name('projects.images.destroy');
});


Route::get('reset', function () {
    Artisan::call('route:clear');
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
});
