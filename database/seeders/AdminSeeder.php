<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'id'=>'1',
            'name'=>'ayoop almahjop',
            'email'=>'ayoopjuve@admin.com',
            'password'=>Hash::make('juvejuve')
       ] );



       Admin::create([
        'id'=>'2',
        'name'=>'okmeha',
        'email'=>'okmeha@admin.com',
        'password'=>Hash::make('juvejuve')
   ] );



    }


}
