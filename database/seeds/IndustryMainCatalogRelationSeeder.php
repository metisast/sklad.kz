<?php

use Illuminate\Database\Seeder;

class IndustryMainCatalogRelationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('industry_main_category')->truncate();

        for($i = 1; $i < 18; $i++)
        {
            DB::table('industry_main_category')->insert(
                [
                    'industry_id' => $i,
                    'main_category_id' => '1',
                    'created_at' => \Carbon\Carbon::now(),
                    'updated_at' => \Carbon\Carbon::now(),
                ]
            );
        }
        for($i = 18; $i < 38; $i++)
        {
            DB::table('industry_main_category')->insert(
                [
                    'industry_id' => $i,
                    'main_category_id' => '2',
                    'created_at' => \Carbon\Carbon::now(),
                    'updated_at' => \Carbon\Carbon::now(),
                ]
            );
        }
        for($i = 38; $i < 74; $i++)
        {
            DB::table('industry_main_category')->insert(
                [
                    'industry_id' => $i,
                    'main_category_id' => '3',
                    'created_at' => \Carbon\Carbon::now(),
                    'updated_at' => \Carbon\Carbon::now(),
                ]
            );
        }
    }
}
