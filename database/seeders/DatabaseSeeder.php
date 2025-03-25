<?php

namespace Database\Seeders;

use App\Models\Employer;
use App\Models\Job;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test',
            'email' => 'test@gmail.com'
        ]);

        User::factory(300)->create();

        //not all the user must have employer
        $users = User::all()->shuffle();

        for ($i = 0; $i < 20; $i++) {
            Employer::factory()->create([
                //No User is used twice as Employer (since pop() the user out after assigning).
                'user_id' => $users->pop()->id
            ]);
        }

        //For each Job a random Employer is assigned as the employer_id.
        $employers = Employer::all();

        for ($i = 0; $i < 100; $i++) {
            Job::factory()->create([
                'employer_id' => $employers->random()
            ]);
        }
    }
}
