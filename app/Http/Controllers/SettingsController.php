<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use Illuminate\Support\Facades\Storage;

class SettingsController extends Controller
{
    public function index()
    {
        // Ambil setting yang ada
        $settings = Setting::first();
        if (!$settings) {
            $settings = new Setting();
            $settings->SiteTitle = '';
            $settings->SiteDescription = '';
            $settings->SiteLogo = '';
            $settings->SiteFavicon = '';
        }

        return view('admin.settings', compact('settings'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'siteTitle' => 'required|string|max:255',
            'siteDescription' => 'required|string|max:1000',
            'siteLogo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'siteFavicon' => 'nullable|image|mimes:jpeg,png,jpg,ico|max:2048',
        ]);

        // Update settings
        $settings = Setting::first();
        if (!$settings) {
            $settings = new Setting();
        }

        $settings->SiteTitle = $request->input('siteTitle');
        $settings->SiteDescription = $request->input('siteDescription');
        
        if ($request->hasFile('siteLogo')) {
            if ($settings->SiteLogo) {
                Storage::disk('public')->delete($settings->SiteLogo);
            }
            $settings->SiteLogo = $request->file('siteLogo')->store('logos', 'public');
        }

        if ($request->hasFile('siteFavicon')) {
            if ($settings->SiteFavicon) {
                Storage::disk('public')->delete($settings->SiteFavicon);
            }
            $settings->SiteFavicon = $request->file('siteFavicon')->store('favicons', 'public');
        }

        $settings->save();

        return redirect()->route('admin.settings')->with('success', 'Settings updated successfully!');
    }
}
