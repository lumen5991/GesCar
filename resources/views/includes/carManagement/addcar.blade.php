<div class="container mt-3" style="width: ">
    <div class="row justify-content-center">
        <div class="col-md-6 form-container" style="width: 80%">
            <div class="logo text-center" style="margin-top:-50px">
                <a href="#"> <img src="{{ asset('images/logo.png') }}" alt="logo"
                        style="width: 200px; height:200px; border-radius:50%;"> </a>
            </div>
            <h2 class="text-center mb-4 " style="margin-top:-50px">Ajouter une voiture</h2>
            <form action="" method="POST">
                @csrf
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <div>
                            <strong>Message Success</strong> <br>
                            {{ session('success') }}
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if (session('errors'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <div>
                            <strong>Alert</strong> <br>
                            {{ session('errors') }}
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="d-flex justify-content-between mb-3">
                    <div class="form-group">
                        <input type="text" class="form-control" id="nom_voiture" name="nom_voiture" placeholder="Nom Voiture" style="">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="boite_vitesse" name="boite_vitesse" placeholder="boite à Vitesse">
                    </div>
                </div>
                <div class="d-flex justify-content-between mb-3">
                    <div class="form-group">
                        <input type="number" class="form-control" id="puissance" name="puissance"
                            placeholder="Puissance">
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" id="nbre_porte" name="nbre_porte"
                            placeholder="Nombre de Portes">
                    </div>
                </div>
                <div class="d-flex justify-content-between mb-3">
                    <div class="form-group">
                        <input type="text" class="form-control" id="carburant" name="carburant"
                            placeholder="Carburant">
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" id="nbre_cylindre" name="nbre_cylindre"
                            placeholder="Nombre de Cylindre">
                    </div>
                </div>
                <div class="d-flex justify-content-between mb-3">
                    <div class="form-group">
                        <input type="number" class="form-control" id="soupape" name="soupape" placeholder="Soupape">
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" id="vitesse_max" name="vitesse_max"
                            placeholder="Vitesse maximale">
                    </div>
                </div>
                <div class="d-flex justify-content-between mb-3">

                    <div class="form-group">
                        <input type="text" class="form-control" id="carosserie" name="carosserie"
                            placeholder="Carosserie">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="transmission" name="transmission"
                            placeholder="Transmission">
                    </div>
                </div>
                <div class="d-flex justify-content-between mb-3">
                    <div class="form-group" style="50%">
                        <input type="text" class="form-control" id="frein" name="frein" placeholder="Frein">
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" id="acceleration" name="acceleration"
                            placeholder="Accélération">
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" id="couleur" name="couleur"
                            placeholder="Couleur">
                    </div>
                    <div class="form-group ">
                        <input class="form-control" type="file" value="" name="image_principale">
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-group mb-3">
                        <input class="form-control" type="file" value="" name="image_2">
                    </div>
                    <div class="form-group mb-3">
                        <input class="form-control" type="file" value="" name="image_3">
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-between mt-2">
                    <div>
                        <button type="submit" class="btn btn-connexion btn-lg ">Enregistrer</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
