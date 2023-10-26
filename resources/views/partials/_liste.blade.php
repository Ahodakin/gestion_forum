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

        <form action="{{ route('liste') }}" method="GET" class="">
            <label for="souscategorie_id">Filtrer par sous-catégorie :</label>
            <select name="souscategorie_id" id="souscategorie_id">
                <option value="">Toutes les sous-catégories</option>
                @foreach($souscategorie as $souscat)
                    <option value="{{ $souscat->id }}" @if(request('souscategorie_id') == $souscat->id) selected @endif>{{ $souscat->nom }}</option>
                @endforeach
            </select>
            <button type="submit">Filtrer</button>
        </form>

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
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach($questions as $question)
                <tr>
                <th scope="row">{{ $question->id }}</th>
                <td>{{ $question->title }}</td>
                <td>{{ $question->content}}</td>
                <td>{{ $question->Souscategorie->nom }}</td>
                <td>
                    @if ($question->updated_at)
                        {{ $question->updated_at->format('Y-m-d') }}
                    @else
                        {{ $question->created_at->format('Y-m-d') }}
                    @endif
                </td>
                        <td>
                            <div class="mb-2 d-flex justify-content-end">
                                <a href="{{ route('edit', $question) }}" class="btn btn-success">Modifier</a>
                                <span style="margin-left: 5px;"></span>
                                <form method="POST" action="{{ route('supprimer', $question) }}">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="id_users" value="{{ $question->id_users }}">
                                    <input type="hidden" name="id_sous_categorie" value="{{ $question->id_sous_categorie }}">
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette question ?')">Supprimer</button>
                                </form>
                            </div>
                        </td>
                     </tr>
                @endforeach
            </tbody>
        </table>
        {{--  {{ $questions->links()}}  --}}
    </div>









