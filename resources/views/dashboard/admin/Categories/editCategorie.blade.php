@extends('dashboard.admin.layout.app')

@section('title')
    Modifier une catégorie
@endsection

@section('contents')
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Modifier une catégorie</h3>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="{{ route('categories.update', $categorie->id) }}" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputName" type="text"
                                                placeholder="Nom de la catégorie" name="name" value="{{ $categorie->name }}" />
                                            <label for="inputName">Nom de la catégorie</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputImage" type="file"
                                                placeholder="Image de la catégorie" name="image" accept="image/*" />
                                            <label for="inputImage">Image de la catégorie</label>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Modifier la catégorie</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection
