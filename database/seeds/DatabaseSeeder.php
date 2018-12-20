<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(mentorTableSeeder::class);
         $this->call(StartupsTableSeeder::class);
         $this->call(WorkshopsTableSeeder::class);
         $this->call(EventsTableSeeder::class);
         $this->call(EventPhotosTableSeeder::class);
         $this->call(CmorghTeamUsersTableSeeder::class);
         $this->call(CmorghTeamsTableSeeder::class);
         $this->call(WorkshopPastTableSeeder::class);
         $this->call(BlogPostsTableSeeder::class);
         $this->call(AdminTableSeeder::class);
    }
}
