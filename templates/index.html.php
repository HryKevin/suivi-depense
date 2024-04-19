<div class="container-index">

    <nav class="navbar navbar-expand-lg bg-light fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="/?page=index">BudgetBuddy</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Accueil</a>
                </li>
            </ul>
            <ul class="navbar-nav mb-2 mb-lg-0 mr-0">
                <li class="nav-item">
                    <a class="nav-link" href="/?page=profil&id=<?= $_SESSION['user']['id'] ?>">Bonjour
                            <?= $_SESSION['user']['prenom'] ?> !</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container">
  <div class="row vh-100 align-items-center">
    <div class="col-md-6 offset-md-3 text-center">
      <h1><b>BudgetBuddy</b></h1>
      <p>Ne vous laissez plus jamais suprendre par une dépense oublié !</p>
      <a href="/?page=porte-monnaie" class="btn btn-primary">Porte-Monnaie</a>
    </div>
  </div>
</div>


</div>