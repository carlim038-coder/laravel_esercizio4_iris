<x-layout>
    <div class="container my-5">
        
        <!-- Pulsante Torna Indietro in stile verde Matrix -->
        <div class="mb-4">
            <a href="{{ route('articles.index') }}" class="btn btn-outline-success">
                &larr; Torna agli articoli
            </a>
        </div>

        <div class="card shadow-sm border-success p-4">
            <div class="card-body">
                <!-- Badge della categoria in verde (al posto del blu bg-primary) -->
                <span class="badge mb-3 px-3 py-2" style="background-color: #00b347; color: #fff;">
                    {{ $article['category'] }}
                </span>

                <!-- Titolo dell'articolo in verde Matrix scuro -->
                <h1 class="fw-bold display-5 mb-4" style="color: #00802b;">
                    {{ $article['title'] }}
                </h1>

                <!-- Contenuto completo dell'articolo -->
                <div class="fs-5 text-secondary" style="line-height: 1.8;">
                    {{ $article['content'] }}
                </div>
            </div>
        </div>

    </div>
</x-layout>