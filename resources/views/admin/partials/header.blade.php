<header class="sticky top-0 z-40 flex items-center justify-between h-16 px-4 md:px-6 border-b border-primary/20 bg-background/80 backdrop-blur-lg">
    <div class="flex items-center">
        <button @click="sidebarOpen = !sidebarOpen" class="p-2 mr-4 rounded-md lg:hidden hover:bg-primary/10 focus:outline-none focus:ring-2 focus:ring-primary/30">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5"><line x1="4" x2="20" y1="12" y2="12"></line><line x1="4" x2="20" y1="6" y2="6"></line><line x1="4" x2="20" y1="18" y2="18"></line></svg>
        </button>
        
        <h1 class="text-xl font-bold">@yield('title', 'Tableau de bord')</h1>
    </div>
    
    <div class="flex items-center space-x-4">
        <div class="relative">
            <button class="p-2 rounded-md hover:bg-primary/10 focus:outline-none focus:ring-2 focus:ring-primary/30">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5"><path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9"></path><path d="M10.3 21a1.94 1.94 0 0 0 3.4 0"></path></svg>
                <span class="absolute top-1 right-1 w-2 h-2 bg-red-500 rounded-full"></span>
            </button>
        </div>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="p-2 rounded-md hover:bg-primary/10 focus:outline-none focus:ring-2 focus:ring-primary/30" title="Se déconnecter">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5">
                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                    <polyline points="16 17 21 12 16 7"></polyline>
                    <line x1="21" x2="9" y1="12" y2="12"></line>
                </svg>
            </button>
        </form>
        <a href="{{ route('home') }}" target="_blank" class="p-2 rounded-md hover:bg-primary/10 focus:outline-none focus:ring-2 focus:ring-primary/30" title="Voir le site">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" x2="21" y1="14" y2="3"></line></svg>
        </a>
    </div>
</header>
