@extends('layouts.master')

@section('title')
Dashboard
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="white_card card_height_100 mb_30">
            <div class="white_card_header">
                <div class="box_header m-0">
                    <div class="main-title">
                        <h1 class="m-0">Danh sách</h1>
                    </div>
                </div>
            </div>
            <div class="white_card_body">
                <div class="table-responsive">
                    <a class="btn btn-primary" href="<?= url("admin/products/create") ?>">Thêm mới</a>

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Cate_Name</th>
                                <th>IMG</th>
                                <th>Overview</th>

                                <th>created_at</th>
                                <th>UPDATED AT</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>


                            @foreach ($products as $product)
                            <tr>
                                <td><?= $product['id'] ?></td>

                                <td><?= $product['name'] ?></td>
                                <td><?= $product['c_name'] ?></td>
                                <td><img src="{{asset($product['img_thumbnail'])}}" alt="" width="100px"></td>
                                <td><?= $product['overview'] ?></td>

                                <td><?= $product['created_at'] ?></td>
                                <td><?= $product['updated_at'] ?></td>

                                <td>

                                    <a href="{{ url('admin/products/' . $product['id']. '/show' ) }}" class="btn btn-info">Xem</a>


                                    <a href="{{url('admin/products/' . $product['id'] .  '/edit')}}" class="btn btn-warning">Sửa</a>


                                    <a class="btn btn-danger" href="{{ url('admin/products/' . $product['id'] .  '/delete') }}" onclick="return confirm('Chắc chắn xóa không?')">Xóa</a>





                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

</div>


@endsection