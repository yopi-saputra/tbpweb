@extends('layouts.admin')

@section('breadcrumb')
@foreach($editnilai as $edit)
    {!! cui()->breadcrumb([
        'Home' => route('home'),
        'Daftar Mahasiswa Bimbingan' => route('frontend.interns.index'),
        'Detail KP' => route('frontend.interns.show', [$edit->nim]),
        'Edit Nilai' => route('frontend.intern-grades.edit', [$edit->id])
    ]) !!}

@endsection


@section('toolbar')

@endsection

@section('content')

<div class="row">
        <div class="col-md-12">
            <div class="card">
                <form action="/intern-grades/{{ $edit->id }}" method="post">
                @method('patch')
                @csrf
                <div class="card-header">
                    <strong> <i class="cil-pencil"></i> Form Penilaian KP</strong>
                </div>
                    <div class="card-body"> 
                        @include('klp05._formnilai')

                    </div>
                </form>

            </div>
        </div>
</div>
@endforeach
@endsection

