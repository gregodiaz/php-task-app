<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        \App\Models\State::factory()->create(['description' => 'Required']);
        \App\Models\State::factory()->create(['description' => 'In Progress']);
        \App\Models\State::factory()->create(['description' => 'Development']);
        \App\Models\State::factory()->create(['description' => 'Test with Client']);
        \App\Models\State::factory()->create(['description' => 'Stopped']);
        \App\Models\State::factory()->create(['description' => 'Done']);

        \App\Models\Type::factory()->create(['description' => 'Action']);
        \App\Models\Type::factory()->create(['description' => 'Comment']);
        \App\Models\Type::factory()->create(['description' => 'Reminder']);

        \App\Models\User::factory(5)->create();
        \App\Models\Client::factory(100)->create();
        \App\Models\Task::factory(150)->create();
        \App\Models\Comment::factory(500)->create();
    }
}
