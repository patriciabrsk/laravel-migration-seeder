@extends ('layouts.main')

@section('title', 'Trains')

@section('main-content')
    <div class="container py-5">
        <div class="row">
            <div class="row row-cols-4 g-4">
                @foreach ($trains as $train)
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="{{ route('trains.show', $train->id) }}">
                                    {{ $train->azienda }} - {{ $train->codice_treno }}
                                </a>
                            </h5>
                            <p class="card-text">{{ $train->orario_di_partenza }} {{ $train->stazione_di_partenza }} - {{ $train->stazione_di_arrivo }} {{ $train->orario_di_arrivo }}</p>
                            <p class="card-text">{{ $train->orario_di_partenza }} - {{ $train->orario_di_arrivo }}</p>
                            <p class="card-text">{{ $train->numero_carrozze }}</p>
                            <p class="card-text">{{ $train->in_orario ? 'In orario' : 'In ritardo' }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="col-12 py-5 d-flex justify-content-center">
                {{ $trains->links() }}
            </div>
        </div>
    </div>
@endsection