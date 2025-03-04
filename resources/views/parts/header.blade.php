<nav class="app-header navbar navbar-expand bg-body">
    <div class="container-fluid">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
            <i class="bi bi-list"></i>
          </a>
        </li>
        <li class="nav-item d-none d-md-block"><a href="#" class="nav-link">Home</a></li>
        <li class="nav-item d-none d-md-block"><a href="#" class="nav-link">Contact</a></li>
      </ul>
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="bi bi-search"></i>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" data-bs-toggle="dropdown" href="#">
            <i class="bi bi-chat-text"></i>
            <span class="navbar-badge badge text-bg-danger">3</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
            <a href="#" class="dropdown-item">
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <img src="{{ Vite::asset('resources/images/user1-128x128.jpg') }}" alt="User Avatar" class="img-size-50 rounded-circle me-3" />
                </div>
                <div class="flex-grow-1">
                  <h3 class="dropdown-item-title">Brad Diesel
                    <span class="float-end fs-7 text-danger"><i class="bi bi-star-fill"></i></span>
                  </h3>
                  <p class="fs-7">Call me whenever you can...</p>
                  <p class="fs-7 text-secondary"><i class="bi bi-clock-fill me-1"></i> 4 Hours Ago</p>
                </div>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <img src="{{ Vite::asset('resources/images/user8-128x128.jpg') }}" alt="User Avatar" class="img-size-50 rounded-circle me-3" />
                </div>
                <div class="flex-grow-1">
                  <h3 class="dropdown-item-title">John Pierce
                    <span class="float-end fs-7 text-secondary"><i class="bi bi-star-fill"></i></span>
                  </h3>
                  <p class="fs-7">I got your message bro</p>
                  <p class="fs-7 text-secondary"><i class="bi bi-clock-fill me-1"></i> 4 Hours Ago</p>
                </div>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <img src="{{ Vite::asset('resources/images/user3-128x128.jpg') }}" alt="User Avatar" class="img-size-50 rounded-circle me-3" />
                </div>
                <div class="flex-grow-1">
                  <h3 class="dropdown-item-title">Nora Silvester
                    <span class="float-end fs-7 text-warning"><i class="bi bi-star-fill"></i></span>
                  </h3>
                  <p class="fs-7">The subject goes here</p>
                  <p class="fs-7 text-secondary"><i class="bi bi-clock-fill me-1"></i> 4 Hours Ago</p>
                </div>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
          </div>
        </li>
        <li class="nav-item dropdown user-menu">
          <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
            <img src="{{ Vite::asset('resources/images/user2-160x160.jpg') }}" class="user-image rounded-circle shadow" alt="User Image" />
            <span class="d-none d-md-inline">{{ auth()->user()->name }}</span>
          </a>
          <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
            <li class="user-header text-bg-primary">
              <img src="{{ Vite::asset('resources/images/user2-160x160.jpg') }}" class="rounded-circle shadow" alt="User Image" />
              <p>{{ auth()->user()->name }}<small>Member since Nov. 2023</small></p>
            </li>
            <li class="user-body">
              <div class="row">
                <div class="col-4 text-center"><a href="#">Followers</a></div>
                <div class="col-4 text-center"><a href="#">Sales</a></div>
                <div class="col-4 text-center"><a href="#">Friends</a></div>
              </div>
            </li>
            <li class="user-footer">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-default btn-flat float-end">Logout</button>
                </form>
                <a href="#" class="btn btn-default btn-flat">Profile</a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
