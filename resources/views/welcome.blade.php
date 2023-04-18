<x-layout>



    @if (session('message'))
        <div class="alert alert-success text-center p-4 m-0">
            {{ session('message') }}
        </div>
    @endif

    <div class="container-fluid image-header">
        <div class="row vh-100 ">
            <div class="col-12 d-flex">
                <h1 class="welcome_custom  text-center"> The Aulab Post </h1>
            </div>
        </div>
    </div>



    <div class="container">
        <div class="row buttonFilterCus rounded shadow">

            <div class="dropdown col-6 d-flex justify-content-center">
                <button class="btn btn-secondary dropdown-toggle w-50 mainButtonFilterCus" type="button"
                    data-bs-toggle="dropdown">
                    Categorie
                </button>
                <ul class="dropdown-menu dropdownCus">
                    @foreach ($categories as $category)
                        <li><a class="dropdown-item"
                                href="{{ route('article.byCategory', compact('category')) }}">{{ $category->name }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>





            <div class="dropdown col-6 d-flex justify-content-center">
                <button class="btn btn-secondary dropdown-toggle w-50 mainButtonFilterCus" type="button" data-bs-toggle="dropdown">
                    Scrittori
                </button>
                <ul class="dropdown-menu dropdownCus">
                    @foreach ($users as $user)
                        @if ($user->is_writer)
                            <li><a class="dropdown-item"
                                    href="{{ route('article.byUser', compact('user')) }}">{{ $user->name }}</a>
                            </li>
                        @endif
                    @endforeach


                </ul>
            </div>

        </div>
    </div>

    {{-- Filtra per scrittori --}}
    {{-- <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                              aria-expanded="false">Scrittori</a>
  
  
                          <ul class="dropdownCus dropdown-menu">
  
                              @foreach ($users as $user)
                                  @if ($user->is_writer)
                                      <li><a class="dropdown-item"
                                              href="{{ route('article.byUser', compact('user')) }}">{{ $user->name }}</a>
                                      </li>
                                  @endif
                              @endforeach
  
                          </ul>
                      </li> --}}






    <div class="container my-5">
        <div class="row justify-content-center">
            @foreach ($articles as $article)
                <div class="col-12 col-md-3">

                    <div class="card articleCardCus" style="width: 18rem;">
                        <img src="{{ Storage::url($article->image) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $article->title }}</h5>
                            <p class="card-text">{{ $article->subtitle }}</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            @if ($article->category)
                                <a href="{{ route('article.byCategory', ['category' => $article->category->id]) }}">
                                    <li class="list-group-item articleDetailCus">{{ $article->category->name }}</li>
                                </a>
                            @else
                                <p class="small text-muted fst-italic text-capitalize"> Non categorizzato</p>
                            @endif

                            <li class="list-group-item articleDetailCus">{{ $article->created_at->format('d/m/Y') }}
                            </li>
                            <li class="list-group-item articleDetailCus">{{ $article->user->name }}</li>
                        </ul>

                        <p class="small fst-italic text-capitalize">
                            @foreach ($article->tags as $tag)
                                #{{ $tag->name }}
                            @endforeach
                        </p>

                        <div class="card-body">
                            <a href="{{ route('article.show', compact('article')) }}"
                                class="btn buttonTableCus">Leggi</a>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


</x-layout>
