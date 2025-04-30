<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ¨ProjectSeeder extends Seeder
{
    
public function run(): void
    
{
        Project::create([
            
'title' => 'Plateforme E-commerce',
            
'description' => 'Une plateforme e-commerce complète construite avec Laravel, MySQL et intégration Stripe.',
            
'image_path' => bcrypt('password'),
        ]);
    }
}