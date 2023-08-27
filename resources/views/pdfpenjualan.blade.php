<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Penjualan</title>
    <style>
        #penumpangs thead tr td {
            border: 1px solid black;
            text-align: center;
        }
        #penumpangs tbody tr td {
            border: 1px solid black;
        }
        #penumpangs {
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <table id="penumpangs">
        <thead>
            <tr>
                <td style="width:30px;" rowspan="2">No</td>
                <td style="width:90px;" rowspan="2">Tanggal</td>
                <td style="width:90px;" rowspan="2">No. Tiket</td>
                <td style="width:90px;" rowspan="2">Agent</td>
                <td style="width:200px;" rowspan="2">Nama Penumpang</td>
                <td style="width:50px;" rowspan="2">Jam</td>
                <td style="width:100px;" rowspan="2">Kewarganegaraan</td>
                <td colspan="2">Pax</td>
                <td rowspan="2">Total Pax</td>
                <td colspan="2">Harga</td>
                <td style="width:100px;" rowspan="2">Total</td>
                <td colspan="3">Sistem Pembayaran</td>
                <td style="width:200px;" rowspan="2">Keterangan</td>
            </tr>
            <tr>
                <td style="width:60px;">Dewasa</td>
                <td style="width:60px;">Anak</td>
                <td style="width:60px;">Dewasa</td>
                <td style="width:60px;">Anak</td>
                <td style="width:60px;">Cash</td>
                <td style="width:60px;">Piutang</td>
                <td style="width:60px;">Transfer</td>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $key => $d)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$d->tanggal}}</td>
                <td>{{$d->nomor_tiket}}</td>
                <td>{{$d->agent}}</td>
                <td>{{$d->nama_penumpang}}</td>
                <td>{{$d->jam}}</td>
                <td>{{$d->kewarganegaraan}}</td>
                <td>{{($d->nama_tiket == 'Dewasa') ? 'X' : ''}}</td>
                <td>{{($d->nama_tiket == 'Anak') ? 'X' : ''}}</td>
                <td></td>
                <td style="text-align:right;">{{($d->nama_tiket == 'Dewasa') ? $d->harga : ''}}</td>
                <td style="text-align:right;">{{($d->nama_tiket == 'Anak') ? $d->harga : ''}}</td>
                <td style="text-align:right;">{{$d->harga}}</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>    
</html>