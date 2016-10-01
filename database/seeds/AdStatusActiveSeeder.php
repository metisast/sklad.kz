<?php

use Illuminate\Database\Seeder;

class AdStatusActiveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ad_status_activities')->truncate();

        DB::table('ad_status_activities')->insert([
            [
                'name' => 'enabled',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'disabled',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]
        ]);

    }
}
