<div class="container">

    <div class="mb-3 d-flex justify-content-end">
        <a href="{{ route('categorie') }}" class="btn btn-success" style="margin-right: 10px;">Ajouter catégorie</a>
        <a href="{{ route('sous_categorie') }}" class="btn btn-success">Ajouter sous catégorie</a>
    </div>

    <div>
        <p>Listes des catégorie et sous catégorie</p>
    </div>

    <table class="table table-bordered border-success">
        <thead>
            <tr>
            <th scope="col">ID Catégorie</th>
            <th scope="col">Catégorie</th>
            <th scope="col">ID Sous catégorie</th>
            <th scope="col">Sous Catégorie</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach($categorie as $categories)
            <tr>
            <th scope="row">{{ $categories->id }}</th>
            <td>{{ $categories->nom }}</td>
            </tr>
            @endforeach
{{--
            @foreach($souscategorie as $souscategorie)
            <tr>
            <th scope="row">{{ $souscategorie->id }}</th>
            <td>{{ $souscategorie->nom }}</td>
            </tr>
            @endforeach  --}}
        </tbody>
    </table>
</div>
