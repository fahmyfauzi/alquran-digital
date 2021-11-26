@extends('layouts.app')


@section('content')
<section>
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <form class="d-flex" action="/surat/cari" method="GET">
                    <input class="form-control me-2" type="text" name="cari" placeholder="Cari Surah" value="{{old('cari')}}">
                    <input type="submit" class="btn btn-outline-success" value="Cari">
                </form>
            </div>
        </div>
    </div>

    @if (count($errors) > 0)
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
        {{$error}}
        @endforeach
    </div>
    @endif


    <div class="container">
        <div class="row justify-content-center">
            @if(count($find)>0)
            <tr>
                @foreach($find as $f)
                <td>
                    <div class="card shadow-md m-2" style="width: 18rem;">
                        <div class="card-body">
                            <a href="{{route('detail.surah',$f['nomor'])}}" class="text-decoration-none">{{$f['nama']}}</a>
                            <p>{{$f['arti']}}</p>
                        </div>
                    </div>
                </td>
                @endforeach
            </tr>
            @else

            <p class="text-center justify-content-center alert alert-danger">Maaf surah yang anda cari tidak ditemukan</p>
            @endif
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#0d6efd" fill-opacity="1" d="M0,160L60,170.7C120,181,240,203,360,202.7C480,203,600,181,720,186.7C840,192,960,224,1080,213.3C1200,203,1320,149,1380,122.7L1440,96L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
    </svg>
</section>

@endsection