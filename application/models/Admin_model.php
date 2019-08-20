<?php 
class Admin_model extends CI_Model{
        public function HapusGambar($id,$table){
            $query = $this->db->get_where($table, array('id' => $id))->result_array();
            $file = 'assets/upload/'.$query[0]['gambar'];
            if (!$file) {
                return false;
            }
            unlink($file) or die("Tidak dapat menemukan file!");
        }
        public function GetLokasiPaket(){
            return $this->db->get('paket')->result_array();
        }
        public function count($table){
            $query = $this->db->get($table);
            return $query->num_rows();
    }
        
    // CRUD Mobil
    public function getAllMobil(){
        return $this->db->get('mobil')->result_array();
    }
    public function getMaxId(){
        $this->db->select_max('id');
        $query = $this->db->get('mobil');
        return $query->result_array();
    }
    public function TambahDataMobil($gambar){
        $data = [
            "id"        => $this->input->post('id'),
            "nama"      => $this->input->post('nama'),
            "harga"     => $this->input->post('harga'),
            "durasi"    => $this->input->post('durasi'),
            "penumpang" => $this->input->post('penumpang'),
            "fasilitas" => $this->input->post('fasilitas'),
            "bonus"     => $this->input->post('bonus'),
            "gambar"    => $gambar
        ];
        $this->db->insert('mobil',$data);
    }
    public function UpdateDataMobil($id){
        $data = [
            "id"        => $this->input->post('id'),
            "nama"      => $this->input->post('nama'),
            "harga"     => $this->input->post('harga'),
            "durasi"    => $this->input->post('durasi'),
            "penumpang" => $this->input->post('penumpang'),
            "fasilitas" => $this->input->post('fasilitas'),
            "bonus"     => $this->input->post('bonus'),
        ];
        $this->db->where('id', $id);
        $this->db->update('mobil',$data);
    }
    public function HapusDataMobil($id){
        $this->db->delete('mobil', array('id' => $id));
        // Hapus File
    }

    // CRUD Lokasi
    public function getAllLokasi(){
        return $this->db->get('lokasi')->result_array();
    }
    public function getMaxIdLokasi(){
        $this->db->select_max('id');
        $query = $this->db->get('lokasi');
        return $query->result_array();
    }
    public function selectDistictLokasi(){
        $this->db->distinct();
        $this->db->select('lokasi');
        $query = $this->db->get('lokasi'); 
        return $query->result_array();
    }
    public function TambahDataLokasi($gambar){
        $data = [
            "id"        => $this->input->post('id'),
            "lokasi"    => $this->input->post('nama'),
            "spot"      => $this->input->post('spot'),
            "deskripsi" => $this->input->post('deskripsi'),
            "gambar"    => $gambar
        ];
        $this->db->insert('lokasi',$data);
    }
    public function UpdateDataLokasi($id){
        $data = [
            "id"        => $this->input->post('id'),
            "lokasi"    => $this->input->post('nama'),
            "spot"      => $this->input->post('spot'),
            "deskripsi" => $this->input->post('deskripsi')
        ];
        $this->db->where('id', $id);
        $this->db->update('lokasi',$data);
    }
    public function HapusDataLokasi($id){
        $this->db->delete('lokasi', array('id' => $id));
    }

    // CRUD Paket
    public function getAllPaket(){
        return $this->db->get('paket')->result_array();
    }
    public function getMaxIdPaket(){
        $this->db->select_max('id');
        $query = $this->db->get('paket');
        return $query->result_array();
    }
    public function TambahDataPaket($gambar){
        $data = [
            "id"        => $this->input->post('id'),
            "paket"     => $this->input->post('paket'),
            "deskripsi" => $this->input->post('deskripsi'),
            "lokasi"    => $this->input->post('lokasi'),
            "harga"     => $this->input->post('harga'),
            "fasilitas" => $this->input->post('fasilitas'),
            "gambar"    => $gambar
        ];
        $this->db->insert('paket',$data);
    }
    public function UpdateDataPaket($id){
        $data = [
            "id"        => $this->input->post('id'),
            "paket"     => $this->input->post('paket'),
            "deskripsi" => $this->input->post('deskripsi'),
            "lokasi"    => $this->input->post('lokasi'),
            "harga"     => $this->input->post('harga'),
            "fasilitas" => $this->input->post('fasilitas')
        ];
        $this->db->where('id', $id);
        $this->db->update('paket',$data);
    }
    public function HapusDataPaket($id){
        $this->db->delete('paket', array('id' => $id));
    }


    // CRUD Paket Rohani
    public function getAllPaketRohani(){
        return $this->db->get('rohani')->result_array();
    }
    public function getMaxIdPaketRohani(){
        $this->db->select_max('id');
        $query = $this->db->get('rohani');
        return $query->result_array();
    }
    public function TambahDataPaketRohani($gambar){
        $data = [
            "id"        => $this->input->post('id'),
            "nama"     => $this->input->post('nama'),
            "deskripsi" => $this->input->post('deskripsi'),
            "harga"     => $this->input->post('harga'),
            "fasilitas" => $this->input->post('fasilitas'),
            "gambar"    => $gambar
        ];
        $this->db->insert('rohani',$data);
    }
    public function UpdateDataPaketRohani($id){
        $data = [
            "id"        => $this->input->post('id'),
            "nama"      => $this->input->post('nama'),
            "deskripsi" => $this->input->post('deskripsi'),
            "harga"     => $this->input->post('harga'),
            "fasilitas" => $this->input->post('fasilitas')
        ];
        $this->db->where('id', $id);
        $this->db->update('rohani',$data);
    }
    public function HapusDataPaketRohani($id){
        $this->db->delete('rohani', array('id' => $id));
    }

    // CRUD Testimoni
    public function getAllTestimoni(){
        return $this->db->get('testimoni')->result_array();
    }
    public function getMaxIdTestimoni(){
        $this->db->select_max('id');
        $query = $this->db->get('testimoni');
        return $query->result_array();
    }
    public function TambahDataTestimoni($gambar){
        $data = [
            "id"        => $this->input->post('id'),
            "nama"      => $this->input->post('nama'),
            "testimoni" => $this->input->post('testimoni'),
            "gambar"    => $gambar
        ];
        $this->db->insert('testimoni',$data);
    }
    public function UpdateDataTestimoni($id){
        $data = [
            "id"        => $this->input->post('id'),
            "nama"      => $this->input->post('nama'),
            "testimoni" => $this->input->post('testimoni'),
        ];
        $this->db->where('id', $id);
        $this->db->update('testimoni',$data);
    }
    public function HapusDataTestimoni($id){
        $this->db->delete('testimoni', array('id' => $id));
    }

    // Data
    public function getData(){
        return $this->db->get('data')->result_array();
    }
    public function UbahData(){
        $i=1;
        $data = [
            "id"        => $this->input->post('id'),
            "telp"      => $this->input->post('telp'),
            "alamat"    => $this->input->post('alamat'),
            "email"     => $this->input->post('email'),
            "website"   => $this->input->post('website')
        ];
        $this->db->where('id', $i);
        $this->db->update('data',$data);
    }
}