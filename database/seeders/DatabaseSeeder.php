<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Contact;
use App\Models\Project;
use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(15)
            ->has(Contact::factory())
            ->create();

        User::factory()
            ->create([
                'name' => 'António Andrade',
                'email' => 'aandrade@app.pt',
            ]);
        Project::factory(15)
            ->create();
        Team::factory(5)
            ->create();
    }
}
