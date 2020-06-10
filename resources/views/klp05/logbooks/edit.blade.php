@extends('layouts.admin')

@section('breadcrumb')

    {!! cui()->breadcrumb([
        'Home' => route('home'),
        'Daftar Mahasiswa Bimbingan' => route('frontend.interns.index'),
        'Detail KP' => route('frontend.interns.show', [$nim]),
        'Daftar Logbook' => route('frontend.interns.logbooks.index', [$nim]),
        'Form Tanggapan' => '#'
    ]) !!}

@endsection


@section('toolbar')

@endsection

@section('content')

<div class="row">
        <div class="col-md-12">
            <div class="card">
            @foreach($editlogbooks as $edit)
                <form action="/interns/{{$nim=$edit->nim}}/logbooks/{{$id=$edit->id}}" method="post">
                @method('patch')
                @csrf
                <div class="card-header">
                    <strong> <i class="cil-pencil"></i> Form Tanggapan Logbook KP</strong>
                </div>
                    <div class="card-body"> 
                    @include('klp05.logbooks._formedit')

                    </div>
                </form>

            </div>
        </div>
</div>
@endforeach
@endsection