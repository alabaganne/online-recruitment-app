@extends('./layouts/app')

@section('title', "Login")

@section('body')
    <div class="flex-center min-vh-75">
        <div class=" bg-dark p-4 rounded-lg shadow" style="width: 385px;">
            <h1 class="text-center text-light text-shadow-sm display-4 mb-4">Login</h1>
            <form action="#" method="post">
                <div class="form-group">
                    <label class="small" for="#">Username:</label>
                    <input class="form-control form-control-lg bg-darker border-white-15" type="text" placeholder="johndoe">
                </div>
                <div class="form-group">
                    <label class="small" for="#">Password:</label>
                    <input class="form-control form-control-lg bg-darker border-white-15" type="password">
                </div>
                <button class="btn btn-block btn-danger py-2 mb-4 shadow-sm">Sumbit</button>
                <p class="d-block mb-0 text-center small">You just want to apply for a job?<br><a class="text-warning" href="{{ route('application.create') }}">Click here</a></p>
            </form>
        </div>
    </div>
@endsection
