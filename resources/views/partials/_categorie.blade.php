<!-- Form Start -->
<div class="container-fluid pt-10 px-4 d-flex justify-content-center align-items-center" style="min-height: 70vh;">
    <div class="col-sm-7 col-xl-10">
        <div class="bg-secondary rounded h-100 p-4">

            <div>
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if(session()->has('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif

                @if(session()->has('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
            </div>

            <h6 class="mb-4">Ajouter une catégorie</h6>
            <form action="{{ ('categorie_post') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="title">Catégorie</label>
                    <input type="text" class="form-control" name="nom" value="{{ old('nom') }}" required>
                </div>

                <div class="mb-3 text-center">
                    <a href="{{ route('liste_categorie') }}" class="btn btn-danger">Retour</a>
                    <button type="submit" class="btn btn-success">Valider</button>
                </div>
            </form>

        </div>
    </div>
</div>
<!-- Form End -->
