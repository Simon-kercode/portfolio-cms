<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            'HTML/CSS',
            'JavaScript',
            'Vue.js',
            'Alpine.js',
            'TailwindCSS',
            'Bootstrap',
            'PHP',
            'Laravel',
            'MySQL',
            'API RESTful',
            'Redis',
            'Nginx',
            'Docker',
            'AWS',
            'CI/CD',
            'Git',
            'Linux',
            'Forge/Envoyer',
            'VS Code',
            'PhpStorm',
            'Figma',
            'PHPUnit',
            'GitHub',
            'Jira',
            'Mobile',
            'Design',
            'E-commerce',
            'DevOps'
        ];

        foreach($tags as $tagName) {
            Tag::firstOrcreate(['name' => $tagName]);
        }
    }
}
