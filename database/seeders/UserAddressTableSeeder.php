<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserAddress;
use Illuminate\Database\Seeder;

class UserAddressTableSeeder extends Seeder
{
    public function run()
    {
        UserAddress::factory()->count(5)->create();
    }
}
