

<div>
<nav class="navbar navbar-expand-lg bg-body-tertiary shadow navbarCus ">
    <div class="container-fluid">
        <!-- <a class="nav_custom2 navbar-brand" href="#"> The Aulab Post </a> -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse " id="navbarSupportedContent">

            <ul class=" navbarTextCus navbar-nav mb-2 mb-lg-0  w-100 justify-content-center">

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">The Aulab Post</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('article.index')}}">Tutti gli articoli</a>
                </li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">Categorie</a>
            

                <ul class="dropdownCus dropdown-menu">
                    @foreach($categories as $category)
                    <li><a class="dropdown-item" href="{{route('article.byCategory', compact('category'))}}">{{$category->name}}</a></li>
                    @endforeach
                </ul>
                </li>


               {{-- Filtra per scrittori --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">Scrittori</a>
            

                <ul class="dropdownCus dropdown-menu">
                    
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


                    <ul class="dropdownCus dropdown-menu">
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
                    <li><a class="nav-link" href="{{route('admin.dashboard')}}">Dashboard Admin</a></li>
                @endif

                @if(Auth::user()->is_revisor)
                <li><a class="nav-link" href="{{route('revisor.dashboard')}}">Dashboard del revisore</a></li>
                @endif


                <li class="nav-item">
                    <a class="nav-link" href="{{route('careers')}}">Lavora Con Noi</a>
                </li>

                @endauth
                
                <form class="d-flex" method="GET" action="{{route('article.search')}}">
                    <input class="form-control me-2" type="search" name="query" placeholder="Cosa stai cercando?" aria-label="Search">
                    <button class="btn btn-outline-info" type="submit">Cerca</button>
                  </form>

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
</div>