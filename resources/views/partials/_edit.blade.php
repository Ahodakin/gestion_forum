<!-- Form Start -->
<div class="container-fluid pt-10 px-4 d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="col-sm-10 col-xl-10">
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

            <h6 class="mb-4">Modifier la question</h6>
            <form action="{{ route('update', $question)}}" method="post">
                @method('put')
                @csrf
                <div class="mb-3">
                    <label for="id_categorie">Catégorie</label>
                    <select class="form-select form-select-lg mb-3" name="id_categorie" required>
                        <option value="">Choisissez une catégorie</option>
                        @foreach($categorie as $categories)
                            <option value="{{ $categories->id }}" @if ($categories->id === $question->Souscategorie->Categorie->id) selected @endif>{{ $categories->nom }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="id_sous">Sous Catégorie</label>
                    <select class="form-select form-select-lg mb-3" name="id_sous_categorie" required>
                        <option value="">Choisissez une sous-catégorie</option>
                        @foreach($souscategorie as $souscategories)
                            <option value="{{ $souscategories->id }}" @if ($souscategories->id === $question->id_sous_categorie) selected @endif>{{ $souscategories->nom }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="title">Titre</label>
                    <input type="text" class="form-control" name="title" value="{{ $question->title }}" required>
                </div>
                <div class="mb-3">
                    <label for="content">Question</label>
                    <textarea name="content" class="form-control" rows="5" value="" required>{{ $question->content }}</textarea>
                </div>

                <div class="mb-3 text-center">
                    <a href="{{ route('liste') }}" class="btn btn-danger">Retour</a>
                    <button type="submit" class="btn btn-success">Valider</button>
                </div>
            </form>

        </div>
    </div>
</div>
<!-- Form End -->
