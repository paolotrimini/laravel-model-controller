    @extends('layouts.main-layout')

    @section('content')
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Movie informations:</h2>
                    <p>
                        Original title: [{{ $movie -> original_title }}]
                    </p>
                    <p>
                        Nationality: {{ $movie -> nationality }}
                    </p>
                    <p>
                        Release date: {{ $movie -> date }}
                    </p>
                    <p>
                        Vote: {{ $movie -> vote }}
                    </p>
                </div>
            </div>
        </div>
    @endsection
