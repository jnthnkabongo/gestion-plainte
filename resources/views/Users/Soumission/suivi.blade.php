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
    <div class="container-fluid">
        <div class="card mt-2">
            <div class="card-header text-center">
                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8">
                        <div class="row g-3">
                            <div class="col-sm-9">
                              <input type="text" class="form-control" placeholder="Faites une recherche..." aria-label="City">
                            </div>
                            <div class="col-sm">
                                <button class="btn btn-primary w-100">Rechercher</button>
                            </div>

                          </div>
                    </div>
                    <div class="col-lg-2"></div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-hover table-bordered">
                    <head>
                        <th>N</th>
                        <th>N</th>
                        <th>N</th>
                        <th>N</th>
                        <th>N</th>
                        <th>N</th>
                        <th>N</th>
                    </head>
                    <body>
                        <tr>
                            <td></td>
                        </tr>
                    </body>
                  </table>
            </div>
            <div class="card-footer text-muted">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-end">
                      <li class="page-item disabled">
                        <a class="page-link">Previous</a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                      </li>
                    </ul>
                  </nav>
            </div>
        </div>
    </div>


@endsection
