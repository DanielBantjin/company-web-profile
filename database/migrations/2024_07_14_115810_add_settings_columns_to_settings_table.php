<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSettingsColumnsToSettingsTable extends Migration
{
    public function up()
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->string('siteTitle')->nullable();
            $table->text('siteDescription')->nullable();
            $table->string('siteLogo')->nullable();
            $table->string('siteFavicon')->nullable();
        });
    }

    public function down()
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->dropColumn('siteTitle');
            $table->dropColumn('siteDescription');
            $table->dropColumn('siteLogo');
            $table->dropColumn('siteFavicon');
        });
    }
}
