<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactsTableSeeder extends Seeder
{
    public function run()
    {
        // Создание пяти контактов
        Contact::create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => '1234567890',
        ]);

        Contact::create([
            'name' => 'Jane Smith',
            'email' => 'jane@example.com',
            'phone' => '9876543210',
        ]);

        Contact::create([
            'name' => 'Michael Johnson',
            'email' => 'michael@example.com',
            'phone' => '5555555555',
        ]);

        Contact::create([
            'name' => 'Emily Davis',
            'email' => 'emily@example.com',
            'phone' => '1111111111',
        ]);

        Contact::create([
            'name' => 'Robert Wilson',
            'email' => 'robert@example.com',
            'phone' => '9999999999',
        ]);
    }
}
