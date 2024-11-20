<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::updateOrCreate(['email' => 'admin@mail.com'], [
            'name' => 'Digital',
            'address' => 'new cairo egypt',
            'phone' => '123456789',
            'email' => 'admin@mail.com',
            'facebook' => '',
            'twitter' => '',
            'linkedin' => '',
            'instagram' => '',
        ]);
    }
}
