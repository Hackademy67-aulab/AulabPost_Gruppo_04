<x-layout>


  <div class=" container-fluid d-flex image-header">
    <div class="row ">
      <div class="col-12 h-100">
        <h1 class="welcome_custom  text-center"> The Aulab Post </h1>
      </div>

    </div>
  </div>

  

    @if (session('message'))
        <div class="alert alert-success text-center">
            {{ session('message') }}
        </div>
    @endif



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
                  <a href="{{route('article.byCategory', ['category' => $article->category->id])}}"><li class="list-group-item">{{$article->category->name}}</li></a>
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