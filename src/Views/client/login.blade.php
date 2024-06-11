<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
  
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url(./image/img2.avif);
            background-size: 95%;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }
        .login-container h2 {
            margin-bottom: 20px;
            color: #333333;
        }
        .login-container input[type="email"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 4px;
            border: 1px solid #cccccc;
        }
        .login-container .h {
            background-color: #007bff;
            color: #ffffff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .login-container .h:hover {
            background-color: #0056b3;
        }
    </style>
  
</head>
<body>
    
    <div class="login-container">
    <?php
            if(isset($_SESSION['error'])){

            
            ?>
         <div class="   alert alert-warning">
          <ul>
          
              <?php
             echo $_SESSION['error'];
              
              ?>
           
          </ul>
          <?php
          unset($_SESSION['error']);
          
          ?>

         </div>


            <?php
            }
            
            ?>

        <h2>Đăng nhập</h2>
        <form action="<?=url('client/getlogin')?>" method="post">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Mật khẩu" required>
            <div style="color: red;">
            
            
            
            <div>
            <input type="submit" class="h" value="Đăng nhập" name="btnsumbit">
            
        </form>
    </div>
  
</body>
</html>
