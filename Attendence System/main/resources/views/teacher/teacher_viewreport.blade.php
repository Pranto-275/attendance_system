@extends('teacher.layouts.master')

@section('content')



<div class="container">
    <div class="row justify-content-center mt-5 ">
        <div class="col-12">
            <div class="card">
                <div class="card-header text-center mb-3">
                    <h4>All Students</h4>

                </div>
                <div class="card-body p-2">
                    <!-- data table -->
                    <table id="example" class="table table-striped table-bordered " style="width:100%">
                        <thead>
                            <tr>
                                <th>Students ID</th>
                                <th>Course</th>
                                <th>Class Number</th>
                                <th>Status</th>



                            </tr>
                        </thead>
                        <tbody>
                         @foreach ($data as $item)

                            <!-- table row -->
                            <tr>
                                <td>{{ $item->user->reg_id }}</td>
                                <td>{{ $item->course }}</td>
                                <td>{{ $item->class }}</td>
                                <td>{{ $item->status }}</td>


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




@endsection
