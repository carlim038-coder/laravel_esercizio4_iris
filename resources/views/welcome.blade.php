<x-layout>
    
    {{-- Messaggio flash identico a quello del professore --}}
    @if(session('mailInviata'))
        <div class="alert alert-success alert-dismissible fade show m-3" role="alert">
            {{ session('mailInviata') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="container-fluid my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <!-- Sezione Hero con Video di Sfondo -->
                <div class="position-relative p-5 rounded-3 shadow-lg overflow-hidden text-white bg-dark">
                    
                    <!-- Video in background con overlay scuro -->
                    <video autoplay muted loop playsinline class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover opacity-50 z-0">
                        <source src="{{ asset('videos/matrix.mp4') }}" type="video/mp4">
                    </video>

                    <!-- Contenuto in primo piano -->
                    <div class="position-relative z-1 container-fluid py-5 text-center">
                        <!-- Titolo principale stile Matrix -->
                        <h1 class="display-4 fw-bold" style="color: #00ff66; text-shadow: 0 0 10px rgba(0,255,102,0.5);">
                            Benvenuto nel mio Blog Laravel
                        </h1>
                        <!-- Sottotitolo -->
                        <p class="col-md-8 mx-auto fs-4 mt-3" style="color: #a3ffcc;">
                            Questo è il mio spazio sul web dove racconto il percorso di apprendimento di Laravel, PHP e dello sviluppo frontend con Bootstrap e Vite.
                        </p>
                        <!-- Pulsante -->
                        <div class="mt-4">
                            <a href="{{ route('articles.index') }}" class="btn btn-lg fw-bold shadow" style="background-color: #00ff66; color: #000; border: none;">
                                Esplora gli articoli
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-layout>