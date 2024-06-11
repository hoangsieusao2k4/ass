@extends('layouts.master')

@section('title')
    Dashboard
@endsection

@section('content')
        
       
        <!-- </nav> --> 
        <!--End Header-->
        <!-- Nội dung -->
        <!-- <div class="d-flex">
           Side bar bên trái -->
          <!-- <div
            class="bg-light border-end"
            style="width: 20%; height: calc(100vh - 2px)"
          >
          <div class="d-flex  justify-content-center ">
            <ul class="nav flex-column pt-4  ">
              <li class="nav-item">
                <a class="nav-link d-flex justify-content-center"><img src="../image/khachhang1.jpg" class="rounded-circle" width="30px" height="30px" alt=""><h4>ADMIN</h2></a>
              </li>
              <li class="nav-item fw-medium">
                <a class="nav-link" >QUẢN LÝ DANH MỤC</a>
              </li>
              <li class="nav-item fw-medium ">
                <a class="nav-link">QUẢN LÝ SẢN PHẨM</a>
              </li>
              <li class="nav-item fw-medium">
                <a class="nav-link">QUẢN LÝ KHÁCH HÀNG</a>
              </li>
              <li class="nav-item fw-medium ">
                <a class="nav-link">BÌNH LUẬN</a>
              </li>
              <li class="nav-item fw-medium">
                <a class="nav-link">THỐNG KÊ</a>
              </li>
            </ul>
          </div>
          </div> -->
          <!-- Nội dung chính -->
          <form action="<?php echo url("admin/products/{$product['id']}/update")?>" method="post" enctype="multipart/form-data">
          <div class="container pt-2" style="width: 80%">
            <h1 class="d-flex justify-content-center ">Sửa mới</h1>
            <?php
            if(isset($_SESSION['erros'])){

            
            ?>
         <div class="   alert alert-warning">
          <ul>
          
              <?php
              foreach($_SESSION['erros'] as $erros){
                echo '  <li>"'.$erros.'"</li>';
              }
              
              ?>
           
          </ul>
          <?php
          unset($_SESSION['erros']);
          
          ?>

         </div>


            <?php
            }
            
            ?>

            <div class="container " style="width: 80%">
        
                <form action="">
                  <div class="mt-3">
                    <span class="form-label">ID:</span>
                    <input type="text" class="form-control"  / disabled>
                  </div>
                  <div class="mt-3">
                    <span class="form-label">Name</span>
                    <input type="text" class="form-control" value="<?=$product['name']?>" name="name" />
                  </div>
                  <div class="mt-3">
                    <span class="form-label">Overview</span>
                    <input type="text" class="form-control" name="overview" value="<?=$product['overview']?>" />
                  </div>
                 
                  <div class="mt-3">
                    <span class="form-label">Img</span>
                    <input type="file" class="form-control" name="hinh" />
                    <td><img src="{{asset($product['img_thumbnail'])}}" alt="" width="100px"></td>
                  </div>
                  <div class="mt-3">
                    <span class="form-label">Content</span>
                    <textarea name="content" id="" class="form-control" ><?=$product['content']?></textarea>
                  </div>
                  <div class="mt-3">
                    <span class="form-label">Cate_Name</span>
            
                    <select name="cate" id="" class="form-control">
                    <?php
                  
                  foreach($cate as $item){
                      extract($item);
                      if($product['category_id']=$id) $s="selected"; else $s="";
                      echo ' <option value="'.$id.'" '.$s.'>'.$name.'</option>';
                      
                      
                  
      
      
                 
                  
                  ?>
                 
                 
                   <?php }?>
                    
                    </select>
                  </div>
                 
                  <div class="mt-3 d-flex justify-content-center">
                      
                     
                     <button type="submit"  class="btn btn-success m-1 "><i class="fa-solid fa-plus"></i>Sửa Mới</button>
                  
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div> 
          </form>
        
        <!-- End noi dung chinh-->
        <!--Footer-->
       
        <!--End Footer-->
      </body>
    </html>
    
    
</body>
</html>
@endsection

