<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserAddress;

class UserAddressTableSeeder extends Seeder
{
    public function run()
    {
        UserAddress::factory()->count(10)->create();
    }
}
