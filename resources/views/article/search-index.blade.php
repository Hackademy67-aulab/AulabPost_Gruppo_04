<x-layout>

    <div class="text-custom container-fluid p-5 text-center ">
        <div class="row justify-content-center">
            <h1 class="display-1">
                Tutti gli articoli per : {{$query}}
            </h1>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            @foreach ($articles as $article)
                <div class="col-12 col-md-6">

                    <div class="card d-flex align-items-center articleCardCus p-4 fs-4 text-center mb-3">
                        <img src="{{Storage::url($article->image)}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fs-1">{{ $article->title }}</h5>
                            <p class="card-text">{{ $article->subtitle }}</p>
                            <a href="{{ route('article.byCategory', ['category' => $article->category->id]) }}" class="small text-muted fst-italic text-capitalize">{{ $article->category->name }}</a>
                        </div>
                        <div class="card-footer text-muted d-flex justify-content-between align-items-center">
                            <a href="{{route('article.byUser', ['user' => $article->user->id])}}">Redatto il
                                {{ $article->created_at->format('d/m/Y') }} da {{ $article->user->name }}</a>
                            <a href="{{route('article.show', compact('article')) }}" class="btn buttonTableCus">Leggi</a>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
    </div>

</x-layout>
