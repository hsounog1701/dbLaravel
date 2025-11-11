<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CocheSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('coches')->insert([
            ['marca' => 'Toyota', 'modelo' => 'Corolla', 'year' => 2019, 'precio' => 18500.00, 'created_at' => now(), 'updated_at' => now()],
            ['marca' => 'Honda', 'modelo' => 'Civic', 'year' => 2020, 'precio' => 21000.00, 'created_at' => now(), 'updated_at' => now()],
            ['marca' => 'Ford', 'modelo' => 'Focus', 'year' => 2018, 'precio' => 16500.00, 'created_at' => now(), 'updated_at' => now()],
            ['marca' => 'Chevrolet', 'modelo' => 'Cruze', 'year' => 2021, 'precio' => 19500.00, 'created_at' => now(), 'updated_at' => now()],
            ['marca' => 'Volkswagen', 'modelo' => 'Golf', 'year' => 2019, 'precio' => 23000.00, 'created_at' => now(), 'updated_at' => now()],
            ['marca' => 'BMW', 'modelo' => 'Serie 3', 'year' => 2022, 'precio' => 41000.00, 'created_at' => now(), 'updated_at' => now()],
            ['marca' => 'Audi', 'modelo' => 'A4', 'year' => 2021, 'precio' => 39500.00, 'created_at' => now(), 'updated_at' => now()],
            ['marca' => 'Mercedes-Benz', 'modelo' => 'C 200', 'year' => 2020, 'precio' => 42000.00, 'created_at' => now(), 'updated_at' => now()],
            ['marca' => 'Kia', 'modelo' => 'Rio', 'year' => 2018, 'precio' => 14500.00, 'created_at' => now(), 'updated_at' => now()],
            ['marca' => 'Hyundai', 'modelo' => 'Elantra', 'year' => 2019, 'precio' => 17200.00, 'created_at' => now(), 'updated_at' => now()],
            ['marca' => 'Mazda', 'modelo' => 'Mazda3', 'year' => 2022, 'precio' => 22000.00, 'created_at' => now(), 'updated_at' => now()],
            ['marca' => 'Nissan', 'modelo' => 'Sentra', 'year' => 2020, 'precio' => 18500.00, 'created_at' => now(), 'updated_at' => now()],
            ['marca' => 'Peugeot', 'modelo' => '308', 'year' => 2021, 'precio' => 25000.00, 'created_at' => now(), 'updated_at' => now()],
            ['marca' => 'Renault', 'modelo' => 'Clio', 'year' => 2017, 'precio' => 13500.00, 'created_at' => now(), 'updated_at' => now()],
            ['marca' => 'Subaru', 'modelo' => 'Impreza', 'year' => 2022, 'precio' => 26000.00, 'created_at' => now(), 'updated_at' => now()],
            ['marca' => 'Tesla', 'modelo' => 'Model 3', 'year' => 2023, 'precio' => 48000.00, 'created_at' => now(), 'updated_at' => now()],
            ['marca' => 'Fiat', 'modelo' => 'Tipo', 'year' => 2018, 'precio' => 12000.00, 'created_at' => now(), 'updated_at' => now()],
            ['marca' => 'Seat', 'modelo' => 'Leon', 'year' => 2019, 'precio' => 20500.00, 'created_at' => now(), 'updated_at' => now()],
            ['marca' => 'Volvo', 'modelo' => 'S60', 'year' => 2021, 'precio' => 37000.00, 'created_at' => now(), 'updated_at' => now()],
            ['marca' => 'Jeep', 'modelo' => 'Compass', 'year' => 2022, 'precio' => 34000.00, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
