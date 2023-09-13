<div class="container mt-4">
    <h1>Liste des Clients</h1>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th style="background-color: #0B022F; color: #fff;">Nom</th>
                <th style="background-color: #0B022F; color: #fff;">Prénom</th>
                <th style="background-color: #0B022F; color: #fff;">Email</th>
                <th style="background-color: #0B022F; color: #fff;">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($client as $item)
            <tr>
                <td>{{$item['nom']}}</td>
                <td>{{$item['prenom']}}</td>
                <td>{{$item['email']}}</td>
                <td>
                    <a href="{{route('getStudentInfo', ['id_client' => $item['id_client']])}}" class="btn" style="color: #470046;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>