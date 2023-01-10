<?php 

class Registrasi extends Controller {
    public function index()
    {   
        
        $this->view('admin/header/header');
        $this->view('admin/pages-register');
        $this->view('admin/footer/footer');
    }

    public function tambah()
    {   
        //JIKA BERHASIL REGISTRASI
        if ($this->model('Admin_model')->tambahAdmin($_POST) > 0 ) {
            header('Location:' . BASEURL . 'login');
            exit;
        } else {
            header('Location:' . BASEURL . 'registrasi');
            echo "USERNAME SUDAH DIGUNAKAN";
        }

    }
}


?>