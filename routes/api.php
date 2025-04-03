<?php

use ProcessMaker\Package\PackageTranslations\Http\Controllers\PackageTranslationsController;

Route::group(['middleware' => ['auth:api', 'bindings']], function () {
    Route::get('admin/package-translations/fetch', [PackageTranslationsController::class, 'fetch'])->name('package.skeleton.fetch');
    Route::apiResource('admin/package-translations', PackageTranslationsController::class);
});
