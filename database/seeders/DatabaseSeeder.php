<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(10)->create();

        Listing::Create([
            'title' => 'Laravel Senior Dev',
            'tags' => 'laravel, javascript',
            'company' => 'Acme Corp',
            'location' => 'Boston, MA',
            'email' => 'alaina@gmail.com',
            'description' => 'hello this is the description'
        ]);

        Listing::Create([
            'title' => 'Laravel Senior Dev2',
            'tags' => 'laravel, backend, api',
            'company' => 'Acme Corp',
            'location' => 'Denver, CO',
            'email' => 'alaina@gmail.com',
            'description' => 'hello this is the description'
        ]);

         \App\Models\User::factory()->create([
             'name' => 'Test User',
             'email' => 'test@example.com',
         ]);
    }
}
