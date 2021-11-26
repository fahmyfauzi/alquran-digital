@extends('layouts.app')

@section('title')
Al-Quran Digital
@endsection

@section('content')

@if (count($errors) > 0)
<div class=" alert alert-danger justify-content-center">
    <div class="col-md-10">
        @foreach ($errors->all() as $error)
        {{$error}}
        @endforeach
    </div>

</div>
@endif
<section>
    <div class="container">
        <div class="row justify-content-center " style="margin-bottom: 3rem;">
            <div class="col-md-10 ">
                <form class="d-flex" action="/surat/cari" method="GET">
                    <input class="form-control me-2" type="text" name="cari" value="{{old('cari')}}" placeholder="Cari Surah">
                    <input type="submit" class="btn btn-outline-success" name="submit" value="Cari">
                </form>
            </div>
        </div>
    </div>



    <div class="container pt-10">
        <div class="row justify-content-center">
            <tr>
                @foreach ($data as $d)
                <td>
                    <div class="card shadow-md m-2" style="width: 18rem;">
                        <div class="card-body">
                            <a href="{{route('detail.surah',$d['nomor'])}}" class="text-decoration-none">{{$d['nomor']}}. {{ $d['nama'] }}</a>
                            <p>{{$d['arti']}}</p>
                        </div>
                    </div>
                </td>
                @endforeach
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#0d6efd" fill-opacity="1" d="M0,160L60,170.7C120,181,240,203,360,202.7C480,203,600,181,720,186.7C840,192,960,224,1080,213.3C1200,203,1320,149,1380,122.7L1440,96L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
    </svg>
</section>
@endsection