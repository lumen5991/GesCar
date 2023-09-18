<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 form-container">
            <div class="logo text-center" style="margin-top:-30px">
                <a href="#"> <img src="{{ asset('images/logo.png') }}" alt="logo" style="width: 150px; height:150px; border-radius:50%;"> </a>
            </div>
            <h2 class="text-center" style="margin-top: -20px">Modifier Catégorie</h2>
            <form action="{{route('modifyCat')}}" method="POST" enctype="multipart/form-data">
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
                <div class="my-3">
                    <div>
                        <select class="form-select" name="categorie_id" id="" style="">
                            @foreach($data_categorie as $item)

                            <option selected> Sélectionner la catégorie à modifier </option>
                            <option value="{{$item['id_cat']}}">{{$item['name']}}</option>

                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="name">Nouveau nom</label>
                        <input type="text" class="form-control" id="name" name="new_name" value="">
                    </div>
                </div>

                <div class="d-flex align-items-center justify-content-between mt-2">
                    <div>
                        <button type="submit" class="btn btn-connexion btn-lg ">Modifier</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>