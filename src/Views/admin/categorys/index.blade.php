@extends('layouts.master')

@section('title')
    Dashboard
@endsection

@section('content')

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                
            </tr>
        </thead>
        <tbody>
            <a class="btn btn-primary" href="{{ url('admin/categorys/create') }}">Thêm mới</a>

            @foreach ($categorys as $categorys)
            <tr>
                <td><?= $categorys['id'] ?></td>
                
               
                <td><?= $categorys['name'] ?></td>
               
                <td>
                    <a href="{{ url('admin/categorys/' . $categorys['id']. '/show' ) }}" class="btn btn-info">Xem</a>


                    <a href="{{url('admin/categorys/' . $categorys['id'] .  '/edit')}}" class="btn btn-warning">Sửa</a>

                    <a class="btn btn-danger" href="<?= url("admin/categorys/{$categorys['id']}/delete") ?>" onclick="return confirm('Chắc chắn xóa không?')">Xóa</a>


                </td>
                
            </tr>
            @endforeach

        </tbody>
    </table>
    @endsection
