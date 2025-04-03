<?php

use ProcessMaker\Package\PackageTranslations\Http\Controllers\PackageTranslationsController;

Route::group(['middleware' => ['auth']], function () {
    Route::get('admin/package-translations', [PackageTranslationsController::class, 'index'])->name('package.skeleton.index');
    Route::get('package-translations', [PackageTranslationsController::class, 'index'])->name('package.skeleton.tab.index');
});
