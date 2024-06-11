<?php


namespace Hoangnv\PhpOop\Controllers\Admin;

use Hoangnv\PhpOop\Models\User;
use Rakit\Validation\Validator;
use Hoangnv\PhpOop\Commons\Helper;
use Hoangnv\PhpOop\Commons\Controller;

class UserControllers extends Controller
{
    private User $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function index()
    {
        $users = $this->user->all();
        // Helper::debug($users);
       
        // Helper::debug($this->user);
        return $this->renderViewAdmin('users.index',
        [
            'user'=>$users
        ]
        );
        

       
    }

    public function create()
    {
       
        
      
        return $this->renderViewAdmin('users.create');
    }

    public function store()
    {
        $validator = new Validator;
        $validation = $validator->make($_POST + $_FILES, [
            'name'                  => 'required',
            'quyen'                  => 'required',
            'email'                 => 'required|email',
            'password'              => 'required|min:6',
            'confirm_password'      => 'required|same:password',
            'hinh'                => 'uploaded_file:0,2M,png,jpeg,jpg',
           
           
        ]);
        $validation->validate();
        if($validation->fails()){
            $_SESSION['erros']=$validation->errors->firstOfAll();
            header("Location:" .url('admin/users/create'));

           
          
        }else{
            $data=[
                'name'                  => $_POST['name'],
                'email'                 => $_POST['email'],
                'password'           => password_hash($_POST['password'],PASSWORD_DEFAULT),
                'type'=>$_POST['quyen']
               

            ];
            if(isset($_FILES['hinh'])&& ($_FILES['hinh']['size'])>0){
                $from=$_FILES['hinh']['tmp_name'];
                $to='assets/uploads/' .time() .$_FILES['hinh']['name'];
                if(move_uploaded_file($from,$to)){
                   $data['avatar']=$to;
                }else{
                  $_SESSION['erros']['hinh']='không thành công';
                  header("Location" .url('admin/users'));
                }
            }
            $this->user->insert($data);
            header("Location:" .url('admin/users'));
            exit;
          
        }
    }

    public function show($id)
    {
        $user=$this->user->findByID($id);
       
       
        return $this->renderViewAdmin('users.show',
        [
            'users' => $user
        ]
    );
    }

    public function edit($id)
    {
        $user=$this->user->findByID($id);
       
        return $this->renderViewAdmin('users.edit',[
          'users'=>$user,
         
         ]
        );
    }

    public function update($id)
    {
        $users=$this->user->findByID($id);
        $validator = new Validator;
        $validation = $validator->make($_POST + $_FILES, [
            'name'                  => 'required',
            'quyen'                  => 'required',
            'email'                 => 'required|email',
            'password'              => 'required|min:6',
            'confirm_password'      => 'required|same:password',
            'hinh'                => 'uploaded_file:0,2M,png,jpeg,jpg',
           
        ]);
        $validation->validate();
        if($validation->fails()){
            $_SESSION['erros']=$validation->errors->firstOfAll();
            header("Location:" .url("admin/users/{$users['id']}/edit"));

           
          
        }else{
            $data=[
                'name'                  => $_POST['name'],
                'email'                 => $_POST['email'],
                'password'           => password_hash($_POST['password'],PASSWORD_DEFAULT),
                'type'=>$_POST['quyen'],
                
               

            ];
            if(isset($_FILES['hinh'])&& ($_FILES['hinh']['size'])>0){
                $from=$_FILES['hinh']['tmp_name'];
                $to='assets/uploads/' .time() .$_FILES['hinh']['name'];
                if(move_uploaded_file($from,$to)){
                   $data['avatar']=$to;
                }else{
                  $_SESSION['erros']['hinh']='không thành công';
                  header("Location:" .url("admin/users/{$users['id']}/edit"));
                }
            }
            $this->user->update($id,$data);
            header("Location:" .url('admin/users'));
            exit;
          
        }
    }

    public function delete($id)
    {
        $this->user->delete($id);

        header('Location: ' . url('admin/users'));
        exit();
    }
}



?>