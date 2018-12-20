<?php

use Illuminate\Database\Seeder;

class CmorghTeamUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cmorgh_team_users')->truncate();
$cmorgh_team_users = array(
  array('id' => '1','name' => 'پیمان چهره نواز','email' => 'payman.chehrehnavaz.1375@gmail.com','phone' => '09114565973','cmorgh_team_id' => '1','head' => '1','created_at' => '2017-11-23 04:27:45','updated_at' => '2017-11-23 04:27:45'),
  array('id' => '2','name' => 'مجید محققی حور','email' => NULL,'phone' => '9147425507','cmorgh_team_id' => '1','head' => '0','created_at' => '2017-11-23 04:27:45','updated_at' => '2017-11-23 04:27:45'),
  array('id' => '3','name' => 'حبیب اسکندری نوده','email' => NULL,'phone' => '09338939554','cmorgh_team_id' => '1','head' => '0','created_at' => '2017-11-23 04:27:45','updated_at' => '2017-11-23 04:27:45'),
  array('id' => '4','name' => 'محمدجواد حق شناس لاری','email' => 'haghshenas88@ut.ac.ir','phone' => '۰۹۱۷۱۸۵۰۵۳۰','cmorgh_team_id' => '2','head' => '1','created_at' => '2017-11-23 06:49:08','updated_at' => '2017-11-23 06:49:08'),
  array('id' => '5','name' => 'علی ملاقاسمی','email' => 'arakia685@gmail.com','phone' => '09107449030','cmorgh_team_id' => '3','head' => '1','created_at' => '2017-11-23 16:57:41','updated_at' => '2017-11-23 16:57:41'),
  array('id' => '6','name' => 'پیمان چهره نواز','email' => 'payman.chehrehnavaz.1375@gmail.com','phone' => '09114565973','cmorgh_team_id' => '4','head' => '1','created_at' => '2017-11-24 14:11:57','updated_at' => '2017-11-24 14:11:57'),
  array('id' => '7','name' => 'حبیب اسکندری نوده','email' => NULL,'phone' => '09338939554','cmorgh_team_id' => '4','head' => '0','created_at' => '2017-11-24 14:11:57','updated_at' => '2017-11-24 14:11:57'),
  array('id' => '8','name' => 'مجید محققی  حور','email' => NULL,'phone' => '09147425507','cmorgh_team_id' => '4','head' => '0','created_at' => '2017-11-24 14:11:57','updated_at' => '2017-11-24 14:11:57'),
  array('id' => '9','name' => 'پیمان چهره نواز','email' => 'payman.chehrehnavaz.1375@gmail.com','phone' => '09114565973','cmorgh_team_id' => '5','head' => '1','created_at' => '2017-11-24 14:56:52','updated_at' => '2017-11-24 14:56:52'),
  array('id' => '10','name' => 'حبیب اسکندری نوده','email' => NULL,'phone' => '09338939554','cmorgh_team_id' => '5','head' => '0','created_at' => '2017-11-24 14:56:52','updated_at' => '2017-11-24 14:56:52'),
  array('id' => '11','name' => 'مجید محققی  حور','email' => NULL,'phone' => '09147425507','cmorgh_team_id' => '5','head' => '0','created_at' => '2017-11-24 14:56:52','updated_at' => '2017-11-24 14:56:52'),
  array('id' => '12','name' => 'حبیب اسکندری نوده','email' => 'payman.chehrehnavaz.1375@gmail.com','phone' => '09338939554','cmorgh_team_id' => '6','head' => '1','created_at' => '2017-11-27 12:34:48','updated_at' => '2017-11-27 12:34:48'),
  array('id' => '13','name' => 'مجید محققی  حور','email' => NULL,'phone' => '09147425507','cmorgh_team_id' => '6','head' => '0','created_at' => '2017-11-27 12:34:48','updated_at' => '2017-11-27 12:34:48'),
  array('id' => '14','name' => 'پیمان چهره نواز','email' => NULL,'phone' => '09114565973','cmorgh_team_id' => '6','head' => '0','created_at' => '2017-11-27 12:34:48','updated_at' => '2017-11-27 12:34:48'),
  array('id' => '16','name' => 'پیمان چهره نواز','email' => 'payman.chehrehnavaz.1375@gmail.com','phone' => '09114565973','cmorgh_team_id' => '7','head' => '1','created_at' => '2017-11-27 13:31:38','updated_at' => '2017-11-27 13:31:38'),
  array('id' => '17','name' => 'مجید محققی  حور','email' => NULL,'phone' => '09147425507','cmorgh_team_id' => '7','head' => '0','created_at' => '2017-11-27 13:31:38','updated_at' => '2017-11-27 13:31:38'),
  array('id' => '18','name' => 'حبیب اسکندری نوده','email' => NULL,'phone' => '09338939554','cmorgh_team_id' => '7','head' => '0','created_at' => '2017-11-27 13:31:38','updated_at' => '2017-11-27 13:31:38'),
  array('id' => '19','name' => 'پیمان چهره نواز','email' => 'payman.chehrehnavaz.1375@gmail.com','phone' => '09114565973','cmorgh_team_id' => '8','head' => '1','created_at' => '2017-11-27 14:22:57','updated_at' => '2017-11-27 14:22:57'),
  array('id' => '20','name' => 'حبیب اسکندری نوده','email' => NULL,'phone' => '09338939554','cmorgh_team_id' => '8','head' => '0','created_at' => '2017-11-27 14:22:57','updated_at' => '2017-11-27 14:22:57'),
  array('id' => '21','name' => 'مجید محققی  حور','email' => NULL,'phone' => '09147425507','cmorgh_team_id' => '8','head' => '0','created_at' => '2017-11-27 14:22:57','updated_at' => '2017-11-27 14:22:57'),
  array('id' => '22','name' => 'رضا سلمانی','email' => NULL,'phone' => '09117647632','cmorgh_team_id' => '8','head' => '0','created_at' => '2017-11-27 14:22:57','updated_at' => '2017-11-27 14:22:57'),
  array('id' => '23','name' => 'محمد یوسفی','email' => 'm32you@yahoo.com','phone' => '09124663293','cmorgh_team_id' => '9','head' => '1','created_at' => '2017-12-09 15:04:30','updated_at' => '2017-12-09 15:04:30'),
  array('id' => '24','name' => 'آرمین کریمی','email' => 'arminkarimi7394@gmail.com','phone' => '09196804324','cmorgh_team_id' => '10','head' => '1','created_at' => '2017-12-11 16:35:31','updated_at' => '2017-12-11 16:35:31'),
  array('id' => '25','name' => 'وحید شریعتی','email' => NULL,'phone' => '09127584928','cmorgh_team_id' => '10','head' => '0','created_at' => '2017-12-11 16:35:31','updated_at' => '2017-12-11 16:35:31'),
  array('id' => '26','name' => 'محمد یوسفی','email' => 'm32you@yahoo.com','phone' => '09124663293','cmorgh_team_id' => '11','head' => '1','created_at' => '2017-12-13 14:34:09','updated_at' => '2017-12-13 14:34:09'),
  array('id' => '27','name' => 'فرهاد حیدری','email' => 'BLACKROSE_PITH@YAHOO.COM','phone' => '09359335021','cmorgh_team_id' => '11','head' => '0','created_at' => '2017-12-13 14:34:09','updated_at' => '2017-12-13 14:34:09'),
  array('id' => '29','name' => 'محمدیوسفی','email' => 'm32you@yahoo.com','phone' => '09124663293','cmorgh_team_id' => '13','head' => '1','created_at' => '2017-12-16 07:30:59','updated_at' => '2017-12-16 07:30:59'),
  array('id' => '30','name' => 'فرهاد حیدری','email' => 'BLACKROSE_PITH@YAHOO.COM','phone' => '09359335021','cmorgh_team_id' => '13','head' => '0','created_at' => '2017-12-16 07:30:59','updated_at' => '2017-12-16 07:30:59'),
  array('id' => '31','name' => 'سهیل اشعاری','email' => 'soheil023@yahoo.com','phone' => '09367017565','cmorgh_team_id' => '14','head' => '1','created_at' => '2017-12-16 18:58:18','updated_at' => '2017-12-16 18:58:18'),
  array('id' => '32','name' => 'محسن مدنی','email' => 'mohsenando@gmail.com','phone' => '09371870755','cmorgh_team_id' => '14','head' => '0','created_at' => '2017-12-16 18:58:18','updated_at' => '2017-12-16 18:58:18'),
  array('id' => '33','name' => 'یاسین اسفندیاری','email' => 'yasin.esfandiari1733@gmail.com','phone' => '09211983166','cmorgh_team_id' => '14','head' => '0','created_at' => '2017-12-16 18:58:18','updated_at' => '2017-12-16 18:58:18'),
  array('id' => '34','name' => 'لیلا اکبری','email' => 'leia.akbari.a20@gmail.com','phone' => '09124672276','cmorgh_team_id' => '15','head' => '1','created_at' => '2017-12-20 14:22:16','updated_at' => '2017-12-20 14:22:16'),
  array('id' => '35','name' => 'نیلوفر حاجی زاده','email' => 'Nihajizadeh1@gmail.com','phone' => '09199930571','cmorgh_team_id' => '15','head' => '0','created_at' => '2017-12-20 14:22:16','updated_at' => '2017-12-20 14:22:16')
);
        DB::table('cmorgh_team_users')->insert($cmorgh_team_users);
    }
}
