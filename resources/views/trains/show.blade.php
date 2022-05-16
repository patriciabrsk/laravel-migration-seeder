@extends ('layouts.main')

@section('title', 'Train details')

@section('main-content')
    <div class="container py-5">
        <div class="row">
            <div class="row text-center">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $train->azienda }} - {{ $train->codice_treno }}</h5>
                            <p class="card-text">{{ $train->orario_di_partenza }} {{ $train->stazione_di_partenza }} - {{ $train->stazione_di_arrivo }} {{ $train->orario_di_arrivo }}</p>
                            <p class="card-text">{{ $train->orario_di_partenza }} - {{ $train->orario_di_arrivo }}</p>
                            <p class="card-text">{{ $train->numero_carrozze }}</p>
                            <p class="card-text">{{ $train->in_orario ? 'In orario' : 'In ritardo' }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection