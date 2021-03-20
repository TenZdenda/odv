<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(LectureSeeder::class);
        $this->call(SettingSeeder::class);
        $this->call(FaqSeeder::class);
        $this->call(PartnerSeeder::class);
        $this->call(ReferenceSeeder::class);
        $this->call(TeamSeeder::class);
    }

}
