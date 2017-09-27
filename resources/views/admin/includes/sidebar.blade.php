    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="/" class="site_title"><span>{{ Auth::user()->name }}</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{ Auth::user()->name }}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  
                  <li><a><i class="fa fa-table"></i> Statistic <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                  <li><a href="{{ url(route('admin_table_index')) }}">Sets and question info</a></li>

                  <li><a href="{{ url(route('admin_table_users')) }}">Respondents info</a></li>
                    </ul>
                  </li>

                   <li><a><i class="fa fa-edit"></i> Survey <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                    <li><a href="{{ url(route('add_terms')) }}">SECTION 1 add Lists the terms and conditions</a></li>
                    <li><a href="{{ url(route('admin_form_box')) }}">SECTION 2 add Box and Questions</a></li>
                    <li><a href="{{ url(route('admin_form_choice_card')) }}">SECTION 3 add Choice Cards</a></li>
                    <li><a href="{{ url(route('demofraphics')) }}">SECTION 4 add Demographic question</a></li>
                <!--       <li><a href="{{ url(route('admin_form')) }}">General Form</a></li> -->
                    </ul>
                  </li>
                 
                  <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <a href="{{ url(route('index')) }}">Go HOME<span class="label label-success pull-right">Landing Page</span></a></a></li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>