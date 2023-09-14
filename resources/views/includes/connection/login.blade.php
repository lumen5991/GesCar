<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 form-container">
            <div class="logo text-center" style="margin-top:-50px">
                <a href="#"> <img src="{{ asset('images/logo.png') }}" alt="logo"
                        style="width: 150px; height:150px; border-radius:50%"> </a>
            </div>
            <h2 class="text-center" style="margin-top: -20px">Se Connecter</h2>
            <form action="{{ route('authentification') }}" method="POST">
                @csrf
<<<<<<< HEAD
                @if (session('errors'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <div>
                        <strong>Alert</strong> <br>
                        {{ session('errors') }}
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
=======
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <div>
                            <strong>Message Success</strong> <br>
                            {{ session('success') }}
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @if (session('errors'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <div>
                                <strong>Alert</strong> <br>
                                {{ session('errors') }}
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif
                @endif

>>>>>>> 22f29240a012e3ca96ab115cc297193524815b82
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="d-flex align-items-center justify-content-between mt-2">
                    <div>
<<<<<<< HEAD
                        <button type="submit" class="btn btn-inscription btn-lg ">Se connecter</button>
=======
                        <button type="submit" class="btn btn-connexion btn-lg ">Se Connecter</button>
>>>>>>> 22f29240a012e3ca96ab115cc297193524815b82
                    </div>
                    <div>
                        <p>Pas de compte ? <a href="{{ route('register') }}"
                                style="text-decoration:none; color :#470046">S'inscrire</a></p>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
