<div class="futuristic-card group">
    <div class="relative aspect-video overflow-hidden rounded-md mb-4">
        <img 
            src="{{ $image }}" 
            alt="{{ $title }}" 
            class="object-cover w-full h-full transition-transform duration-500 group-hover:scale-110"
        >
        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
            <div class="p-4 w-full">
                <a href="{{ $link }}" target="_blank" class="inline-flex items-center gap-2 text-sm text-white hover:text-primary transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4"><path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"></path><path d="M9 18c-4.51 2-5-2-7-2"></path></svg>
                    Voir sur GitHub
                </a>
            </div>
        </div>
    </div>
    <h3 class="font-semibold text-xl mb-2 gradient-text">{{ $title }}</h3>
    <p class="text-sm text-muted-foreground mb-4">{{ $description }}</p>
    <div class="flex flex-wrap gap-2">
        @foreach($tags as $tag)
            <span class="inline-flex items-center rounded-md bg-primary/10 px-3 py-1 text-xs font-medium text-primary border border-primary/20">
                {{ $tag }}
            </span>
        @endforeach
    </div>
</div>
