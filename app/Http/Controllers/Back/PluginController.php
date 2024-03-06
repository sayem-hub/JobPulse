<?php

namespace App\Http\Controllers\Back;

use App\Models\Plugin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PluginController extends Controller
{
    public function index()
    {
        $plugin = Plugin::firstOrFail();
        return view('admin.plugins', compact('plugin'));
    }


 
    public function toggleStatus(Request $request)
    {
        $pluginName = $request->input('plugin');
        $plugin = Plugin::firstOrFail(); 
    
        if ($pluginName == 'employee') {
            $plugin->employee_status = $plugin->employee_status == 1 ? 0 : 1;
        } elseif ($pluginName == 'blog') {
            $plugin->blog_status = $plugin->blog_status == 1 ? 0 : 1;
        } elseif ($pluginName == 'page') {
            $plugin->pages_status = $plugin->pages_status == 1 ? 0 : 1;
        }
    
        $plugin->save();
    
        return response()->json([$pluginName . '_status' => $plugin->{$pluginName . '_status'}]);
    }
    
}
