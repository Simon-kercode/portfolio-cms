<section id="projects" class="py-16 md:py-24 lg:py-32 relative">
    <div class="container px-4 md:px-6">
        <h2 class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl mb-16 text-center gradient-text">Projets</h2>
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
            @include('components.project-card', [
                'title' => 'Plateforme E-commerce',
                'description' => 'Une plateforme e-commerce complète construite avec Laravel, MySQL et intégration Stripe.',
                'image' => '/placeholder.svg?height=400&width=600',
                'link' => 'https://github.com',
                'tags' => ['Laravel', 'MySQL', 'Stripe']
            ])
            
            @include('components.project-card', [
                'title' => 'Application de Gestion de Tâches',
                'description' => 'Une application de gestion de tâches en temps réel avec fonctionnalités de collaboration d\'équipe.',
                'image' => '/placeholder.svg?height=400&width=600',
                'link' => 'https://github.com',
                'tags' => ['Laravel', 'Livewire', 'Alpine.js']
            ])
            
            @include('components.project-card', [
                'title' => 'Interface de Chat IA',
                'description' => 'Une interface de chat alimentée par l\'IA avec des capacités de traitement du langage naturel.',
                'image' => '/placeholder.svg?height=400&width=600',
                'link' => 'https://github.com',
                'tags' => ['OpenAI', 'Laravel', 'TailwindCSS']
            ])
        </div>
    </div>
    
    <!-- Decorative elements -->
    <div class="absolute top-1/3 right-20 w-24 h-24 rounded-full bg-primary/10 blur-3xl"></div>
    <div class="absolute bottom-1/3 left-20 w-36 h-36 rounded-full bg-secondary/10 blur-3xl"></div>
</section>
