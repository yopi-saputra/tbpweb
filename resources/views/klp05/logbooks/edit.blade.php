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
        @if (Session::has('message'))
                      <div class="alert alert-warning alert-dismissible fade show" role="alert">{!! Session::get('message') !!}
                        <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                      </div>
        @endif
            <div class="card">
            @foreach($editlogbooks as $edit)
                <!-- <form action="/interns/{{$nim=$edit->nim}}/logbooks/{{$id=$edit->id}}" method="post">
                @method('patch')
                @csrf -->
                {{ html()->form('PUT', route('frontend.interns.logbooks.update', [$edit->nim, $edit->id]))->open() }}
                <div class="card-header">
                    <strong> <i class="cil-pencil"></i> Form Tanggapan Logbook KP</strong>
                </div>
                    <div class="card-body"> 
                    @include('klp05.logbooks._formedit')

                    </div>
                <!-- </form> -->
                {{ html()->form()->close() }}

            </div>
        </div>
</div>
@endforeach
@endsection
