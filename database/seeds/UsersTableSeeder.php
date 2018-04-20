<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Superadministrator',
                'email' => 'superadministrator@app.com',
                'password' => '$2y$10$6zNIKvqQQzOUBfxwojPCHO7.4YENxgzagsm9jnaZ8lZHauTzRtPGu',
                'remember_token' => NULL,
                'created_at' => '2018-04-20 11:17:36',
                'updated_at' => '2018-04-20 11:17:36',
                'verified' => 0,
                'verification_token' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Administrator',
                'email' => 'administrator@app.com',
                'password' => '$2y$10$amNaLvjWNcoku6I7nd/lk.F4lOXRblr//Tpi1LigWs23PWpVVNhKm',
                'remember_token' => NULL,
                'created_at' => '2018-04-20 11:17:37',
                'updated_at' => '2018-04-20 11:17:37',
                'verified' => 0,
                'verification_token' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'User',
                'email' => 'user@app.com',
                'password' => '$2y$10$pLtdHbhjxkA9gZDsMSmuLOFAnVGtdxsmDq1Kfh.WW6GKh/rk/YgXu',
                'remember_token' => NULL,
                'created_at' => '2018-04-20 11:17:37',
                'updated_at' => '2018-04-20 11:17:37',
                'verified' => 0,
                'verification_token' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Cru User',
                'email' => 'cru_user@app.com',
                'password' => '$2y$10$x.nLZumJIDoIKt8A0J7gXutkkUtIqY/0t3FY1lh5yxHaNVe.fWrxS',
                'remember_token' => 'DEvO9sHQsT',
                'created_at' => '2018-04-20 11:17:38',
                'updated_at' => '2018-04-20 11:17:38',
                'verified' => 0,
                'verification_token' => NULL,
            ),
        ));
        
        
    }
}