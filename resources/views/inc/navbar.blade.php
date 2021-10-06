<nav class="navbar navbar-expand-md navbar-inverse bg-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'StudentApp') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
              <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item ">
                  <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/profile">Student Profile</a>
                </li>
              <form class="d-flex">
                <input class="form-control mx-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success mx-2" type="submit">Search</button>
              </form>
              </ul>
              <ul class="nav navbar-nav navbar-right" style="float-right">
                <li class=" mx-2"><a href ="/profile/create"> Add new Student</a></li>
                </ul>
            </div>
            <!-- Right Side Of Navbar -->
        </div>
    </div>
</nav>