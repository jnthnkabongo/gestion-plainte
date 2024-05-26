@extends('Users.layout.entete')
@section('content')
    <div class="bg-dark text-secondary px-4 py-5 text-center">
        <div class="py-5">
        <h1 class="display-5 fw-bold text-white">Dark color hero</h1>
        <div class="col-lg-6 mx-auto">
            <p class="fs-5 mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            </div>
        </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="position-absolute w-50 top-90 start-50 translate-middle mt-5">
          <div class="row mt-5">
            <div class="col-lg-12 col-md-12 col-sm-12 mt-5">
              <div class="card mt-5">

                <div class="card-body">
                    <form class="row g-3">
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Noms</label>
                        <input type="text" class="form-control" readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Département</label>
                        <select class="form-control" name="" id="">
                            <option value="">Choisissez votre département</option>
                            <option value="">1</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Fonction</label>
                        <input type="email" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Ville</label>
                        <input type="password" class="form-control" id="inputPassword4">
                    </div><div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Site/Localisation</label>
                        <input type="email" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Priorité</label>
                        <input type="password" class="form-control" id="inputPassword4">
                    </div><div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Type matériel</label>
                        <input type="email" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Plainte</label>
                        <input type="password" class="form-control" id="inputPassword4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Commentaire</label>
                        <input type="email" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Joindre un fichier</label>
                        <input type="file" class="form-control">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary w-100">Soumettre</button>
                    </div>
                    </form>
                </div>
              </div>
            </div>
          </div>
        </div>

        
    </div>



@endsection
