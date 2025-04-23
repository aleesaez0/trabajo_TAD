<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdministradorSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('administradores')->insert([
            'user_id' => $this->command->argument('user_id'),
        ]);
    }
}
