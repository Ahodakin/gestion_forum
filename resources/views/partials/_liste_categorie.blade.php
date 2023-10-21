<div class="container">

    <div class="mb-3 d-flex justify-content-end">
        <a href="{{ route('categorie') }}" class="btn btn-success" style="margin-right: 10px;">Ajouter catégorie</a>
        <a href="{{ route('sous_categorie') }}" class="btn btn-success">Ajouter sous catégorie</a>
    </div>

    <div>
        <p>Listes des catégories et sous-catégories</p>
    </div>

    <table class="table table-bordered border-success">
        <thead>
            <tr>
                {{--  <th scope="col">ID Catégorie</th>  --}}
                <th scope="col">Catégorie</th>
                {{--  <th scope="col">ID Sous Catégorie</th>  --}}
                <th scope="col">Sous Catégorie</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categorie as $categories)
            <tr>
                {{--  <td>{{ $categories->id }}</td>  --}}
                <td rowspan="{{ count($categories->souscategories) + 1 }}">{{ $categories->nom }}</td>
            </tr>
            @foreach($categories->souscategories as $souscat)
            <tr>
                {{--  <td></td>  --}}
                {{--  <td>{{ $souscat->id }}</td>  --}}
                <td>{{ $souscat->nom }}</td>
            </tr>
            @endforeach
            @endforeach
        </tbody>
    </table>
</div>
