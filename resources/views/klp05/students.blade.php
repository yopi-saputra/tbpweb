@extends('layouts.admin')

@section('breadcrumb')
    {!! cui()->breadcrumb([
        'Home' => route('home'),
        'Daftar Mahasiswa Bimbingan' => route('frontend.interns.index'),
        'Index' => '#'
    ]) !!}
@endsection

@section('toolbar')
    {!! cui()->toolbar_btn(route('frontend.interns.index'), 'cil-playlist-add', 'Daftar Mahasiswa Bimbingan') !!}
@endsection

@section('content')

    <div class="card">

        <div class="card-header">
            <strong></strong>
        </div>

        <div class="card-body">
            <table class="table table-outline table-hover">
                <thead class="thead-light">
                <tr>
                    <th>Kode Internship</th>
                    <th>Nama Mahasiswa</th>
                    <th>Judul KP</th>
                    <th>Waktu Seminar</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @forelse($internships as $internship)
                    <tr>
                        <td>{{ $internship->id}}

                        </td>
                        <td>
                            <div>
                                {{ $internship->name}} <br>
                                <small>{{ $internship->nim }}</small>
                            </div>
                        </td>
                        <td>{{ $internship->title }}</td>
                        <td>{{ $internship->seminar_date }} <br> {{ $internship->seminar_time }}</td>
                        <td>
                            {!! cui()->btn_view(route('frontend.interns.show', [$internship->nim])) !!} 

                        </td>

                    </tr>
                @empty
                    <tr>
                        <td colspan="5">Belum ada proposal</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>

        <div class="card-footer">

        </div>

    </div>

@endsection