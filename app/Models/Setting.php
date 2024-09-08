<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $primaryKey = 'SettingID';
    public $timestamps = false;

    protected $fillable = [
        'SiteTitle', 'SiteDescription', 'SiteLogo', 'SiteFavicon'
    ];
}
