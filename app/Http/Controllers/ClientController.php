<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Faker\Factory as Faker;

class ClientController extends Controller
{
    public function index()
    {
        $faker = Faker::create();

        // Generate 10 fake clients
        $clients = [];
        for ($i = 0; $i < 10; $i++) {
            $clients[] = [
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'phone' => $faker->phoneNumber,
                'company' => $faker->company,
            ];
        }

        return view('clients', ['clients' => $clients]);
    }
}
