<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebsiteSetting extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'logo',
        'logo_sticky',
        'favicon',
        'banner',
        'login_page_photo',
        'facebook',
        'twitter',
        'linkedin',
        'instagram',
        'youtube',
        'pinterest',
        'top_bar_email',
        'top_bar_address',
        'top_bar_phone',
        'footer_email',
        'footer_phone',
        'footer_address',
        'footer_copyright',
        'footer_text',
        'footer_links_heading',
        'footer_subscriber_heading',
        'footer_subscriber_text',
        'map',
        'cookie_consent_message',
        'cookie_consent_text_color',
        'cookie_consent_bg_color',
        'cookie_consent_button_text_color',
        'cookie_consent_button_bg_color',
        'cookie_consent_button_text',
        'cookie_consent_status',
        'google_analytic_id',
        'google_analytic_status',
        'google_recaptcha_site_key',
        'google_recaptcha_status',
        'tawk_live_chat_property_id',
        'tawk_live_chat_status',
        'sticky_header',
        'preloader',
        'layout_direction',
        'theme_color',
        'currency_symbol',
    ];

    protected static function boot() // ✅ Ye sahi hai
    {
        parent::boot();
    }
}
