<x-layout>

    <div class="container-fluid p-5 bg-info text-center text-white">
        <div class="row justify-content-center">
            <h1 class="display-1">
                Categoria {{$category->name}}
            </h1>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
          @foreach($articles as $article)
            <div class="col-12 col-md-3">
    
                <div class="card" style="width: 18rem;">
                    <img src="{{Storage::url($article->image)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{$article->title}}</h5>
                      <p class="card-text">{{$article->subtitle}}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">{{$article->category->name}}</li>
                      <li class="list-group-item">{{$article->created_at->format('d/m/Y')}}</li>
                      <li class="list-group-item">{{$article->user->name}}</li>
                    </ul>
                    <div class="card-body">
                      <a href="{{route('article.show', compact('article'))}}" class="btn btn-info text-white">Leggi</a>
                    
                    </div>
                  </div>
            </div>
    
          @endforeach
        </div>
    </div>

  </x-layout>
