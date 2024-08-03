<?php

class cuti{

    public $connection, $tgl, $nama, $jabatan, $unit_kerja, $nip, $masa_kerja, $jenis_cuti_id, $alasan_cuti, $catatan_cuti_id, $alamat_selama_cuti, $perubahan, $ditangguhkan, $ttd_dsn, $ttd_atasan, $awal_cuti, $akhir_cuti, $status, $telepon, $keterangan, $dosen_id;

    public function __construct($tgl = '', $nama = '', $jabatan = '', $unit_kerja = '', $nip = '', $masa_kerja = '', $jenis_cuti_id = '', $alasan_cuti = '', $catatan_cuti_id = '', $alamat_selama_cuti = '', $perubahan = '', $ditangguhkan = '', $ttd_dsn = '', $ttd_atasan = '', $awal_cuti = '', $akhir_cuti = '', $status = '', $telepon = '', $keterangan = '', $dosen_id = ''){

        $this->connection = mysqli_connect("localhost", "root", "", "cuti");
        if (mysqli_connect_error()) {
            echo "Koneksi gagal: " . mysqli_connect_error();
        }
    
        $this->tgl = $tgl;
        $this->nama = $nama;
        $this->jabatan = $jabatan;
        $this->unit_kerja = $unit_kerja;
        $this->nip = $nip;
        $this->masa_kerja = $masa_kerja; 
        $this->jenis_cuti_id = $jenis_cuti_id;
        $this->alasan_cuti = $alasan_cuti;
        $this->catatan_cuti_id = $catatan_cuti_id;
        $this->alamat_selama_cuti = $alamat_selama_cuti;
        $this->perubahan = $perubahan;
        $this->ditangguhkan = $ditangguhkan;
        $this->ttd_dsn = $ttd_dsn;
        $this->ttd_atasan = $ttd_atasan;
        $this->awal_cuti = $awal_cuti;
        $this->akhir_cuti = $akhir_cuti;
        $this->status = $status;
        $this->telepon = $telepon;
        $this->keterangan = $keterangan;
        $this->dosen_id = $dosen_id;
    }

    public function tambah(){
        $query = "INSERT INTO cuti_dosen VALUE('','$this->tgl','$this->nama','$this->jabatan','$this->unit_kerja','$this->nip','$this->masa_kerja', '$this->jenis_cuti_id','$this->alasan_cuti','$this->catatan_cuti_id','$this->alamat_selama_cuti','$this->perubahan','$this->ditangguhkan','$this->ttd_dsn','$this->ttd_atasan','$this->awal_cuti','$this->akhir_cuti','$this->status','$this->telepon','$this->keterangan','$this->dosen_id')";
        mysqli_query($this->connection, $query);
    }

    public function edit($id){
        $query = "SELECT * FROM cuti_dosen WHERE cuti_id = $id";
        $result = mysqli_query($this->connection,$query);
        return mysqli_fetch_array($result);
    }

    public function update($id){
        $query = "UPDATE cuti_dosen SET tgl_pengisisan_form='$this->tgl',nama='$this->nama',jabatan='$this->jabatan',unit_kerja='$this->unit_kerja',nip='$this->nip',masa_kerja='$this->masa_kerja', jenis_cuti_id='$this->jenis_cuti_id',alasan_cuti='$this->alasan_cuti',catatan_cuti_id='$this->catatan_cuti_id',alamat_selama_cuti='$this->alamat_selama_cuti',perubahan='$this->perubahan',ditangguhkan='$this->ditangguhkan',ttd_dsn='$this->ttd_dsn',ttd_atasan='$this->ttd_atasan',awal_cuti='$this->awal_cuti',akhir_cuti='$this->akhir_cuti',status='$this->status',telepon='$this->telepon',keterangan='$this->keterangan',dosen_id='$this->dosen_id' WHERE cuti_id = '$id'";
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