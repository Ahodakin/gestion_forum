<!-- Sidebar Start -->
<div class="sidebar">

        <nav class="navbar bg-secondary navbar-dark">

        <div class="navbar-nav">

            <div class="d-flex align-items-end" style="height: 100px;">
                <p><a href="{{ Route('index') }}" class="dropdown-item">Accueil</a></p>
            </div>

            <div class="d-flex align-items-end">
                <p><a href="{{ Route('liste_categorie') }}" class="dropdown-item ">Catégorie</a></p>
            </div>

            <div class="d-flex align-items-end">
                <p><a href="{{ Route('liste') }}" class="dropdown-item">Question</a></p>
            </div>

            <div class="d-flex align-items-end">
                <p><a href="{{ Route('reponse') }}" class="dropdown-item">Réponse</a></p>
            </div>

            <div class="d-flex align-items-end">
                <p><a href="{{ Route('logout') }}" class="dropdown-item">Déconnexion</a></p>
            </div>

        </div>

    </nav>

</div>
<!-- Sidebar End -->
