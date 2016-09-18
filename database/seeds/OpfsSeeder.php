<?php

use Illuminate\Database\Seeder;

class OpfsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('opfs')->truncate();

        DB::table('opfs')->insert([
            [
                'short_name' => 'ИП',
                'name' => 'Индивидуальный предприниматель',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'short_name' => 'ТОО',
                'name' => 'Товарищество с ограниченной ответственностью',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'short_name' => 'АО',
                'name' => 'Акционерное общество',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
        ]);
    }
}
