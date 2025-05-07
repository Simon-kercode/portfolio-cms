<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\Tag;

class ProjectSeeder extends Seeder
{
    
public function run(): void
    
    {
        $tags = Tag::all();

        $project1 = Project::firstOrCreate([
            'title' => 'Plateforme E-commerce'
        ],[      
            'description' => 'Une plateforme e-commerce complète construite avec Laravel, MySQL et intégration Stripe.',        
            'image_path' => 'seeds/images/kallyas.png',
            
        ]);
        $project2 = Project::firstOrCreate([
            'title' => 'Application de gestion de tâches'
        ],[     
            'description' => 'Une application de gestion de tâches en temps réel avec fonctionnalités de collaboration d\'équipe.',        
            'image_path' => 'seeds/images/gestion_taches.png',
        ]);
        $project3 = Project::firstOrCreate([
            'title' => 'Interface de chat IA'
        ],[      
            'description' => 'Une interface de chat alimentée par l\'IA avec des capacités de traitement du langage naturel.',        
            'image_path' => 'seeds/images/ai_chat.png',
        ]);

        $project1->tags()->sync($tags->random(3)->pluck('id'));
        $project2->tags()->sync($tags->random(3)->pluck('id'));
        $project3->tags()->sync($tags->random(3)->pluck('id'));
    }
}