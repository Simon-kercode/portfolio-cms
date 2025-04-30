@extends('admin.layouts.app')

@section('title', 'Paramètres du Site')

@section('content')
    <div class="grid gap-6 md:grid-cols-3">
        <div class="md:col-span-1">
            <div class="futuristic-card">
                <h3 class="text-lg font-semibold mb-2">Paramètres</h3>
                <p class="text-sm text-muted-foreground mb-6">Gérez les paramètres généraux de votre site web.</p>
                
                <nav class="space-y-1" x-data="{ active: 'general' }">
                    <button @click="active = 'general'" :class="{ 'bg-primary text-white': active === 'general', 'hover:bg-primary/10': active !== 'general' }" class="flex items-center w-full px-3 py-2 text-sm font-medium rounded-md transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5 mr-3"><path d="M3 9h18v10a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V9Z"></path><path d="m3 9 2.45-4.9A2 2 0 0 1 7.24 3h9.52a2 2 0 0 1 1.8 1.1L21 9"></path><path d="M12 3v6"></path></svg>
                        Général
                    </button>
                    <button @click="active = 'seo'" :class="{ 'bg-primary text-white': active === 'seo', 'hover:bg-primary/10': active !== 'seo' }" class="flex items-center w-full px-3 py-2 text-sm font-medium rounded-md transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5 mr-3"><circle cx="11" cy="11" r="8"></circle><path d="m21 21-4.3-4.3"></path></svg>
                        SEO
                    </button>
                    <button @click="active = 'appearance'" :class="{ 'bg-primary text-white': active === 'appearance', 'hover:bg-primary/10': active !== 'appearance' }" class="flex items-center w-full px-3 py-2 text-sm font-medium rounded-md transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5 mr-3"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1Z"></path></svg>
                        Apparence
                    </button>
                    <button @click="active = 'social'" :class="{ 'bg-primary text-white': active === 'social', 'hover:bg-primary/10': active !== 'social' }" class="flex items-center w-full px-3 py-2 text-sm font-medium rounded-md transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5 mr-3"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" x2="21" y1="14" y2="3"></line></svg>
                        Réseaux sociaux
                    </button>
                    <button @click="active = 'analytics'" :class="{ 'bg-primary text-white': active === 'analytics', 'hover:bg-primary/10': active !== 'analytics' }" class="flex items-center w-full px-3 py-2 text-sm font-medium rounded-md transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5 mr-3"><path d="M3 3v18h18"></path><path d="m19 9-5 5-4-4-3 3"></path></svg>
                        Analytics
                    </button>
                </nav>
            </div>
        </div>
        
        <div class="md:col-span-2" x-data="{ active: 'general' }">
            <div x-show="active === 'general'" class="futuristic-card">
                <h3 class="text-lg font-semibold mb-6">Paramètres généraux</h3>
                
                <form class="space-y-6">
                    <div>
                        <label for="site-title" class="block text-sm font-medium mb-2">Titre du site</label>
                        <input type="text" id="site-title" value="Futura.dev - Développeur Full Stack" class="flex h-10 w-full rounded-md border border-primary/20 bg-background/50 backdrop-blur-sm px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50">
                    </div>
                    
                    <div>
                        <label for="site-description" class="block text-sm font-medium mb-2">Description du site</label>
                        <textarea id="site-description" rows="3" class="flex min-h-[80px] w-full rounded-md border border-primary/20 bg-background/50 backdrop-blur-sm px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50">Portfolio futuriste de développeur full stack présentant projets et compétences</textarea>
                    </div>
                    
                    <div>
                        <label for="site-logo" class="block text-sm font-medium mb-2">Logo du site</label>
                        <div class="flex items-center space-x-4">
                            <div class="w-16 h-16 rounded-md bg-primary/20 flex items-center justify-center">
                                <span class="text-primary font-bold">F</span>
                            </div>
                            <div>
                                <input type="file" id="site-logo" class="hidden">
                                <label for="site-logo" class="btn-futuristic inline-block cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5 mr-2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="17 8 12 3 7 8"></polyline><line x1="12" x2="12" y1="3" y2="15"></line></svg>
                                    Télécharger
                                </label>
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        <label for="site-favicon" class="block text-sm font-medium mb-2">Favicon</label>
                        <div class="flex items-center space-x-4">
                            <div class="w-8 h-8 rounded-md bg-primary/20 flex items-center justify-center">
                                <span class="text-primary font-bold text-xs">F</span>
                            </div>
                            <div>
                                <input type="file" id="site-favicon" class="hidden">
                                <label for="site-favicon" class="btn-futuristic inline-block cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5 mr-2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="17 8 12 3 7 8"></polyline><line x1="12" x2="12" y1="3" y2="15"></line></svg>
                                    Télécharger
                                </label>
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        <label for="site-email" class="block text-sm font-medium mb-2">Email de contact</label>
                        <input type="email" id="site-email" value="contact@futura.dev" class="flex h-10 w-full rounded-md border border-primary/20 bg-background/50 backdrop-blur-sm px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50">
                    </div>
                    
                    <div class="pt-4 border-t border-primary/20">
                        <button type="submit" class="btn-futuristic">
                            Enregistrer les modifications
                        </button>
                    </div>
                </form>
            </div>
            
            <div x-show="active === 'seo'" class="futuristic-card" style="display: none;">
                <h3 class="text-lg font-semibold mb-6">Paramètres SEO</h3>
                
                <form class="space-y-6">
                    <div>
                        <label for="meta-title" class="block text-sm font-medium mb-2">Meta titre</label>
                        <input type="text" id="meta-title" value="Futura.dev | Développeur Full Stack | Services Web Futuristes" class="flex h-10 w-full rounded-md border border-primary/20 bg-background/50 backdrop-blur-sm px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50">
                    </div>
                    
                    <div>
                        <label for="meta-description" class="block text-sm font-medium mb-2">Meta description</label>
                        <textarea id="meta-description" rows="3" class="flex min-h-[80px] w-full rounded-md border border-primary/20 bg-background/50 backdrop-blur-sm px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50">Développeur full stack spécialisé dans la création d'applications web et mobiles futuristes. Services de développement web, e-commerce, et applications sur mesure.</textarea>
                    </div>
                    
                    <div>
                        <label for="meta-keywords" class="block text-sm font-medium mb-2">Meta mots-clés</label>
                        <input type="text" id="meta-keywords" value="développeur, full stack, web, applications, futuriste, services, e-commerce" class="flex h-10 w-full rounded-md border border-primary/20 bg-background/50 backdrop-blur-sm px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50">
                    </div>
                    
                    <div>
                        <label for="canonical-url" class="block text-sm font-medium mb-2">URL canonique</label>
                        <input type="url" id="canonical-url" value="https://futura.dev" class="flex h-10 w-full rounded-md border border-primary/20 bg-background/50 backdrop-blur-sm px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50">
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium mb-2">Indexation par les moteurs de recherche</label>
                        <div class="flex items-center space-x-2">
                            <input type="checkbox" id="allow-indexing" class="rounded border-primary/20 text-primary focus:ring-primary" checked>
                            <label for="allow-indexing" class="text-sm">Autoriser l'indexation du site</label>
                        </div>
                    </div>
                    
                    <div class="pt-4 border-t border-primary/20">
                        <button type="submit" class="btn-futuristic">
                            Enregistrer les modifications
                        </button>
                    </div>
                </form>
            </div>
            
            <div x-show="active === 'appearance'" class="futuristic-card" style="display: none;">
                <h3 class="text-lg font-semibold mb-6">Apparence</h3>
                
                <form class="space-y-6">
                    <div>
                        <label class="block text-sm font-medium mb-4">Thème</label>
                        <div class="grid grid-cols-3 gap-4">
                            <div class="border border-primary rounded-md p-4 flex flex-col items-center cursor-pointer bg-primary/10">
                                <div class="w-full h-24 rounded-md bg-[#0f172a] mb-2 overflow-hidden">
                                    <div class="h-6 bg-[#1e293b]"></div>
                                    <div class="p-2">
                                        <div class="w-1/2 h-2 bg-primary rounded mb-1"></div>
                                        <div class="w-full h-2 bg-[#334155] rounded mb-1"></div>
                                        <div class="w-full h-2 bg-[#334155] rounded"></div>
                                    </div>
                                </div>
                                <span class="text-sm font-medium">Futuriste (actuel)</span>
                            </div>
                            
                            <div class="border border-primary/20 rounded-md p-4 flex flex-col items-center cursor-pointer hover:border-primary/40">
                                <div class="w-full h-24 rounded-md bg-[#18181b] mb-2 overflow-hidden">
                                    <div class="h-6 bg-[#27272a]"></div>
                                    <div class="p-2">
                                        <div class="w-1/2 h-2 bg-[#a855f7] rounded mb-1"></div>
                                        <div class="w-full h-2 bg-[#3f3f46] rounded mb-1"></div>
                                        <div class="w-full h-2 bg-[#3f3f46] rounded"></div>
                                    </div>
                                </div>
                                <span class="text-sm font-medium">Sombre</span>
                            </div>
                            
                            <div class="border border-primary/20 rounded-md p-4 flex flex-col items-center cursor-pointer hover:border-primary/40">
                                <div class="w-full h-24 rounded-md bg-[#f8fafc] mb-2 overflow-hidden">
                                    <div class="h-6 bg-white"></div>
                                    <div class="p-2">
                                        <div class="w-1/2 h-2 bg-[#8b5cf6] rounded mb-1"></div>
                                        <div class="w-full h-2 bg-[#e2e8f0] rounded mb-1"></div>
                                        <div class="w-full h-2 bg-[#e2e8f0] rounded"></div>
                                    </div>
                                </div>
                                <span class="text-sm font-medium">Clair</span>
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium mb-4">Couleurs principales</label>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label for="primary-color" class="block text-sm mb-2">Couleur primaire</label>
                                <div class="flex items-center">
                                    <input type="color" id="primary-color" value="#8b5cf6" class="w-10 h-10 rounded-md border-0 p-0 cursor-pointer">
                                    <input type="text" value="#8b5cf6" class="flex h-10 w-full ml-2 rounded-md border border-primary/20 bg-background/50 backdrop-blur-sm px-3 py-2 text-sm">
                                </div>
                            </div>
                            
                            <div>
                                <label for="secondary-color" class="block text-sm mb-2">Couleur secondaire</label>
                                <div class="flex items-center">
                                    <input type="color" id="secondary-color" value="#22d3ee" class="w-10 h-10 rounded-md border-0 p-0 cursor-pointer">
                                    <input type="text" value="#22d3ee" class="flex h-10 w-full ml-2 rounded-md border border-primary/20 bg-background/50 backdrop-blur-sm px-3 py-2 text-sm">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        <label for="font-family" class="block text-sm font-medium mb-2">Police de caractères</label>
                        <select id="font-family" class="flex h-10 w-full rounded-md border border-primary/20 bg-background/50 backdrop-blur-sm px-3 py-2 text-sm ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary focus-visible:ring-offset-2">
                            <option value="space-grotesk" selected>Space Grotesk</option>
                            <option value="inter">Inter</option>
                            <option value="roboto">Roboto</option>
                            <option value="poppins">Poppins</option>
                        </select>
                    </div>
                    
                    <div class="pt-4 border-t border-primary/20">
                        <button type="submit" class="btn-futuristic">
                            Enregistrer les modifications
                        </button>
                    </div>
                </form>
            </div>
            
            <div x-show="active === 'social'" class="futuristic-card" style="display: none;">
                <h3 class="text-lg font-semibold mb-6">Réseaux sociaux</h3>
                
                <form class="space-y-6">
                    <div>
                        <label for="facebook-url" class="block text-sm font-medium mb-2">Facebook</label>
                        <div class="flex">
                            <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-primary/20 bg-muted text-muted-foreground text-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
                            </span>
                            <input type="url" id="facebook-url" value="https://facebook.com/futura.dev" class="flex h-10 w-full rounded-r-md border border-primary/20 bg-background/50 backdrop-blur-sm px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50">
                        </div>
                    </div>
                    
                    <div>
                        <label for="twitter-url" class="block text-sm font-medium mb-2">Twitter</label>
                        <div class="flex">
                            <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-primary/20 bg-muted text-muted-foreground text-sm">
                                <svg xmlns="http://www.w3.org/

