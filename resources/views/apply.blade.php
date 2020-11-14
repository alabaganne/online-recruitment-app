@extends('./layouts/app')

@section('title', 'Submit a Job Application')

@section('body')
  <div class="p-5 min-vh-100">
    <div class="container">
      <div class="row">
        <!-- Left -->
        <div class="col-7">
          <div class="bg-dark rounded-lg p-4">
            <h1 class="mb-5 text-shadow">Apply for a job</h1>
            <form action="#">
              <div class="row">
                <div class="col-6">
                  <label for="#">Name:</label>
                  <input class="form-control form-control-lg bg-darker border-white-15" type="text">
                </div>
                <div class="col-6">
                  <label for="#">Email address:</label>
                  <input class="form-control form-control-lg bg-darker border-white-15" type="email" placeholder="johndoe@example.com">
                </div>
                <div class="col-6">
                  <label for="#">Phone number:</label>
                  <input class="form-control form-control-lg bg-darker border-white-15" type="email">
                </div>
                <div class="col-6">
                  <label for="#">ID card number:</label>
                  <input class="form-control form-control-lg bg-darker border-white-15" type="email">
                </div>
                <div class="col-12">
                  <label for="#">Job title</label>
                  <select class="form-control form-control-lg bg-darker border-white-15" type="email">
                    <option value="1">Web Developper</option>
                    <option value="2">Mobile Developper</option>
                    <option value="3">Data Scientist</option>
                    <option value="4">Designer</option>
                  </select>
                </div>
                <div class="col-12">
                  <label for="#">Tell us about yourself?</label>
                  <textarea class="form-control form-control-lg bg-darker border-white-15" id="" cols="30" rows="6" placeholder="Write something here.."></textarea>
                </div>
                <div class="col-12">
                  <label for="#">Resume:</label>
                  <input class="d-block" type="file">
                </div>
                <div class="col-12">
                <button class="btn btn-block btn-lg btn-danger">Submit</button>
                </div>
              </div>
              <p class="mb-0 small text-center">Go back to the <a class="text-warning" href="{{ route('welcome') }}">Welcome page</a></p>
            </form>
          </div>
        </div>
        <!-- Right -->
        <div class="col-5">
          <div class="bg-dark rounded-lg p-4">
            <div class="mb-3">
              <i class="fas fa-phone text-warning mr-2"></i>
              <span>(+216) 50 101 959</span>
            </div>
            <div class="mb-3">
              <i class="fas fa-phone text-warning mr-2"></i>
              <span>(+216) 22 652 543</span>
            </div>
            <div class="mb-3">
              <i class="fas fa-envelope text-warning mr-2"></i>
              <span>alabaganne9@gmail.com</span>
            </div>
            <div>
              <i class="fas fa-map-marked-alt text-warning mr-2"></i>
              <span>Monastir, Jemmel, Martyrs Street 241</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection