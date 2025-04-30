@extends('admin.layouts.app')

@section('title', 'Gestion des Projets')

@section('content')
    <div class="futuristic-card mb-6">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
            <div class="relative flex-1">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5 text-muted-foreground"><circle cx="11" cy="11" r="8"></circle><path d="m21 21-4.3-4.3"></path></svg>
                </div>
                <input type="search" id="project-search" class="block w-full pl-10 pr-4 py-2.5 text-sm rounded-lg border border-primary/20 bg-background/50 backdrop-blur-sm focus:ring-primary focus:border-primary" placeholder="Rechercher des projets...">
            </div>
            <div class="flex items-center gap-3">
                <select class="bg-background/50 backdrop-blur-sm border border-primary/20 text-sm rounded-lg focus:ring-primary focus:border-primary block p-2.5">
                    <option selected>Tous les statuts</option>
                    <option value="active">Actif</option>
                    <option value="completed">Terminé</option>
                    <option value="pending">En attente</option>
                </select>
                <button class="btn-futuristic">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5 mr-2"><path d="M5 12h14"></path><path d="M12 5v14"></path></svg>
                    Nouveau Projet
                </button>
            </div>
        </div>
    </div>
    
    <div class="futuristic-card">
        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead>
                    <tr class="border-b border-primary/20">
                        <th class="px-4 py-3 text-left">Projet</th>
                        <th class="px-4 py-3 text-left">Catégorie</th>
                        <th class="px-4 py-3 text-left">Date</th>
                        <th class="px-4 py-3 text-left">Statut</th>
                        <th class="px-4 py-3 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach(range(1, 10) as $i)
                        <tr class="border-b border-primary/10 hover:bg-primary/5">
                            <td class="px-4 py-4">
                                <div class="flex items-center">
                                    <div class="w-10 h-10 rounded bg-primary/20 flex items-center justify-center mr-3">
                                        <span class="text-primary font-bold">P{{ $i }}</span>
                                    </div>
                                    <div>
                                        <div class="font-medium">Projet {{ $i }}</div>
                                        <div class="text-xs text-muted-foreground">ID: PRJ-{{ 1000 + $i }}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-4">
                                {{ ['Web', 'Mobile', 'E-commerce', 'API', 'Design'][$i % 5] }}
                            </td>
                            <td class="px-4 py-4">
                                {{ date('d/m/Y', strtotime("-$i days")) }}
                            </td>
                            <td class="px-4 py-4">
                                <span class="px-2 py-1 text-xs rounded-full {{ $i % 3 == 0 ? 'bg-green-500/20 text-green-500' : ($i % 3 == 1 ? 'bg-blue-500/20 text-blue-500' : 'bg-yellow-500/20 text-yellow-500') }}">
                                    {{ $i % 3 == 0 ? 'Terminé' : ($i % 3 == 1 ? 'En cours' : 'En attente') }}
                                </span>
                            </td>
                            <td class="px-4 py-4 text-right">
                                <div class="flex items-center justify-end space-x-2">
                                    <button class="p-1.5 rounded-md hover:bg-primary/10" title="Modifier">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4"><path d="M17 3a2.85 2.85 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5Z"></path><path d="m15 5 4 4"></path></svg>
                                    </button>
                                    <button class="p-1.5 rounded-md hover:bg-primary/10" title="Voir">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4"><path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                    </button>
                                    <button class="p-1.5 rounded-md hover:bg-red-500/10 hover:text-red-500" title="Supprimer">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4"><path d="M3 6h18"></path><path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path><path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path><line x1="10" x2="10" y1="11" y2="17"></line><line x1="14" x2="14" y1="11" y2="17"></line></svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
        <div class="flex items-center justify-between mt-6">
            <div class="text-sm text-muted-foreground">
                Affichage de 1 à 10 sur 24 projets
            </div>
            <div class="flex items-center space-x-2">
                <button class="p-2 rounded-md border border-primary/20 hover:bg-primary/10 disabled:opacity-50" disabled>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4"><path d="m15 18-6-6 6-6"></path></svg>
                </button>
                <button class="p-2 rounded-md bg-primary text-white">1</button>
                <button class="p-2 rounded-md border border-primary/20 hover:bg-primary/10">2</button>
                <button class="p-2 rounded-md border border-primary/20 hover:bg-primary/10">3</button>
                <button class="p-2 rounded-md border border-primary/20 hover:bg-primary/10">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4"><path d="m9 18 6-6-6-6"></path></svg>
                </button>
            </div>
        </div>
    </div>
@endsection
