<?php
require_once 'cuti.php';
$cuti = new cuti();
$pilih = new pilih();
$tampil = $cuti->tampil();

if(!$_GET){
}
else if($_GET['action'] == "add"){
    $tambah = $cuti->tambah($_POST['tgl'],$_POST['nama'],$_POST['jabatan'],$_POST['unit_kerja'],$_POST['nip'],$_POST['masa_kerja'],$_POST['jenis_cuti_id'],$_POST['alasan_cuti'],$_POST['catatan_cuti_id'],$_POST['alamat_selama_cuti'],$_POST['perubahan'],$_POST['ditangguhkan'],$_POST['ttd_dsn'],$_POST['ttd_atasan'],$_POST['awal_cuti'],$_POST['akhir_cuti'],$_POST['status'],$_POST['telepon'],$_POST['keterangan'],$_POST['dosen_id']);
    header("location:index.php");
}else if($_GET['action'] == "update"){
    $edit = $cuti->update($_POST['cuti_id'],$_POST['tgl'],$_POST['nama'],$_POST['jabatan'],$_POST['unit_kerja'],$_POST['nip'],$_POST['masa_kerja'],$_POST['jenis_cuti_id'],$_POST['alasan_cuti'],$_POST['catatan_cuti_id'],$_POST['alamat_selama_cuti'],$_POST['perubahan'],$_POST['ditangguhkan'],$_POST['ttd_dsn'],$_POST['ttd_atasan'],$_POST['awal_cuti'],$_POST['akhir_cuti'],$_POST['status'],$_POST['telepon'],$_POST['keterangan'],$_POST['dosen_id']);
    header("location:index.php");
}else if($_GET['action'] == "delete"){
    $hapus = $cuti->hapus($_GET['id']);
    header("location:index.php");
}else if($_GET['action'] == "edit"){
    $tampil = $cuti->edit($_GET['id']);
}

