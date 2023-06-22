@extends('layout.app')

@section('content')
    <h1>WELCOME TO LOG IN PAGE</h1>
    <h2>ACTIVITY PLUS 20 & COLLOQUIUM ATTENDEES</h2>
    <form action="{{ route ('login.submit')}}" method="post">
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
            <button>SUBMIT</button>
        </div>
    </form>
@endsection

@section('title')
    LOG IN
@endsection