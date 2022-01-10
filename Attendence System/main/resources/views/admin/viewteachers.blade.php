@extends('layouts.master')


@section('content')


<!-- table -->

<div class="container">
    <div class="row justify-content-center mt-5 ">
        <div class="col-12">
            <div class="card">
                <div class="card-header text-center mb-3">
                    <h4>All Teachers</h4>

                </div>
                <div class="card-body p-2">
                    <!-- data table -->
                    <table id="example" class="table table-striped table-bordered " style="width:100%">
                        <thead>
                            <tr>
                                <th>Teachers ID</th>
                                <th>Name</th>
                                <th>Department</th>
                                <th>Course</th>
                                <th>Email</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>

                            <!-- table row -->
                            @foreach ($user as $item)
                            <tr>
                                <td>{{ $item->reg_id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->department }}</td>
                                <td>{{ $item->course }}</td>
                                <td>{{ $item->email }}</td>
                                <td class="text-center">
                                    <a href="{{ route('admin.edit',$item->id) }}" class="btn btn-success"> <i class="fas fa-edit    "></i>
                                    </a>
                                    <form action="{{ route('admin.destroy',$item->id) }}" method="POST" style="display:inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"> <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach

                            <!-- end table row -->


                        </tbody>
                    </table>
                </div>

                <!-- END data table -->

            </div>

        </div>
    </div>
</div>


<!-- end table -->
@endsection


@section('script')
<script>

    $(function() {
        $('#colorselector').change(function(){
            $('.users').hide();
            $('#' + $(this).val()).show();
        });
    });
</script>

@endsection
