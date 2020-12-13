<?php

use Illuminate\Database\Seeder;

class ProvinceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("INSERT INTO `provinces` (`id`, `name`, `created_at`, `updated_at`) VALUES
        (11, 'Jawa Timur', '2019-08-29 12:55:52', '2019-08-29 12:55:52');");
    }
}
