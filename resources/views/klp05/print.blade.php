<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Print KP</title>
</head>

<body>
    @foreach($printkp as $print) <br><br>
    <center><strong>PRINT KP</strong></center> <br> <br>
                <div class="container">
                        <table class="table table-responsive-sm table-bordered table-striped table-sm">
                            <tbody>
                            <tr>
                                <th>ID KP</th>
                                <td>{{ $print->id }}</td>
                            </tr>
                            <tr>
                                <th>Nama Mahasiswa</th>
                                <td>{{ $print->name }} <br>
                                    <small>{{ $print->nim }}</small>
                                </td>
                            </tr>
                            <tr>
                                <th>Judul KP</th>
                                <td>{{ $print->title }}<</td>
                            </tr>
                            <tr>
                                <th>Dosen Pembimbing</th>
                                <td>{{ $print->dospem }}<br>
                                <small>{{$print->nip}}</small></td>
                            </tr>
                            <tr>
                                <th>Mulai/Berakhir pada</th>
                                <td>{{ $print->start_at }} s/d {{ $print->end_at }}</td>
                            </tr>
                            <tr>
                                <th>Waktu Seminar</th>
                                <td>{{ $print->seminar_date }}
                                    <br><small>{{ $print->seminar_time }}</small>
                                </td>
                            </tr>
                            <tr>
                                <th>Ruangan Seminar</th>
                                <td>{{ $print->room }}</td>
                            </tr>
                            <tr>
                                <th>Tempat KP</th>
                                
                                <td>{{ $print->building }}</td>
                                
                            </tr>
                            </tbody>
                        </table>

                    
                        <table class="table table-responsive-sm table-bordered table-striped " style="width: 90px;text-align: center;">
                            <tr>
                                <th>Grade</th>
                            </tr>
                            <tr>
                                <td>{{ $print->grade }}</td>
                            </tr>
                        </table>
                    
                </div>
    @endforeach
</body>

</html>