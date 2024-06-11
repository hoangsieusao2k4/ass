@extends('layouts.master')

@section('title')
    Dashboard
@endsection

@section('content')

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Tên trường</th>
                <th>Gía trị</th>

            </tr>
        </thead>
        <tbody>


            @foreach ($products as $key => $value)
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