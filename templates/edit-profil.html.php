<div class="container">
    <div class="row mt-5">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h3 class="card-title">Modifier mon profil</h3>
                </div>
                <div class="card-body">
                    <form method="POST">
                        <div class="form-group">
                            <label for="nom">Nom :</label>
                            <input type="text" id="nom" class="form-control" name="ssd_users[lastname]" value="<?= $user['nom'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="prenom">Prénom :</label>
                            <input type="text" id="prenom" class="form-control" name="ssd_users[firstname]" value="<?= $user['prenom'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="email">Email :</label>
                            <input type="email" id="email" class="form-control" name="ssd_users[email]" value="<?= $user['email'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="date_inscription">Date d'inscription :</label>
                            <input type="text" id="date_inscription" class="form-control" name="date_inscr" value="<?= $user['date_inscr'] ?>" disabled>
                        </div>
                        <div class="card-footer text-right">
                            <input type="submit" class="btn btn-primary" name="submit" value="Enregistrer les modifications">
                            <a href="#" class="btn btn-danger">Supprimer</a>
                            <a href="<?= 	
$_SERVER['HTTP_REFERER'] ?>" class="btn btn-secondary">Retour</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
