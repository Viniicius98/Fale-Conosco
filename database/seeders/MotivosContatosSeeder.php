<?php

namespace Database\Seeders;

use App\Models\MotivosContatos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MotivosContatosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MotivosContatos::create(['motivo' => 'Suporte']);
        MotivosContatos::create( ['motivo' => 'Feedback']);
        MotivosContatos::create(['motivo' => 'Solicitação de Informações']);
        MotivosContatos::create(['motivo' => 'Outro']);
    }
}
