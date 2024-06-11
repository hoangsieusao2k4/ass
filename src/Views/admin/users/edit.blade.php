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
          <form action="<?php echo url("admin/users/{$users['id']}/update")?>" method="post" enctype="multipart/form-data">
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
                    <input type="text" class="form-control" name="name" value="<?=$users['name']?>" />
                  </div>
                  <div class="mt-3">
                    <span class="form-label">Password</span>
                    <input type="password" class="form-control" name="password" />
                  </div>
                  <div class="mt-3">
                    <span class="form-label">confirm_password</span>
                    <input type="password" class="form-control" name="confirm_password" />
                  </div>
                  <div class="mt-3">
                    <span class="form-label">Email</span>
                    <input type="email" class="form-control" name="email" value="<?=$users['email']?>" />
                  </div>
                 
                  <div class="mt-3">
                    <span class="form-label">Img</span>
                    <input type="file" class="form-control" name="hinh"  />
                    <img src="{{asset($users['avatar'])}}" alt="" width="100px">
                  </div>
                  <div class="mt-3">
                    <span class="form-label">Quyền</span>
                    <select name="quyen" id="">
                      @if ($users['type']=='admin')
                      <option value="admin">admin</option>
                      <option value="member">member</option>

                      
                          
                      @endif
                      <option value="member">member</option>
                      <option value="admin">admin</option>
                      
                    
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

