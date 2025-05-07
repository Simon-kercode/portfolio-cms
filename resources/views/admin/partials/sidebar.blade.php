<aside class="fixed inset-y-0 left-0 z-50 w-64 bg-card border-r border-primary/20 transition-all duration-300 transform"
:class="{'translate-x-0 lg:translate-x-0 lg:w-64': sidebarOpen,'-translate-x-full lg:translate-x-0 lg:w-20': !sidebarOpen}">
    
    <div class="flex items-center justify-between h-16 px-4 border-b border-primary/20">
        <div class="flex items-center">
            <div class="p-2 rounded-md bg-primary/20 text-primary mr-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5"><path d="M3 9h18v10a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V9Z"></path><path d="m3 9 2.45-4.9A2 2 0 0 1 7.24 3h9.52a2 2 0 0 1 1.8 1.1L21 9"></path><path d="M12 3v6"></path></svg>
            </div>
            <h1 class="text-lg font-bold gradient-text" x-show="sidebarOpen">FUTURA.ADMIN</h1>
        </div>
        <button @click="sidebarOpen = !sidebarOpen" class="p-1 rounded-md hover:bg-primary/10 focus:outline-none focus:ring-2 focus:ring-primary/30">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5"><path d="m15 18-6-6 6-6"></path></svg>
        </button>
    </div>
    
    <nav class="p-4 space-y-2">
        <a href="{{ route('admin.dashboard') }}" class="flex items-center px-3 py-2.5 rounded-md transition-all duration-200 {{ request()->routeIs('admin.dashboard') ? 'bg-primary text-white' : 'hover:bg-primary/10' }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5"><rect width="7" height="9" x="3" y="3" rx="1"></rect><rect width="7" height="5" x="14" y="3" rx="1"></rect><rect width="7" height="9" x="14" y="12" rx="1"></rect><rect width="7" height="5" x="3" y="16" rx="1"></rect></svg>
            <span class="ml-3" x-show="sidebarOpen">Tableau de bord</span>
        </a>
        
        <a href="{{ route('admin.projects') }}" class="flex items-center px-3 py-2.5 rounded-md transition-all duration-200 {{ request()->routeIs('admin.projects') ? 'bg-primary text-white' : 'hover:bg-primary/10' }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path></svg>
            <span class="ml-3" x-show="sidebarOpen">Projets</span>
        </a>
        
        <a href="{{ route('admin.services') }}" class="flex items-center px-3 py-2.5 rounded-md transition-all duration-200 {{ request()->routeIs('admin.services') ? 'bg-primary text-white' : 'hover:bg-primary/10' }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><path d="M12 17h.01"></path></svg>
            <span class="ml-3" x-show="sidebarOpen">Services</span>
        </a>
        
        <a href="{{ route('admin.statistics') }}" class="flex items-center px-3 py-2.5 rounded-md transition-all duration-200 {{ request()->routeIs('admin.statistics') ? 'bg-primary text-white' : 'hover:bg-primary/10' }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5"><path d="M3 3v18h18"></path><path d="m19 9-5 5-4-4-3 3"></path></svg>
            <span class="ml-3" x-show="sidebarOpen">Statistiques</span>
        </a>
        
        <a href="{{ route('admin.settings') }}" class="flex items-center px-3 py-2.5 rounded-md transition-all duration-200 {{ request()->routeIs('admin.settings') ? 'bg-primary text-white' : 'hover:bg-primary/10' }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5"><path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z"></path><circle cx="12" cy="12" r="3"></circle></svg>
            <span class="ml-3" x-show="sidebarOpen">Paramètres</span>
        </a>
    </nav>
    
    <div class="absolute bottom-0 left-0 right-0 p-4 border-t border-primary/20">
        <a href="{{ route('admin.profile') }}" class="flex items-center px-3 py-2.5 rounded-md transition-all duration-200 hover:bg-primary/10">
            <div class="relative">
                <img src="https://ui-avatars.com/api/?name=Admin&background=8B5CF6&color=fff" alt="Admin" class="w-8 h-8 rounded-full">
                <div class="absolute bottom-0 right-0 w-2.5 h-2.5 bg-green-500 rounded-full border-2 border-card"></div>
            </div>
            <div class="ml-3" x-show="sidebarOpen">
                <p class="text-sm font-medium">Admin</p>
                <p class="text-xs text-muted-foreground">admin@futura.dev</p>
            </div>
        </a>
    </div>
</aside>
