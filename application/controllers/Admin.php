<?php defined('BASEPATH') OR exit('No direct script access allowed');

    class Admin extends CI_Controller {

        public function __construct(){
            parent::__construct();
            $this->load->model('Admin_model');
            $this->load->helper(array('form'));
        }
        
        public function index(){
            $data['judul']='Dashboard';
            // $data['mobil']=$this->Admin_model->getAllMobil();
            // $data['maxid']=$this->Admin_model->getMaxId();
            $this->load->view('admin/template/header',$data);
            $this->load->view('admin/template/navbar');
            $this->load->view('admin/template/sidebar');
            $this->load->view('admin/dashboard');
            $this->load->view('admin/template/footer');
            $this->load->view('admin/template/modal');
            $this->load->view('admin/template/script');
        }
        public function mobil($error=''){
            $data['error']=$error;
            $data['judul']='Data Mobil';
            $data['mobil']=$this->Admin_model->getAllMobil();
            $data['maxid']=$this->Admin_model->getMaxId();
            $this->load->view('admin/template/header',$data);
            $this->load->view('admin/template/navbar');
            $this->load->view('admin/template/sidebar');
            $this->load->view('admin/mobil',$data);
            $this->load->view('admin/template/footer');
            $this->load->view('admin/template/modal');
            $this->load->view('admin/template/modal-mobil',$data);
            $this->load->view('admin/template/script');
        }
        public function paket($error=''){
            $data['error']=$error;
            $data['judul']='Data Paket Wisata';
            $data['paket']=$this->Admin_model->getAllPaket();
            $data['maxid']=$this->Admin_model->getMaxIdPaket();
            $data['lokasi']=$this->Admin_model->GetLokasiPaket();
            $this->load->view('admin/template/header',$data);
            $this->load->view('admin/template/navbar');
            $this->load->view('admin/template/sidebar');
            $this->load->view('admin/paketwisata',$data);
            $this->load->view('admin/template/footer');
            $this->load->view('admin/template/modal');
            $this->load->view('admin/template/modal-paket',$data);
            $this->load->view('admin/template/script');
        }
        public function rohani($error=''){
            $data['error']=$error;
            $data['judul']='Data Paket Wisata Rohani';
            $data['rohani']=$this->Admin_model->getAllPaketRohani();
            $data['maxid']=$this->Admin_model->getMaxIdPaketRohani();
            $this->load->view('admin/template/header',$data);
            $this->load->view('admin/template/navbar');
            $this->load->view('admin/template/sidebar');
            $this->load->view('admin/paketrohani',$data);
            $this->load->view('admin/template/footer');
            $this->load->view('admin/template/modal');
            $this->load->view('admin/template/modal-rohani',$data);
            $this->load->view('admin/template/script');
        }
        public function lokasi($error=''){
            $data['error']=$error;
            $data['judul']='Data Tempat Wisata';
            $data['lokasi']=$this->Admin_model->getAllLokasi();
            $data['maxid']=$this->Admin_model->getMaxIdLokasi();
            $this->load->view('admin/template/header',$data);
            $this->load->view('admin/template/navbar');
            $this->load->view('admin/template/sidebar');
            $this->load->view('admin/lokasi',$data);
            $this->load->view('admin/template/footer');
            $this->load->view('admin/template/modal');
            $this->load->view('admin/template/modal-lokasi',$data);
            $this->load->view('admin/template/script');
        }
        public function testimoni($error=''){
            $data['error']=$error;
            $data['judul']='Data Testimoni';
            $data['testimoni']=$this->Admin_model->getAllTestimoni();
            $data['maxid']=$this->Admin_model->getMaxIdTestimoni();
            $this->load->view('admin/template/header',$data);
            $this->load->view('admin/template/navbar');
            $this->load->view('admin/template/sidebar');
            $this->load->view('admin/testimoni',$data);
            $this->load->view('admin/template/footer');
            $this->load->view('admin/template/modal');
            $this->load->view('admin/template/modal-testimoni',$data);
            $this->load->view('admin/template/script');
        }
        public function other(){
            $data['judul']='Data Lain-lain';
            $this->load->view('admin/template/header',$data);
            $this->load->view('admin/template/navbar');
            $this->load->view('admin/template/sidebar');
            $this->load->view('admin/other');
            $this->load->view('admin/template/footer');
            $this->load->view('admin/template/modal');
            $this->load->view('admin/template/script');
        }
    // Image Validation (eror code: 4=NotFound, 5=ExtensionNotValid, 6=FileToLarge)
        public function imagevalidation(){
            $namaFile   =$_FILES['gambar']['name'];
            $ukuranFile =$_FILES['gambar']['size'];
            $tmpName    =$_FILES['gambar']['tmp_name'];
            $error      =$_FILES['gambar']['error'];
            
            //cek error tidak upload gambar
            if($error===4){
                return $error;
            }

            //cek ekstensi gambar
            $ekstensivalid=['jpg','jpeg','png'];
            $ekstensi=explode('.',$namaFile);
            $ekstensi=strtolower(end($ekstensi));
            if(!in_array($ekstensi,$ekstensivalid)){
                return 5;
            }

            //cek ukuran gambar
            if ($ukuranFile>2048000) {
                echo "<script>alert('Maksimal upload gambar 2MB!')</script>";
                return 6;
            }
            move_uploaded_file($tmpName,'assets/upload/'.$namaFile);
            return $namaFile;
        }

    // CRUD Mobil
        public function tambahmobil(){
            $gambar =$this->imagevalidation();
            if($gambar===4 || $gambar===5 || $gambar===6){
                $this->mobil($gambar);
                return false;
            }
            // Insert DB
            $this->Admin_model->TambahDataMobil($gambar);
            redirect('admin/mobil');
        }    
        public function updatemobil($id){
            $this->Admin_model->UpdateDataMobil($id);
            redirect('admin/mobil');
        }
        public function hapusmobil($id){
            $this->Admin_model->HapusGambar($id,'mobil');
            $this->hapusmobil2($id);
        }
        public function hapusmobil2($id){
            $this->Admin_model->HapusDataMobil($id);
            redirect('admin/mobil');
        }

        
    // CRUD Lokasi
        public function tambahlokasi(){
            $gambar =$this->imagevalidation();
            if($gambar===4 || $gambar===5 || $gambar===6){
                $this->lokasi($gambar);
                return false;
            }
            // Insert DB
            $this->Admin_model->TambahDataLokasi($gambar);
            redirect('admin/lokasi');
        }    
        public function updatelokasi($id){
            $this->Admin_model->UpdateDataLokasi($id);
            redirect('admin/lokasi');
        }
        public function hapuslokasi($id){
            $this->Admin_model->HapusGambar($id,'lokasi');
            $this->hapuslokasi2($id);
        }
        public function hapuslokasi2($id){
            $this->Admin_model->HapusDataLokasi($id);
            redirect('admin/lokasi');
        }

    // CRUD Paket
        public function tambahpaket(){
            // Validasi gambar
            $gambar =$this->imagevalidation();
            if($gambar===4 || $gambar===5 || $gambar===6){
                $this->paket($gambar);
                return false;
            }
            // Insert DB
            $this->Admin_model->TambahDataPaket($gambar);
            redirect('admin/paket');
        }    
        public function updatepaket($id){
            $this->Admin_model->UpdateDataPaket($id);
            redirect('admin/paket');
        }
        public function hapuspaket($id){
            $this->Admin_model->HapusGambar($id,'paket');
            $this->hapuspaket2($id);
        }
        public function hapuspaket2($id){
            $this->Admin_model->HapusDataPaket($id);
            redirect('admin/paket');
        }
    
    // CRUD Paket Rohani
        public function tambahpaketrohani(){
            // Validasi gambar
            $gambar =$this->imagevalidation();
            if($gambar===4 || $gambar===5 || $gambar===6){
                $this->rohani($gambar);
                return false;
            }
            // Insert DB
            $this->Admin_model->TambahDataPaketRohani($gambar);
            redirect('admin/rohani');
        }    
        public function updatepaketrohani($id){
            $this->Admin_model->UpdateDataPaketRohani($id);
            redirect('admin/rohani');
        }
        public function hapuspaketrohani($id){
            $this->Admin_model->HapusGambar($id,'rohani');
            $this->hapuspaketrohani2($id);
        }
        public function hapuspaketrohani2($id){
            $this->Admin_model->HapusDataPaketRohani($id);
            redirect('admin/rohani');
        }

        // CRUD Testimoni
        public function tambahtestimoni(){
            // Validasi gambar
            $gambar =$this->imagevalidation();
            if($gambar===4 || $gambar===5 || $gambar===6){
                $this->testimoni($gambar);
                return false;
            }
            // Insert DB
            $this->Admin_model->TambahDataTestimoni($gambar);
            redirect('admin/testimoni');
        }    
        public function updatetestimoni($id){
            $this->Admin_model->UpdateDataTestimoni($id);
            redirect('admin/testimoni');
        }
        public function hapustestimoni($id){
            $this->Admin_model->HapusGambar($id,'testimoni');
            $this->hapustestimoni2($id);
        }
        public function hapustestimoni2($id){
            $this->Admin_model->HapusDataTestimoni($id);
            redirect('admin/testimoni');
        }
    }