<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientsTableSeeder extends Seeder
{
    public function run()
    {
        // Create multiple clients
        Client::create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => '1234567890',
        ]);

        Client::create([
            'name' => 'Jane Smith',
            'email' => 'jane@example.com',
            'phone' => '0987654321',
        ]);

        // Add more client data as needed
    }
}
