<x-layout>

<div class="container-fluid p-5 text-center titleCareerCus">
    <div class="row justify-content-center">
        <h1 class="display-1">
            Lavora con noi
        </h1>
    </div>
</div>

<div class="container my-5 careerFormCus">
    <div class="row justify-content-center align-items-center border rounded p-2 shadow">
        <div class="col-12 col-md-6">
            <h2 >Lavora come amministratore</h2>
            <p class="careerDetailCus">Cosa farai: l'amministratore della piattaforma, si occuperà di gestire le richieste di lavoro e della gestione delle categorie. </p>
            <h2 >Lavora come revisore</h2>
            <p class="careerDetailCus">Cosa farai: Come revisore della piattaforma, ti occupererai di decidere se un articolo può essere pubblicato o meno, in base agli standard del team.</p>
            <h2>Lavora come redattore</h2>
            <p class="careerDetailCus">Cosa farai: i redattori, si occuperanno di scrivere gli articoli, da pubblicare nel nostro sito.</p>
        </div>
        <div class="col-12 col-md-6">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form method="POST" action="{{route('careers.submit')}}"  class="p-5">
                @csrf
                
                <div class="mb-3">
                    <label for="role" class="form-label">Per quale ruolo ti stai candidando?</label>
                    <select name="role" id="role" class="form-control careerInputAreaCus">
                        <option value="">Scegli qui</option>
                        <option value="admin">Amministratore</option>
                        <option value="revisor">Revisor</option>
                        <option value="writer">Redattore</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label ">E-mail</label>
                    <input name="email" type="email" class="form-control careerInputAreaCus" id="email" value="{{old('email') ?? Auth::user()->email}}">
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Parlaci di te</label>
                    <textarea name="message" id="message" cols="30" rows="7" class="form-control careerInputAreaCus">{{old('message')}}</textarea>
                </div>
                <div class="mt-2">
                    <button class="btn buttonTableCus">Invia la candidatura</button>
                </div>
            </form>
        </div>
    </div>
</div>

</x-layout>