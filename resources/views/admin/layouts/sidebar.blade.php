<aside class="left-sidebar" data-sidebarbg="skin5">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="p-t-30">
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('admin.categories.list')}}" aria-expanded="false"><i class="mdi mdi-pencil"></i><span class="hide-menu">Category</span></a></li>
                 <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('admin.subjects.list')}}" aria-expanded="false"><i class="mdi mdi-pencil"></i><span class="hide-menu">Suject</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('admin.profile.view')}}" aria-expanded="false"><i class="fa fa-user"></i><span class="hide-menu">Profile</span></a></li>

                
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Post </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="{{route('admin.post.list')}}" class="sidebar-link"><i class="mdi mdi-message-text"></i><span class="hide-menu"> My Post List </span></a></li>
                        <li class="sidebar-item"><a href="{{route('admin.post.add')}}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Add A New Post </span></a></li>
                    </ul>
                </li>  
                 <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Question</span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="{{route('admin.question.list')}}" class="sidebar-link"><i class="mdi mdi-message-text"></i><span class="hide-menu"> My Question List </span></a></li>
                        <li class="sidebar-item"><a href="{{route('admin.question.add')}}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Add A Question Post </span></a></li>
                    </ul>
                </li>  
                  <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-user"></i><span class="hide-menu">{{ __('Logout') }}</span></a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form></li>

                            
               
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>