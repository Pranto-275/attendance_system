@extends('layouts.master')


@section('content')
 <!-- registration form -->

 <div class="container">
    <div class="row justify-content-center mt-5 ">
        <div class="col-12 col-md-8  ">

            <h4 class="text-center"><b>Add Students/Teacher Info</b></h4>
            <div class="customborder">
                <form action="{{ route('admin.update',$user->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row my-2">
                        <div class="col-md-2 ">
                            <label for=""><b>Name</b></label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" class="form-control form-control-sm" name="name" value="{{ $user->name }}">
                        </div>
                    </div>

                    <div class="row my-2">
                        <div class="col-md-2">
                            <label for=""><b>Department</b></label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" class="form-control form-control-sm" name="department" value="{{ $user->department }}">
                        </div>
                    </div>

                    <div class="row my-2">
                        <div class="col-md-2">
                            <label for=""><b>Email</b></label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" class="form-control form-control-sm" name="email" value="{{ $user->email }}">
                        </div>
                    </div>


                    <div class="row mt-2 my-2">
                        <div class="col-md-2">
                            <label for=""><b>Select User</b></label>
                        </div>
                        <div class="col-md-8">
                            <Select id="colorselector" class="form-control" name="role_id">
                                <option value="#" selected>Select User</option>
                                <option value="teacher" >Teacher</option>
                                <option value="student">Student</option>
                             </Select>
                        </div>
                    </div>

                   <div id="teacher" style="display:none" class="users">
                    <div class="row my-2" >
                        <div class="col-md-2">
                            <label for=""><b>Course</b></label>
                        </div>
                        <div class="col-md-8" >
                            <input type="text" name="course" class="form-control form-control-sm" value="{{ $user->course }}">
                        </div>
                    </div>

                   </div>




                   <div id="student" style="display:none" class="users">
                    <div class="row my-2" >
                        <div class="col-md-2">
                            <label for=""><b>Semester</b></label>
                        </div>
                        <div class="col-md-8" >
                            <input type="text" name="semester" class="form-control form-control-sm" value="{{ $user->semester }}">
                        </div>
                    </div>

                    <div class="row my-2">
                        <div class="col-md-2">
                            <label for=""><b>Batch</b></label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" class="form-control form-control-sm" name="batch" value="{{ $user->batch }}">
                        </div>
                    </div>


                   </div>


                   <div class="row my-2">
                    <div class="col-md-2">
                        <label for=""><b>Password</b></label>
                    </div>
                    <div class="col-md-8">
                        <input type="password" class="form-control form-control-sm" name="password">
                    </div>
                </div>




                    <button type="submit" class="btn btn-info w-100 text-light"><b>Update</b></button>

                </form>
            </div>
        </div>
    </div>
</div>

<!-- end reg -->
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



@section('sweet')


@if (Session::has('deleteuser'))

<script>
     swal({
        title: "Successfully",
        text:"Edit Successfully",
        icon:"success",
        button: {
                text: "okey",

                 },

      });
</script>

@endif
@endsection
