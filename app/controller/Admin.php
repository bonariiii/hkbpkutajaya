<?php

class Admin extends Controller
{
    public function index()
    {
        if (!isset($_SESSION['nama'])) {
            $data['title'] = "Login";
            $this->view('admin/header/header', $data);
            $this->view('admin/pages-login');
            $this->view('admin/footer/footer');
        } else {
            $data['title'] = "Halaman Admin";
            $this->view('admin/header/header', $data);
            $this->view('admin/sidebar/sidebar');
            $this->view('admin/index');
            $this->view('admin/footer/footer');
        }
    }

    

    public function jemaat()
    {
        if (!isset($_SESSION['nama'])) {
            $data['title'] = "Login";
            $this->view('admin/header/header', $data);
            $this->view('admin/pages-login');
            $this->view('admin/footer/footer');
        } else {
            $data['title'] = "Data Jemaat";
            $data['jemaat'] = $this->model('Jemaat_model')->getAllJemaat();
            $this->view('admin/header/header', $data);
            $this->view('admin/sidebar/sidebar');
            $this->view('admin/datajemaat', $data);
            $this->view('admin/footer/footer');
            // var_dump($data['jemaat']);
        }
    }

    public function tambahJemaat()
    {
        if ($this->model('Jemaat_model')->tambahJemaat($_POST) > 0) {
            Flasher::setFlash('Data baru berhasil ', 'Ditambah', 'success');
            header('Location:' . BASEURL . 'admin/jemaat'); 
        } else {
            Flasher::setFlash('Data gagal ', 'Diinput', 'danger');
            header('Location:' . BASEURL . 'admin/jemaat'); 
        }
    }

    public function hapusJemaat($id)
    {
        if ($this->model('Jemaat_model')->hapusJemaat($id) > 0) {
            Flasher::setFlash('Data', 'Berhasil dihapus', 'success');
            header('Location:' . BASEURL . 'admin/jemaat');
            exit;
        } else {
            Flasher::setFlash('Data gagal', 'Dihapus', 'danger');
            header('Location:' . BASEURL . 'admin/jemaat');
            exit;
        }
    }
    public function getUbahJemaat()
    {
        echo json_encode($this->model('Jemaat_model')->getUbahJemaat($_POST['id']));
    }

    public function ubahJemaat()
    {
        if ($this->model('Jemaat_model')->ubahJemaat($_POST) > 0) {
            Flasher::setFlash('Data baru berhasil ', 'Diubah', 'success');
            header('Location:' . BASEURL . 'admin/jemaat'); 
        } else {
            Flasher::setFlash('Data gagal ', 'Diubah', 'danger');
            header('Location:' . BASEURL . 'admin/jemaat'); 
        }
    }



    public function pendeta()
    {
        if (!isset($_SESSION['nama'])) {
            $data['title'] = "Login";
            $this->view('admin/header/header', $data);
            $this->view('admin/pages-login');
            $this->view('admin/footer/footer');
        } else {
            $data['title'] = "Data Jemaat";
            $this->view('admin/header/header', $data);
            $this->view('admin/sidebar/sidebar');
            $this->view('admin/datapendeta');
            $this->view('admin/footer/footer');
        }
    }


    

    public function pengurus()
    {
        if (!isset($_SESSION['nama'])) {
            $data['title'] = "Login";
            $this->view('admin/header/header', $data);
            $this->view('admin/pages-login');
            $this->view('admin/footer/footer');
        } else {
            $data['title'] = "Data Jemaat";
            $this->view('admin/header/header', $data);
            $this->view('admin/sidebar/sidebar');
            $this->view('admin/datapengurus');
            $this->view('admin/footer/footer');
        }
    }



    
    public function warta()
    {
        if (!isset($_SESSION['nama'])) {
            $data['title'] = "Login";
            $this->view('admin/header/header', $data);
            $this->view('admin/pages-login');
            $this->view('admin/footer/footer');
        } else {
            $data['title'] = "Data Jemaat";
            $data['warta'] = $this->model('Warta_model')->getAllWarta();
            $this->view('admin/header/header', $data);
            $this->view('admin/sidebar/sidebar');
            $this->view('admin/warta', $data);
            $this->view('admin/footer/footer');

            // var_dump($this->model('Warta_model')->getAllWarta());
        }
    }

    public function tambahWarta()
    {
        if ($this->model('Warta_model')->tambahWarta($_POST) > 0) {
            Flasher::setFlash('Data baru berhasil ', 'Ditambah', 'success');
            header('Location:' . BASEURL . 'admin/warta'); 
        } else {
            Flasher::setFlash('Data gagal ', 'Diinput', 'danger');
            header('Location:' . BASEURL . 'admin/warta'); 
        }
    }

    public function hapusWarta($id)
    {
        if ($this->model('Warta_model')->hapusWarta($id) > 0) {
            Flasher::setFlash('Data', 'Berhasil dihapus', 'success');
            header('Location:' . BASEURL . 'admin/warta');
            exit;
        } else {
            Flasher::setFlash('Data gagal', 'Dihapus', 'danger');
            header('Location:' . BASEURL . 'admin/warta');
            exit;
        }
    }
    public function getUbahWarta()
    {
        echo json_encode($this->model('Warta_model')->getUbahWarta($_POST['id']));
    }

    public function ubahWarta()
    {
        if ($this->model('Warta_model')->ubahWarta($_POST) > 0) {
            Flasher::setFlash('Data baru berhasil ', 'Diubah', 'success');
            header('Location:' . BASEURL . 'admin/warta'); 
        } else {
            Flasher::setFlash('Data gagal ', 'Diubah', 'danger');
            header('Location:' . BASEURL . 'admin/warta'); 
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