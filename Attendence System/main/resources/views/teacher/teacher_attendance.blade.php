@extends('teacher.layouts.master')

@section('content')



  <!-- profile page -->


  <div class="container">
    <div class="row justify-content-center mt-5 ">
        <div class="col-12">
            <div class="card">
                <div class="card-header text-center mb-3">
                    <h4>25th Students list</h4>
                    {{-- <h2>Today class number {{ $lastclass+1 }}</h2> --}}

                </div>
                <form action="{{ route('teacher.store') }}" method="POST">
                    @csrf
                    <div class="card-body p-2">
                        <!-- class number -->
                        <div class="row mb-3">

                            <label  class="col-md-4 col-form-label text-md-end">Select Class Number</label>

                            <div class="col-md-6">
                                <input  type="number" class="form-control" name="class">

                                @error('class')
                                    <span style="color: red">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- end class number -->





                        <!-- data table -->
                        <table id="example" class="table table-striped table-bordered " style="width:100%">
                            <thead>
                                <tr>
                                    <th>Students ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Status</th>



                                </tr>
                            </thead>
                            <tbody>

                              @foreach ($data as $item)

                              <div class="row mb-3" style="display: none">

                                <label  class="col-md-4 col-form-label text-md-end">Select Class Number</label>

                                <div class="col-md-6">
                                    <input  type="text" class="form-control" name="id[]" value="{{ $item->id }}">

                                    {{-- @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror --}}
                                </div>
                            </div>



                                    <!-- table row -->
                                <tr>
                                    <td>{{ $item->reg_id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>

                                    <td class="text-center">
                                        <span>
                                        <div class="form-check form-check-inline">

                                            <input class="form-check-input" type="checkbox" name="status[]" id="inlineRadio1" value="present" checked>
                                            <label class="form-check-label" for="inlineRadio1">Present</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="status[]" id="inlineRadio1" value="absent" >
                                            <label class="form-check-label" for="inlineRadio1">Absent</label>
                                        </div>
                                        @error('status')
                                        <span style="color: red">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    </span>
                                    </td>

                                </tr>
                              @endforeach


                                <!-- end table row -->


                            </tbody>
                        </table>
                    </div>

                    <div class="text-end mx-5 my-3">
                        <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Save!</button>
                    </div>
                </form>

                <!-- END data table -->

            </div>

        </div>
    </div>
</div>





@endsection
