<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Client::factory(30)->create();
        $cl = [
            [
                'last_name' => 'Catalan',
                'first_name' => 'Jhon Lyod',
                'middle_name' => 'Mula',
                'address' => 'Libertad, Tubigon, Bohol',
                'birth_date' => '2001-12-01',
                'phone_number' => '09210275493',
                'email' => 'catalanjhonlyodm@gmail.com',
                'initial_deposit' => 100000,
            ],
            [

                'last_name' => 'Catalan',
                'first_name' => 'Jhon Lyod',
                'middle_name' => 'Mula',
                'address' => 'Libertad, Tubigon, Bohol',
                'birth_date' => '2001-12-01',
                'phone_number' => '09210275493',
                'email' => 'jhonlyodcatalan@gmail.com',
                'initial_deposit' => 10000,

            ],
              [
                'last_name' => 'Gabas',
                'first_name' => 'Euni',
                'middle_name' => 'Req',
                'address' => 'Sagbayan, Bohol',
                'birth_date' => '2002-10-23',
                'phone_number' => '09121244888',
                'email' => 'eunizelgabas24@gmail.com',
                'initial_deposit' => 10000,
            ],
            [
                'last_name' => 'Gabas',
                'first_name' => 'Eula',
                'middle_name' => 'Requierme',
                'address' => 'Santa cruz, Sagbayan, Bohol',
                'birth_date' => '2002-06-24',
                'phone_number' => '09518994585',
                'email' => 'gabaseula@gmail.com',
                'initial_deposit' => 10000,
            ],
            [
                'last_name' => 'Catalan',
                'first_name' => 'Jhon Lyod',
                'middle_name' => 'Mula',
                'address' => 'Libertad, Tubigon, Bohol',
                'birth_date' => '2001-12-01',
                'phone_number' => '09210275493',
                'email' => 'lyodssgaacnt@gmail.com',
                'initial_deposit' => 100000,
            ],
              [
                'last_name' => 'Catalan',
                'first_name' => 'Jhon Lyod',
                'middle_name' => 'Mula',
                'address' => 'Libertad, Tubigon, Bohol',
                'birth_date' => '2001-12-01',
                'phone_number' => '09210275493',
                'email' => 'jhonlyodmcatalan@gmail.com',
                'initial_deposit' => 100000,
            ],
              [
                'last_name' => 'Catalan',
                'first_name' => 'Jhon Lyod',
                'middle_name' => 'Mula',
                'address' => 'Libertad, Tubigon, Bohol',
                'birth_date' => '2001-12-01',
                'phone_number' => '09210275493',
                'email' => 'reacher894562@gmail.com',
                'initial_deposit' => 100000,
            ],
            [
                'last_name' => 'Catalan',
                'first_name' => 'Jhon Lyod',
                'middle_name' => 'Mula',
                'address' => 'Libertad, Tubigon, Bohol',
                'birth_date' => '2001-12-01',
                'phone_number' => '09210275493',
                'email' => 'catalanjhonlyodmfbi@gmail.com',
                'initial_deposit' => 100000,
            ],
            [
                'last_name' => 'Catalan',
                'first_name' => 'Oliver',
                'middle_name' => 'Agang',
                'address' => 'Libertad, Tubigon, Bohol',
                'birth_date' => '2001-12-01',
                'phone_number' => '09210275493',
                'email' => 'catalanoliver81@gmail.com',
                'initial_deposit' => 100000,
            ],
             [
                'last_name' => 'Catalan',
                'first_name' => 'Oliver',
                'middle_name' => 'Agang',
                'address' => 'Libertad, Tubigon, Bohol',
                'birth_date' => '2001-12-01',
                'phone_number' => '09210275493',
                'email' => 'olivercatalan1100@gmail.com',
                'initial_deposit' => 100000,
            ],
        ];

        foreach($cl as $c) {
            Client::create($c);
        }
    }
}
  
