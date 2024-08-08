<?php

class cuti{

    public $connection;

    public function __construct(){

        $this->connection = mysqli_connect("localhost", "root", "", "cuti");
        if (mysqli_connect_error()) {
            echo "Koneksi gagal: " . mysqli_connect_error();
        }
    }

    public function tambah($tgl , $nama , $jabatan , $unit_kerja , $nip , $masa_kerja , $jenis_cuti_id , $alasan_cuti , $catatan_cuti_id , $alamat_selama_cuti , $perubahan , $ditangguhkan , $ttd_dsn , $ttd_atasan , $awal_cuti , $akhir_cuti , $status , $telepon , $keterangan , $dosen_id){
        $query = "INSERT INTO cuti_dosen VALUE('','$tgl','$nama','$jabatan','$unit_kerja','$nip','$masa_kerja', '$jenis_cuti_id','$alasan_cuti','$catatan_cuti_id','$alamat_selama_cuti','$perubahan','$ditangguhkan','$ttd_dsn','$ttd_atasan','$awal_cuti','$akhir_cuti','$status','$telepon','$keterangan','$dosen_id')";
        mysqli_query($this->connection, $query);
    }

    public function edit($id){
        $query = "SELECT * FROM cuti_dosen WHERE cuti_id = $id";
        $result = mysqli_query($this->connection,$query);
        return mysqli_fetch_array($result);
    }

    public function update($id, $tgl , $nama , $jabatan , $unit_kerja , $nip , $masa_kerja , $jenis_cuti_id , $alasan_cuti , $catatan_cuti_id , $alamat_selama_cuti , $perubahan , $ditangguhkan , $ttd_dsn , $ttd_atasan , $awal_cuti , $akhir_cuti , $status , $telepon , $keterangan , $dosen_id){
        $query = "UPDATE cuti_dosen SET tgl_pengisisan_form='$tgl',nama='$nama',jabatan='$jabatan',unit_kerja='$unit_kerja',nip='$nip',masa_kerja='$masa_kerja', jenis_cuti_id='$jenis_cuti_id',alasan_cuti='$alasan_cuti',catatan_cuti_id='$catatan_cuti_id',alamat_selama_cuti='$alamat_selama_cuti',perubahan='$perubahan',ditangguhkan='$ditangguhkan',ttd_dsn='$ttd_dsn',ttd_atasan='$ttd_atasan',awal_cuti='$awal_cuti',akhir_cuti='$akhir_cuti',status='$status',telepon='$telepon',keterangan='$keterangan',dosen_id='$dosen_id' WHERE cuti_id = '$id'";
        mysqli_query($this->connection, $query);
    }

    public function hapus($id){
        $query = "DELETE FROM cuti_dosen WHERE cuti_id=$id";
        mysqli_query($this->connection, $query);
    }

    public function tampil(){
        $query = "SELECT * FROM cuti_dosen";
        return mysqli_query($this->connection, $query);
    }
}


class pilih extends cuti{

    public function jenis($id){
        $query = "SELECT * FROM `detail_jenis_cuti` WHERE `jenis_cuti_id` = $id";
        $result = mysqli_query($this->connection,$query);
        $row = mysqli_fetch_array($result);
        return $row['jenis_cuti'];
    }

    public function catatan($id){
        $query = "SELECT * FROM `detail_catatan_cuti` WHERE `catatan_cuti_id` = $id";
        $result = mysqli_query($this->connection,$query);
        $row = mysqli_fetch_array($result);
        return $row['nama_catatan_cuti'];
    }
}


class user extends cuti{
    
}