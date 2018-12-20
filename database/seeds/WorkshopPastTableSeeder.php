<?php

use Illuminate\Database\Seeder;

class WorkshopPastTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('past_workshops')->truncate();
        // $categories=[
        //         ['id'=>1, 'name'=>'
        //         کارمندی یا کارآفرینی
        //         ', 'poster'=>'1.jpg', 'created_at'=>new DateTime, 'updated_at'=>new DateTime],
        //         ['id'=>2, 'name'=>'
        //         کارمندی یا کارآفرینی
        //         ', 'poster'=>'2.jpg', 'created_at'=>new DateTime, 'updated_at'=>new DateTime],
                
        //         ['id'=>3, 'name'=>'
        //         کارمندی یا کارآفرینی
        //         ', 'poster'=>'3.jpg', 'created_at'=>new DateTime, 'updated_at'=>new DateTime],
        //         ['id'=>4, 'name'=>'
        //         دانش بنیان و اقتصاد مقاومتی
        //         ', 'poster'=>'4.jpg', 'created_at'=>new DateTime, 'updated_at'=>new DateTime],
        //         ['id'=>5, 'name'=>'
        //         کارگاه کارآفرینی
        //         ', 'poster'=>'5.jpg', 'created_at'=>new DateTime, 'updated_at'=>new DateTime],
        //         ['id'=>6, 'name'=>'
        //         همایش علم یا ثروت
        //         ', 'poster'=>'6.jpg', 'created_at'=>new DateTime, 'updated_at'=>new DateTime],

        //     ];
        $past_workshops = array(
  array('id' => '1','name' => '
                کارمندی یا کارآفرینی
                ','poster' => '1.jpg','active' => '0','desc' => NULL,'date' => NULL,'created_at' => '2018-01-18 10:19:20','updated_at' => '2018-01-18 10:19:20'),
  array('id' => '2','name' => '
                کارمندی یا کارآفرینی
                ','poster' => '2.jpg','active' => '0','desc' => NULL,'date' => NULL,'created_at' => '2018-01-18 10:19:20','updated_at' => '2018-01-18 10:19:20'),
  array('id' => '3','name' => '
                کارمندی یا کارآفرینی
                ','poster' => '3.jpg','active' => '0','desc' => NULL,'date' => NULL,'created_at' => '2018-01-18 10:19:20','updated_at' => '2018-01-18 10:19:20'),
  array('id' => '4','name' => '
                دانش بنیان و اقتصاد مقاومتی
                ','poster' => '4.jpg','active' => '0','desc' => NULL,'date' => NULL,'created_at' => '2018-01-18 10:19:20','updated_at' => '2018-01-18 10:19:20'),
  array('id' => '5','name' => '
                کارگاه کارآفرینی
                ','poster' => '5.jpg','active' => '0','desc' => NULL,'date' => NULL,'created_at' => '2018-01-18 10:19:20','updated_at' => '2018-01-18 10:19:20'),
  array('id' => '6','name' => '
                همایش علم یا ثروت
                ','poster' => '6.jpg','active' => '0','desc' => NULL,'date' => NULL,'created_at' => '2018-01-18 10:19:20','updated_at' => '2018-01-18 10:19:20'),
  array('id' => '9','name' => 'اعتبارسنجی ایده','poster' => '15162613347.jpg','active' => '1','desc' => 'کارگاه اعتبارسنجی ایده در تاریخ 13 آذر در دانشگاه شهید رجایی برگزار شد. 
کارگاه‌های جدید به زودی به سایت اضافه خواهد شد.','date' => '13 آذر','created_at' => '2018-01-18 11:12:14','updated_at' => '2018-01-18 11:12:14')
);
            DB::table('past_workshops')->insert($past_workshops);
    }
}
