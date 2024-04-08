<div class="container login-container">
    <form class="login-form fade-in" method="POST">
        <h1 class="text-center mb-4">Se connecter</h1>
        <div class="form-group">
            <label for="email">Email :</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
            <?php if (isset ($errors) && !empty ($errors['email'])): ?>
                <div class="alert alert-danger" id="error-message" role="alert">
                    <!-- Message d'erreur -->
                    <p>
                        <?= $errors['email'] ?>
                    </p>
                </div>
            <?php endif; ?>
        </div>
        
        <div class="form-group">
            <label for="password">Password :</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            <?php if (isset ($errors) && !empty ($errors['password'])): ?>
                <div class="alert alert-danger" id="error-message" role="alert">
                        <!-- Message d'erreur -->
                     <p>
                        <?= $errors['password'] ?>
                    </p>
                </div>
            <?php endif; ?>
        </div>
        <div class="form-group text-center" style="display: flex; flex-direction: column;">
            <input type="submit" class="btn btn-primary " name="submit" value="Connexion">
            <a href="/?page=inscription">Vous n'avez pas encore de compte ?</a>
        </div>
    </form>
</div>