<style>
table {
    border-left: 0.01em solid #ccc;
    border-right: 0;
    border-top: 0.01em solid #ccc;
    border-bottom: 0;
    border-collapse: collapse;
}
table td,
table th {
    border-left: 0;
    border-right: 0.01em solid #ccc;
    border-top: 0;
    border-bottom: 0.01em solid #ccc;
    text-align:center;
}
</style>
<div class="list-container " style="overflow-x: scroll;">
<div class="row" style="width:100%;display:flex">
    <div>
        <p style="font-size:10px;margin:1px">DIREKTORAT JENDRAL PERHUBUNGAN LAUT</p>
        <p style="font-size:10px;text-transform:uppercase;margin:1px">KANTOR UNIT PENYELENGGAR PELABUHAN <?php echo $details[0]->lokasi_dermaga?></p>
        <p style="font-size:10px;margin:1px">KANTOR INDUK</p>
    </div>
    <div style="margin-left:700px">
        <p style="font-size:10px;margin:1px">LAPORAN HARIAN KEGIATAN OPERASIONAL DI PELABUHAN</p>
        <p style="font-size:10px;text-transform:uppercase;margin:1px">YANG TIDAK DIUSAHAKAN SECARA KOMERSIAL</p>
        <p style="font-size:10px;margin:1px;text-transform:uppercase;">HARI : <?php echo $hari_bulan_tahun?></p>
    </div>
</div>
        <table class="table table-bordered table-hover table-responsive" style="font-size:10px;">
            <thead>
                <tr >
                    <th rowspan="3">No</th>
                    <th rowspan="3">Nama Kapal Jenis Pelayaran</th>
                    <th rowspan="3">Bendera</th>
                    <th rowspan="3">Pemilik/Agent</th>
                    <th colspan="3">Ukuran</th>
                    <th colspan="3">Tiba</th>
                    <th colspan="3">Tambat</th>
                    <th colspan="3">Berangkat</th>
                    <th colspan="4">Perdagangan Dalam Negeri</th>
                    <th colspan="4">Perdagangan Luar Negeri</th>
                    <th colspan="2">Penumpang</th>
                    <th rowspan="3">Ket/Trip</th>
                </tr>
                <tr>
                    <th rowspan="2">Panjang Kapal</th>
                    <th rowspan="2">GRT</th>
                    <th rowspan="2">DWT</th>
                    <th rowspan="2">Tgl</th>
                    <th rowspan="2">Jam</th>
                    <th rowspan="2">Pelabuhan Asal</th>
                    <th rowspan="2">Tgl</th>
                    <th rowspan="2">Jam</th>
                    <th rowspan="2">Jenis</th>
                    <th rowspan="2">Tgl</th>
                    <th rowspan="2">Jam</th>
                    <th rowspan="2">Pelabuhan Tujuan</th>
                    <th colspan="2">Bongkar</th>
                    <th colspan="2">Muat</th>
                    <th colspan="2">Import</th>
                    <th colspan="2">Export</th>
                    <th rowspan="2">Debar Kasi (Naik)</th>
                    <th rowspan="2">Embar Kasi (Turun)</th>

                </tr>
                <tr>
                    <th>Jenis Brg/Hewan</th>
                    <th>Jenis Kemasan</th>
                    <th>Jenis Brg/Hewan</th>
                    <th>Jenis Kemasan</th>
                    <th>Jenis Brg/Hewan</th>
                    <th>Jenis Kemasan</th>
                    <th>Jenis Brg/Hewan</th>
                    <th>Jenis Kemasan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($details as $key => $data) { ?>
                    <tr>
                        <td><?php echo $key + 1 ?></td>
                        <td><?php echo $data->nama_kapal ?></td>
                        <td>RI</td>
                        <td><?php echo $data->nama_armada ?></td>
                        <td><?php echo $data->panjang ?>m</td>
                        <td><?php echo $data->grt ?></td>
                        <td><?php echo $data->dwt ?></td>
                        <td><?php echo $data->bulan ?></td>
                        <td>-</td>
                        <td><?php echo $data->tujuan_awal ?></td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td><?php echo $data->bulan ?></td>
                        <td>-</td>
                        <td><?php echo $data->tujuan_akhir  ?></td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>
                            <?php if ($data->jml_penumpang != null) {
                                echo $data->jml_penumpang;
                            } else {
                                echo '0';
                            } ?>
                        </td>
                        <td>
                            <?php if ($data->jml_penumpang != null) {
                                echo $data->jml_penumpang;
                            } else {
                                echo '0';
                            } ?>
                        </td>
                        <td>
                            <?php echo $data->count_trip ?>
                        </td>
                    </tr>
                <?php 
                } ?>
            </tbody>
        </table>
    </div>