<div class="container">
    <div class="">
        <div class="mb-4 py-3 px-1" style="border:1px solid #470046; border-radius: 20px 0 ">
            <form action="" method="POST">
                @csrf
                <div class="d-flex justify-content-between gap-3 align-items-center">
                    <div class="form-group">
                        <input type="text" class="form-control" id="category" name="category" placeholder="Catégorie">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="model" name="model" placeholder="Modèle">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="mark" name="mark" placeholder="Marque">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-connexion btn-lg ">Enregistrer</button>
                    </div>
                </div>
            </form>
        </div>
        <div>
            <a href="{{route('addcar')}}" class="btn btn-car ">Ajouter une voiture</a>
        </div>
    </div>

    <h1 class="mt-3">Liste des Voitures</h1>
    <table class="table table-striped table-bordered">
        <thead>
            <tr class="">
                <th style="background-color: #b0a0f0; color: #fff;">Nom Voiture</th>
                <th style="background-color: #b0a0f0; color: #fff;">Marque</th>
                <th style="background-color: #b0a0f0; color: #fff;">Modèle</th>
                <th style="background-color: #b0a0f0; color: #fff;">Année</th>
                <th style="background-color: #b0a0f0; color: #fff;">Catégorie</th>
                <th style="background-color: #b0a0f0; color: #fff;">Couleur</th>
                <th style="background-color: #b0a0f0; color: #fff;">Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="align-middle">Peugeot</td>
                <td class="align-middle">Rav 4</td>
                <td class="align-middle">traverlle</td>
                <td class="align-middle">2023</td>
                <td class="align-middle">Peugeot 400</td>
                <td class="align-middle">Grise</td>
                <td class="align-middle">
                    <a href="" class="btn" style="color: #CC35C7;"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-eye">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                            <circle cx="12" cy="12" r="3"></circle>
                        </svg></a>
                </td>
            </tr>

        </tbody>
    </table>
</div>
