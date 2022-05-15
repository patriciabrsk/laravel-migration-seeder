@extends ('layouts.main')

@section('title', 'Trains')

@section('main-content')
    <div class="container py-5">
        <div class="row">
            <div class="col-12">
                <h2 class="text-uppercase">Movies</h2>
            </div>
            <div class="row row-cols-4 g-4 text-center">
                
                <div class="col">
                    <div class="card">
                        <img src="" class="card-img-top img-fluid" alt="">
                        <div class="card-body">
                            <h4 class="card-title"></h4>
                            <h5 class="card-title"></h5>
                            <p class="card-text">
                                <strong>Nationality:</strong> <br>
                                <strong>Release date:</strong> <br>
                                <strong>Rating:</strong> <br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection