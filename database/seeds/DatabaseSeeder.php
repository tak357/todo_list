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
        $this->call
        ([
            // FoldersTableSeeder::class,
            TasksTableSeeder::class,
        ]);

        // echo get_class($this) . "\n"; // 自分のクラス名をecho
    }
}
