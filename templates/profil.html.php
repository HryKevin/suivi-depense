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
                        <input type="text" id="role" class="form-control" value="<?= $user['nom'] ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="nom">Prénom :</label>
                        <input type="text" id="role" class="form-control" value="<?= $user['prenom']?>" disabled>                   
                    <div class="form-group">
                        <label for="email">Email :</label>
                        <input type="text" id="role" class="form-control" value="<?= $user['email'] ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="date_inscription">Date d'inscription :</label>
                        <input type="text" id="date_inscription" class="form-control" value="<?= $user['date_inscr'] ?>" disabled>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <a href="/?page=edit-profil&id=<?=$_SESSION['user']['id']?>" class="btn btn-primary">Modifier</a>
                    <a href="/" class="btn btn-secondary">Accueil</a>
                </div>
            </div>
        </div>
    </div>
</div>