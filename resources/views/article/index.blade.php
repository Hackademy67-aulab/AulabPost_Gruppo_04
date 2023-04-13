<x-layout>

    <div class="container-fluid p-5 text-center indexTitleCus ">
        <div class="row justify-content-center">
            <h1 class="display-1">
                TUTTI GLI ARTICOLI
            </h1>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            @foreach($articles as $article)
            <div class="col-12 col-md-3">

                <div class="card articleCardCus shadow m-4" style="width: 18rem;">
                    <img src="{{Storage::url($article->image)}}" class="card-img-top" alt="...">
                    <div class="card-body ">
                      <h5 class="card-title">{{$article->title}}</h5>
                      <p class="card-text">{{$article->subtitle}}</p>
                    </div>

                    <ul class="list-group list-group-flush">
                      
                      @if($article->category)
                      <a href="{{route('article.byCategory', ['category' => $article->category->id])}}">
                        <li class="list-group-item articleDetailCus">{{$article->category->name}}</li>
                      </a>
                      @else
                        <p class="small text-muted fst-italic text-capitalize"> Non categorizzato</p>
                      @endif

                        <li class="list-group-item articleDetailCus">{{$article->created_at->format('d/m/Y')}}</li>
                        <li class="list-group-item articleDetailCus">{{$article->user->name}}</li>
                    </ul>

                    <p class="small fst-italic text-capitalize">
                  @foreach($article->tags as $tag)
                  #{{$tag->name}}
                  @endforeach
                </p>
                
                    <div class="card-body">
                      <a href="{{route('article.show', compact('article'))}}" class="btn buttonTableCus">Leggi</a>
                    
                    </div>
                  </div>
            </div>
    
            @endforeach
        </div>
    </div>

</x-layout>    