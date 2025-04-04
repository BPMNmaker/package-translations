<?php

use ProcessMaker\Package\Translations\Http\Controllers\TranslationsController;

Route::group(['middleware' => ['auth']], function () {
    Route::get('admin/package-translations', [TranslationsController::class, 'index'])->name('package.translation.index');
    Route::get('package-translations', [TranslationsController::class, 'index'])->name('package.translation.tab.index');
});
