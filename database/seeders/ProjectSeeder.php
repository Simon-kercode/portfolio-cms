<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    
public function run(): void
    
    {
        Project::create([
                
            'title' => 'Plateforme E-commerce',        
            'description' => 'Une plateforme e-commerce complète construite avec Laravel, MySQL et intégration Stripe.',        
            'image_path' => 'seeds/images/kallyas.png',
        ]);
        Project::create([
                
            'title' => 'Application de gestion de tâches',        
            'description' => 'Une application de gestion de tâches en temps réel avec fonctionnalités de collaboration d\'équipe.',        
            'image_path' => 'seeds/images/gestion_taches.png',
        ]);
        Project::create([
                
            'title' => 'Plateforme E-commerce',        
            'description' => 'Une plateforme e-commerce complète construite avec Laravel, MySQL et intégration Stripe.',        
            'image_path' => 'seeds/images/kallyas.png',
        ]);
    }
}