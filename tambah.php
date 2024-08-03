<?php
require_once 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <form action="koneksi.php?action=add" method="post">
            <tr>
            <td>
            <label>Tanggal</label>
</td>
<td>
            <input type="date" value="<?php echo date('Y-m-d') ?>" readonly name="tgl">
            </td>
            </tr>
            <tr>
            <td>
            <label>Nama</label>
</td>
<td>
            <input type="text" name="nama">
            </td>
            </tr>
            <tr>
            <td>
            <label>Jabatan</label>
</td>
<td>
            <input type="text" name="jabatan">
            </td>
            </tr>
            <tr>
            <td>
            <label>Unit Kerja</label>
</td>
<td>
            <input type="text" name="unit_kerja">
            </td>
            </tr>
            <tr>
            <td>
            <label>Nip</label>
</td>
<td>
            <input type="text" name="nip">
            </td>
            </tr>
            <tr>
            <td>
            <label>Masa Kerja</label>
</td>
<td>
            <input type="text" name="masa_kerja">
            </td>
            </tr>
            <tr>
            <td>
            <label>Jenis Cuti</label>
</td>
<td>
            <select name="jenis_cuti_id" >
            <option selected>pilih</option>
            <option value="1"><?php echo $pilih->jenis(1);?></option>
            <option value="2"><?php echo $pilih->jenis(2);?></option>
            </select>
            </td>
            </tr>
            <tr>
            <td>
            <label>Alasan Cuti</label>
</td>
<td>
            <textarea name="alasan_cuti"></textarea>
            </td>
            </tr>
            <tr>
            <td>
            <label>Catatan Cuti</label>
</td>
<td>
            <select name="catatan_cuti_id" >
            <option selected >pilih</option>
            <option value="1"><?php echo $pilih->catatan(1);?></option>
            <option value="2"><?php echo $pilih->catatan(2);?></option>
            </select>
            </td>
            </tr>
            <tr>
            <td>
            <label>Alamat selama cuti</label>
</td>
<td>
            <textarea name="alamat_selama_cuti"></textarea>
            </td>
            </tr>
            <tr>
            <td>
            <label>Perubahan</label>
</td>
<td>
            <input type="text" name="perubahan">
            </td>
            </tr>
            <tr>
            <td>
            <label>Ditangguhkan</label>
</td>
<td>
            <input type="text" name="ditangguhkan">
            </td>
            </tr>
            <tr>
            <td>
            <label>Tanda Tangan Dosen</label>
</td>
<td>
            <input type="text" name="ttd_dsn">
            </td>
            </tr>
            <tr>
            <td>
            <label>Tanda Tangan Atasan</label>
</td>
<td>
            <input type="text" name="ttd_atasan">
            </td>
            </tr>
            <tr>
            <td>
            <label>Awal Cuti</label>
</td>
<td>
            <input type="date" name="awal_cuti">
            </td>
            </tr>
            <tr>
            <td>
            <label>Akhir Cuti</label>
</td>
<td>
            <input type="date" name="akhir_cuti">
            </td>
            </tr>
            <tr>
            <td>
            <label>Status</label>
</td>
<td>
            <input type="text" name="status">
            </td>
            </tr>
            <tr>
            <td>
            <label>Telepon</label>
</td>
<td>
            <input type="text" name="telepon">
            </td>
            </tr>
            <tr>
            <td>
            <label>Keterangan</label>
</td>
<td>
            <input type="text" name="keterangan">
            </td>
            </tr>
            <tr>
            <td>
            <label>Dosen</label>
</td>
<td>
            <select name="dosen_id" >
            <option selected>pilih</option>
            <option value="1">Dosen TI</option>
            <option value="2">Dosen Elektro</option>
            </select>
            </td>
            </tr>
            <tr>
                <td>
            <a href="index.php"><input type="button" value="kembali"></a>
            <button type="submit" name="submit">Submit</button>
</td>
            </tr>
        </form>
    </table>
</body>
</html>