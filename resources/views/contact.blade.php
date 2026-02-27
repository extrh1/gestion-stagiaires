@extends('layouts.master')

@section('title', 'Contact')

@section('content')
<div class="container">
    <h1 class="mb-4">Contactez-nous</h1>

    <form method="post" action="#">
        @csrf

        <div class="mb-3">
            <label class="form-label">Nom</label>
            <input type="text" class="form-control" placeholder="Votre nom">
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" placeholder="exemple@email.com">
        </div>

        <div class="mb-3">
            <label class="form-label">Message</label>
            <textarea class="form-control" rows="4" placeholder="Votre message"></textarea>
        </div>

        <button class="btn btn-primary">Envoyer</button>
    </form>
</div>
@endsection