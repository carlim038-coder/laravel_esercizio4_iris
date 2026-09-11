<x-layout>
    <div class="container-fluid my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 my-5">
                <!-- Form con metodo POST e action che punta alla rotta di submit -->
                <form class="py-3 px-5 shadow rounded text-white bg-dark border border-success" method="POST" action="{{ route('contact.submit') }}">
                    @csrf <!-- Fondamentale per la sicurezza dei form POST in Laravel -->

                    <div class="mb-3">
                        <label for="username" class="form-label" style="color: #00ff66;">Inserisci il tuo nome completo</label>
                        <input type="text" class="form-control" id="username" name="username">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label" style="color: #00ff66;">Inserisci la tua mail</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" name="email">
                    </div>

                    <div class="mb-3">
                        <label for="message" class="form-label" style="color: #00ff66;">Scrivici il tuo messaggio:</label>
                        <textarea name="message" class="form-control" id="message" cols="30" rows="10"></textarea>
                    </div>

                    <div class="d-flex justify-content-center mt-4">
                        <button type="submit" class="btn btn-lg fw-bold shadow" style="background-color: #00ff66; color: #000; border: none;">
                            Invia
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>