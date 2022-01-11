@extends('student.layouts.master')

@section('content')



  <!-- profile page -->

  <div class="container">
    <div class="row justify-content-center mt-5 ">
        <div class="col-12 col-md-8  ">
            <div class="card mb-3" style="max-width: 100%;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="{{ asset('images/admin.jpg') }}" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">

                        <h3>{{ $data->reg_id }}</h3>

                        <form action="{{ route('student.update',$data->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <!-- start name -->
                            <div class="row my-2">
                                <div class="col-md-3">
                                    <label for=""><b>Name</b></label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control form-control-sm" name="name" value="{{ $data->name }}">
                                    <span style="color: red">
                                        @error('name')
                                        {{ $message }}
                                        @enderror
                                       </span>
                                </div>
                            </div>
                            <!-- end name -->
                             <!-- start name -->
                             <div class="row my-2 mb-4">
                                <div class="col-md-3">
                                    <label for=""><b>email</b></label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control form-control-sm" name="email" value="{{ $data->email }}">
                                    <span style="color: red">
                                        @error('email')
                                        {{ $message }}
                                        @enderror
                                       </span>
                                </div>
                            </div>
                            <!-- end name -->
                            <button type="submit" class="btn btn-success w-100">Update</button>

                        </form>



                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
</div>


<!-- end reg -->




@endsection
