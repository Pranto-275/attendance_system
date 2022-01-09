<span class="text-center">
    <h2>Attendance Management System</h2>
</span>
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
                    <a class="nav-link" href="admin_createstudent.html">Add Students/Teacher</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="admin_viewstudents.html">View Students</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="admin_view_teachers.html">View Teachers</a>
                </li>

            </ul>

            <span class="navbar-text">

               <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit"  class="btn btn-danger text-light nav-link ">Logout</button>
               </form>
              </span>

        </div>
    </div>
</nav>
<!-- navbar done -->

