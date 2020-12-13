<?php

use Illuminate\Database\Seeder;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("INSERT INTO `cities` (`id`, `province_id`, `name`, `type`, `postal_code`, `created_at`, `updated_at`) VALUES
        (160, 11, 'Jember', 'Kabupaten', '68113', '2019-08-29 12:55:53', '2019-08-29 12:55:53');");
    }
}
