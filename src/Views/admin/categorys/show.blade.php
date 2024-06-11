@extends('layouts.master')

@section('title')
    Dashboard
@endsection

@section('content')
    <h1>Chi tiết danh mục {{$categorys['name']}}</h1>
    <a class="btn btn-primary" href="{{url('admin/users')}}">Quay lại</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Tên trường</th>
                <th>Gía trị</th>

            </tr>
        </thead>
        <tbody>


            @foreach ($categorys as $key => $value)
            <tr>
                <td>{{$key}}</td>
                <td>{{$value}}</td>
            </tr>
            @endforeach

        </tbody>
    </table>
</body>

</html>
@endsection