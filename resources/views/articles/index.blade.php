<x-layout>
    <div class="container my-5">
        <h1 class="fw-bold mb-4" style="color: #00b347;">Tutti gli Articoli</h1>

        <div class="row">
            @foreach ($articles as $article)
                <div class="col-md-4 mb-4">
                    <!-- Aggiungiamo un bordo sottile in tinta Matrix alla card -->
                    <div class="card shadow-sm h-100 border-success">
                        <div class="card-body d-flex flex-column">
                            <span class="badge bg-secondary mb-2 align-self-start">{{ $article['category'] }}</span>
                            
                            <!-- Titolo dell'articolo con un verde scuro elegante -->
                            <h5 class="card-title fw-bold" style="color: #00802b;">{{ $article['title'] }}</h5>
                            
                            <p class="card-text text-muted flex-grow-1">
                                {{ Str::limit($article['content'], 80) }}
                            </p>
                            
                            <!-- Pulsante con un tocco coordinato -->
                            <a href="{{ route('articles.show', ['id' => $article['id']]) }}" class="btn btn-outline-success mt-3">Leggi di più</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>