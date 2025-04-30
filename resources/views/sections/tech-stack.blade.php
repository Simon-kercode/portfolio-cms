<section class="py-16 md:py-24 lg:py-32 relative">
    <div class="container px-4 md:px-6">
        <h2 class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl mb-16 text-center gradient-text">
            Compétences Techniques
        </h2>
        <div class="grid gap-8 md:grid-cols-2">
            <div class="futuristic-card">
                <h3 class="text-xl font-semibold mb-6 gradient-text">Frontend</h3>
                <div class="flex flex-wrap gap-3">
                    @foreach(['HTML/CSS', 'JavaScript', 'Vue.js', 'Alpine.js', 'TailwindCSS', 'Bootstrap'] as $skill)
                        <span class="inline-flex items-center rounded-md bg-primary/10 px-3 py-1.5 text-sm font-medium text-primary border border-primary/20 hover:bg-primary/20 transition-colors">
                            {{ $skill }}
                        </span>
                    @endforeach
                </div>
            </div>
            
            <div class="futuristic-card">
                <h3 class="text-xl font-semibold mb-6 gradient-text">Backend</h3>
                <div class="flex flex-wrap gap-3">
                    @foreach(['PHP', 'Laravel', 'MySQL', 'API RESTful', 'Redis', 'Nginx'] as $skill)
                        <span class="inline-flex items-center rounded-md bg-primary/10 px-3 py-1.5 text-sm font-medium text-primary border border-primary/20 hover:bg-primary/20 transition-colors">
                            {{ $skill }}
                        </span>
                    @endforeach
                </div>
            </div>
            
            <div class="futuristic-card">
                <h3 class="text-xl font-semibold mb-6 gradient-text">DevOps</h3>
                <div class="flex flex-wrap gap-3">
                    @foreach(['Docker', 'AWS', 'CI/CD', 'Git', 'Linux', 'Forge/Envoyer'] as $skill)
                        <span class="inline-flex items-center rounded-md bg-primary/10 px-3 py-1.5 text-sm font-medium text-primary border border-primary/20 hover:bg-primary/20 transition-colors">
                            {{ $skill }}
                        </span>
                    @endforeach
                </div>
            </div>
            
            <div class="futuristic-card">
                <h3 class="text-xl font-semibold mb-6 gradient-text">Outils</h3>
                <div class="flex flex-wrap gap-3">
                    @foreach(['VS Code', 'PhpStorm', 'Figma', 'PHPUnit', 'GitHub', 'Jira'] as $skill)
                        <span class="inline-flex items-center rounded-md bg-primary/10 px-3 py-1.5 text-sm font-medium text-primary border border-primary/20 hover:bg-primary/20 transition-colors">
                            {{ $skill }}
                        </span>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    
    <!-- Decorative elements -->
    <div class="absolute top-1/4 left-1/4 w-28 h-28 rounded-full bg-primary/10 blur-3xl"></div>
    <div class="absolute bottom-1/4 right-1/4 w-40 h-40 rounded-full bg-secondary/10 blur-3xl"></div>
</section>
