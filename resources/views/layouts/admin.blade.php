<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="/css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="/css/stylea.css" />
    @yield('style')
    <title>@yield('title')</title>
  </head>
  <body>
    <!-- top navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container-fluid">
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#sidebar"
          aria-controls="offcanvasExample"
        >
          <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
        </button>
        <a
          class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold"
          href="/admin"
          >The Garden House</a
        >
      
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle ms-2"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <i class="bi bi-person-fill"></i>
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><form action="{{ route('logout') }}" method="post">
                  @csrf
                  @method('POST')
                  <a href="/logout"><input type="submit" value="Logout"></a>
               </form></li>
                
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- top navigation bar -->
    <!-- offcanvas -->
    <div
      class="offcanvas offcanvas-start sidebar-nav bg-dark"
      tabindex="-1"
      id="sidebar"
    >
      <div class="offcanvas-body p-0">
        <nav class="navbar-dark">
          <ul class="navbar-nav">
            <li>
              <div class="text-muted small fw-bold text-uppercase px-3">
                CORE
              </div>
            </li>
            
            <li class="my-4"><hr class="dropdown-divider bg-light" /></li>
            {{-- Products --}}
            <li>
              <a
                class="nav-link px-3 sidebar-link"
                data-bs-toggle="collapse"
                href="#layouts"
              >
                <span class="me-2"><i class="bi bi-flower3"></i></span>
                <span>Products</span>
                <span class="ms-auto">
                  <span class="right-icon">
                    <i class="bi bi-chevron-down"></i>
                  </span>
                </span>
              </a>
              <div class="collapse" id="layouts">
                <ul class="navbar-nav ps-3">
                  <li>
                    <a href="{{ route('createproduct') }}" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-plus-circle"></i></span>
                      <span>Add Product</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('products') }}" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-card-list"></i></span>
                      <span>List Products</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>


            {{--  Categories --}}

            <li>
              <a
                class="nav-link px-3 sidebar-link"
                data-bs-toggle="collapse"
                href="#categories"
              >
                <span class="me-2"><i class="bi bi-bookmark-fill"></i></span>
                <span>Categories</span>
                <span class="ms-auto">
                  <span class="right-icon">
                    <i class="bi bi-chevron-down"></i>
                  </span>
                </span>
              </a>
              <div class="collapse" id="categories">
                <ul class="navbar-nav ps-3">
                  <li>
                    <a href="{{ route('createcategory') }}" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-plus-circle"></i></span>
                      <span>Add Category</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('categories') }}" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-card-list"></i></span>
                      <span>List Categories</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            
            {{-- orders --}}
           
            <li>
              <a
                class="nav-link px-3 sidebar-link"
                data-bs-toggle="collapse"
                href="#orders"
              >
                <span class="me-2"><i class="bi bi-cash"></i></span>
                <span>Orders</span>
                <span class="ms-auto">
                  <span class="right-icon">
                    <i class="bi bi-chevron-down"></i>
                  </span>
                </span>
              </a>
              <div class="collapse" id="orders">
                <ul class="navbar-nav ps-3">
                  <li>
                    <a href="{{ route('adminorders') }}" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-card-list"></i></span>
                      <span>All Orders</span>
                    </a>
                  </li>
                  
                </ul>
              </div>
            </li>
            
            {{-- clients --}}
           
            <li>
              <a
                class="nav-link px-3 sidebar-link"
                data-bs-toggle="collapse"
                href="#clients"
              >
                <span class="me-2"><i class="bi bi-people-fill"></i></i></span>
                <span>Clients</span>
                <span class="ms-auto">
                  <span class="right-icon">
                    <i class="bi bi-chevron-down"></i>
                  </span>
                </span>
              </a>
              <div class="collapse" id="clients">
                <ul class="navbar-nav ps-3">
                  <li>
                    <a href="{{ route('adminclients') }}" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-card-list"></i></span>
                      <span>All clients</span>
                    </a>
                  </li>
                  
                </ul>
              </div>
            </li>
          </ul>
        </nav>
      </div>
    </div>
    <!-- offcanvas -->
    <main class="mt-5 pt-3">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
          </div>
        </div>


        @yield('content')
       
        
      </div>
    </main>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="/js/jquery-3.5.1.js"></script>
    <script src="/js/jquery.dataTables.min.js"></script>
    <script src="/js/dataTables.bootstrap5.min.js"></script>

    @yield('script')
  </body>
</html>
