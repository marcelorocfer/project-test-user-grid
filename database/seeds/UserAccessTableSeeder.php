<?php

use App\UserAccess;
use Illuminate\Database\Seeder;

class UserAccessTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(UserAccess::class, 15000)->create();
    }
}
