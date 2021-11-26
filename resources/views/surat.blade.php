@extends('layouts.app')

@section('title')
{{$datadetail['nama_latin']}}
@endsection

@section('content')

<section>
    <div class="justify-content-center text-md-center mb-4">
        <h1>{{$datadetail['nama']}}</h1>
    </div>
    <div>
        <ul class="list-inline text-end" style="direction: rtl;">
            @foreach($datadetail['ayat'] as $surah)

            <li class="list-inline-item m-3">
                <h4 class="text-wrap "> {{$surah['ar']}} {{$surah['nomor']}}</h4>
            </li>
            @endforeach
        </ul>
    </div>

</section>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#0d6efd" fill-opacity="1" d="M0,160L60,170.7C120,181,240,203,360,202.7C480,203,600,181,720,186.7C840,192,960,224,1080,213.3C1200,203,1320,149,1380,122.7L1440,96L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
</svg>
</section>
@endsection