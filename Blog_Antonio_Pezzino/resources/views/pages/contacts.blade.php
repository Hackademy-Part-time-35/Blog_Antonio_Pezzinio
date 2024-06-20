<x-layout :title="$title">

    <div class="row">
        <div class="col-lg-6 mx-auto">

            <h1 class="title">Contatti</h1>
            <p class="text-muted">Contattaci per avere più informazioni sul nostro Blog</p>

            <x-success />

            <form action="{{ route('contacts.submit') }}" method="POST" class="mt-4">
                @csrf
                <div class="row g-3">
                    <div class="col-12">
                        <label for="name">Nome</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="col-12">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                    <div class="col-12">
                        <label for="message">Messaggio</label>
                        <textarea name="message" id="message" rows="5" class="form-control"></textarea>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Invia</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-layout>
