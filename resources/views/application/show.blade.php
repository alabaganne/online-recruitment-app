@extends('../layouts/app')

@section('title', 'Dashboard - Job Applications')

@section('body')
  <div class="py-4">
    <div class="container">
      @include('../layouts/navbar')
      <div class="bg-dark rounded-lg shadow-sm" style="padding: 2em;">
        <h2 class="mb-4 text-shadow-sm">Ala Baganne's Details</h2>
        <div class="row">
          <div class="col-4">
            <img class="mb-5" src="{{ asset('images/1.svg') }}">
            <a href="#" class="btn btn-block btn-danger py-2 rounded-lg">Download Resume</a>
          </div>
          <div class="col-8">
            <div class="text-right small mb-4">
              <div class="mb-1">
                <span class="mr-2">+216 50 101 959</span>
                <i class="fas fa-phone text-warning"></i>
              </div>
              <div class="mb-1">
                <span class="mr-2">alabaganne9@gmail.com</span>
                <i class="fas fa-envelope text-warning"></i>
              </div>
              <div class="mb-0">
                <span class="mr-2">Martyrs Street 241, Jemmel</span>
                <i class="fas fa-map-marked-alt text-warning"></i>
              </div>
            </div>
            <p class="text-white-75 mb-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            <div class="text-right">
              <a href="#" class="btn btn-warning btn-sm rounded-lg px-3 py-2 mb-2">Mark as seen</a>
              <a href="{{ route('application.index') }}" class="d-block small text-white-75">Go back to the job applications page</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection