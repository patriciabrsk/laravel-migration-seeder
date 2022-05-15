@extends ('layouts.main')

@section('title', 'Trains')

@section('main-content')
    <div class="container py-5">
        <div class="row">
            <div class="col-12">
                <h2 class="text-uppercase">Movies</h2>
            </div>
            <div class="row row-cols-4 g-4 text-center">
                @foreach ($trains as $train)
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $train->azienda }} - {{ $train->codice_treno }}</h5>
                            <p class="card-text">{{ $train->orario_di_partenza }} {{ $train->stazione_di_partenza }} - {{ $train->stazione_di_arrivo }} {{ $train->orario_di_arrivo }}</p>
                            <p class="card-text">{{ $train->orario_di_partenza }} - {{ $train->orario_di_arrivo }}</p>
                            <p class="card-text">{{ $train->numero_carrozze }}</p>
                            <p class="card-text">{{ $train->in_orario ? 'In orario' : 'Cancellato' }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection