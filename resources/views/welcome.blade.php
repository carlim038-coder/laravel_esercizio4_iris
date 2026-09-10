<x-layout>
    <!-- Sezione Hero con Video di Sfondo -->
    <div class="container my-5">
        <div class="position-relative p-5 rounded-3 shadow-lg overflow-hidden text-white bg-dark">
            
            <!-- Video in background con overlay scuro -->
            <video autoplay muted loop playsinline class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover opacity-50 z-0">
                <source src="{{ asset('videos/matrix.mp4') }}" type="video/mp4">
            </video>

            <!-- Contenuto in primo piano -->
            <div class="position-relative z-1 container-fluid py-5">
                <!-- Titolo principale in verde scuro/intenso stile Matrix -->
                <h1 class="display-4 fw-bold" style="color: #00ff66; text-shadow: 0 0 10px rgba(0,255,102,0.5);">
                    Benvenuto nel mio Blog Laravel
                </h1>
                <!-- Sottotitolo in verde chiaro -->
                <p class="col-md-8 fs-4 mt-3" style="color: #a3ffcc;">
                    Questo è il mio spazio sul web dove racconto il percorso di apprendimento di Laravel, PHP e dello sviluppo frontend con Bootstrap e Vite.
                </p>
                <!-- Pulsante in stile Matrix -->
                <a href="{{ route('articles.index') }}" class="btn btn-lg fw-bold mt-3 shadow" style="background-color: #00ff66; color: #000; border: none;">
                    Esplora gli articoli
                </a>
            </div>

        </div>
    </div>
</x-layout>