```blade file="resources/views/admin/settings.blade.php" (continued)
@extends('admin.layouts.app')

@section('title', 'Paramètres du Site')

@section('content')
    <div class="grid gap-6 md:grid-cols-3">
        <div class="md:col-span-1">
            <div class="futuristic-card">
                <h3 class="text-lg font-semibold mb-2">Paramètres</h3>
                <p class="text-sm text-muted-foreground mb-6">Gérez les paramètres généraux de votre site web.</p>
                
                <nav class="space-y-1" x-data="{ active: 'general' }">
                    <button @click="active = 'general'" :class="{ 'bg-primary text-white': active === 'general', 'hover:bg-primary/10': active !== 'general' }" class="flex items-center w-full px-3 py-2 text-sm font-medium rounded-md transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5 mr-3"><path d="M3 9h18v10a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V9Z"></path><path d="m3 9 2.45-4.9A2 2 0 0 1 7.24 3h9.52a2 2 0 0 1 1.8 1.1L21 9"></path><path d="M12 3v6"></path></svg>
                        Général
                    </button>
                    <button @click="active = 'seo'" :class="{ 'bg-primary text-white': active === 'seo', 'hover:bg-primary/10': active !== 'seo' }" class="flex items-center w-full px-3 py-2 text-sm font-medium rounded-md transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5 mr-3"><circle cx="11" cy="11" r="8"></circle><path d="m21 21-4.3-4.3"></path></svg>
                        SEO
                    </button>
                    <button @click="active = 'appearance'" :class="{ 'bg-primary text-white': active === 'appearance', 'hover:bg-primary/10': active !== 'appearance' }" class="flex items-center w-full px-3 py-2 text-sm font-medium rounded-md transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5 mr-3"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1Z"></path></svg>
                        Apparence
                    </button>
                    <button @click="active = 'social'" :class="{ 'bg-primary text-white': active === 'social', 'hover:bg-primary/10': active !== 'social' }" class="flex items-center w-full px-3 py-2 text-sm font-medium rounded-md transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5 mr-3"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" x2="21" y1="14" y2="3"></line></svg>
                        Réseaux sociaux
                    </button>
                    <button @click="active = 'analytics'" :class="{ 'bg-primary text-white': active === 'analytics', 'hover:bg-primary/10': active !== 'analytics' }" class="flex items-center w-full px-3 py-2 text-sm font-medium rounded-md transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5 mr-3"><path d="M3 3v18h18"></path><path d="m19 9-5 5-4-4-3 3"></path></svg>
                        Analytics
                    </button>
                </nav>
            </div>
        </div>
        
        <div class="md:col-span-2" x-data="{ active: 'general' }">
            <div x-show="active === 'general'" class="futuristic-card">
                <h3 class="text-lg font-semibold mb-6">Paramètres généraux</h3>
                
                <form class="space-y-6">
                    <div>
                        <label for="site-title" class="block text-sm font-medium mb-2">Titre du site</label>
                        <input type="text" id="site-title" value="Futura.dev - Développeur Full Stack" class="flex h-10 w-full rounded-md border border-primary/20 bg-background/50 backdrop-blur-sm px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50">
                    </div>
                    
                    <div>
                        <label for="site-description" class="block text-sm font-medium mb-2">Description du site</label>
                        <textarea id="site-description" rows="3" class="flex min-h-[80px] w-full rounded-md border border-primary/20 bg-background/50 backdrop-blur-sm px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50">Portfolio futuriste de développeur full stack présentant projets et compétences</textarea>
                    </div>
                    
                    <div>
                        <label for="site-logo" class="block text-sm font-medium mb-2">Logo du site</label>
                        <div class="flex items-center space-x-4">
                            <div class="w-16 h-16 rounded-md bg-primary/20 flex items-center justify-center">
                                <span class="text-primary font-bold">F</span>
                            </div>
                            <div>
                                <input type="file" id="site-logo" class="hidden">
                                <label for="site-logo" class="btn-futuristic inline-block cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5 mr-2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="17 8 12 3 7 8"></polyline><line x1="12" x2="12" y1="3" y2="15"></line></svg>
                                    Télécharger
                                </label>
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        <label for="site-favicon" class="block text-sm font-medium mb-2">Favicon</label>
                        <div class="flex items-center space-x-4">
                            <div class="w-8 h-8 rounded-md bg-primary/20 flex items-center justify-center">
                                <span class="text-primary font-bold text-xs">F</span>
                            </div>
                            <div>
                                <input type="file" id="site-favicon" class="hidden">
                                <label for="site-favicon" class="btn-futuristic inline-block cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5 mr-2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="17 8 12 3 7 8"></polyline><line x1="12" x2="12" y1="3" y2="15"></line></svg>
                                    Télécharger
                                </label>
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        <label for="site-email" class="block text-sm font-medium mb-2">Email de contact</label>
                        <input type="email" id="site-email" value="contact@futura.dev" class="flex h-10 w-full rounded-md border border-primary/20 bg-background/50 backdrop-blur-sm px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50">
                    </div>
                    
                    <div class="pt-4 border-t border-primary/20">
                        <button type="submit" class="btn-futuristic">
                            Enregistrer les modifications
                        </button>
                    </div>
                </form>
            </div>
            
            <div x-show="active === 'seo'" class="futuristic-card" style="display: none;">
                <h3 class="text-lg font-semibold mb-6">Paramètres SEO</h3>
                
                <form class="space-y-6">
                    <div>
                        <label for="meta-title" class="block text-sm font-medium mb-2">Meta titre</label>
                        <input type="text" id="meta-title" value="Futura.dev | Développeur Full Stack | Services Web Futuristes" class="flex h-10 w-full rounded-md border border-primary/20 bg-background/50 backdrop-blur-sm px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50">
                    </div>
                    
                    <div>
                        <label for="meta-description" class="block text-sm font-medium mb-2">Meta description</label>
                        <textarea id="meta-description" rows="3" class="flex min-h-[80px] w-full rounded-md border border-primary/20 bg-background/50 backdrop-blur-sm px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50">Développeur full stack spécialisé dans la création d'applications web et mobiles futuristes. Services de développement web, e-commerce, et applications sur mesure.</textarea>
                    </div>
                    
                    <div>
                        <label for="meta-keywords" class="block text-sm font-medium mb-2">Meta mots-clés</label>
                        <input type="text" id="meta-keywords" value="développeur, full stack, web, applications, futuriste, services, e-commerce" class="flex h-10 w-full rounded-md border border-primary/20 bg-background/50 backdrop-blur-sm px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50">
                    </div>
                    
                    <div>
                        <label for="canonical-url" class="block text-sm font-medium mb-2">URL canonique</label>
                        <input type="url" id="canonical-url" value="https://futura.dev" class="flex h-10 w-full rounded-md border border-primary/20 bg-background/50 backdrop-blur-sm px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50">
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium mb-2">Indexation par les moteurs de recherche</label>
                        <div class="flex items-center space-x-2">
                            <input type="checkbox" id="allow-indexing" class="rounded border-primary/20 text-primary focus:ring-primary" checked>
                            <label for="allow-indexing" class="text-sm">Autoriser l'indexation du site</label>
                        </div>
                    </div>
                    
                    <div class="pt-4 border-t border-primary/20">
                        <button type="submit" class="btn-futuristic">
                            Enregistrer les modifications
                        </button>
                    </div>
                </form>
            </div>
            
            <div x-show="active === 'appearance'" class="futuristic-card" style="display: none;">
                <h3 class="text-lg font-semibold mb-6">Apparence</h3>
                
                <form class="space-y-6">
                    <div>
                        <label class="block text-sm font-medium mb-4">Thème</label>
                        <div class="grid grid-cols-3 gap-4">
                            <div class="border border-primary rounded-md p-4 flex flex-col items-center cursor-pointer bg-primary/10">
                                <div class="w-full h-24 rounded-md bg-[#0f172a] mb-2 overflow-hidden">
                                    <div class="h-6 bg-[#1e293b]"></div>
                                    <div class="p-2">
                                        <div class="w-1/2 h-2 bg-primary rounded mb-1"></div>
                                        <div class="w-full h-2 bg-[#334155] rounded mb-1"></div>
                                        <div class="w-full h-2 bg-[#334155] rounded"></div>
                                    </div>
                                </div>
                                <span class="text-sm font-medium">Futuriste (actuel)</span>
                            </div>
                            
                            <div class="border border-primary/20 rounded-md p-4 flex flex-col items-center cursor-pointer hover:border-primary/40">
                                <div class="w-full h-24 rounded-md bg-[#18181b] mb-2 overflow-hidden">
                                    <div class="h-6 bg-[#27272a]"></div>
                                    <div class="p-2">
                                        <div class="w-1/2 h-2 bg-[#a855f7] rounded mb-1"></div>
                                        <div class="w-full h-2 bg-[#3f3f46] rounded mb-1"></div>
                                        <div class="w-full h-2 bg-[#3f3f46] rounded"></div>
                                    </div>
                                </div>
                                <span class="text-sm font-medium">Sombre</span>
                            </div>
                            
                            <div class="border border-primary/20 rounded-md p-4 flex flex-col items-center cursor-pointer hover:border-primary/40">
                                <div class="w-full h-24 rounded-md bg-[#f8fafc] mb-2 overflow-hidden">
                                    <div class="h-6 bg-white"></div>
                                    <div class="p-2">
                                        <div class="w-1/2 h-2 bg-[#8b5cf6] rounded mb-1"></div>
                                        <div class="w-full h-2 bg-[#e2e8f0] rounded mb-1"></div>
                                        <div class="w-full h-2 bg-[#e2e8f0] rounded"></div>
                                    </div>
                                </div>
                                <span class="text-sm font-medium">Clair</span>
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium mb-4">Couleurs principales</label>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label for="primary-color" class="block text-sm mb-2">Couleur primaire</label>
                                <div class="flex items-center">
                                    <input type="color" id="primary-color" value="#8b5cf6" class="w-10 h-10 rounded-md border-0 p-0 cursor-pointer">
                                    <input type="text" value="#8b5cf6" class="flex h-10 w-full ml-2 rounded-md border border-primary/20 bg-background/50 backdrop-blur-sm px-3 py-2 text-sm">
                                </div>
                            </div>
                            
                            <div>
                                <label for="secondary-color" class="block text-sm mb-2">Couleur secondaire</label>
                                <div class="flex items-center">
                                    <input type="color" id="secondary-color" value="#22d3ee" class="w-10 h-10 rounded-md border-0 p-0 cursor-pointer">
                                    <input type="text" value="#22d3ee" class="flex h-10 w-full ml-2 rounded-md border border-primary/20 bg-background/50 backdrop-blur-sm px-3 py-2 text-sm">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        <label for="font-family" class="block text-sm font-medium mb-2">Police de caractères</label>
                        <select id="font-family" class="flex h-10 w-full rounded-md border border-primary/20 bg-background/50 backdrop-blur-sm px-3 py-2 text-sm ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary focus-visible:ring-offset-2">
                            <option value="space-grotesk" selected>Space Grotesk</option>
                            <option value="inter">Inter</option>
                            <option value="roboto">Roboto</option>
                            <option value="poppins">Poppins</option>
                        </select>
                    </div>
                    
                    <div class="pt-4 border-t border-primary/20">
                        <button type="submit" class="btn-futuristic">
                            Enregistrer les modifications
                        </button>
                    </div>
                </form>
            </div>
            
            <div x-show="active === 'social'" class="futuristic-card" style="display: none;">
                <h3 class="text-lg font-semibold mb-6">Réseaux sociaux</h3>
                
                <form class="space-y-6">
                    <div>
                        <label for="facebook-url" class="block text-sm font-medium mb-2">Facebook</label>
                        <div class="flex">
                            <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-primary/20 bg-muted text-muted-foreground text-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
                            </span>
                            <input type="url" id="facebook-url" value="https://facebook.com/futura.dev" class="flex h-10 w-full rounded-r-md border border-primary/20 bg-background/50 backdrop-blur-sm px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50">
                        </div>
                    </div>
                    
                    <div>
                        <label for="twitter-url" class="block text-sm font-medium mb-2">Twitter</label>
                        <div class="flex">
                            <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-primary/20 bg-muted text-muted-foreground text-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5"><path d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z"></path></svg>
                            </span>
                            <input type="url" id="twitter-url" value="https://twitter.com/futura_dev" class="flex h-10 w-full rounded-r-md border border-primary/20 bg-background/50 backdrop-blur-sm px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50">
                        </div>
                    </div>
                    
                    <div>
                        <label for="linkedin-url" class="block text-sm font-medium mb-2">LinkedIn</label>
                        <div class="flex">
                            <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-primary/20 bg-muted text-muted-foreground text-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect width="4" height="12" x="2" y="9"></rect><circle cx="4" cy="4" r="2"></circle></svg>
                            </span>
                            <input type="url" id="linkedin-url" value="https://linkedin.com/company/futura-dev" class="flex h-10 w-full rounded-r-md border border-primary/20 bg-background/50 backdrop-blur-sm px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50">
                        </div>
                    </div>
                    
                    <div>
                        <label for="github-url" class="block text-sm font-medium mb-2">GitHub</label>
                        <div class="flex">
                            <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-primary/20 bg-muted text-muted-foreground text-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5"><path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"></path><path d="M9 18c-4.51 2-5-2-7-2"></path></svg>
                            </span>
                            <input type="url" id="github-url" value="https://github.com/futura-dev" class="flex h-10 w-full rounded-r-md border border-primary/20 bg-background/50 backdrop-blur-sm px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50">
                        </div>
                    </div>
                    
                    <div>

```blade file="resources/views/admin/settings.blade.php" (continued)
                        <label for="instagram-url" class="block text-sm font-medium mb-2">Instagram</label>
                        <div class="flex">
                            <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-primary/20 bg-muted text-muted-foreground text-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line></svg>
                            </span>
                            <input type="url" id="instagram-url" value="https://instagram.com/futura.dev" class="flex h-10 w-full rounded-r-md border border-primary/20 bg-background/50 backdrop-blur-sm px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50">
                        </div>
                    </div>
                    
                    <div class="pt-4 border-t border-primary/20">
                        <button type="submit" class="btn-futuristic">
                            Enregistrer les modifications
                        </button>
                    </div>
                </form>
            </div>
            
            <div x-show="active === 'analytics'" class="futuristic-card" style="display: none;">
                <h3 class="text-lg font-semibold mb-6">Paramètres Analytics</h3>
                
                <form class="space-y-6">
                    <div>
                        <label for="google-analytics" class="block text-sm font-medium mb-2">Google Analytics ID</label>
                        <input type="text" id="google-analytics" value="G-XXXXXXXXXX" class="flex h-10 w-full rounded-md border border-primary/20 bg-background/50 backdrop-blur-sm px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50">
                    </div>
                    
                    <div>
                        <label for="google-tag-manager" class="block text-sm font-medium mb-2">Google Tag Manager ID</label>
                        <input type="text" id="google-tag-manager" value="GTM-XXXXXXX" class="flex h-10 w-full rounded-md border border-primary/20 bg-background/50 backdrop-blur-sm px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50">
                    </div>
                    
                    <div>
                        <label for="facebook-pixel" class="block text-sm font-medium mb-2">Facebook Pixel ID</label>
                        <input type="text" id="facebook-pixel" value="XXXXXXXXXXXXXXXXXX" class="flex h-10 w-full rounded-md border border-primary/20 bg-background/50 backdrop-blur-sm px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50">
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium mb-2">Consentement aux cookies</label>
                        <div class="flex items-center space-x-2">
                            <input type="checkbox" id="cookie-consent" class="rounded border-primary/20 text-primary focus:ring-primary" checked>
                            <label for="cookie-consent" class="text-sm">Activer la bannière de consentement aux cookies</label>
                        </div>
                    </div>
                    
                    <div>
                        <label for="cookie-message" class="block text-sm font-medium mb-2">Message de consentement</label>
                        <textarea id="cookie-message" rows="3" class="flex min-h-[80px] w-full rounded-md border border-primary/20 bg-background/50 backdrop-blur-sm px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50">Ce site utilise des cookies pour améliorer votre expérience. En continuant à naviguer sur ce site, vous acceptez notre utilisation des cookies.</textarea>
                    </div>
                    
                    <div class="pt-4 border-t border-primary/20">
                        <button type="submit" class="btn-futuristic">
                            Enregistrer les modifications
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
