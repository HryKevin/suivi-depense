<div class="container login-container">


    <form class="login-form fade-in" method="POST">
        <h1 class="text-center mb-4">S'inscrire</h1>
        <div class="form-group">
            <label for="lastname">Nom :</label>
            <input type="text" class="form-control" id="lastname" name="ssd_users[lastname]" placeholder="Nom">
            <?php if (isset($errors['ssd_users']) && !empty($errors['ssd_users']['lastname'])): ?>
                <div class="alert alert-danger" id="error-message" role="alert">
                    <!-- Message d'erreur -->
                    <p>
                        <?= $errors['ssd_users']['lastname'] ?>
                    </p>
                </div>
            <?php endif; ?>
        </div>
        <div class="form-group">
            <label for="firstname">Prenom :</label>
            <input type="text" class="form-control" id="firstname" name="ssd_users[firstname]" placeholder="Prenom">
            <?php if (isset($errors['ssd_users']) && !empty($errors['ssd_users']['firstname'])): ?>
                <div class="alert alert-danger" id="error-message" role="alert">
                    <!-- Message d'erreur -->
                    <p>
                        <?= $errors['ssd_users']['firstname'] ?>
                    </p>
                </div>
            <?php endif; ?>
        </div>
        <div class="form-group">
            <label for="email">Email :</label>
            <input type="email" class="form-control" id="email" name="ssd_users[email]" placeholder="Email">
                <?php if (isset($errors['ssd_users']) && !empty($errors['ssd_users']['email'])): ?>
                    <div class="alert alert-danger" id="error-message" role="alert">
                        <!-- Message d'erreur -->
                        <p>
                            <?= $errors['ssd_users']['email'] ?>
                        </p>
                    </div>
                <?php endif; ?>
        </div>
        <div class="form-group">
            <label for="password">Mot de passe :</label>
            <input type="password" class="form-control" id="password" name="ssd_users[password]" placeholder="Mot de passe">
                 <?php if (isset($errors['ssd_users']['password'])): ?>
                    <?php foreach ((array)$errors['ssd_users']['password'] as $error): ?>
                        <div class="alert alert-danger" id="error-message" role="alert">
                            <!-- Message d'erreur -->
                            <p><?= $error ?><br></p>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
        </div>
        <div class="form-group text-center" style="display: flex; flex-direction: column;">
            <input type="submit" class="btn btn-primary" name="submit" value="Inscription">
            <a href="/?page=connexion">Vous avez déjà un compte ?</a>
                <?php if (isset($success)) : ?>
                    <div class="alert alert-success" id="success-message" role="alert">
                        <!-- Message d'erreur -->
                        <p><?= $success ?><br></p>
                        <a href="/?page=connexion">Se connecter</a>
                    </div>
                <?php endif; ?>
        </div>
        <input type="hidden" id="date_inscr" name="ssd_users[date_inscr]">
    </form>
</div>