<?php

use Illuminate\Database\Seeder;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regions')->truncate();

        $regions = [
            'Акмолинская',
            'Актюбинская',
            'Алматинская',
            'Атырауская',
            'Восточно-Казахстанская',
            'Жамбылская',
            'Западно-Казахстанская',
            'Карагандинская',
            'Кустанайская',
            'Кызылординская',
            'Мангистауская',
            'Павлодарская',
            'Северо-Казахстанская',
            'Южно-Казахстанская'
            ,        ];
        for($i = 0; $i < count($regions); $i++)
        {
            DB::table('regions')->insert([
                'name' => $regions[$i],
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]);
        }
    }
}
