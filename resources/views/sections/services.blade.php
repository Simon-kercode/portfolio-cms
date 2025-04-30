<section id="services" class="py-16 md:py-24 lg:py-32 relative">
    <div class="container px-4 md:px-6">
        <h2 class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl mb-16 text-center gradient-text">
            Mes Services
        </h2>
        
        <div class="max-w-3xl mx-auto mb-20">
            <div class="futuristic-card" x-data="priceCalculator()">
                <h3 class="text-2xl font-semibold mb-8 text-center gradient-text">Calculateur de Prix Estimatif</h3>
                
                <div class="space-y-8">
                    <div class="space-y-4">
                        <template x-for="(service, index) in services" :key="index">
                            <div class="flex items-center justify-between p-5 border border-primary/20 rounded-lg bg-card/50 backdrop-blur-sm hover:border-primary/40 transition-all">
                                <div>
                                    <h4 class="font-medium text-lg" x-text="service.name"></h4>
                                    <p class="text-sm text-muted-foreground" x-text="service.description"></p>
                                </div>
                                <div class="flex items-center space-x-6">
                                    <span class="font-medium text-lg text-secondary" x-text="formatPrice(service.price)"></span>
                                    <label class="relative inline-flex items-center cursor-pointer">
                                        <input type="checkbox" x-model="service.selected" class="sr-only peer">
                                        <div class="w-14 h-7 bg-muted peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-primary/20 rounded-full peer dark:bg-muted peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-6 after:w-6 after:transition-all dark:border-gray-600 peer-checked:bg-primary"></div>
                                    </label>
                                </div>
                            </div>
                        </template>
                    </div>
                    
                    <div class="pt-6 border-t border-primary/20">
                        <div class="flex justify-between items-center">
                            <span class="text-xl font-semibold">Total estimé:</span>
                            <span class="text-2xl font-bold gradient-text" x-text="formatPrice(totalPrice)"></span>
                        </div>
                        <p class="text-sm text-muted-foreground mt-3">
                            * Ce prix est une estimation. Le coût final peut varier en fonction des spécificités de votre projet.
                        </p>
                    </div>
                    
                    <div class="flex justify-center">
                        <a href="#contact" class="btn-futuristic">
                            Demander un devis personnalisé
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
            <div class="futuristic-card group hover:border-primary/50">
                <div class="flex items-center gap-3 mb-5">
                    <div class="p-3 rounded-lg bg-primary/20 text-primary group-hover:bg-primary/30 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6"><rect width="18" height="18" x="3" y="3" rx="2" ry="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><path d="M20.4 14.5 16 10 4 20"></path></svg>
                    </div>
                    <h3 class="font-semibold text-xl gradient-text">Développement Web</h3>
                </div>
                <p class="text-muted-foreground">Création de sites web et d'applications web sur mesure avec Laravel, optimisés pour les performances et le référencement.</p>
            </div>
            
            <div class="futuristic-card group hover:border-primary/50">
                <div class="flex items-center gap-3 mb-5">
                    <div class="p-3 rounded-lg bg-primary/20 text-primary group-hover:bg-primary/30 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                    </div>
                    <h3 class="font-semibold text-xl gradient-text">E-commerce</h3>
                </div>
                <p class="text-muted-foreground">Développement de boutiques en ligne personnalisées avec gestion des produits, paiements sécurisés et expérience utilisateur optimisée.</p>
            </div>
            
            <div class="futuristic-card group hover:border-primary/50">
                <div class="flex items-center gap-3 mb-5">
                    <div class="p-3 rounded-lg bg-primary/20 text-primary group-hover:bg-primary/30 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6"><path d="M12 20.94c1.5 0 2.75 1.06 4 1.06 3 0 6-8 6-12.22A4.91 4.91 0 0 0 17 5c-2.22 0-4 1.44-5 2-1-.56-2.78-2-5-2a4.9 4.9 0 0 0-5 4.78C2 14 5 22 8 22c1.25 0 2.5-1.06 4-1.06Z"></path><path d="M10 2c1 .5 2 2 2 5"></path></svg>
                    </div>
                    <h3 class="font-semibold text-xl gradient-text">Applications Mobiles</h3>
                </div>
                <p class="text-muted-foreground">Développement d'applications mobiles hybrides avec Laravel comme backend et interfaces utilisateur réactives.</p>
            </div>
            
            <div class="futuristic-card group hover:border-primary/50">
                <div class="flex items-center gap-3 mb-5">
                    <div class="p-3 rounded-lg bg-primary/20 text-primary group-hover:bg-primary/30 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6"><path d="M21 12V7H5a2 2 0 0 1 0-4h14v4"></path><path d="M3 5v14a2 2 0 0 0 2 2h16v-5"></path><path d="M18 12a2 2 0 0 0 0 4h4v-4Z"></path></svg>
                    </div>
                    <h3 class="font-semibold text-xl gradient-text">API & Intégrations</h3>
                </div>
                <p class="text-muted-foreground">Développement d'API RESTful et intégration avec des services tiers pour étendre les fonctionnalités de votre application.</p>
            </div>
            
            <div class="futuristic-card group hover:border-primary/50">
                <div class="flex items-center gap-3 mb-5">
                    <div class="p-3 rounded-lg bg-primary/20 text-primary group-hover:bg-primary/30 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6"><path d="M12 2H2v10h10V2Z"></path><path d="M22 12h-8v10h8V12Z"></path><path d="M12 12H2v10h10V12Z"></path><path d="M22 2h-8v6h8V2Z"></path></svg>
                    </div>
                    <h3 class="font-semibold text-xl gradient-text">Maintenance & Support</h3>
                </div>
                <p class="text-muted-foreground">Services de maintenance, mises à jour et support technique pour garantir le bon fonctionnement de vos applications Laravel.</p>
            </div>
            
            <div class="futuristic-card group hover:border-primary/50">
                <div class="flex items-center gap-3 mb-5">
                    <div class="p-3 rounded-lg bg-primary/20 text-primary group-hover:bg-primary/30 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path></svg>
                    </div>
                    <h3 class="font-semibold text-xl gradient-text">Formation</h3>
                </div>
                <p class="text-muted-foreground">Formation et accompagnement pour vous aider à maîtriser votre application Laravel et à la gérer efficacement.</p>
            </div>
        </div>
    </div>
    
    <!-- Decorative elements -->
    <div class="absolute top-1/3 left-10 w-32 h-32 rounded-full bg-primary/10 blur-3xl"></div>
    <div class="absolute bottom-1/3 right-10 w-40 h-40 rounded-full bg-secondary/10 blur-3xl"></div>
</section>
