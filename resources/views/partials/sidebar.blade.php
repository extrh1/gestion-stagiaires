<!--
    <div class="bg-light p-3" style="width:200px;">
        <h5>Sidebar</h5>
        <ul class="list-unstyled">
            <li><a href="{{ url('/home') }}">Home</a></li>
            <li><a href="{{ url('/about') }}">About</a></li>
        </ul>
    </div>
-->
<!-- Sidebar -->   
    <div class="bg-light p-3" style="width:200px;">
        <h5>Sidebar</h5>
        <ul class="list-unstyled">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/about') }}">About</a></li>
            <li><a href="{{ url('/products') }}">Product</a></li>
            <li><a href="{{ url('/ajouter') }}">Ajouter</a></li>
            <li><a href="{{ url('/contact') }}">Contact</a></li>
            <li><a href="{{ route('stagiaire.index')}}">Liste des Stagiaires</a></li>
            <li><a href="{{ route('annonces.index')}}">List Des Annonces</a></li>  
            <li><a href="{{ route('annonces.dashboard')}}">Dashboard</a></li>  
        </ul>
    </div>