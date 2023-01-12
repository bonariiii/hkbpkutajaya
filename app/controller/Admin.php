<?php 

class Admin extends Controller {
    public function index()
    {   
        if (!isset($_SESSION['nama'])) {
            $data['title']="Login";
            $this->view('admin/header/header',$data);
            $this->view('admin/pages-login');
            $this->view('admin/footer/footer');
        }else {
            $data['title'] = "Halaman Admin";
            $this->view('admin/header/header', $data);
            $this->view('admin/index');
            $this->view('admin/footer/footer');
        }
    }
    public function jemaat()
    {   
        if (!isset($_SESSION['nama'])) {
            $data['title']="Login";
            $this->view('admin/header/header',$data);
            $this->view('admin/pages-login');
            $this->view('admin/footer/footer');
        }else {
            $data['title'] = "Data Jemaat";
            $this->view('admin/header/header', $data);
            $this->view('admin/datajemaat');
            $this->view('admin/footer/footer');
        }
    }

    public function pendeta()
    {   
        if (!isset($_SESSION['nama'])) {
            $data['title']="Login";
            $this->view('admin/header/header',$data);
            $this->view('admin/pages-login');
            $this->view('admin/footer/footer');
        }else {
            $data['title'] = "Data Jemaat";
            $this->view('admin/header/header', $data);
            $this->view('admin/datapendeta');
            $this->view('admin/footer/footer');
        }
    }

    public function pengurus()
    {   
        if (!isset($_SESSION['nama'])) {
            $data['title']="Login";
            $this->view('admin/header/header',$data);
            $this->view('admin/pages-login');
            $this->view('admin/footer/footer');
        }else {
            $data['title'] = "Data Jemaat";
            $this->view('admin/header/header', $data);
            $this->view('admin/datapengurus');
            $this->view('admin/footer/footer');
        }
    }

    public function logout()
    {
        if (isset($_SESSION['nama'])) {
            unset($_SESSION['nama']);
            header('Location:' . BASEURL . 'login');
            exit;
        }
    }
    
}


 ?>