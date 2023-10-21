{{--  <div class="container">
    <div class="row justify-content-center align-items-end min-vh-50">
        <div class="col-sm-4 col-xl-4">
            @if(session('status'))
            <div class="alert alert-success">
                {{(session('status'))}}
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <form action="/ajouter_get" method="POST" class="bg-secondary rounded p-4">
                @csrf
                <h6 class="mb-4">Sélectionnez quelque chose</h6>
                <select id="categorie" class=" categorie form-select form-select-sm mb-3" aria-label=".form-select-sm example" name="carte">
                    <option selected> Catégorie </option>
                   @foreach($categorie as $categories)
                    <option value="{{ $categories->id }}"> {{ $categories->nom }}</option>
                   @endforeach
                </select>

                <select id="sous_categorie" class="souscategorie form-select form-select-sm mb-3" aria-label=".form-select-sm example" name="id_sous">
                    <option selected> Sous Categorie </option>
                    @foreach($souscategorie  as $souscategories)
                        <option value="{{ $souscategories->id }}"> {{ $souscategories->nom }}</option>
                   @endforeach
                </select>

                <button type="submit" class="btn btn-primary">Soumettre</button>
            </form>
        </div>
    </div>
</div>  --}}

    <div class="container">
        <div class="mb-2 d-flex justify-content-end">
            <a href="{{ route('publish') }}" class="btn btn-success">Ajouter</a>
        </div>
        <div>
            <p>Listes des questions</p>
        </div>

        <table class="table table-bordered border-success">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Titre</th>
                <th scope="col">Question</th>
                <th scope="col">Sous Catégorie</th>
                <th scope="col">Date</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach($recup as $recups)
                <tr>
                <th scope="row">{{ $recups->id }}</th>
                <td>{{ $recups->title }}</td>
                <td>{{ $recups->content}}</td>
                <td>{{ $recups->nom_sous_categorie}}</td>
                <td>{{ $recups->created_at}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>







