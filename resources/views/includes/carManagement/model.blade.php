<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 form-container">
            <div class="logo text-center" style="margin-top:-30px">
                <a href="#"> <img src="{{ asset('images/logo.png') }}" alt="logo"
                        style="width: 150px; height:150px; border-radius:50%;"> </a>
            </div>
            <h2 class="text-center" style="margin-top: -20px">Ajouter un Modèle</h2>
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
                <div class="form-group">
                    <input type="text" class="form-control" id="modele_name" name="modele_name" value="" placeholder="Entrer le nom du modèle">
                </div>
                <div class="form-group my-3">
                    <input type="number" class="form-control" id="annee" name="annee" value="" placeholder="Entrer l'année">
                </div>
                <div class="">
                    <div>
                        <select class="form-select"  name="" id="" style="width: 100%">
                            <option selected> Sélectionner la marque correspondante </option>
                            <option value="">Voiture 1</option>
                            <option value="">Voiture 1</option>
                        </select>
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
