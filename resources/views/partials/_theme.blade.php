

    <!-- Recent Sales Start -->
        <div class="container-fluid pt-4 px-4">
            <div class="bg-secondary text-center rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h6 class="mb-0">Recent Salse</h6>
                    <a class="btn btn-sm btn-primary" href="{{ Route('ajouter') }}">Ajouter</a>
                </div>
                <div class="table-responsive">
                    @foreach($recup as $recups)
                        <div class="card border-danger mb-3" style="max-width: 50rem;">
                            <div class="card-header bg-transparent border-success">Categorie</div>
                            <div class="card-body text-success">
                                <a href=""><h2 class="card-title" style="color:blue;">{{ $recups->title }}</h2></a>
                            <p class="card-text">{{ $recups->content }}</p>
                            </div>
                            <div class="card-footer bg-transparent border-success">Sous Categorie/ {{ $recups->id_sous_categorie }}</div>
                        </div>
                      @endforeach
                </div>
            </div>
        </div>
    <!-- Recent Sales End -->



