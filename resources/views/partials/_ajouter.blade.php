<div class="container">
    <div class="row justify-content-center align-items-end min-vh-50">
        <div class="col-sm-10 col-xl-4">
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
</div>

{{--  <script>
    $(document).ready(function () {
        $('#categorie').change(function () {
            var categorie_id = $(this).val();
            if (categorie_id) {
                $.ajax({
                    type: 'GET',
                    url: '/ajouter_get' + id_categorie,
                    success: function (data) {
                        $('#sous_categorie').html(data);
                    }
                });
            } else {
                $('#sous_categorie').html('<option value="">Sélectionnez une sous-catégorie</option>');
            }
        });
    });
</script>  --}}







{{--  <script type="text/javascript">
    $(document).ready(function(){
        $(document).on('change','.souscategorie',function(){

            var cat_id=$(this).val();
            var div=$(this).parent();
            var op="";

            $.ajax({
                type:'get',
                url:'{!! URL::to('ajouter_get') !!}'
                data:{'id':cats_id},
                success:function(data){
                    console.log('Success');
                    op+='<option value="o" selected disabled > Choisir categorie</option>';
                        for(var i=0;i<data.length;i++){
                            op+='<option value="'+data[i].id+'">'+data[i].nom+'</option>';
                        }
                     div.find('.categorie').html(){
                        div.find('.categorie').apprend(op);
                     },
                },
                error:function(){

                }


            });
        });
    });
</script>  --}}


