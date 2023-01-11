<?php 

class Login extends Controller {
    
    public function index()
    {
        //cek session apakah sudah login, jika sudah login arahkan ke halaman index
        if (isset($_SESSION['nama'])) {

            $data['title']="Login";
        $this->view('admin/header/header',$data);
        $this->view('admin/index');
        $this->view('admin/footer/footer');
        } else {
            //jika belum login maka tampilkan halaman login
            $data['title']="Login";
            $this->view('admin/header/header',$data);
            $this->view('admin/pages-login');
            $this->view('admin/footer/footer');
        }
    }

    public function auth()
    {
        //proses login
        //ambil data dalam database lalu validasi passwordnya dengan hash
        //jika benar maka set session dan arahkan ke halaman admin
        $tarikDataAdmin = $this->model('Login_model')->getAdmin($_POST);
        
        if(password_verify($_POST['password'],$tarikDataAdmin['password'] )) {
                $_SESSION['nama'] = $tarikDataAdmin['nama'];
                header('Location:' . BASEURL . 'admin');
                exit;
            } else {
                header('Location:' . BASEURL . 'login');
                exit;
            }
    }

}


?>