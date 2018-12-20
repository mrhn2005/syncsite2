<?php

use Illuminate\Database\Seeder;
use App\Admin;
class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $student= new Admin();
        $student->name="test";
        $student->email="yasidea@yasidea.com";
        $student->password=bcrypt("yasidea2017");
        $student->save();
    }
}
