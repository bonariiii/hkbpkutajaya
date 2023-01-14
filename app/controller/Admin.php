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

    public function logout()
    {
        if (isset($_SESSION['nama'])) {
            unset($_SESSION['nama']);
            header('Location:' . BASEURL . 'login');
            exit;
        }
    }
}
