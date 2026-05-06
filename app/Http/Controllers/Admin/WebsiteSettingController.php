<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WebsiteSetting;
use Illuminate\Http\Request;

class WebsiteSettingController extends Controller
{
    public function index()
    {
        $settings = WebsiteSetting::first();
        return view('admin.website-settings', compact('settings'));
    }

    public function update(Request $request)
    {
        // ✅ Fix: Use WebsiteSetting instead of Setting
        $settings = WebsiteSetting::first();

        if (!$settings) {
            $settings = new WebsiteSetting(); // Create a new record if none exists
        }

        $data = $request->except('_token', 'logo', 'logo_sticky', 'favicon', 'banner', 'login_page_photo');

        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('uploads/settings', 'public');
        }

        if ($request->hasFile('logo_sticky')) {
            $data['logo_sticky'] = $request->file('logo_sticky')->store('uploads/settings', 'public');
        }

        if ($request->hasFile('favicon')) {
            $data['favicon'] = $request->file('favicon')->store('uploads/settings', 'public');
        }

        if ($request->hasFile('banner')) {
            $data['banner'] = $request->file('banner')->store('uploads/settings', 'public');
        }

        if ($request->hasFile('login_page_photo')) {
            $data['login_page_photo'] = $request->file('login_page_photo')->store('uploads/settings', 'public');
        }

        // ✅ Fix: Use updateOrCreate to avoid errors if $settings is empty
        $settings->fill($data)->save();

        return redirect()->back()->with('success', 'Settings updated successfully!');
    }
}