<?php

namespace ProcessMaker\Package\PackageTranslations\Models;

use ProcessMaker\Models\ProcessMakerModel;

class Language extends ProcessMakerModel
{

    protected $fillable = [
        'code', 'name', 'installed',
    ];
}
