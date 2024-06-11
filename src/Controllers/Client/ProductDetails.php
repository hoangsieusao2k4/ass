<?php 

namespace Hoangnv\PhpOop\Controllers\Client;

use Hoangnv\PhpOop\Commons\Controller;
use Hoangnv\PhpOop\Models\Product;
use Hoangnv\PhpOop\Commons\Helper;

class ProductDetails extends Controller
{
    private Product $product;
    
    public function __construct(
      
      
        
    )
    {
       $this->product=new Product();
        
    }
    public function details($id) {
        $product=$this->product->findByID($id);
        // Helper::debug($product);
        // Helper::debug($product);
        // die;
       

        return  $this->renderViewClient('details', [
            'product'=>$product,
              
               
            ]);
    }
}