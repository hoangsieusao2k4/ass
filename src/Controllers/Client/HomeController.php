<?php 

namespace Hoangnv\PhpOop\Controllers\Client;

use Hoangnv\PhpOop\Commons\Controller;
use Hoangnv\PhpOop\Models\Product;
use Hoangnv\PhpOop\Commons\Helper;

class HomeController extends Controller
{
    private Product $product;
    
    public function __construct(
      
      
        
    )
    {
       $this->product=new Product();
        
    }
    public function home() {
    
        $product=$this->product->client();
        // Helper::debug($product);
        

      
   
    //    [$products , $totalPage] = $this->product->paginate($_GET['page'] ?? 1 );

        $this->renderViewClient('home', [
            'product' => $product,
           
        ]);
        
        

      
        


      
       

    

          
           
        
    }

}