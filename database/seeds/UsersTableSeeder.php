<?php

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
      {
            DB::table('users')->insert([
                'name'       => 'admin',
                'email'      => 'admin@teste.com',
                'type'       => 'admin',
                'password'   => Hash::make('123456'),
                'api_token'  => Str::random(80),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
          
            DB::table('users')->insert([
                'name'       => 'yunus',
       'email'      => 'yunus@gmail.com',
                'type'       => 'patient',
                'image'      => 'F6fMQY.jpeg',
                'password'   => Hash::make('123456'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
                       DB::table('users')->insert([
                    'name'       => 'ndiaye',
                     'email'      => 'ndiaye12@gmail.com',
                    'type'       => 'patient',
                    'image'      => 'F6fMQY.jpeg',
                    'password'   => Hash::make('123456'),
                    'created_at' => Carbon::now(),
                   'updated_at' => Carbon::now(),
         ]);
         DB::table('users')->insert([
            'name'       => 'Dra. Cecília Nascimento',
            'email'      => 'cecilianascimento@teste.com',
            'type'       => 'doctor',
            'image'      => 'O3QF27.jpeg',
            'password'   => Hash::make('123456'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
   }
   }

  