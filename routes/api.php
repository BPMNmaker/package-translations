<?php

use ProcessMaker\Package\Translations\Http\Controllers\TranslationsController;

Route::group(['middleware' => ['auth:api', 'bindings']], function () {
    Route::get('admin/package-translations/fetch', [TranslationsController::class, 'fetch'])->name('package.skeleton.fetch');
    Route::apiResource('admin/package-translations', TranslationsController::class);
});
