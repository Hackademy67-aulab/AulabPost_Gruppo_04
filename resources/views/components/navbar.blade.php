<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('article.index')}}">Tutti gli articoli</a>
                </li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">Categorie</a>
            

                <ul class="dropdown-menu">
                    @foreach($categories as $category)
                    <li><a class="dropdown-item" href="{{route('article.byCategory', compact('category'))}}">{{$category->name}}</a></li>
                    @endforeach
                </ul>
                </li>


               {{-- Filtra per scrittori --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">Scrittori</a>
            

                <ul class="dropdown-menu">
                    
                    @foreach($users as $user)
                        @if($user->is_writer)
                            <li><a class="dropdown-item" href="{{route('article.byUser', compact('user'))}}">{{$user->name}}</a></li>
                        @endif
                    @endforeach
                    
                </ul>
                </li>

                

                

                @Auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Benvenuto {{Auth::user()->name}}
                    </a>


                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Profilo</a></li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a></li>
                        <form method="post" action="{{route('logout')}}" id="form-logout" class="d-none">
                        @csrf
                        </form>
                    </ul>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('article.create')}}">Inserisci un articolo</a>
                    </li> 
                </li>

                @if(Auth::user()->is_admin)
                    <li><a class="dropdown-item" href="{{route('admin.dashboard')}}">Dashboard Admin</a></li>
                @endif

                @if(Auth::user()->is_revisor)
                <li><a class="dropdown-item" href="{{route('revisor.dashboard')}}">Dashboard del revisore</a></li>
                @endif

                <li class="nav-item">
                    <a class="nav-link" href="{{route('careers')}}">Lavora Con Noi</a>
                </li>

                @endauth
                
                @guest
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                      aria-expanded="false">
                      Benvenuto ospite
                  </a>    
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
                    <li><a class="dropdown-item" href="{{route('login')}}">Accedi</a></li>
                  </ul>  
                @endguest
                    
                
            </ul>
        </div>
    </div>
</nav>
