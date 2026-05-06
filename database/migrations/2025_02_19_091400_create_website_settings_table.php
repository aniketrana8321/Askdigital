<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('website_settings', function (Blueprint $table) {
            $table->id();
            $table->string('logo')->nullable();
            $table->string('logo_sticky')->nullable();
            $table->string('favicon')->nullable();
            $table->string('banner')->nullable();
            $table->string('login_page_photo')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('instagram')->nullable();
            $table->string('youtube')->nullable();
            $table->string('pinterest')->nullable();
            $table->string('top_bar_email')->nullable();
            $table->string('top_bar_address')->nullable();
            $table->string('top_bar_phone')->nullable();
            $table->string('footer_email')->nullable();
            $table->string('footer_phone')->nullable();
            $table->string('footer_address')->nullable();
            $table->text('footer_copyright')->nullable();
            $table->text('footer_text')->nullable();
            $table->string('footer_links_heading')->nullable();
            $table->string('footer_subscriber_heading')->nullable();
            $table->text('footer_subscriber_text')->nullable();
            $table->text('map')->nullable();
            $table->text('cookie_consent_message')->nullable();
            $table->string('cookie_consent_text_color')->nullable();
            $table->string('cookie_consent_bg_color')->nullable();
            $table->string('cookie_consent_button_text_color')->nullable();
            $table->string('cookie_consent_button_bg_color')->nullable();
            $table->string('cookie_consent_button_text')->nullable();
            $table->string('cookie_consent_status')->nullable();
            $table->string('google_analytic_id')->nullable();
            $table->string('google_analytic_status')->nullable();
            $table->string('google_recaptcha_site_key')->nullable();
            $table->string('google_recaptcha_status')->nullable();
            $table->string('tawk_live_chat_property_id')->nullable();
            $table->string('tawk_live_chat_status')->nullable();
            $table->string('sticky_header')->nullable();
            $table->string('preloader')->nullable();
            $table->string('layout_direction')->nullable();
            $table->string('theme_color')->nullable();
            $table->string('currency_symbol')->nullable();
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
        Schema::dropIfExists('website_settings');
    }
};
