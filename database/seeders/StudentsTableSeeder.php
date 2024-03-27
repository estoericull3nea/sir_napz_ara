<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $popularFirstNames = ['Ericson', 'Twinkle', 'Evandolph', 'Luisa', 'Aaron', 'Mildred', 'Leandro', 'Agnes', 'Renalyn', 'Justine'];
        $popularLastNames = ['Palisoc', 'Diaz', 'Garcia', 'Soriano', 'Arenas', 'Arenas', 'Estabillio', 'Garcia', 'Aquino', 'Estabillio'];
        $middleNames = ['Michael', 'Grace', 'Antonio', 'Theresa', 'Alexander', 'Rose', 'David', 'Elizabeth', 'John', 'Marie'];

        // Dummy addresses and phone numbers
        $addresses = [
            '123 Main Street',
            '456 Elm Street',
            '789 Oak Street',
            '321 Maple Avenue',
            '654 Pine Street',
            '987 Cedar Avenue',
            '135 Birch Street',
            '246 Walnut Avenue',
            '579 Chestnut Street',
            '864 Spruce Avenue'
        ];

        $phoneNumbers = [
            '1234567890',
            '2345678901',
            '3456789012',
            '4567890123',
            '5678901234',
            '6789012345',
            '7890123456',
            '8901234567',
            '9012345678',
            '0123456789'
        ];

        // Populate the students table with at least 10 rows, starting student_id from 1
        for ($i = 1; $i <= 10; $i++) {
            Student::create([
                'student_id' => $i,
                'first_name' => $popularFirstNames[$i - 1],
                'middle_name' => $middleNames[$i - 1],
                'last_name' => $popularLastNames[$i - 1],
                'email_address' => strtolower(str_replace(' ', '', $popularFirstNames[$i - 1])) . $i . '@example.com',
                'address' => $addresses[$i - 1],
                'phone_number' => $phoneNumbers[$i - 1]
            ]);
        }
    }
}
