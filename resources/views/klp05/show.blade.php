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
{!! cui()->btn(route('frontend.interns.logbooks.index', [$detailkape->nim]),'cil-address-book', ' Lihat Logbook') !!}
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
                    <div>{{ $detailkape->field_advisor_name }}</div><small>{{ $detailkape->field_advisor_no}}</small> / <small>{{ $detailkape->field_advisor_phone}}</small> / <small>{{ $detailkape->field_advisor_email}}</small>
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
                    <div><strong>File Report Receipt</strong></div>
                    <a href={{ asset('assets/file/file_report_receipt/'. $detailkape->file_report_receipt) }}>{{ $detailkape->file_report_receipt }}</a>
            </div>
            </div>

            <div class="card-body">
                <div class="form-group">
                    <div><strong>File Field Grade</strong></div>
                    <a href={{ asset('assets/file/file_field_grade/'. $detailkape->file_field_grade) }}>{{ $detailkape->file_field_grade }}</a>
            </div>
            </div>

            <div class="card-body">
                <div class="form-group">
                    <div><strong>File Logbook</strong></div>
                    <a href={{ asset('assets/file/file_logbook/'. $detailkape->file_logbook) }}>{{ $detailkape->file_logbook }}</a>
            </div>
            </div>

            <div class="card-body">
                <div class="form-group">
                    <div><strong>File Seminar Attendance</strong></div>
                    <a href={{ asset('assets/file/file_seminar_attendance/'. $detailkape->file_seminar_attendance) }}>{{ $detailkape->file_seminar_attendance }}</a>
            </div>
            </div>

            <div class="card-body">
                <div class="form-group">
                    <div><strong>File Seminar Off Report</strong></div>
                    <a href={{ asset('assets/file/file_seminar_off_report/'. $detailkape->file_seminar_off_report) }}>{{ $detailkape->file_seminar_off_report }}</a>
            </div>
            </div>

            <div class="card-body">
                <div class="form-group">
                    <div><strong>File Report</strong></div>
                    <a href={{ asset('assets/file/file_report/'. $detailkape->file_report) }}>{{ $detailkape->file_report }}</a>
            </div>
            </div>

            <div class="card-body">
                <div class="form-group">
                    <div><strong>File Certificate</strong></div>
                    <a href={{ asset('assets/file/file_certificate/'. $detailkape->file_certificate) }}>{{ $detailkape->file_certificate }}</a>
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
                            {!! cui()->btn(route('frontend.intern-grades.edit', [$detailkape->id]),'cil-pen', ' Edit Nilai') !!}
                        @else
                            <div><strong style="color:red">Belum dinilai</strong></div> <br>
                            {!! cui()->btn(route('frontend.intern-grades.edit', [$detailkape->id]),'cil-pen', ' Input Nilai') !!}
                        @endif
                    </div>
                </div>
            </div>
            
            <div class="card">
                {!! cui()->btn(route('frontend.interns.index'),'cid-backspace', ' Kembali') !!}
            </div>
            <!-- <div class="card">
                <a class="btn btn-warning" href="/intern-grades/{{$detailkape->id}}/print">Print</a> 
            </div> -->
            
        </div>


    </div>
    @endforeach

@endsection
