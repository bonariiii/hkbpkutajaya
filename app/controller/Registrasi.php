<?php 

class Registrasi extends Controller {
    public function index()
    {   
        $data['title']="Registrasi";
        $this->view('admin/header/header',$data);
        $this->view('admin/pages-register');
        $this->view('admin/footer/footer');
    }

    public function tambah()
    {   
        $dog = "nama sudah digunakan";
        //JIKA BERHASIL REGISTRASI
        if ($this->model('Admin_model')->tambahAdmin($_POST) == $dog) {
            Flasher::setFlash('Registrasi gagal, ','nama sudah digunakan','danger');
            header('Location:' . BASEURL . 'registrasi'); 
        } elseif ($this->model('Admin_model')->tambahAdmin($_POST) > 0 ) {
                Flasher::setFlash('Selamat, registrasi berhasil, ','sekarang anda dapat login','success');
                header('Location:' . BASEURL . 'login');
                exit;
        } else {
            Flasher::setFlash('Registrasi, ','gagal','danger');
            header('Location:' . BASEURL . 'registrasi');
        }

    }
}


?>