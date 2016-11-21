<?php
use Illuminate\Database\Seeder;
use Eloquent;
class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
 /*   public function run()
    {
        DB::table('admin')->insert([ 
            'name' => 'Admin',
            'email' => 'admin@udex.com',
            'password' => bcrypt('admin'),
        ]);
    }
*/
   public function run()
    {
        if (Schema::hasTable('admin'))
                {
                    DB::table('admin')->insert([
                    'email' => 'admin@admin.com',
                    'password' => bcrypt('secret'),
                ]);
                } 

    }

}
