<?php

namespace Hoangnv\PhpOop\Controllers\Admin;

use Rakit\Validation\Validator;
use Hoangnv\PhpOop\Commons\Helper;
use Hoangnv\PhpOop\Models\Product;
use Hoangnv\PhpOop\Models\Category;
use Hoangnv\PhpOop\Commons\Controller;



class ProductControllers extends Controller
{
    private Product $product;
    private Category $category;

    public function __construct()
    {
        $this->product = new Product();
        $this->category = new Category();
    }

    public function index()
    {
        // $category = $this->category->all();
        $products = $this->product->all();
        // Helper::debug($product);
        $this->renderViewAdmin('products.index', [
            'products' => $products
        ]);
       
        // Helper::debug($this->user);
        

        // $this->renderViewAdmin('users.index', [
        //     'users' => $users
        // ]);
      
    }

    public function create()
    {
        $cate=$this->category->all();
        
      
       return $this->renderViewAdmin('products.create',[
        'categories'=>$cate
       ]);

    }

    public function store()
    {
        $validator = new Validator;
        $validation = $validator->make($_POST + $_FILES, [
            'name'                  => 'required',
            'overview'                 => 'required',
            'hinh'                => 'uploaded_file:0,2M,png,jpeg,jpg',
            'content'           => 'required',
           
        ]);
        $validation->validate();
        if($validation->fails()){
            $_SESSION['erros']=$validation->errors->firstOfAll();
            header("Location:" .url('admin/products/create'));

           
          
        }else{
            $data=[
                'name'                  => $_POST['name'],
                'overview'                 => $_POST['overview'],
                'content'           => $_POST['content'],
                'category_id'=>$_POST['cate'],

            ];
            if(isset($_FILES['hinh'])&& ($_FILES['hinh']['size'])>0){
                $from=$_FILES['hinh']['tmp_name'];
                $to='assets/uploads/' .time() .$_FILES['hinh']['name'];
                if(move_uploaded_file($from,$to)){
                   $data['img_thumbnail	']=$to;
                }else{
                  $_SESSION['erros']['hinh']='không thành công';
                  header("Location" .url('admin/products'));
                }
            }
            $this->product->insert($data);
            header("Location:" .url('admin/products'));
            exit;
          
        }
    }

    public function show($id)
    {
        $product=$this->product->findByID($id);
       
       
        return $this->renderViewAdmin('products.show',
        [
            'products' => $product
        ]
    );
        
    }

    public function edit($id)
    {
        
        $cate=$this->category->all();
      $product=$this->product->findByID($id);
      return $this->renderViewAdmin('products.edit',[
        'product'=>$product,
        'cate'=>$cate,
       ]
      );
  
      
    
    
     

    }
    public function update($id)
    {
        
     
            

        
       
      
       
        $product=$this->product->findByID($id);
        $validator = new Validator;
        $validation = $validator->make($_POST + $_FILES, [
            'name'                  => 'required',
            'overview'                 => 'required',
            'hinh'                => 'uploaded_file:0,2M,png,jpeg,jpg',
            'content'           => 'required',
           
        ]);
        $validation->validate();
        if($validation->fails()){
            $_SESSION['erros']=$validation->errors->firstOfAll();
            header("Location:" .url("admin/products/{$product['id']}/edit"));

           
          
        }else{
            $data=[
                'name'                  => $_POST['name'],
                'overview'                 => $_POST['overview'],
                'content'           => $_POST['content'],
                'category_id'=>$_POST['cate'],

            ];
            if(isset($_FILES['hinh'])&& ($_FILES['hinh']['size'])>0){
                $from=$_FILES['hinh']['tmp_name'];
                $to='assets/uploads/' .time() .$_FILES['hinh']['name'];
                if(move_uploaded_file($from,$to)){
                   $data['img_thumbnail	']=$to;
                }else{
                  $_SESSION['erros']['hinh']='không thành công';
                  header("Location:" .url("admin/products/{$product['id']}/edit"));
                }
            }
            $this->product->update($id,$data);
            header("Location:" .url('admin/products'));
            exit;
          
        }
    
    }

    public function delete($id)
    {
        $this->product->delete($id);
       

        header('Location: ' . url('admin/products'));
        exit();
    }
}
