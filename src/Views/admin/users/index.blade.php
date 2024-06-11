@extends('layouts.master')

@section('title')
    Dashboard
@endsection

@section('content')
    <h1>Danh sách User</h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>IMAGE</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>CREATED AT</th>
                <th>UPDATED AT</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            <a class="btn btn-primary" href="{{ url('admin/users/create') }}">Thêm mới</a>

            @foreach ($user as $user)
            <tr>
                <td><?= $user['id'] ?></td>
                <td><img src="{{asset($user['avatar'])}}" alt="" width="100px"></td>
               
                <td><?= $user['name'] ?></td>
                <td><?= $user['email'] ?></td>
                <td><?= $user['created_at'] ?></td>
                <td><?= $user['updated_at'] ?></td>
                <td>
                    <a href="{{ url('admin/users/' . $user['id']. '/show' ) }}" class="btn btn-info">Xem</a>


                    <a href="{{url('admin/users/' . $user['id'] .  '/edit')}}" class="btn btn-warning">Sửa</a>

                    <a class="btn btn-danger" href="<?= url("admin/users/{$user['id']}/delete") ?>" onclick="return confirm('Chắc chắn xóa không?')">Xóa</a>


                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</body>

</html>
@endsection