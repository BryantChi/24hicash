<?php

use App\Http\Controllers\EditorUploadController;
use App\Models\Admin\CaseInfo;
use App\Repositories\Admin\SeoSettingRepository;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

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

Route::any('/clear-cache', function () {
    Artisan::call('optimize:clear');
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    // return "All Cache is cleared";
    // $pageInfo = PageSettingInfo::getHomeBanner('/index');
    // return view('index', ['pageInfo' => $pageInfo]);
    return redirect()->route('index');
});

Route::get('/', function () {
    $seoInfo = SeoSettingRepository::getInfo('/*');
    $casesInfo = CaseInfo::orderBy('created_at', 'desc')->limit(2)->get();
    return view('index')
        ->with('casesInfo', $casesInfo)
        ->with('seoInfo', $seoInfo);
})->name('index');

Route::get('/about', function () {
    $seoInfo = SeoSettingRepository::getInfo('/about');
    return view('about')->with('seoInfo', $seoInfo);
})->name('about');

Route::get('/exchange', function () {
    $seoInfo = SeoSettingRepository::getInfo('/exchange');
    return view('exchange')->with('seoInfo', $seoInfo);
})->name('exchange');

Route::get('/bnpl', function () {
    $seoInfo = SeoSettingRepository::getInfo('/bnpl');
    return view('bnpl')->with('seoInfo', $seoInfo);
})->name('bnpl');

Route::get('/cases', function () {
    $seoInfo = SeoSettingRepository::getInfo('/cases');
    $casesInfo = CaseInfo::orderBy('created_at', 'desc')->paginate(10);
    return view('cases')
        ->with('casesInfo', $casesInfo)
        ->with('seoInfo', $seoInfo);
})->name('cases');

Route::get('/quick-apply', function () {
    $seoInfo = SeoSettingRepository::getInfo('/quick-apply');
    return view('quick-apply')->with('seoInfo', $seoInfo);
})->name('quick-apply');

Route::get('/faq', function () {
    $seoInfo = SeoSettingRepository::getInfo('/faq');
    return view('faq')->with('seoInfo', $seoInfo);
})->name('faq');


Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('generator_builder', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@builder')->name('io_generator_builder');

Route::get('field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@fieldTemplate')->name('io_field_template');

Route::get('relation_field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@relationFieldTemplate')->name('io_relation_field_template');

Route::post('generator_builder/generate', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generate')->name('io_generator_builder_generate');

Route::post('generator_builder/rollback', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@rollback')->name('io_generator_builder_rollback');

Route::post(
    'generator_builder/generate-from-file',
    '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generateFromFile'
)->name('io_generator_builder_generate_from_file');

Route::prefix('admin')->group(function () {
    Route::middleware(['auth'])->group(function () {
        Route::resource('seoSettings', App\Http\Controllers\Admin\SeoSettingController::class, ["as" => 'admin']);
        Route::resource('caseInfos', App\Http\Controllers\Admin\CaseInfoController::class, ["as" => 'admin']);

        Route::any('adminUsers', [App\Http\Controllers\Admin\AdminAccountController::class, 'index'])->name('admin.adminUsers.index');
        Route::any('adminUsers/create', [App\Http\Controllers\Admin\AdminAccountController::class, 'create'])->name('admin.adminUsers.create');
        Route::any('adminUsers/store', [App\Http\Controllers\Admin\AdminAccountController::class, 'store'])->name('admin.adminUsers.store');
        Route::any('adminUsers/show/{id}', [App\Http\Controllers\Admin\AdminAccountController::class, 'show'])->name('admin.adminUsers.show');
        Route::any('adminUsers/edit/{id}', [App\Http\Controllers\Admin\AdminAccountController::class, 'edit'])->name('admin.adminUsers.edit');
        Route::any('adminUsers/update/{id}', [App\Http\Controllers\Admin\AdminAccountController::class, 'update'])->name('admin.adminUsers.update');
        Route::any('adminUsers/destroy/{id}', [App\Http\Controllers\Admin\AdminAccountController::class, 'destroy'])->name('admin.adminUsers.destroy');
    });
});

Route::post('editor-upload', [EditorUploadController::class, 'upload'])->name('editor-upload');
Route::post('/editor/upload-temp', [EditorUploadController::class, 'uploadTemp'])->name('editor.upload.temp');
Route::delete('/editor/delete-temp', [EditorUploadController::class, 'deleteTemp'])->name('editor.delete.temp');
