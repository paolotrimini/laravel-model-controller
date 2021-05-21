    @extends('layouts.main-layout')

    @section('content')
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Movies list:</h2>
                    <ul>
                        @foreach($movies as $movie)
                            <li>
                                <a href="{{ route('movie', $movie -> id) }}">
                                    {{ $movie -> title }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    @endsection
