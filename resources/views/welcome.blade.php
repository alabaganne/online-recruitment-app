@extends('./layouts/app')

@section('title', 'Welcome')

@section('body')
  <div class="flex-center min-vh-75 text-center">
    <div style="width: 375px;">
      <h2 class="mb-4 text-light">Logo</h2>
      <a href="{{ route('application.create') }}" class="btn btn-danger px-5 py-3 shadow-sm mb-2" style="width: 385px;">Apply for a job</a>
      <div class="py-2 text-warning">Or</div>
      <a href="{{ route('login') }}" class="btn btn-dark px-5 py-3 shadow-sm" style="width: 375px;">Login</a>
    </div>
  </div>
@endsection