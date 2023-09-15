<div class="mx-auto" style="">
    <div class="justify-content-center">
        <div class="form-container">
            <div class="logo text-center" style="margin-top:-30px">
                <a href="#"> <img src="{{ asset('images/logo.png') }}" alt="logo"
                        style="width: 150px; height:150px; border-radius:50%;"> </a>
            </div>
            <h2 class="text-center" style="margin-top: -20px">Ajouter une voiture</h2>
            <form action="" method="POST" enctype="multipart/form-data">
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
                <div>
                    <div class="mb-3">
                        <select class="form-select" name="" id="">
                            <option selected> Sélectionner la catégorie</option>
                            <option value="">Voiture 1</option>
                            <option value="">Voiture 1</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <select class="form-select" name="" id="">
                            <option selected> Sélectionner la marque</option>
                            <option value="">Voiture 1</option>
                            <option value="">Voiture 1</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <select class="form-select" name="" id="">
                            <option selected> Sélectionner le modèle</option>
                            <option value="">Voiture 1</option>
                            <option value="">Voiture 1</option>
                        </select>
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                        <div class="form-group">
                            <input type="text" class="form-control" id="boite_vitesse" name="boite_vitesse"
                                value="" placeholder="boite_vitesse">
                        </div>
                        <div class="form-group ">
                            <input type="number" class="form-control" id="puissance" name="puissance" value=""
                                placeholder="puissance">
                        </div>
                        <div class="form-group ">
                            <input type="number" class="form-control" id="nbre_porte" name="nbre_porte" value=""
                                placeholder="nbre_porte">
                        </div>
                    </div>
                    <div class="d-flex justify-content-between mb-3">

                        <div class="form-group">
                            <input type="text" class="form-control" id="carburant" name="carburant" value=""
                                placeholder="carburant">
                        </div>
                        <div class="form-group ">
                            <input type="number" class="form-control" id="nbre_cylindre" name="nbre_cylindre"
                                value="" placeholder="nbre_cylindre">
                        </div>
                        <div class="form-group ">
                            <input type="number" class="form-control" id="soupape" name="soupape" value=""
                                placeholder="soupape">
                        </div>
                    </div>

                    <div class="d-flex justify-content-between mb-3">
                        <div class="form-group ">
                            <input type="number" class="form-control" id="vitesse_max" name="vitesse_max"
                                value="" placeholder="vitesse_max">
                        </div>
                        <div class="form-group ">
                            <input type="text" class="form-control" id="carosserie" name="carosserie"
                                value="" placeholder="carosserie">
                        </div>
                        <div class="form-group ">
                            <input type="text" class="form-control" id="transmission" name="transmission"
                                value="" placeholder="transmission">
                        </div>
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                        <div class="form-group ">
                            <input type="text" class="form-control" id="frein" name="frein"
                                value=""placeholder="frein">
                        </div>
                        <div class="form-group ">
                            <input type="number" class="form-control" id="acceleration" name="acceleration"
                                value="" placeholder="acceleration">
                        </div>
                        <div class="form-group ">
                            <input type="text" class="form-control" id="couleur" name="couleur"
                                value=""placeholder="couleur">
                        </div>
                    </div>
                    <div class="form-group ">
                        <input type="file" class="form-control" id="image" name="image" value=""
                            multiple>
                    </div>

                    <div class="d-flex align-items-center justify-content-between mt-2">

                        <button type="submit" class="btn btn-connexion btn-lg ">Enregistrer</button>

                    </div>

                </div>

            </form>
        </div>
    </div>
</div>
