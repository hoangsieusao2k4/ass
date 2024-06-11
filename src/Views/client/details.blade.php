@extends('layouts.master')

@section('title')
Dashboard
@endsection

@section('content')
<div class="container " style="margin-top: 70px;">
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <div>
                    <img src="{{asset($product['img_thumbnail'])}}" width="500px" height="400px"  alt="">
                </div>
            </div>
            <div class="col m-4">
                <div style="width: 400px; height: 200px;" >
                    <h4><?=$product['name']?></h4><br>
                    <h5 style="color: red; ">Giá:<?=$product['overview']?></h5> <br>
                    Size: <select class="form-select" >
                        <option value="1">S</option>
                        <option value="2">M</option>
                        <option value="3">L</option>
                      </select><br>
                    <p>Số Lượng: 22</p>
                    <p class="border border-light-subtle">
                        <?=$product['content']?>
                    </p><br>
                    <a href="" class="btn btn-danger" style="width: 400px;height: 50px; padding: 15px;"><i class="fa-solid fa-cart-shopping"></i>  Thêm Vào Giỏ</a><br>
                </div>
            </div>
            <!-- <div class="col"></div>
          

        </div> -->
    </div>
    @endsection