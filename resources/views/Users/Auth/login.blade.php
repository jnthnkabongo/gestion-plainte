@extends('Users.Auth.entete-auth')
@section('content')
<div class="container-fluid col-xl-10 col-xxl-8 px-4 py-5 mt-5">
    <div class="p-4 p-md-5 border rounded-3 bg-body-tertiary">
        <div class="row align-items-center g-lg-5 py-5">
            <div class="col-lg-6 text-center text-lg-start">
                <img src="{{ asset('assets/images/image-connexion.png') }}" height="380px" width="400px" alt="">
            </div>
            <div class="col-md-10 mx-auto col-lg-6">
                <form class="p-4 p-md-5 border rounded-3">

                <div class="form-floating mb-3">
                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                      <option selected>Open this select menu</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                    <label for="floatingSelect">Sélectionnez son compte</label>
                  </div>
                <div class="form-floating mb-3"><select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                  <label for="floatingSelect">Sélectionnez sa ville</label>
                </div>

                <button class="w-100 btn btn-lg btn-primary" type="submit">Se connecterp</button>
                <hr class="my-4">
                <small class="text-body-secondary">En vous connectant vous acceptez les termes & conditions de l'app.</small>
                </form>
            </div>
    </div>

    </div>
</div>
@endsection

