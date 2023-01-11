<?php 

class Login extends Controller {
    
    public function index()
    {
        $data['title']="Login";
        $this->view('admin/header/header',$data);
        $this->view('admin/pages-login');
        $this->view('admin/footer/footer');
    }

    public function auth()
    {
        
        $tarikDataAdmin = $this->model('Login_model')->getAdmin($_POST);
        if(password_verify($_POST['password'],$tarikDataAdmin['password'] )) {
            header('Location:' . BASEURL . 'admin');
                exit;
            } else {
                header('Location:' . BASEURL . 'login');
                exit;
            }

        // if ($anjing > 0) {   
        //     if ( password_verify($password, $anjing['password'])) {
        //         header('Location:' . BASEURL . 'admin');
        //         exit;
        //     } else {
        //         header('Location:' . BASEURL . 'login');
        //         exit;
        //     }
        // }
        // $data['login'] = 
        // if ($this->model('Login_model')->getAdmin($_POST) > 0) {
        //     header('Location:' . BASEURL . 'admin');
        //     exit;
        // } else {
        //     header('Location:' . BASEURL . 'login');
        //     exit;
        // }
        
    }
}


?>