<?php

use Illuminate\Database\Seeder;

class AdStatusBelongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ad_status_belongs')->truncate();

        DB::table('ad_status_belongs')->insert([
            [
                'name' => 'user',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'company',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]
        ]);
    }
}
