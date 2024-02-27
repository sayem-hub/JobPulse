<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark"> <!--begin::Sidebar Brand-->
    <div class="sidebar-brand"> <!--begin::Brand Link--> <a href="{{ route('home') }}" class="brand-link"> <!--begin::Brand Image--> <img src="{{ asset('assets/images/logo-light_e.png') }}" alt="AdminLTE Logo" class="brand-image opacity-75 shadow"> <!--end::Brand Image--> <!--begin::Brand Text--> </a>  
        </div> 
    <div class="sidebar-wrapper">
        <nav class="mt-2"> <!--begin::Sidebar Menu-->
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                <li class="nav-item menu-open"> 
                  @if (Auth::user()->role == 'admin')
                      @elseif (Auth::user()->role == 'company')
                      <a href="{{ route('dashboard') }}" class="nav-link active"> <i class="nav-icon bi bi-speedometer"></i><p>Dashboard</p></a>
                  @else
                      <a href="{{ route('candidate.dashboard') }}" class="nav-link active"> <i class="nav-icon bi bi-speedometer"></i><p>Dashboard</p></a>
                  @endif 
                  
                </li>


                @if (Auth::user()->role == 'admin' || Auth::user()->role == 'company')
                    <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-box-seam-fill"></i>
                        <p>
                            Company
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"> <a href="{{ route('company.index') }}" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                <p>Company List</p>
                            </a> </li>
                        <li class="nav-item"> <a href="{{ route('company.create') }}" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                <p>Add New Company</p>
                            </a> </li>
                        
                    </ul>
                </li>
                @endif


                @if (Auth::user()->role == 'admin' || 'company')
                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-box-seam-fill"></i>
                    <p>
                        Jobs
                        <i class="nav-arrow bi bi-chevron-right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item"> <a href="{{ route('jobs.index') }}" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                            <p>Jobs List</p>
                        </a> </li>
                    <li class="nav-item"> <a href="{{ route('jobs.create') }}" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                            <p>Add New Job</p>
                        </a> </li>
                    
                </ul>
            </li>

            @endif
            
            @if (Auth::user()->role == 'admin')
            <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-box-seam-fill"></i>
                <p>
                    Jobs Category
                    <i class="nav-arrow bi bi-chevron-right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item"> <a href="{{ route('category.index') }}" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                        <p>Category List</p>
                    </a> </li>
                <li class="nav-item"> <a href="{{ route('category.create') }}" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                        <p>Add New Category</p>
                    </a> </li>
            </ul>
        </li> 
      
            
            <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-box-seam-fill"></i>
                <p>
                    Job Type
                    <i class="nav-arrow bi bi-chevron-right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item"> <a href="{{ route('type.index') }}" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                        <p>Type List</p>
                    </a> </li>
                <li class="nav-item"> <a href="{{ route('type.create') }}" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                        <p>Add New Type</p>
                    </a> </li>
                
            </ul>
        </li>
      

        <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-box-seam-fill"></i>
            <p>
                Degrees
                <i class="nav-arrow bi bi-chevron-right"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item"> <a href="{{ route('degree.index') }}" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                    <p>Degree List</p>
                </a> </li>
            <li class="nav-item"> <a href="{{ route('degree.create') }}" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                    <p>Add New Degree</p>
                </a> </li>
            
        </ul>
        </li>
        @endif

    
        @if (Auth::user()->role == 'candidate')
        <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-box-seam-fill"></i>
            <p>
                My Resume
                <i class="nav-arrow bi bi-chevron-right"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item"> <a href="{{ route('candidate.resume.create') }}" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                    <p>Create</p>
                </a> 
            </li>

            <li class="nav-item"> 
                <a href="{{ route('candidate.resume.view', ['id' => auth()->user()->id]) }}" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                    <p>View</p>
                </a> 
            </li>

            <li class="nav-item"> <a href="{{ route('candidate.resume.update') }}" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                    <p>Update</p>
                </a> 
            </li>
        </ul>
        </li>


        <li class="nav-item menu-open">
                <a href="#" class="nav-link active"> <i class="nav-icon bi bi-speedometer"></i><p>My Job Application</p></a>
        </li>

       

      @endif

            </ul>
        </nav>
    </div> 
</aside> 