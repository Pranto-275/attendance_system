@extends('layouts.master')


@section('content')
 <!-- registration form -->

 <div class="container">
    <div class="row justify-content-center mt-5 ">
        <div class="col-12 col-md-8  ">

            <h4 class="text-center"><b>Add Students/Teacher Info</b></h4>
            <div class="customborder">
                <form action="{{ route('admin.store') }}" method="POST">
                    @csrf

                    <div class="row my-2">
                        <div class="col-md-2 ">
                            <label for=""><b>Name</b></label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" class="form-control form-control-sm" name="name" value="{{ old('name') }}">
                            <span style="color: red">
                                @error('name')
                                {{ $message }}
                                @enderror
                               </span>
                         </div>



                    </div>

                    <div class="row my-2">
                        <div class="col-md-2">
                            <label for=""><b>Department</b></label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" class="form-control form-control-sm" name="department" value="{{ old('department') }}">
                            <span style="color: red">
                                @error('department')
                                {{ $message }}
                                @enderror
                               </span>
                        </div>
                    </div>

                    <div class="row my-2">
                        <div class="col-md-2">
                            <label for=""><b>Email</b></label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" class="form-control form-control-sm" name="email" value="{{ old('email') }}" >
                            <span style="color: red">
                                @error('email')
                                {{ $message }}
                                @enderror
                               </span>
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
                            <input type="text" name="course" class="form-control form-control-sm"  value="{{ old('course') }}" >
                            <span style="color: red">
                                @error('course')
                                {{ $message }}
                                @enderror
                               </span>
                        </div>
                    </div>

                   </div>




                   <div id="student" style="display:none" class="users">
                    <div class="row my-2" >
                        <div class="col-md-2">
                            <label for=""><b>Semester</b></label>
                        </div>
                        <div class="col-md-8" >
                            <input type="text" name="semester" class="form-control form-control-sm"  value="{{ old('semester') }}" >
                            <span style="color: red">
                                @error('semester')
                                {{ $message }}
                                @enderror
                               </span>
                        </div>
                    </div>

                    <div class="row my-2">
                        <div class="col-md-2">
                            <label for=""><b>Batch</b></label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" class="form-control form-control-sm" name="batch"  value="{{ old('batch') }}" >
                            <span style="color: red">
                                @error('batch')
                                {{ $message }}
                                @enderror
                               </span>
                        </div>
                    </div>


                   </div>


                   <div class="row my-2">
                    <div class="col-md-2">
                        <label for=""><b>Password</b></label>
                    </div>
                    <div class="col-md-8">
                        <input type="password" class="form-control form-control-sm" name="password" >
                        <span style="color: red">
                            @error('password')
                            {{ $message }}
                            @enderror
                           </span>
                    </div>
                </div>




                    <button type="submit" class="btn btn-info w-100 text-light"><b>Register</b></button>

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


@if (Session::has('useradd'))

<script>
     swal({
        title: "Successfully",
        text:"User Added",
        icon:"success",
        button: {
                text: "okey",

                 },

      });
</script>

@endif
@endsection
