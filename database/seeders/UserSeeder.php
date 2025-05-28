<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            [
                'user_id' => 16,
                'name' => 'Anne Tantan',
                'email' => 'annetan@gmail.com',
                'password' => Hash::make('user'),
                'address' => 'Jl. Mayjen Sungkono No.45, Surabaya',
                'phone_number' => '081234567890',
                'created_at' => now(),
                'updated_at' => now(),
                'status_del' => 0
            ],
            [
                'user_id' => 2,
                'name' => 'Dwinda Audia',
                'email' => 'dwinda.audia@gmail.com',
                'password' => Hash::make('dwinda456'),
                'address' => 'Jl. Dharmawangsa No.12, Surabaya',
                'phone_number' => '081298765432',
                'created_at' => now(),
                'updated_at' => now(),
                'status_del' => 0
            ],
            [
                'user_id' => 3,
                'name' => 'Jacqlyn Chen',
                'email' => 'jacqlyn.chen@gmail.com',
                'password' => Hash::make('jacqlyn789'),
                'address' => 'Jl. Diponegoro No.78, Surabaya',
                'phone_number' => '082134567891',
                'created_at' => now(),
                'updated_at' => now(),
                'status_del' => 0
            ],
            [
                'user_id' => 4,
                'name' => 'Heidy Mudita',
                'email' => 'heidy.mudita@gmail.com',
                'password' => Hash::make('heidy321'),
                'address' => 'Jl. Raya Darmo No.88, Surabaya',
                'phone_number' => '082198765432',
                'created_at' => now(),
                'updated_at' => now(),
                'status_del' => 0
            ],
            [
                'user_id' => 5,
                'name' => 'Angela Melia Gunawan',
                'email' => 'angela.gunawan@gmail.com',
                'password' => Hash::make('angela654'),
                'address' => 'Jl. Gubeng No.90, Surabaya',
                'phone_number' => '081223344556',
                'created_at' => now(),
                'updated_at' => now(),
                'status_del' => 0
            ],
            [
                'user_id' => 6,
                'name' => 'Natalie Grace Widjaja Kuswanto',
                'email' => 'natalie.widjaja@gmail.com',
                'password' => Hash::make('natalie987'),
                'address' => 'Jl. Manyar No.67, Surabaya',
                'phone_number' => '081277788899',
                'created_at' => now(),
                'updated_at' => now(),
                'status_del' => 0
            ],
            [
                'user_id' => 7,
                'name' => 'Sharon Tan',
                'email' => 'sharon.tan@gmail.com',
                'password' => Hash::make('sharon123'),
                'address' => 'Jl. Raya Jemursari No.23, Surabaya',
                'phone_number' => '082111223344',
                'created_at' => now(),
                'updated_at' => now(),
                'status_del' => 0
            ],
            [
                'user_id' => 8,
                'name' => 'Jessica Laurentia Tedja',
                'email' => 'jessica.tedja@gmail.com',
                'password' => Hash::make('jessica456'),
                'address' => 'Jl. Ngagel No.34, Surabaya',
                'phone_number' => '081288899900',
                'created_at' => now(),
                'updated_at' => now(),
                'status_del' => 0
            ],
            [
                'user_id' => 9,
                'name' => 'Rayna Shera Chang',
                'email' => 'rayna.chang@gmail.com',
                'password' => Hash::make('rayna789'),
                'address' => 'Jl. Tegalsari No.56, Surabaya',
                'phone_number' => '081244556677',
                'created_at' => now(),
                'updated_at' => now(),
                'status_del' => 0
            ],
            [
                'user_id' => 10,
                'name' => 'Bernardo Frederick Kowe',
                'email' => 'bernardo.kowe@gmail.com',
                'password' => Hash::make('bernardo321'),
                'address' => 'Jl. Kalibokor No.22, Surabaya',
                'phone_number' => '082233344455',
                'created_at' => now(),
                'updated_at' => now(),
                'status_del' => 0
            ],
            [
                'user_id' => 11,
                'name' => 'Micheelle Jeanneth Liang',
                'email' => 'micheelle@gmail.com',
                'password' => Hash::make('admin'),
                'address' => 'Jl. Bratang No.40, Surabaya',
                'phone_number' => '081255566677',
                'created_at' => now(),
                'updated_at' => now(),
                'status_del' => 0
            ],
            [
                'user_id' => 12,
                'name' => 'Amanda M. Darwis',
                'email' => 'amanda.darwis@gmail.com',
                'password' => Hash::make('amanda987'),
                'address' => 'Jl. Ketintang No.11, Surabaya',
                'phone_number' => '082277788899',
                'created_at' => now(),
                'updated_at' => now(),
                'status_del' => 0
            ],
            [
                'user_id' => 13,
                'name' => 'Tsania Candraningtyas',
                'email' => 'tsania.candraningtyas@gmail.com',
                'password' => Hash::make('tsania123'),
                'address' => 'Jl. Kertajaya No.13, Surabaya',
                'phone_number' => '081266778899',
                'created_at' => now(),
                'updated_at' => now(),
                'status_del' => 0
            ],
            [
                'user_id' => 14,
                'name' => 'Jonathan Sunjaya',
                'email' => 'jonathan.sunjaya@gmail.com',
                'password' => Hash::make('jonathan456'),
                'address' => 'Jl. Pucang Anom No.15, Surabaya',
                'phone_number' => '081299887766',
                'created_at' => now(),
                'updated_at' => now(),
                'status_del' => 0
            ],
            [
                'user_id' => 15,
                'name' => 'Dave Tristan',
                'email' => 'dave.tristan@gmail.com',
                'password' => Hash::make('dave789'),
                'address' => 'Jl. Wonokromo No.18, Surabaya',
                'phone_number' => '082211122233',
                'created_at' => now(),
                'updated_at' => now(),
                'status_del' => 0
            ],
        ]);
    }
}
