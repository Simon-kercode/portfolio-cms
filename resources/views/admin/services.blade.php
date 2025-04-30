@extends('admin.layouts.app')

@section('title', 'Gestion des Services')

@section('content')
    <div class="futuristic-card mb-6">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
            <div class="relative flex-1">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5 text-muted-foreground"><circle cx="11" cy="11" r="8"></circle><path d="m21 21-4.3-4.3"></path></svg>
                </div>
                <input type="search" id="service-search" class="block w-full pl-10 pr-4 py-2.5 text-sm rounded-lg border border-primary/20 bg-background/50 backdrop-blur-sm focus:ring-primary focus:border-primary" placeholder="Rechercher des services...">
            </div>
            <button class="btn-futuristic">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5 mr-2"><path d="M5 12h14"></path><path d="M12 5v14"></path></svg>
                Nouveau Service
            </button>
        </div>
    </div>
    
    <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
        @foreach(['Développement Web', 'E-commerce', 'Applications Mobiles', 'API & Intégrations', 'Maintenance & Support', 'Formation'] as $index => $service)
            <div class="futuristic-card group hover:border-primary/50">
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center gap-3">
                        <div class="p-3 rounded-lg bg-secondary/20 text-secondary group-hover:bg-secondary/30 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6">
                                @if($index == 0)
                                    <rect width="18" height="18" x="3" y="3" rx="2" ry="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><path d="M20.4 14.5 16 10 4 20"></path>
                                @elseif($index == 1)
                                    <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"></path><circle cx="12" cy="10" r="3"></circle>
                                @elseif($index == 2)
                                    <path d="M12 20.94c1.5 0 2.75 1.06 4 1.06 3 0 6-8 6-12.22A4.91 4.91 0 0 0 17 5c-2.22 0-4 1.44-5 2-1-.56-2.78-2-5-2a4.9 4.9 0 0 0-5 4.78C2 14 5 22 8 22c1.25 0 2.5-1.06 4-1.06Z"></path><path d="M10 2c1 .5 2 2 2 5"></path>
                                @elseif($index == 3)
                                    <path d="M21 12V7H5a2 2 0 0 1 0-4h14v4"></path><path d="M3 5v14a2 2 0 0 0 2 2h16v-5"></path><path d="M18 12a2 2 0 0 0 0 4h4v-4Z"></path>
                                @elseif($index == 4)
                                    <path d="M12 2H2v10h10V2Z"></path><path d="M22 12h-8v10h8V12Z"></path><path d="M12 12H2v10h10V12Z"></path><path d="M22 2h-8v6h8V2Z"></path>
                                @else
                                    <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                                @endif
                            </svg>
                        </div>
                        <h3 class="font-semibold text-xl">{{ $service }}</h3>
                    </div>
                    <div class="flex items-center space-x-1">
                        <button class="p-1.5 rounded-md hover:bg-primary/10" title="Modifier">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4"><path d="M17 3a2.85 2.85 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5Z"></path><path d="m15 5 4 4"></path></svg>
                        </button>
                        <button class="p-1.5 rounded-md hover:bg-red-500/10 hover:text-red-500" title="Supprimer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4"><path d="M3 6h18"></path><path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path><path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path><line x1="10" x2="10" y1="11" y2="17"></line><line x1="14" x2="14" y1="11" y2="17"></line></svg>
                        </button>
                    </div>
                </div>
                
                <p class="text-muted-foreground mb-4">{{ ['Création de sites web et d\'applications web sur mesure avec Laravel, optimisés pour les performances et le référencement.', 'Développement de boutiques en ligne personnalisées avec gestion des produits, paiements sécurisés et expérience utilisateur optimisée.', 'Développement d\'applications mobiles hybrides avec Laravel comme backend et interfaces utilisateur réactives.', 'Développement d\'API RESTful et intégration avec des services tiers pour étendre les fonctionnalités de votre application.', 'Services de maintenance, mises à jour et support technique pour garantir le bon fonctionnement de vos applications Laravel.', 'Formation et accompagnement pour vous aider à maîtriser votre application Laravel et à la gérer efficacement.'][$index] }}</p>
                
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <span class="text-lg font-bold gradient-text">{{ ['1200€', '2500€', '3500€', '1800€', '350€', '800€'][$index] }}</span>
                        <span class="text-xs text-muted-foreground ml-2">prix de base</span>
                    </div>
                    <div class="flex items-center">
                        <span class="px-2 py-1 text-xs rounded-full {{ $index % 2 == 0 ? 'bg-green-500/20 text-green-500' : 'bg-blue-500/20 text-blue-500' }}">
                            {{ $index % 2 == 0 ? 'Populaire' : 'Standard' }}
                        </span>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
