<?php

use Illuminate\Database\Seeder;

class mentorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mentors')->truncate();
        $categories=[
                ['id'=>1, 'name'=>'
                محمد سالاری نسب
                ', 'photo'=>'salari.jpg','post'=>'
                مدیرعامل شرکت پارس فوم کات
                ', 'created_at'=>new DateTime, 'updated_at'=>new DateTime],
                ['id'=>2, 'name'=>'
                مجید نوعی
                ', 'photo'=>'noei.jpg','post'=>'', 'created_at'=>new DateTime, 'updated_at'=>new DateTime],
                ['id'=>3, 'name'=>'
                امیر کیومرثی
                ', 'photo'=>'kiumarsi.jpg','post'=>'
                مدیر شتابدهنده سیمرغ
                ', 'created_at'=>new DateTime, 'updated_at'=>new DateTime],
                ['id'=>4, 'name'=>'
                محمد موسوی
                ', 'photo'=>'musavi.jpg','post'=>'', 'created_at'=>new DateTime, 'updated_at'=>new DateTime],
                ['id'=>5, 'name'=>'
                حازم فریپور
                ', 'photo'=>'hazem.jpg', 'post'=>'
                مدیر عامل شرکت فن آموز
                ','created_at'=>new DateTime, 'updated_at'=>new DateTime],
                ['id'=>6, 'name'=>'
                جواد عبایی
                ', 'photo'=>'ebayi.jpg','post'=>'', 'created_at'=>new DateTime, 'updated_at'=>new DateTime],
            
            ];
            DB::table('mentors')->insert($categories);
    }
}
