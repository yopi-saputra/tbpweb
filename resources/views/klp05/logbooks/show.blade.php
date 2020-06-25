@extends('layouts.admin')

@section('breadcrumb')
    {!! cui()->breadcrumb([
        'Home' => route('home'),
        'Daftar Mahasiswa Bimbingan' => route('frontend.interns.index'),
        'Detail KP' => route('frontend.interns.show', [$nim]),
        'Daftar Logbook' => route('frontend.interns.logbooks.index', [$nim]),
        'Detail Logbook' => '#'    ]) !!}
@endsection

@section('toolbar')
    {!! cui()->toolbar_btn(route('profile.show'), 'cil-user', 'Profil') !!}
@endsection

@section('content')
@foreach($internshiplogbooks as $internshiplogbook)
    <div class="row">
        <div class="col-md-9">
            <div class="card">

                <div class="card-header">
                        <strong><i class="cil-list-rich"></i> Detail Logbook </strong><br><small></small>
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <div><strong>Judul KP</strong></div>
                        <div>{{ $internshiplogbook->title }}</div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <div><strong>Activity</strong></div>
                        <div>{{ $internshiplogbook->activity }}</div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <div><strong>Model in</strong></div>
                        <div>{{ $internshiplogbook->model_in }}</div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <div><strong>Manufacturer in</strong></div>
                        <div>{{ $internshiplogbook->manufacturer_in }}</div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <div><strong>Osver in</strong></div>
                        <div>{{ $internshiplogbook->osver_in }}</div>
                    </div>
                </div>
                
            </div> 
        </div>


        <div class="col-md-3">
            <div class="card">
                {{-- CARD HEADER--}}
                <div class="card-header">
                    <strong><i class="cil-notes"></i> Tanggapan</strong>
                </div>
                {{-- CARD BODY--}}
                <div class="card-body">
                    <div class="text-center">
                        @if(isset($internshiplogbook->notes))
                            <div>{{ $internshiplogbook->notes }}</div><br>
                        @else
                            <div><strong style="color:red">Belum ditanggapi</strong></div> <br>
                            
                        @endif
                    </div>
                </div>
            </div>
            <div class="card">
                <!-- <a class="btn btn-warning" href="/interns/{{$internshiplogbook->nim}}/logbooks">Kembali</a>  -->
                {!! cui()->btn(route('frontend.interns.logbooks.index', [$internshiplogbook->nim]),'cid-backspace', ' Kembali') !!}
            </div>
            
        </div>
    </div>
  
@endforeach
@endsection
