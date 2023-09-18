<div class="container">

    <!-- ajouter une location -->
    <div>
        <a href="{{ route('addRental') }}" class="btn btn-mark ">Ajouter une location</a>
    </div>
    </div>
    <h1 class="mt-3" >Liste des Locations</h1>
    <!-- Tableau pour afficher la liste des locations -->
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
            <thead class="" style="height: 50px">
                <tr>
                    <th scope="col" style="background-color: #b0a0f0; color: #fff;">Client</th>
                    <th scope="col" style="background-color: #b0a0f0; color: #fff;">Modèle voiture</th>
                    <th scope="col" style="background-color: #b0a0f0; color: #fff;">Marque</th>
                    <th scope="col" style="background-color: #b0a0f0; color: #fff;">Année</th>
                    <th scope="col" style="background-color: #b0a0f0; color: #fff;">Voir fiche technique</th>
                    <th scope="col" style="background-color: #b0a0f0; color: #fff;">Date de sortie</th>
                    <th scope="col" style="background-color: #b0a0f0; color: #fff;">Date de retour prévue</th>
                    <th scope="col" style="background-color: #b0a0f0; color: #fff;">Date de retour effective</th>
                    <th scope="col" style="background-color: #b0a0f0; color: #fff;">Délai respecté ?</th>
                    <th scope="col" style="background-color: #b0a0f0; color: #fff;">Observation</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="align-middle">AHLE Rolande</td>
                    <td class="align-middle">Modèle1 </td>
                    <td class="align-middle">Marque1</td>
                    <td class="align-middle">Année1</td>
                    <td class="align-middle"><a href="{{route('seeMore')}}">Voir Fiche</a></td>
                    <td class="align-middle">2023-09-18</td>
                    <td class="align-middle">2023-09-30</td>
                    <td class="align-middle"> 
                        <input type="date" class="form-control" id="date_retour_effective" name="date_retour_effective">
                    </td>
                    <td class="align-middle">Délai respecté</td>
                    <td class="align-middle">
                        <textarea name="bio" id="" cols="2" rows="2" class="form-control"></textarea>
                        <p></p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    
</div>