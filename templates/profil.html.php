<div class="container">
    <div class="row mt-5">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h3 class="card-title">Profil Utilisateur</h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="nom">Nom :</label>
                        <input type="text" id="role" class="form-control" value="<?= $_SESSION['user']['nom'] ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="nom">Prénom :</label>
                        <input type="text" id="role" class="form-control" value="<?= $_SESSION['user']['prenom'] ?>" disabled>                   
                    <div class="form-group">
                        <label for="email">Email :</label>
                        <input type="text" id="role" class="form-control" value="<?= $_SESSION['user']['email'] ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="role">Rôle :</label>
                        <input type="text" id="role" class="form-control" value="<?= $_SESSION['user']['id'] ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="date_inscription">Date d'inscription :</label>
                        <input type="number" id="date_inscription" class="form-control" value="<?= $_SESSION['user']['date_inscr'] ?>" disabled>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <a href="/?page=edit-profil" class="btn btn-primary">Modifier</a>
                    <a href="#" class="btn btn-danger">Supprimer</a>
                </div>
            </div>
        </div>
    </div>
</div>