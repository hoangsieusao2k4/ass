<?php

namespace Hoangnv\PhpOop\Controllers\Client;

use Hoangnv\PhpOop\Commons\Controller;
use Hoangnv\PhpOop\Commons\Helper;
use Hoangnv\PhpOop\Models\User;



class LoginController extends Controller
{
    private User $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function showFormLogin() {
        avoid_login();
        
        $this->renderViewClient('login');
    }

    public function login() {
        avoid_login();
    
        try {
            // Kiểm tra đầu vào
            if (!isset($_POST['email']) || !isset($_POST['password'])) {
                throw new \Exception('Email và mật khẩu là bắt buộc.');
            }
    
            $email = $_POST['email'];
            $password = $_POST['password'];
    
            // Lấy thông tin người dùng từ cơ sở dữ liệu
            $user = $this->user->findByEmail($email);
    
            if (empty($user)) {
                throw new \Exception('Không tồn tại email: ' . $email);
            }
    
            // Kiểm tra mật khẩu
            $check = password_verify($password, $user['password']);
            if ($check) {
                $_SESSION['user'] = $user;
    
                if ($user['type'] == 'admin') {
                    header('Location: ' . url('admin/'));
                    exit;
                }
    
                header('Location: ' . url());
                exit;
            }
    
            throw new \Exception('Password không đúng');
    
        } catch (\Throwable $th) {
            $_SESSION['error'] = $th->getMessage();
            header('Location: ' . url('client/login'));
            exit;
        }
    }
    
    public function logout() {
        unset($_SESSION['user']);

        header('Location: ' . url() );
        exit;
    }
}