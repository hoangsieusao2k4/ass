<?php
namespace Hoangnv\PhpOop\Controllers\Admin;
use Hoangnv\PhpOop\Commons\Controller;
use Hoangnv\PhpOop\Models\Product;
use Hoangnv\PhpOop\Models\User;
use Hoangnv\PhpOop\Models\Category;
use Hoangnv\PhpOop\Commons\Helper;
class DashboardControllers extends Controller{
    private Product $product;
    private User $user;
    private Category $categories;
   

    public function __construct()
    {
        $this->product = new Product();
        $this->user = new User();
        $this->categories = new Category();
       
    }


    public function dashboard(){
        $sp=$this->product->count();
        $cate=$this->categories->count();

        $user=$this->user->count();
        // Helper::debug($user);


        $this->renderViewAdmin(__FUNCTION__,[
            'sp'=>$sp,
            'user'=>$user,
            'cate'=>$cate
        ]);
    }
}


?>