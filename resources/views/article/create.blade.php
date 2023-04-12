<x-layout>
<div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <h1>Inserisci un articolo</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">

            @if ($errors->any())
                <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
                </div>    
            @endif    

            <form class="card p-5 shadow articleFormCus" action="{{route('article.store')}}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                     <label for="title" class="form-label"> Titolo</label>
                    <input name="title" type="text" class="form-control articleInputAreaCus" id="title" value="{{old('title')}}" >
                </div>

                <div class="mb-3">
                     <label for="subtitle" class="form-label"> Sottotitolo</label>
                    <input name="subtitle" type="text" class="form-control articleInputAreaCus" id="subtitle" value="{{old('subtitle')}}">
                </div>

                <div class="mb-3">
                     <label for="image" class="form-label"> Immagine</label>
                    <input name="image" type="file" class="form-control articleInputAreaCus" id="image">
                </div>

                <div class="mb-3">
                     <label for="category" class="form-label"> Categoria</label>
                    <select name="category" id="category" class="form-control text-capitalize articleInputAreaCus">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}} </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                     <label for="body" class="form-label"> Corpo del testo</label>
                    <textarea name="body" cols="30" rows="7" class="form-control articleInputAreaCus" id="body">{{old('body')}}</textarea>
                </div>


                <div class="mt-2">
                    <button class="btn buttonAcceptTableCus"> Inserisci un articolo</button>
                    <a class="btn buttonTableCus" href="{{route('homepage')}}">Torna alla home</a>
                </div>

                </form>
            </div>
        </div>
    </div>

</x-layout>