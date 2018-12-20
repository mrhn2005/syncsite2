<?php

use Illuminate\Database\Seeder;

class StartupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('startups')->truncate();
        $categories=[
                ['id'=>1,'photo_desc'=>'1.jpg','link'=>'https://t.me/mahalijat_co', 'name'=>'
                محلی‌جات
                ', 'logo'=>'mahalijat.png', 'created_at'=>new DateTime, 'updated_at'=>new DateTime],
                ['id'=>2,'photo_desc'=>'2.jpg','link'=>'http://argannano.ir', 'name'=>'
                ارگان
                ', 'logo'=>'argan.png', 'created_at'=>new DateTime, 'updated_at'=>new DateTime],
                ['id'=>3,'photo_desc'=>'3.jpg','link'=>'http://daneshbaz.ir', 'name'=>'
                مهره
                ', 'logo'=>'Mohre.png', 'created_at'=>new DateTime, 'updated_at'=>new DateTime],
                ['id'=>4,'photo_desc'=>'4.jpg','link'=>'', 'name'=>'
                بوفک
                ', 'logo'=>'Boofak.png', 'created_at'=>new DateTime, 'updated_at'=>new DateTime],
                ['id'=>5,'photo_desc'=>'5.jpg','link'=>'http://daneshkariha.ir', 'name'=>'
                دانشکار
                ', 'logo'=>'Daneshkar.png', 'created_at'=>new DateTime, 'updated_at'=>new DateTime],
                ['id'=>6,'photo_desc'=>'6.jpg','link'=>'https://t.me/fekrinno', 'name'=>'
                فکرینو
                ', 'logo'=>'Fekrinno.png', 'created_at'=>new DateTime, 'updated_at'=>new DateTime],
                ['id'=>7,'photo_desc'=>'7.jpg','link'=>'', 'name'=>'
                آرامیس
                ', 'logo'=>'aramis.jpg', 'created_at'=>new DateTime, 'updated_at'=>new DateTime],
                ['id'=>8,'photo_desc'=>'8.jpg','link'=>'', 'name'=>'
                نونوار
                ', 'logo'=>'Noonavar.png', 'created_at'=>new DateTime, 'updated_at'=>new DateTime],
                ['id'=>9,'photo_desc'=>'9.jpg','link'=>'', 'name'=>'
                سیپاد
                ', 'logo'=>'Sipad.png', 'created_at'=>new DateTime, 'updated_at'=>new DateTime],
            
            ];
            DB::table('startups')->insert($categories);
    }
}
