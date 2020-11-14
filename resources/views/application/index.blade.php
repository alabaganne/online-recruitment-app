@extends('../layouts/app')

@section('title', 'Dashboard - Job Applications')

@section('body')
  <div class="py-4">
    <div class="container">
      @include('../layouts/navbar')
      <h3 class="text-light text-uppercase mb-3 mt-5">Job applications</h3>
      <div class="bg-dark rounded-lg">
        <!-- Example -->
        <div class="p-4 border-bottom border-white-30">
          <div class="d-flex align-items-center mb-3">
            <h3 class="mr-auto mb-0 text-shadow-sm text-warning">Ala Baganne</h3>
            <a href="{{ route('application.show', ['application' => 1]) }}" class="btn btn-danger btn-sm shadow-sm px-3 py-2 rounded-lg">View details</a>
          </div>
          <p class="text-white-75 mb-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
          <div class="small">December, 16 2020</div>
        </div>
        <!-- Example -->
        <div class="p-4 border-bottom border-white-30">
          <div class="d-flex align-items-center mb-3">
            <h3 class="mr-auto mb-0 text-shadow-sm text-warning">Ala Baganne</h3>
            <a href="#" class="btn btn-danger btn-sm shadow-sm px-3 py-2 rounded-lg">View details</a>
          </div>
          <p class="text-white-75 mb-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
          <div class="small">December, 16 2020</div>
        </div>
        <!-- Example -->
        <div class="p-4 border-bottom border-white-30">
          <div class="d-flex align-items-center mb-3">
            <h3 class="mr-auto mb-0 text-shadow-sm text-warning">Ala Baganne</h3>
            <a href="#" class="btn btn-danger btn-sm shadow-sm px-3 py-2 rounded-lg">View details</a>
          </div>
          <p class="text-white-75 mb-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
          <div class="small">December, 16 2020</div>
        </div>
        <!-- Example -->
        <div class="p-4">
          <div class="d-flex align-items-center mb-3">
            <h3 class="mr-auto mb-0 text-shadow-sm text-warning">Ala Baganne</h3>
            <a href="#" class="btn btn-danger btn-sm shadow-sm px-3 py-2 rounded-lg">View details</a>
          </div>
          <p class="text-white-75 mb-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
          <div class="small">December, 16 2020</div>
        </div>
      </div>
      <div class="flex-center mt-4">
        <a class="btn btn-danger rounded-lg mr-3 disabled" href="#">Previous</a>
        <span class="mr-3 text-warning">1</span>
        <a class="btn btn-danger rounded-lg" href="#">Next</a>
      </div>
    </div>
  </div>
@endsection