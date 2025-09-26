<nav class="navbar navbar-expand-lg bg-dark">
  <div class="container-fluid">
    <nav class="navbar bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="./index.html">
      <img src="./Assets/Images/Logo White.png" alt="Logo" width="75" class="d-inline-block align-text-top rounded">
    </a>
  </div>
</nav>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse rounded" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        
         <a class="nav-link active" aria-current="page" href="{{route('dashboard')}}">Home</a>
         <a class="nav-link" href="./profile.html">Profile</a>
         <a class="nav-link" href="./article-create.html">Upload</a>

         @if (Route::has('login'))

         @auth
        
          <x-app-layout>

         </x-app-layout>
        
         @else
         <a class="nav-link"href="{{route('login')}}">Login</a>
         <a class="nav-link"href="{{route('register')}}">Register</a>
         @endauth
         @endif
        
      </div>
    </div>
  </div>
</nav>