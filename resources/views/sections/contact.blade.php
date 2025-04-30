<section id="contact" class="py-16 md:py-24 lg:py-32 relative">
    <div class="container px-4 md:px-6">
        <div class="mx-auto max-w-2xl">
            <h2 class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl mb-16 text-center gradient-text">
                Me Contacter
            </h2>
            <div class="futuristic-card">
                <form action="" method="POST" class="space-y-6">
                    @csrf
                    <div>
                        <label for="name" class="block text-sm font-medium mb-2 text-foreground/80">
                            Nom
                        </label>
                        <input id="name" name="name" required class="flex h-12 w-full rounded-md border border-primary/20 bg-background/50 backdrop-blur-sm px-4 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium mb-2 text-foreground/80">
                            Email
                        </label>
                        <input id="email" name="email" type="email" required class="flex h-12 w-full rounded-md border border-primary/20 bg-background/50 backdrop-blur-sm px-4 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50">
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-medium mb-2 text-foreground/80">
                            Message
                        </label>
                        <textarea id="message" name="message" required class="flex min-h-[120px] w-full rounded-md border border-primary/20 bg-background/50 backdrop-blur-sm px-4 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"></textarea>
                    </div>
                    <button type="submit" class="btn-futuristic w-full">
                        Envoyer le Message
                    </button>
                    @if(session('message'))
                        <p class="text-sm text-center mt-4 text-secondary">{{ session('message') }}</p>
                    @endif
                </form>
            </div>
        </div>
    </div>
    
    <!-- Decorative elements -->
    <div class="absolute top-1/4 right-1/4 w-36 h-36 rounded-full bg-primary/10 blur-3xl"></div>
    <div class="absolute bottom-1/4 left-1/4 w-28 h-28 rounded-full bg-secondary/10 blur-3xl"></div>
</section>
