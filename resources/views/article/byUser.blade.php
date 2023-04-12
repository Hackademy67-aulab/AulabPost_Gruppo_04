<x-layout>

    <div class=" text-custom container-fluid p-5 text-center">
        <div class="row justify-content-center">
            <h1 class="display-1">
                ARTICOLI SCRITTI DA: {{$user->name}}
            </h1>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
          @foreach($articles as $article)
            <div class="col-12 col-md-3">
    
                <div class="card articleCardCus p-4 fs-4 text-center mb-3" style="width: 18rem;">
                    <img src="{{Storage::url($article->image)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{$article->title}}</h5>
                      <p class="card-text">{{$article->subtitle}}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                      <a href="{{route('article.byCategory', ['category' => $article->category->id])}}">
                        <li class="list-group-item articleDetailCus">{{$article->category->name}}</li>
                      </a>
                      {{-- <li class="list-group-item">{{$article->category->name}}</li> --}}
                        <li class="list-group-item articleDetailCus">{{$article->created_at->format('d/m/Y')}}</li>
                        <li class="list-group-item articleDetailCus">{{$article->user->name}}</li>
                    </ul>
                    <div class="card-body">
                      <a href="{{route('article.show', compact('article'))}}" class="btn buttonTableCus">Leggi</a>
                    
                    </div>
                  </div>
            </div>
    
          @endforeach
        </div>
    </div>

  </x-layout>