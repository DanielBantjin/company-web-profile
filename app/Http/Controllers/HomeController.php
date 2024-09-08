<?php
// app/Http/Controllers/HomeController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;

class HomeController extends Controller
{
    public function index()
    {
        $settings = Setting::first();

        if (!$settings) {
            abort(404, 'Settings not found');
        }
        return view('home', compact('settings'));
    }
}
