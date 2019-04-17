@extends('index')

@section('content')
    <div class="row">
    <a href="/user_form"> New User</a>
    </div>
    <h3>List of Users</h3>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
        </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td>{{$user->first_name}}</td>
                    <td>{{$user->last_name}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection