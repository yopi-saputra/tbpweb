@extends('layouts.admin')

@section('breadcrumb')
@foreach($detailkp as $detailkape)
    {!! cui()->breadcrumb([
        'Home' => route('home'),
        'Daftar Mahasiswa Bimbingan' => route('frontend.interns.index'),
        'Detail KP' => '#'
    ]) !!}

@endsection


@section('toolbar')

@endsection

@section('content')

    <div class="row">
        <div class="col-md-9">
        <div class="card">

            <div class="card-header">
                    <strong><i class="cil-user"></i>Detail KP </strong><br><small></small>
            </div>

            <div class="card-body">
                <div class="form-group">
                    <div><strong>ID Internship</strong></div>
                    <div>{{ $detailkape->id }}</div>
            </div>
            </div>

            <div class="card-body">
                <div class="form-group">
                    <div><strong>Nama Mahasiswa</strong></div>
                    <div>{{$detailkape->student}}</div>
                    <small> {{$detailkape->nim}}</small>
            </div>
            </div>

            <div class="card-body">
                <div class="form-group">
                    <div><strong>Mulai Tanggal</strong></div>
                    <div>{{ $detailkape->start_at }}</div>
            </div>
            </div>

            <div class="card-body">
                <div class="form-group">
                    <div><strong>Berakhir Tanggal</strong></div>
                    <div>{{ $detailkape->end_at }}</div>
            </div>
            </div>

            <div class="card-body">
                <div class="form-group">
                    <div><strong>Judul KP</strong></div>
                    <div>{{ $detailkape->title }}</div>
            </div>
            </div>

            <div class="card-body">
                <div class="form-group">
                    <div><strong>Nama Pembimbing</strong></div>
                    <div>{{ $detailkape->dospem }}</div>
            </div>
            </div>

            <div class="card-body">
                <div class="form-group">
                    <div><strong>Jadwal Seminar</strong></div>
                    <div>{{ $detailkape->seminar_date }}</div> <small>{{ $detailkape->seminar_time }}</small>
            </div>
            </div>

            <div class="card-body">
                <div class="form-group">
                    <div><strong>Ruang Seminar</strong></div>
                    <div>{{ $detailkape->room }}</div>
            </div>
            </div>

            <div class="card-body">
                <div class="form-group">
                    <div><strong>Perusahaan KP</strong></div>
                    <div>{{ $detailkape->name }}</div>
            </div>
            </div>


            
        </div>
        </div>

        <div class="col-md-3">
            @if (Session::has('message'))
                <div class="alert alert-success">
                    {!! Session::get('message') !!}
                </div>
            @endif
            <div class="card">
                {{-- CARD HEADER--}}
                <div class="card-header">
                    <strong><i class="cil-notes"></i> Grade</strong>
                </div>
                {{-- CARD BODY--}}
                <div class="card-body">
                    <div class="text-center">
                        @if(isset($detailkape->grade))
                            <div>{{ $detailkape->grade }}</div><br>
                            <a class="btn btn-success" href="/intern-grades/{{ $detailkape->id }}/edit">Edit Nilai</a>
                        @else
                            <div><strong style="color:red">Belum dinilai</strong></div> <br>
                            <!-- <div>{!! cui()->btn_edit(route('frontend.intern-grades.edit', [$detailkape->id]),' Input Nilai') !!}</div> -->
                            <a class="btn btn-success" href="/intern-grades/{{ $detailkape->id }}/edit">Input Nilai</a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="card">
                <a class="btn btn-primary" href="/interns/{{ $nim=$detailkape->nim }}/logbooks">Lihat Logbooks</a>            
            </div>
            <div class="card">
                <a class="btn btn-warning" href="/interns">Kembali</a> 
            </div>
            <!-- <div class="card">
                <a class="btn btn-warning" href="/intern-grades/{{$detailkape->id}}/print">Print</a> 
            </div> -->
            
        </div>


    </div>
    @endforeach

@endsection