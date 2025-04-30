@extends('admin.layouts.app')

@section('title', 'Statistiques des Visiteurs')

@section('content')
    <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-4">
        <div class="futuristic-card">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-muted-foreground">Visiteurs aujourd'hui</p>
                    <h3 class="text-2xl font-bold mt-1">124</h3>
                </div>
                <div class="p-3 rounded-lg bg-primary/20 text-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                </div>
            </div>
            <div class="mt-4">
                <div class="flex items-center">
                    <span class="text-green-500 text-sm flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4 mr-1"><polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline><polyline points="16 7 22 7 22 13"></polyline></svg>
                        8%
                    </span>
                    <span class="text-xs text-muted-foreground ml-2">vs hier</span>
                </div>
            </div>
        </div>
        
        <div class="futuristic-card">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-muted-foreground">Pages vues</p>
                    <h3 class="text-2xl font-bold mt-1">3,842</h3>
                </div>
                <div class="p-3 rounded-lg bg-secondary/20 text-secondary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path></svg>
                </div>
            </div>
            <div class="mt-4">
                <div class="flex items-center">
                    <span class="text-green-500 text-sm flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4 mr-1"><polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline><polyline points="16 7 22 7 22 13"></polyline></svg>
                        12%
                    </span>
                    <span class="text-xs text-muted-foreground ml-2">vs hier</span>
                </div>
            </div>
        </div>
        
        <div class="futuristic-card">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-muted-foreground">Temps moyen</p>
                    <h3 class="text-2xl font-bold mt-1">2m 45s</h3>
                </div>
                <div class="p-3 rounded-lg bg-primary/20 text-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                </div>
            </div>
            <div class="mt-4">
                <div class="flex items-center">
                    <span class="text-red-500 text-sm flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4 mr-1"><polyline points="22 17 13.5 8.5 8.5 13.5 2 7"></polyline><polyline points="16 17 22 17 22 11"></polyline></svg>
                        3%
                    </span>
                    <span class="text-xs text-muted-foreground ml-2">vs hier</span>
                </div>
            </div>
        </div>
        
        <div class="futuristic-card">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-muted-foreground">Taux de rebond</p>
                    <h3 class="text-2xl font-bold mt-1">42.8%</h3>
                </div>
                <div class="p-3 rounded-lg bg-secondary/20 text-secondary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6"><path d="M22 2 11 13"></path><path d="m22 2-7 20-4-9-9-4 20-7z"></path></svg>
                </div>
            </div>
            <div class="mt-4">
                <div class="flex items-center">
                    <span class="text-green-500 text-sm flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4 mr-1"><polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline><polyline points="16 7 22 7 22 13"></polyline></svg>
                        2%
                    </span>
                    <span class="text-xs text-muted-foreground ml-2">vs hier</span>
                </div>
            </div>
        </div>
    </div>
    
    <div class="futuristic-card mt-6">
        <h3 class="text-lg font-semibold mb-6">Visiteurs (30 derniers jours)</h3>
        <div class="h-80">
            <canvas id="visitorsChart"></canvas>
        </div>
    </div>
    
    <div class="grid gap-6 mt-6 md:grid-cols-2">
        <div class="futuristic-card">
            <h3 class="text-lg font-semibold mb-6">Sources de trafic</h3>
            <div class="h-64">
                <canvas id="trafficSourcesChart"></canvas>
            </div>
        </div>
        
        <div class="futuristic-card">
            <h3 class="text-lg font-semibold mb-6">Appareils</h3>
            <div class="h-64">
                <canvas id="devicesChart"></canvas>
            </div>
        </div>
    </div>
    
    <div class="grid gap-6 mt-6 md:grid-cols-2">
        <div class="futuristic-card">
            <h3 class="text-lg font-semibold mb-4">Pages les plus visitées</h3>
            <div class="space-y-4">
                @foreach(['Accueil', 'Services', 'À propos', 'Projets', 'Contact'] as $index => $page)
                    <div class="flex items-center justify-between p-3 border border-primary/20 rounded-lg">
                        <div class="flex items-center">
                            <div class="w-8 h-8 rounded bg-primary/20 flex items-center justify-center mr-3">
                                <span class="text-primary font-bold">{{ $index + 1 }}</span>
                            </div>
                            <div>
                                <h4 class="font-medium">{{ $page }}</h4>
                                <p class="text-xs text-muted-foreground">{{ '/'.strtolower(str_replace('À ', '', $page)) }}</p>
                            </div>
                        </div>
                        <div>
                            <span class="text-lg font-bold">{{ rand(100, 999) }}</span>
                            <span class="text-xs text-muted-foreground">vues</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        
        <div class="futuristic-card">
            <h3 class="text-lg font-semibold mb-4">Pays des visiteurs</h3>
            <div class="space-y-4">
                @foreach(['France', 'États-Unis', 'Canada', 'Belgique', 'Suisse'] as $index => $country)
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="w-8 h-8 rounded bg-secondary/20 flex items-center justify-center mr-3">
                                <span class="text-secondary font-bold">{{ substr($country, 0, 2) }}</span>
                            </div>
                            <span>{{ $country }}</span>
                        </div>
                        <div class="flex items-center">
                            <div class="w-32 h-2 bg-muted rounded-full overflow-hidden">
                                <div class="h-full bg-secondary" style="width: {{ 80 - ($index * 12) }}%"></div>
                            </div>
                            <span class="text-sm ml-3">{{ 80 - ($index * 12) }}%</span>
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
            
            // Devices Chart
            const devicesCtx = document.getElementById('devicesChart').getContext('2d');
            const devicesChart = new Chart(devicesCtx, {
                type: 'pie',
                data: {
                    labels: ['Mobile', 'Desktop', 'Tablet'],
                    datasets: [{
                        data: [58, 32, 10],
                        backgroundColor: [
                            'rgb(147, 51, 234)',
                            'rgb(56, 189, 248)',
                            'rgb(168, 85, 247)'
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
                    }
                }
            });
        });
    </script>
@endsection
