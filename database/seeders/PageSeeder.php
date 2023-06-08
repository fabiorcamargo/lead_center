<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Page::create([
            'name' => "Página Teste",
            'type' => "premilitar",
            'slug' => "pagina-teste",
            'body' => '
            {"tel": "5542991622889", "city": "Telêmaco Borba", "name": "Teste", "slug": "teste", "type": "premilitar", "state": "PR"}
            '
        ]);    
    }
    }
