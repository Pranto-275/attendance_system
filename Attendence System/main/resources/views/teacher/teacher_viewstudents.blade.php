@extends('teacher.layouts.master')

@section('content')



  <!-- profile page -->

  <div class="container">
    <div class="row justify-content-center mt-5 ">
        <div class="col-12">
            <div class="card">
                <div class="card-header text-center mb-3">
                    <h4>25th Students list</h4>

                </div>
                <div class="card-body p-2">
                    <!-- data table -->
                    <table id="example" class="table table-striped table-bordered " style="width:100%">
                        <thead>
                            <tr>
                                <th>Students ID</th>
                                <th>Name</th>
                                <th>Department</th>
                                <th>Email</th>


                            </tr>
                        </thead>
                        <tbody>

                          @foreach ($data as $item)
                                <!-- table row -->
                            <tr>
                                <td>{{ $item->reg_id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->department }}</td>
                                <td>{{ $item->email }}</td>

                            </tr>

                            <!-- end table row -->
                          @endforeach


                        </tbody>
                    </table>
                </div>

                <!-- END data table -->

            </div>

        </div>
    </div>


<!-- end reg -->




@endsection
