@extends('admin.layouts.app')

@section('title', 'Tableau de bord')

@section('content')
    <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-4">
        <div class="futuristic-card">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-muted-foreground">Projets</p>
                    <h3 class="text-2xl font-bold mt-1">24</h3>
                </div>
                <div class="p-3 rounded-lg bg-primary/20 text-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path></svg>
                </div>
            </div>
            <div class="mt-4">
                <div class="flex items-center">
                    <span class="text-green-500 text-sm flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4 mr-1"><polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline><polyline points="16 7 22 7 22 13"></polyline></svg>
                        12%
                    </span>
                    <span class="text-xs text-muted-foreground ml-2">depuis le mois dernier</span>
                </div>
            </div>
        </div>
        
        <div class="futuristic-card">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-muted-foreground">Services</p>
                    <h3 class="text-2xl font-bold mt-1">8</h3>
                </div>
                <div class="p-3 rounded-lg bg-secondary/20 text-secondary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><path d="M12 17h.01"></path></svg>
                </div>
            </div>
            <div class="mt-4">
                <div class="flex items-center">
                    <span class="text-green-500 text-sm flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4 mr-1"><polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline><polyline points="16 7 22 7 22 13"></polyline></svg>
                        5%
                    </span>
                    <span class="text-xs text-muted-foreground ml-2">depuis le mois dernier</span>
                </div>
            </div>
        </div>
        
        <div class="futuristic-card">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-muted-foreground">Visiteurs</p>
                    <h3 class="text-2xl font-bold mt-1">1,248</h3>
                </div>
                <div class="p-3 rounded-lg bg-primary/20 text-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                </div>
            </div>
            <div class="mt-4">
                <div class="flex items-center">
                    <span class="text-green-500 text-sm flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4 mr-1"><polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline><polyline points="16 7 22 7 22 13"></polyline></svg>
                        18%
                    </span>
                    <span class="text-xs text-muted-foreground ml-2">depuis le mois dernier</span>
                </div>
            </div>
        </div>
        
        <div class="futuristic-card">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-muted-foreground">Taux de conversion</p>
                    <h3 class="text-2xl font-bold mt-1">3.2%</h3>
                </div>
                <div class="p-3 rounded-lg bg-secondary/20 text-secondary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6"><path d="M12 2v20"></path><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                </div>
            </div>
            <div class="mt-4">
                <div class="flex items-center">
                    <span class="text-red-500 text-sm flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4 mr-1"><polyline points="22 17 13.5 8.5 8.5 13.5 2 7"></polyline><polyline points="16 17 22 17 22 11"></polyline></svg>
                        2%
                    </span>
                    <span class="text-xs text-muted-foreground ml-2">depuis le mois dernier</span>
                </div>
            </div>
        </div>
    </div>
    
    <div class="grid gap-6 mt-6 md:grid-cols-2">
        <div class="futuristic-card">
            <h3 class="text-lg font-semibold mb-4">Visiteurs (30 derniers jours)</h3>
            <div class="h-80">
                <canvas id="visitorsChart"></canvas>
            </div>
        </div>
        
        <div class="futuristic-card">
            <h3 class="text-lg font-semibold mb-4">Sources de trafic</h3>
            <div class="h-80">
                <canvas id="trafficSourcesChart"></canvas>
            </div>
        </div>
    </div>
    
    <div class="grid gap-6 mt-6 md:grid-cols-2">
        <div class="futuristic-card">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-lg font-semibold">Projets récents</h3>
                <a href="{{ route('admin.projects') }}" class="text-sm text-primary hover:underline">Voir tous</a>
            </div>
            <div class="space-y-4">
                @foreach(range(1, 5) as $i)
                    <div class="flex items-center justify-between p-3 border border-primary/20 rounded-lg hover:border-primary/40 transition-colors">
                        <div class="flex items-center">
                            <div class="w-10 h-10 rounded bg-primary/20 flex items-center justify-center mr-3">
                                <span class="text-primary font-bold">P{{ $i }}</span>
                            </div>
                            <div>
                                <h4 class="font-medium">Projet {{ $i }}</h4>
                                <p class="text-xs text-muted-foreground">Mis à jour il y a {{ rand(1, 30) }} jours</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <span class="px-2 py-1 text-xs rounded-full {{ $i % 2 == 0 ? 'bg-green-500/20 text-green-500' : 'bg-blue-500/20 text-blue-500' }}">
                                {{ $i % 2 == 0 ? 'Terminé' : 'En cours' }}
                            </span>
                            <button class="p-1.5 rounded-md hover:bg-primary/10">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        
        <div class="futuristic-card">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-lg font-semibold">Services populaires</h3>
                <a href="{{ route('admin.services') }}" class="text-sm text-primary hover:underline">Voir tous</a>
            </div>
            <div class="space-y-4">
                @foreach(['Développement Web', 'E-commerce', 'Applications Mobiles', 'API & Intégrations', 'Maintenance'] as $index => $service)
                    <div class="flex items-center justify-between p-3 border border-primary/20 rounded-lg hover:border-primary/40 transition-colors">
                        <div class="flex items-center">
                            <div class="w-10 h-10 rounded bg-secondary/20 flex items-center justify-center mr-3">
                                <span class="text-secondary font-bold">S{{ $index + 1 }}</span>
                            </div>
                            <div>
                                <h4 class="font-medium">{{ $service }}</h4>
                                <div class="flex items-center mt-1">
                                    <div class="w-24 h-1.5 bg-muted rounded-full overflow-hidden">
                                        <div class="h-full bg-secondary" style="width: {{ rand(30, 95) }}%"></div>
                                    </div>
                                    <span class="text-xs text-muted-foreground ml-2">{{ rand(30, 95) }}%</span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <span class="text-lg font-bold">{{ rand(1, 9) }}</span>
                            <span class="text-xs text-muted-foreground">demandes</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Visitors Chart
            const visitorsCtx = document.getElementById('visitorsChart').getContext('2d');
            const visitorsChart = new Chart(visitorsCtx, {
                type: 'line',
                data: {
                    labels: Array.from({length: 30}, (_, i) => i + 1),
                    datasets: [{
                        label: 'Visiteurs',
                        data: [120, 145, 132, 165, 178, 190, 210, 205, 220, 240, 235, 255, 270, 260, 280, 290, 310, 300, 320, 340, 330, 350, 365, 380, 400, 420, 410, 430, 450, 460],
                        borderColor: 'rgb(147, 51, 234)',
                        backgroundColor: 'rgba(147, 51, 234, 0.1)',
                        tension: 0.3,
                        fill: true
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                color: 'rgba(147, 51, 234, 0.1)'
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            }
                        }
                    }
                }
            });
            
            // Traffic Sources Chart
            const trafficSourcesCtx = document.getElementById('trafficSourcesChart').getContext('2d');
            const trafficSourcesChart = new Chart(trafficSourcesCtx, {
                type: 'doughnut',
                data: {
                    labels: ['Recherche organique', 'Réseaux sociaux', 'Référencement direct', 'Email', 'Autres'],
                    datasets: [{
                        data: [45, 25, 15, 10, 5],
                        backgroundColor: [
                            'rgb(147, 51, 234)',
                            'rgb(56, 189, 248)',
                            'rgb(34, 211, 238)',
                            'rgb(168, 85, 247)',
                            'rgb(99, 102, 241)'
                        ],
                        borderWidth: 0
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'bottom'
                        }
                    },
                    cutout: '70%'
                }
            });
        });
    </script>
@endsection
