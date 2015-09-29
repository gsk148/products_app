<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);
        DB::table('users')->truncate();
        $this->call(UserTableSeeder::class);

        DB::table('products')->truncate();
        $this->call(ProductTableSeeder::class);

        Model::reguard();
    }
}
