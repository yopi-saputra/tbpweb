@extends('layouts.admin')

@section('breadcrumb')

    {!! cui()->breadcrumb([
        'Home' => route('home'),
        'Daftar Mahasiswa Bimbingan' => route('frontend.interns.index'),
        'Detail KP' => route('frontend.interns.show', [$nim]),
        'Daftar Logbook' => route('frontend.interns.logbooks.index', [$nim])
        
    ]) !!}

@endsection

@section('toolbar')
    <!-- {!! cui()->toolbar_btn(route('frontend.interns.index'), 'cil-playlist-add', 'Daftar Mahasiswa Bimbingan') !!} -->
@endsection

@section('content')

    <div class="card">
 
                    @if (Session::has('message'))
                      <div class="alert alert-warning alert-dismissible fade show" role="alert">{!! Session::get('message') !!}
                        <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                      </div>
                      @endif

        <div class="card-header">
            <strong>Daftar Logbook</strong>
        </div>

        <div class="card-body">
        <table class="table table-outline table-hover">
                <thead class="thead-light">
                <tr>
                    <th>Judul KP</th>
                    <th>Tanggal</th>
                    <th>Check in / Check out</th>
                    <th>Aktivity</th> 
                    <th style="text-align: center;">Tanggapan</th>                   
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @forelse($internshiplogbooks as $internshiplogbook)
                    <tr>
                        <td>{{ $internshiplogbook->title}}</td>
                        <td>{{ $internshiplogbook->date}}</td>
                        <td>
                         {{$internshiplogbook->check_in_time}} <br>
                         s/d
                         {{$internshiplogbook->check_out_time}}
                        </td>
                        <td>{{$internshiplogbook->activity}}</td>
                        <td>
                            
                                @if(isset($internshiplogbook->notes))
                                <center>
                                    {{ $internshiplogbook->notes }} <br><br>
                                    <div class="col-md-3">
                                    <a class="btn btn-block btn-primary" href="/interns/{{$internshiplogbook->nim}}/logbooks/{{$internshiplogbook->id}}/edit"><span><i class="cil-pencil"></i></span></a>
                                    </div>
                                </center>
                                @else
                                    <center>
                                    <strong style="color:red">Belum ditanggapi</strong>
                                    <br><br>
                                    <div class="col-md-3">
                                    <a class="btn btn-block btn-success" href="/interns/{{$internshiplogbook->nim}}/logbooks/{{$internshiplogbook->id}}/edit"><i class="cil-pencil"></i></span></a>
                                    </div>
                                    </center>
                                @endif
                            
                        </td>
                        <td><a class="btn btn-block btn-info" href="/interns/{{$nim=$internshiplogbook->nim}}/logbooks/{{$id=$internshiplogbook->id}}">Show</a></td>

                    </tr>
                    @empty
                    <tr>
                        <td colspan="5">Belum ada Logbook</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            
        </div>

        <div class="card-footer">
        
        </div>

    </div>

@endsection