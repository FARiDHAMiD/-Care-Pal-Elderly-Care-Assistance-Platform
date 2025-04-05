<?php

namespace Database\Seeders;

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
        function generateNumberList($max) { $result = array(); $num = rand(1, $max);  while (count($result) < $num) { $randNum = rand(1, $max); if (!in_array($randNum, $result)) { $result[] = $randNum; } } return $result; }
        $this->call(Laratrust::class);
        $this->call(UsersSeeder::class);
        $this->call(WebsiteSettingSeeder::class);
    }
}
