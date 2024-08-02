<?php

class cuti{

    public $connection, $id, $tgl, $nama, $jabatan, $unit_kerja, $nip, $masa_kerja, $jenis_cuti_id, $alasan_cuti, $catatan_cuti_id, $alasan_selama_cuti, $perubahan, $ditangguhkan, $ttd_dsn, $ttd_atasan, $awal_cuti, $akhir_cuti, $status, $telepon, $keterangan, $dosen_id;

    public function __construct($tgl = '', $nama = '', $jabatan = '', $unit_kerja = '', $nip = '', $masa_kerja = '', $jenis_cuti_id = '', $alasan_cuti = '', $catatan_cuti_id = '', $alasan_selama_cuti = '', $perubahan = '', $ditangguhkan = '', $ttd_dsn = '', $ttd_atasan = '', $awal_cuti = '', $akhir_cuti = '', $status = '', $telepon = '', $keterangan = '', $dosen_id = ''){

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
        $this->alasan_selama_cuti = $alasan_selama_cuti;
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

    public function getId($id){
        return $this->id = $id;
    }

    public function tambah(){
        $query = "INSERT INTO cuti_dosen VALUE('','$this->tgl','$this->nama','$this->jabatan','$this->unit_kerja','$this->nip','$this->masa_kerja', '$this->jenis_cuti_id','$this->alasan_cuti','$this->catatan_cuti_id','$this->alasan_selama_cuti','$this->perubahan','$this->ditangguhkan','$this->ttd_dsn','$this->ttd_atasan','$this->awal_cuti','$this->akhir_cuti','$this->status','$this->telepon','$this->keterangan','$this->dosen_id')";
        return mysqli_query($this->connection, $query);
    }

    public function edit($id){
        $this->getId($id);
    }

    public function hapus(){

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
        foreach($result as $row){
            return $row['jenis_cuti'];
        }
    }

    public function catatan($id){
        $query = "SELECT * FROM `detail_catatan_cuti` WHERE `catatan_cuti_id` = $id";
        $result = mysqli_query($this->connection,$query);
        foreach($result as $row){
            return $row['nama_catatan_cuti'];
        }
    }


}