<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
    <h1>Liste des Clients</h1>
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead>
                <tr class="">
                    <th style="background-color: #b0a0f0; color: #fff;">ID</th>
                    <th style="background-color: #b0a0f0; color: #fff;">Nom et Prénoms</th>
                    <th style="background-color: #b0a0f0; color: #fff;">Téléphone</th>
                    <th style="background-color: #b0a0f0; color: #fff;">Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($client as $item)
                <tr>
                <td class="align-middle">{{$item->id_client}}</td>
                    <td class="align-middle">{{$item['nom']}}  {{$item['prenom']}}</td>
                    <td class="align-middle">{{$item['tel']}}</td>
                    <td class="align-middle">{{$item['email']}}</td>
                </tr>
                @endforeach
               
            </tbody>
        </table>
    </div>
    
</div>
</body>
</html>