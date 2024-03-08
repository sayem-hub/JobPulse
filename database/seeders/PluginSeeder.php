<?php

namespace Database\Seeders;

use App\Models\Plugin;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PluginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $plugin = new Plugin();
        $plugin->employee_status = 0;
        $plugin->blog_status = 0;
        $plugin->pages_status = 0;
        $plugin->company_id = null;
        $plugin->user_id = 1;
        $plugin->save();
    }
}
