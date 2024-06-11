<?php
namespace Hoangnv\PhpOop\Controllers\Client;

namespace Hoangnv\PhpOop\Controllers\Client;

use Hoangnv\PhpOop\Commons\Controller;
use Hoangnv\PhpOop\Models\Product;
use Hoangnv\PhpOop\Commons\Helper;

class ProductController extends Controller
{
    private Product $product;
    public function __construct(
          
          
            
        )
        {
           $this->product=new Product();
            
        }
    
    public function product() {
     
    
        
        // $product=$this->product->all();
        

      
    
        // Helper::debug([$product,$totalPage]);
        // die;
       [$products , $totalPage] = $this->product->paginate($_GET['page'] ?? 1 );
    //    Helper::debug($totalPage);
    //    die;

        $this->renderViewClient('product', [
            'product' => $products,
            'totalPage' => $totalPage,
            'page' => $_GET['page'] ?? 1,
        ]);

    }
  
}