<?php

use Illuminate\Database\Seeder;

class GlobalTruncateCompanySeeder extends Seeder
{
    /**
     * Trancate companies and her relations table
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->truncate();
        DB::table('company_addresses')->truncate();
        DB::table('company_emails')->truncate();
        DB::table('company_features')->truncate();
        DB::table('company_phones')->truncate();
        DB::table('company_sites')->truncate();
    }
}
