<?php

namespace App\Http\Controllers\Back;

use App\Models\User;
use App\Models\Plugin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PluginController extends Controller
{
    public function index()
    {
        $user_id = Auth::user()->id;
        $user = User::find($user_id);
        $plugin = Plugin::where('user_id', $user_id)->first();
        // dd($plugin);
        return view('admin.plugins', compact('plugin'));
    }


            public function toggleStatus(Request $request)
        {
            $userId = $request->input('userId');
            $pluginName = $request->input('plugin');

            $plugin = Plugin::where('user_id', $userId)->firstOrFail();

            // Toggle the status based on the plugin name
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
