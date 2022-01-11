@extends('student.layouts.master')

@section('content')



  <!-- report page -->

  <div class="container">
    <div class="row justify-content-center mt-5 ">
        <div class="col-12">
            <div class="card">
                <div class="card-header text-center mb-3">
                    <h4>Student ID: STU-001</h4>

                </div>
                <div class="card-body p-2">
                    <!-- data table -->
                    <table id="example" class="table table-striped table-bordered " style="width:100%">
                        <thead>
                            <tr>
                                <th>Students ID</th>
                                <th>Course</th>
                                <th>class Number</th>
                                <th>status</th>



                            </tr>
                        </thead>
                        <tbody>

                         @foreach ($data as $data)
                                <!-- table row -->
                            <tr>
                                <td>{{ $data->user->reg_id }}</td>
                                <td>{{ $data->course }}</td>
                                <td>{{ $data->class }}</td>
                                <td>{{ $data->status }} </td>


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
</div>



<!-- end reg -->




@endsection
