<?php

namespace ProcessMaker\Package\Translations\Models;

use ProcessMaker\Models\ProcessMakerModel;

class Translatable extends ProcessMakerModel
{

    protected $fillable = [
        'language_code', 'translations',
    ];

    protected $casts = ['translations' => 'array'];
}
