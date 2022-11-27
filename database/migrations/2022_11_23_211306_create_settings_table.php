<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->text('logo')->default('1');
            $table->text('favicon')->default('1');
            $table->text('logo_footer')->default('1');
            $table->text('footer_text')->nullable()->default('1');
            $table->text('footer_icon_1')->nullable()->default('1');
            $table->text('footer_icon_1_url')->nullable()->default('1');
            $table->text('footer_icon_2')->nullable()->default('1');
            $table->text('footer_icon_2_url')->nullable()->default('1');
            $table->text('footer_icon_3')->nullable()->default('1');
            $table->text('footer_icon_3_url')->nullable()->default('1');
            $table->text('footer_icon_4')->nullable()->default('1');
            $table->text('footer_icon_4_url')->nullable()->default('1');
            $table->text('footer_copyright')->default('1');
            $table->text('preloader_status')->default('1');
            $table->text('theme_color')->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
