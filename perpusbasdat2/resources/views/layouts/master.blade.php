<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <style>
    body {
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    .wrapper {
      display: flex;
      flex: 1;
    }

    .sidebar {
      min-width: 250px;
      max-width: 250px;
      background-color: #343a40;
      color: #fff;
    }

    .sidebar .nav-link {
      color: #adb5bd;
    }

    .sidebar .nav-link:hover,
    .sidebar .nav-link.active {
      color: #fff;
      background-color: #495057;
    }

    .content {
      flex: 1;
      padding: 20px;
    }

    @media (max-width: 768px) {
      .sidebar {
        display: none;
      }

      .sidebar.show {
        display: block;
        position: absolute;
        z-index: 1000;
        height: 100%;
      }
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <button class="btn btn-outline-light d-lg-none me-2" id="toggleSidebar">
        ☰
      </button>
      <a class="navbar-brand" href="#">AdminPanel</a>
      <div class="ms-auto">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-light" href="#" id="userMenu" role="button" data-bs-toggle="dropdown">
              Admin
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item" href="#">Profile</a></li>
              <li><a class="dropdown-item" href="#">Settings</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Main Wrapper -->
  <div class="wrapper">
    <!-- Sidebar -->
    <div class="sidebar d-flex flex-column p-3" id="sidebar">
      <h4 class="text-white">Menu</h4>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a href="/" class="nav-link">Dashboard</a>
        </li>
        <li class="nav-item">
          <a href="{{route('buku.index')}}" class="nav-link">buku</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">Reports</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">Settings</a>
        </li>
      </ul>
    </div>

    <!-- Page Content -->
    <div class="content">
      
     @yield('content')
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    const toggleSidebar = document.getElementById('toggleSidebar');
    const sidebar = document.getElementById('sidebar');

    toggleSidebar.addEventListener('click', () => {
      sidebar.classList.toggle('show');
    });
  </script>
</body>
</html>
