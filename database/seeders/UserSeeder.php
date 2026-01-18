<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::query()->create([
            'name'=>'Fulano',
            'email'=>'fulano@gmail.com',
            'password'=>'12345678',
        ]);

        
        User::query()->create([
            'name'=>'Usuário Teste',
            'email'=>'user@gmail.com',
            'password'=>'12345678',
        ]);
        }
}