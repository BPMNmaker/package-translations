<?php

namespace ProcessMaker\Package\Translations\Models;

use ProcessMaker\Models\ProcessMakerModel;

class Language extends ProcessMakerModel
{

    protected $fillable = [
        'code', 'name', 'installed',
    ];
}
