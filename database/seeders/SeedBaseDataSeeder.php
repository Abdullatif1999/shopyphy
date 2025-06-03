<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeedBaseDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   DB::transaction(function(){
        $admin = Admin::query()->create([]);
        $admin->user()->create()->create([
            'name'=>"admin",
            "email"=>"admin@admin.com",
            "password"=>"123456",
        ]);
    });
    }
}
