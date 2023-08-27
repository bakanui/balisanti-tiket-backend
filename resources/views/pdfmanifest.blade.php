<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Manifest {{$data->nama_armada}}</title>
    <style>
        #penumpangs tr td {
            border: 1px solid black;
        }
        #penumpangs {
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <h4 style="text-align:center;">DETAIL PENUMPANG BOAT {{strtoupper($data->nama_armada)}}</h4>
    <table>
        <tr>
            <td style="width:400px;">Total Penumpang : {{$data->total}}</td>
            <td style="width:100px;">Nama Kapal</td>
            <td>: {{$data->nama_kapal}}</td>
        </tr>
        <tr>
            <td></td>
            <td>Tujuan</td>
            <td>: Dermaga {{$data->tujuan_akhir}}</td>
        </tr>
        <tr>
            <td></td>
            <td>Jam</td>
            <td>: {{$time}} WITA</td>
        </tr>
        <tr>
            <td></td>
            <td>Tanggal</td>
            <td>: {{$date}}</td>
        </tr>
    </table>
    <br><br>
    <table id="penumpangs">
        <thead>
            <tr>
                <td style="font-weight:bold;">No</td>
                <td style="width:180px;font-weight:bold;">Nama Penumpang</td>
                <td style="width:150px;font-weight:bold;">No Identitas</td>
                <td style="font-weight:bold;">L/P</td>
                <td style="width:200px;font-weight:bold;">Alamat</td>
                <td style="width:100px;font-weight:bold;">Keterangan</td>
            </tr>
        </thead>
        <tbody>
            @foreach($penumpangs as $no => $penumpang)
            <tr>
                <td>{{$no+1}}</td>
                <td>{{$penumpang->nama_penumpang}}</td>
                <td>{{$penumpang->no_identitas}}</td>
                <td>{{($penumpang->jenis_kelamin == 0) ? 'L' : 'P'}}</td>
                <td>{{$penumpang->alamat}}</td>
                <td>{{$penumpang->nama_tujuan}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br><br><br>
    <table style="margin-left:50px;">
        <tr>
            <td style="width:400px;">{{$data->nama_armada}}</td>
            <td>Nahkoda</td>
        </tr>
        <tr>
            <td height="125">( .............................. )</td>
            <td>( {{$data->nama_nahkoda}} )</td>
        </tr>
    </table>
</body>
</html>