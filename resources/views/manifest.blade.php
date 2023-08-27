<style>
table.bordered {
    border-left: 1px solid black;
    border-right: 0;
    border-top: 1px solid black;
    border-bottom: 0;
    border-collapse: collapse;
}
table.bordered td,
table.bordered th {
    border-left: 0;
    border-right: 1px solid black;
    border-top: 0;
    border-bottom: 1px solid black;
    text-align:initial!important;
}
tbody tr td{
    text-align:inherit!important;
}
</style>
<div class="list-container " >
<h4 style=" font-size:15px;text-transform:uppercase; text-align:center;">Detail Penumpang Boat <?php echo $detail->nama_armada; ?></h4>
    <div class="row" style="width:100%;display:flex">
            <table>
                <tr >
                    <td>Total Penumpang : </td>
                    <td style="width:300px"><?php if (isset($detail->jml_penum)) {
                                            echo $detail->jml_penum;
                                        } else {
                                            echo '0';
                        } ?>
                    </td>
                    
                    <td >Nama Kapal</td>
                    <td> : <?php echo $detail->nama_kapal ?></td>
                </tr>
                <tr >
                    <td></td>
                    <td style="width:300px">
                    </td>
                    <td >Tujuan</td>
                    <td> : Dermaga <?php echo $detail->tujuan_akhir ?></td>
                </tr>
                <tr >
                    <td></td>
                    <td style="width:300px">
                    </td>
                    <td >Jam</td>
                    <td> : <?php echo date("H:i", strtotime($detail->jadwal)) ?> WITA</td>
                </tr>
                <tr >
                    <td></td>
                    <td style="width:300px">
                    </td>
                    <td >Tanggal</td>
                    <td> : <?php echo date(" d F Y ", strtotime($detail->tanggal_berangkat)) ?></td>
                </tr>
            </table>
    </div>
    <div style="width:100%;">
    <br>
        <table class="bordered" style="width:100%;">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Penumpang</th>
                    <th>No Identitas</th>
                    <th>L/P</th>
                    <th>Alamat</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <?php $x = 1;
                foreach ($detail2 as $data) { ?>
                    <tr>
                        <td><?php echo $x ?></td>
                        <td style="text-align: inherit!important;"><span><?php echo $data->nama_penumpang ?></td>
                        <td style="text-align: inherit!important;"><?php echo $data->no_identitas ?></td>
                        <td style="text-align: inherit!important;">
                            <?php if ($data->jenis_kelamin == 0) {
                                echo 'L';
                            } else {
                                echo 'P';
                            } ?>
                        </td>
                        <td style="text-align: inherit!important;"><?php echo $data->alamat ? $data->alamat : '-' ?></td>
                        <td style="text-align: inherit!important;"><?php echo $data->nama_tujuan ?></td>
                    </tr>
                <?php $x++;
                } ?>
            </tbody>
        </table>
    </div>
    <br>
    <br>
    <div class="row" style="width:100%;display:flex">
            <table>
                <tr >
                    <td style="width:350px">
                        <p style="text-align:center;margin:0"><?php echo $detail->nama_armada; ?></p>
                        <p style="height:30px"></p>
                    </td >
                    <td style="width:350px">
                        <p style="text-align:center;margin:0">Nahkoda</p>
                        <p style="height:30px"></p>
                    </td>
                </tr>
                <tr>
                    <td  style="width:350px">
                        <p style="text-align:center;margin:0">(......................................)</p>
                    </td>
                    <td style="width:350px">
                        <p style="text-align:center;margin:0">( <?php echo $detail->nama_nahkoda ?> )</p>
                    </td>
                </tr>
            </table>
</div>
