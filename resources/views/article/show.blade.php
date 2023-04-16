<x-layout>

    <div class="container-fluid p-5 text-center dashboardTitleCus ">
        <div class="row justify-content-center">
            <h1 class="display-1">
                {{$article->title}}
            </h1>
        </div>
    </div>

    <div class="container my-5 ">
        <div class="row justify-content-around ">
            <div class="col-12 col-md-8 shadow p-4 rounded showArticleCus ">
                <img src="{{Storage::url($article->image)}}" alt="" class="img-fluid my-3">
                <div class="text-center">
                    <h2 class="fs-1">{{$article->subtitle}}</h2>
                    <div class="my-3 text-muted fst-italic">
                        <p class="fs-5">Redatto da {{$article->user->name}} il {{$article->created_at->format('d/m/Y')}}</p>
                    </div>
                </div>
                <p class="fs-4 text-center">{{$article->body}}</p>


                {{-- @if($article->is_accepted == false)
                    @if(Auth::user() && Auth::user()->is_revisor)
                    <a href="{{route('revisor.acceptArticle', compact('article'))}}" class="btn buttonAcceptTableCus my-5">Accetta articolo</a>
                    <a href="{{route('revisor.rejectArticle', compact('article'))}}" class="btn buttonTableCus my-5">Rifiuta articolo</a>
                    @endif
                @endif --}}

                    {{-- @if($article->user->id != Auth::user()->id)

                        @if()
                            <a href="{{route('revisor.acceptArticle', compact('article'))}}" class="btn buttonAcceptTableCus my-5">Accetta articolo</a>
                            <a href="{{route('revisor.rejectArticle', compact('article'))}}" class="btn buttonTableCus my-5">Rifiuta articolo</a>
                        
                        @else

                            <div class="warningTextCus text-center rounded">Pubblicazione non autorizzata dallo stesso utente.</div>
                        
                        @endif
                     
                    @endif
                     --}}


                     @if($article->is_accepted == false && Auth::user() && Auth::user()->is_revisor)

                        @if($article->user->id != Auth::user()->id)
                            <a href="{{route('revisor.acceptArticle', compact('article'))}}" class="btn buttonAcceptTableCus my-5">Accetta articolo</a>
                            <a href="{{route('revisor.rejectArticle', compact('article'))}}" class="btn buttonTableCus my-5">Rifiuta articolo</a>
                        
                        @else

                            <div class="warningTextCus text-center rounded">Pubblicazione non autorizzata dallo stesso utente.</div>
                        
                        @endif
                  
                    @endif
                    <p class="small fst-italic text-capitalize">
                        @foreach($article->tags as $tag)
                        #{{$tag->name}}
                        @endforeach
                      </p>
                        
                <div class="text-center">
                    <a href="{{route('article.index')}}" class="btn buttonShowCus my-5">Torna indietro</a>
                </div>
            </div>
        </div>
    </div>

</x-layout>    