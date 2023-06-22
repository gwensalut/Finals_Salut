@extends('layout.app')

@section('content')
@csrf
    <h1>WELCOME TO REGISTRATION PAGE</h1>
    <form action="{{ route ('register.submit')}}" method="post">
        @csrf
        <div>
            <label for="username">USERNAME</label>
            <input type="text" name="username" id="username">
        </div>

        <div>
            <label for="password">PASSWORD</label>
            <input type="password" name="password" id="password">
        </div>
        <div>
            <label for="name">NAME</label>
            <input type="text" name="name" id="name">
        </div>


        <div>
            <button>SUBMIT</button>
        </div>
    </form>
@endsection

@section('title')
    REGISTRATION
@endsection

