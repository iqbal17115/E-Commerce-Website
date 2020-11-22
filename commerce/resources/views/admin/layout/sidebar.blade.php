<nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="profile-image">
                  <img class="img-xs rounded-circle" src="{{ asset('../../images/faces/face8.jpg') }}" alt="profile image">
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">Allen Moreno</p>
                  <p class="designation">Premium user</p>
                </div>
              </a>
            </li>
            <li class="nav-item nav-category">Main Menu</li>
            <li class="nav-item">
              <a class="nav-link" href="index.html">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">Manage Product</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="/admin/product/show">Product</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/admin/create/product">Create Product</a>
                  </li>
                </ul>
              </div>
            </li>
        
         
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#category" aria-expanded="false" aria-controls="auth">
                <i class="menu-icon typcn typcn-document-add"></i>
                <span class="menu-title">Catagories</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="category">
                <ul class="nav flex-column sub-menu">

                  <li class="nav-item">
                    <a class="nav-link" href="/admin/show/category"> Category </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/admin/create/category"> Create Category </a>
                  </li>
               
                </ul>
              </div>
            </li>

            
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#brand" aria-expanded="false" aria-controls="auth">
                <i class="menu-icon typcn typcn-document-add"></i>
                <span class="menu-title">Brands</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="brand">
                <ul class="nav flex-column sub-menu">

                  <li class="nav-item">
                    <a class="nav-link" href="/admin/show/brand"> Brand </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/admin/create/brand"> Create Brand </a>
                  </li>
               
                </ul>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#division" aria-expanded="false" aria-controls="auth">
                <i class="menu-icon typcn typcn-document-add"></i>
                <span class="menu-title">Division</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="division">
                <ul class="nav flex-column sub-menu">

                  <li class="nav-item">
                    <a class="nav-link" href="/division/show"> Divisions </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/division/create"> Create Division </a>
                  </li>
               
                </ul>
              </div>
            </li>


            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#district" aria-expanded="false" aria-controls="auth">
                <i class="menu-icon typcn typcn-document-add"></i>
                <span class="menu-title">District</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="district">
                <ul class="nav flex-column sub-menu">

                  <li class="nav-item">
                    <a class="nav-link" href="/district/show"> District </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/district/create"> Create District </a>
                  </li>
               
                </ul>
              </div>
            </li>


          </ul>
        </nav>