<?php

namespace Database\Seeders;

use App\Models\Transportation;
use Illuminate\Database\Seeder;

class TransportationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $all_transport = [
            [
                'name' => 'small transport Car',
                'type' => 'car',
                'price' => 100,
            ],
            [
                'name' => 'medium transport Car',
                'type' => 'car',
                'price' => 200,
            ],
            [
                'name' => 'heavy transport Car',
                'type' => 'car',
                'price' => 300,
            ],
            [
                'name' => 'small transport winch',
                'type' => 'winch',
                'price' => 100,
            ],
            [
                'name' => 'medium transport winch',
                'type' => 'winch',
                'price' => 200,
            ],
            [
                'name' => 'heavy transport winch',
                'type' => 'winch',
                'price' => 300,
            ],
        ];

        foreach ($all_transport as $transport) {
            Transportation::create([
                'name' => $transport['name'],
                'type' => $transport['type'],
                'price' => $transport['price'],
            ]);
        }
    }
}
