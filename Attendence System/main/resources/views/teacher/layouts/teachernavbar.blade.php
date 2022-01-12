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
                    <a class="nav-link " href="teacher_viewtachers.html">Faculties</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="teacher_attendance.html">Attendance</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="teacher_students_report.html">Report</a>
                </li>


            </ul>

            <span class="navbar-text">
                <a  class="btn btn-danger text-light nav-link " href="#">Logout</a>
              </span>

        </div>
    </div>
</nav>
<!-- navbar done -->
