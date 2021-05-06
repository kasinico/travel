<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../" class="brand-link">
      <img src="../../dist/img/logo-xs.png"
           alt="Farm Cash Book Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Farm Cash Book</span>
    </a>

    <div class="scrollbar-inner">
        <!-- user head
        <div class="user">
            <div class="user__info" data-toggle="dropdown">
                <img class="user__img" src="demo/img/profile-pics/8.jpg" alt="">
                <div>
                    <div class="user__name">
                    <a role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>{{ Auth::user()->name }}</a>
                </div>
                    <div class="user__email">
                        <a role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre> {{ Auth::user()->email }} </a></div>
                </div>
            </div>

            <div class="dropdown-menu">
                <a class="dropdown-item" href="#"></a>
                 <a class="dropdown-item" href="{{ url('/profile') }}">View Profile</a>
                <a class="dropdown-item" href="#">Settings</a>
                <a class="dropdown-item" href="">Logout</a>
            </div>
        </div> -->

        <div class="user">
            <div class="user__info" data-toggle="dropdown">
                <img class="user__img" src="demo/img/profile-pics/8.jpg" alt="">
                <div>
                    <div class="user__name">
                    <a role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>{{ Auth::user()->name }}</a>
                </div>
                    <div class="user__email">
                        <a role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre> {{ Auth::user()->email }} </a></div>
                </div>
            </div>

            <div class="dropdown-menu">
                <a class="dropdown-item" href="#"></a>
                 <a class="dropdown-item" href="{{ url('/profile') }}">View Profile</a>
                <a class="dropdown-item" href="#">Settings</a>
                <a class="dropdown-item" href="{{ url ('/login') }}">Logout</a>
            </div>
        </div>

        
        <ul class="navigation">
            <!-- profile link
            <li class="navigation__"><a href=""><i class="zmdi zmdi-group-work"></i>View Profile</a>
                <ul>
                </ul>>
            </li>-->

                <li class="navigation__sub"><a href="#"><i class="zmdi zmdi-group-work"></i>View Profile</a>

                <ul>
                    <li><a href="{{ url('/profile') }}">View Profile</a></li>
                    <li><a href="{{ url ('/login') }}">Logout</a></li>
                </ul>
            </li>

            <li class="navigation__active"><a href="{{ url('/dashboard') }}"><i class="zmdi zmdi-home"></i> Home</a></li>

            <li class="navigation__sub"><a href="#"><i class="zmdi zmdi-collection-item"></i>Input Income</a>

                <ul>
                    <li><a href="{{url ('/add') }}">Add Input Items</a></li>
                    <li><a href="{{url ('/all') }}">View Input items </a></li>
                    <li><a href="{{url ('/create') }}"> File Upload </a></li>
                </ul>
            </li>


            <li class="navigation__sub">
                <a href="#"><i class="zmdi zmdi-widgets"></i>Output/ Expence</a>

                <ul>
                    <li><a href="hidden-sidebar.html">Crimes</a></li>
                    <li><a href="boxed-layout.html">Vehicles Involved</a></li>
                    <li><a href="boxed-layout.html">Persons Involved</a></li>
                    <li><a href="boxed-layout.html">View Crimes</a></li>
                </ul>
            </li>

            <li class="navigation__sub">
                <a href="#"><i class="zmdi zmdi-view-list"></i> Locations</a>

                <ul>
                    <li><a href="html-table.html">Add location</a></li>
                    <li><a href="data-table.html">View Locations</a></li>
                </ul>
            </li>

            <li class="navigation__sub">
                <a href="#"><i class="zmdi zmdi-collection-text"></i> Staff</a>

                <ul>
                    <li><a href="form-elements.html">Add Staff</a></li>
                    <li><a href="form-components.html">View staff</a></li>
                    <li><a href="form-validation.html">Verify Staff</a></li>
                </ul>
            </li>

            <li class="navigation__sub">
                <a href="#"><i class="zmdi zmdi-swap-alt"></i> User Interface</a>

                <ul>
                    <li><a href="colors.html">Colors</a></li>
                    
                    <li><a href="pagination.html">Pagination</a></li>
                    <li><a href="progress.html">Progress</a></li>
                </ul>
            </li>

            

           
            <li><a href="{{ url('/calendar') }}"><i class="zmdi zmdi-calendar"></i> Calendar</a></li>


            <li class="navigation__sub">
                <a href="#"><i class="zmdi zmdi-collection-item"></i> Sample Pages</a>

                <ul>
                    <li><a href="profile-about.html">Profile</a></li>
                    <li><a href="messages.html">Messages</a></li>
                    <li><a href="contacts.html">Contacts</a></li>
                    <li><a href="groups.html">Groups</a></li>
                    <li><a href="pricing-tables.html">Pricing Tables</a></li>
                    <li><a href="invoice.html">Invoice</a></li>
                    <li><a href="todo-lists.html">Todo Lists</a></li>
                    <li><a href="notes.html">Notes</a></li>
                    <li><a href="login.html">Login & SignUp</a></li>
                    <li><a href="lockscreen.html">Lockscreen</a></li>
                    <li><a href="404.html">404</a></li>
                    <li><a href="empty.html">Empty Page</a></li>
                </ul>
            </li>
            
        </div>



   </div>

</aside>

