<?php
require_once 'cuti.php';
$all = new cuti();
$tampil = $all->tampil();
$pilih = new pilih();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="tambah.php">tambah cuti</a>
<table border=1>
        <tr>
            <th>No</th>
            <th>Tanggal pengisian form</th>
            <th>nama</th>
            <th>jabatan</th>
            <th>unit kerja</th>
            <th>nip</th>
            <th>masa kerja</th>
            <th>jenis cuti</th>
            <th>alasan cuti</th>
            <th>catatan cuti</th>
            <th>alamat selama cuti</th>
            <th>perubahan</th>
            <th>ditangguhkan</th>
            <th>ttd dsn</th>
            <th>ttd atasan</th>
            <th>awal cuti</th>
            <th>akhir cuti</th>
            <th>status</th>
            <th>telepon</th>
            <th>keterangan</th>
            <th>dosen</th>
            <th>aksi</th>
        </tr>
        <?php
        $no = 1;
        foreach($tampil as $row){
        ?>
        <tr>
            <td><?php echo $no++?></td>
            <td><?php echo $row['tgl_pengisisan_form']?></td>
            <td><?php echo $row['nama']?></td>
            <td><?php echo $row['jabatan']?></td>
            <td><?php echo $row['unit_kerja']?></td>
            <td><?php echo $row['nip']?></td>
            <td><?php echo $row['masa_kerja']?></td>
            <td><?php echo $pilih->jenis($row['jenis_cuti_id'])?></td>
            <td><?php echo $row['alasan_cuti']?></td>
            <td><?php echo $pilih->catatan($row['catatan_cuti_id'])?></td>
            <td><?php echo $row['alamat_selama_cuti']?></td>
            <td><?php echo $row['perubahan']?></td>
            <td><?php echo $row['ditangguhkan']?></td>
            <td><?php echo $row['ttd_dsn']?></td>
            <td><?php echo $row['ttd_atasan']?></td>
            <td><?php echo $row['awal_cuti']?></td>
            <td><?php echo $row['akhir_cuti']?></td>
            <td><?php echo $row['status']?></td>
            <td><?php echo $row['telepon']?></td>
            <td><?php echo $row['keterangan']?></td>
            <td><?php echo $row['dosen_id']?></td>
            <td><a href="edit.php?id=<?php echo $row['cuti_id']?>">edit</a>
            <a href="edit.php?id=<?php echo $row['cuti_id']?>">hapus</a></td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>