<?php


namespace Hoangnv\PhpOop\Controllers\Admin;

use Hoangnv\PhpOop\Models\User;
use Rakit\Validation\Validator;
use Hoangnv\PhpOop\Commons\Helper;
use Hoangnv\PhpOop\Commons\Controller;
use Hoangnv\PhpOop\Models\Category;

class CategorysControllers extends Controller
{
    private Category $category;

    public function __construct()
    {
        $this->category = new Category();
    }

    public function index()
    {
        $category = $this->category->all();
        // Helper::debug($category);
        // // die();
       
    
        return $this->renderViewAdmin('categorys.index',
        [
            
            'categorys'=>$category,
        ]
        );
        

       
    }

    public function create()
    {
       
        
      
        return $this->renderViewAdmin('categorys.create');
    }

    public function store()
    {
        $validator = new Validator;
        $validation = $validator->make($_POST + $_FILES, [
            'name'                  => 'required',
            
           
           
        ]);
        $validation->validate();
        if($validation->fails()){
            $_SESSION['erros']=$validation->errors->firstOfAll();
            header("Location:" .url('admin/categorys/create'));

           
          
        }else{
            $data=[
                'name'                  => $_POST['name'],
               
               

            ];
           
            $this->category->insert($data);
            header("Location:" .url('admin/categorys'));
            exit;
          
        }
    }

    public function show($id)
    {
        $categorys=$this->category->findByID($id);
       
       
        return $this->renderViewAdmin('categorys.show',
        [
            'categorys' => $categorys
        ]
    );
    }

    public function edit($id)
    {
        $categorys=$this->category->findByID($id);
       
        return $this->renderViewAdmin('categorys.edit',[
          'categorys'=>$categorys,
         
         ]
        );
    }

    public function update($id)
    {
        $categorys=$this->category->findByID($id);
        $validator = new Validator;
        $validation = $validator->make($_POST + $_FILES, [
            'name'                  => 'required',
           
           
        ]);
        $validation->validate();
        if($validation->fails()){
            $_SESSION['erros']=$validation->errors->firstOfAll();
            header("Location:" .url("admin/categorys/{$categorys['id']}/edit"));

           
          
        }else{
            $data=[
                'name'                  => $_POST['name'],
               
               

            ];
            
            $this->category->update($id,$data);
            header("Location:" .url('admin/categorys'));
            exit;
          
        }
    }

    public function delete($id)
    {
        $this->category->delete($id);

        header('Location: ' . url('admin/categorys'));
        exit();
    }
}



?>
