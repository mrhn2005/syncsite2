<?php

use Illuminate\Database\Seeder;

class WorkshopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('workshops')->truncate();
        $categories=[
                ['id'=>1, 'date'=>'
                آذر 95
                ', 'photo'=>'azar95.jpg', 'created_at'=>new DateTime, 'updated_at'=>new DateTime],
                ['id'=>2, 'date'=>'
                اسفند 95
                ', 'photo'=>'esfand95.jpg', 'created_at'=>new DateTime, 'updated_at'=>new DateTime],

                ['id'=>3, 'date'=>'
                مهر 95
                ', 'photo'=>'mehr95.jpg', 'created_at'=>new DateTime, 'updated_at'=>new DateTime],
                ['id'=>4, 'date'=>'
                اردیبهشت 95
                ', 'photo'=>'ordi95.jpg', 'created_at'=>new DateTime, 'updated_at'=>new DateTime],

            ];
            DB::table('workshops')->insert($categories);
    }
}
