<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="/images/logo.jpg" alt="" style="width:40px;" class="rounded-pill"> {{ Auth::user()->name }}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('teacher.index') }}">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="{{ route('teacher.edit',Auth::user()->id) }}">Profile</a>
                </li>


                <li class="nav-item">
                    <a class="nav-link " href="{{ route('teacher.showstudents') }}">Students</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="{{ route('teacher.attendance') }}">Attendance</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="{{ route('teacher.studentreport') }}">Report</a>
                </li>


            </ul>

            <span>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit"  class="btn btn-danger text-light nav-link ">Logout</button>
                   </form>
                  </span>

        </div>
    </div>
</nav>
<!-- navbar done -->
