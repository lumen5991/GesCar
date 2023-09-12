    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 form-container">
                <div class="logo text-center" style="margin-top:-50px">
                    <a href="#"> <img src="{{ asset('images/logo.png') }}" alt="logo"
                            style="width: 150px; height:150px; border-radius:50%"> </a>
                </div>
                <h2 class="text-center" style="margin-top: -20px">Créer un compte</h2>
                <form action="" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nom">Nom</label>
                        <input type="text" class="form-control" id="nom" name="nom" required>
                    </div>
                    <div class="form-group">
                        <label for="prenom">Prénom</label>
                        <input type="text" class="form-control" id="prenom" name="prenom" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Mot de passe</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">Confirmer le mot de passe</label>
                        <input type="password" class="form-control" id="password_confirmation"
                            name="password_confirmation" required>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mt-2">
                        <div>
                            <button type="submit" class="btn btn-inscription btn-lg ">S'inscrire</button>
                        </div>
                        <div>
                            <p>Déjà un compte ? <a href="/login" style="text-decoration:none; color :#470046">Se Connecter</a></p>
                        </div>
                    </div>  
                </form>
            </div>
        </div>
    </div>
