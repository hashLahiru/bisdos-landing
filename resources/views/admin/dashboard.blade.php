    @extends('admin.layouts.app')

    @section('content')
        <div id="wrapper">
            <nav class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav metismenu" id="side-menu">
                        <li class="nav-header">
                            <div class="dropdown profile-element">
                                <img alt="image" class="rounded-circle" src="img/profile_small.jpg" />
                                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                    <span class="m-t-xs block font-bold">David Williams</span>
                                    <span class="text-muted block text-xs">
                                        Art Director
                                        <b class="caret"></b>
                                    </span>
                                </a>
                                <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                    <li>
                                        <a class="dropdown-item" href="profile.html">Profile</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="contacts.html">Contacts</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="mailbox.html">Mailbox</a>
                                    </li>
                                    <li class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="login.html">Logout</a></li>
                                </ul>
                            </div>
                            <div class="logo-element">IN+</div>
                        </li>
                        <li class="active">
                            <a href="index.html">
                                <i class="fa fa-th-large"></i>
                                <span class="nav-label">Dashboards</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level">
                                <li class="active"><a href="index.html">Dashboard v.1</a></li>
                                <li><a href="dashboard_2.html">Dashboard v.2</a></li>
                                <li><a href="dashboard_3.html">Dashboard v.3</a></li>
                                <li><a href="dashboard_4_1.html">Dashboard v.4</a></li>
                                <li><a href="dashboard_5.html">Dashboard v.5</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="layouts.html">
                                <i class="fa fa-diamond"></i>
                                <span class="nav-label">Layouts</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-bar-chart-o"></i>
                                <span class="nav-label">Graphs</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level collapse">
                                <li><a href="graph_flot.html">Flot Charts</a></li>
                                <li><a href="graph_morris.html">Morris.js Charts</a></li>
                                <li><a href="graph_rickshaw.html">Rickshaw Charts</a></li>
                                <li><a href="graph_chartjs.html">Chart.js</a></li>
                                <li><a href="graph_chartist.html">Chartist</a></li>
                                <li><a href="c3.html">c3 charts</a></li>
                                <li><a href="graph_peity.html">Peity Charts</a></li>
                                <li><a href="graph_sparkline.html">Sparkline Charts</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="mailbox.html">
                                <i class="fa fa-envelope"></i>
                                <span class="nav-label">Mailbox</span>
                                <span class="label label-warning float-right">16/24</span>
                            </a>
                            <ul class="nav nav-second-level collapse">
                                <li><a href="mailbox.html">Inbox</a></li>
                                <li><a href="mail_detail.html">Email view</a></li>
                                <li><a href="mail_compose.html">Compose email</a></li>
                                <li><a href="email_template.html">Email templates</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="metrics.html">
                                <i class="fa fa-pie-chart"></i>
                                <span class="nav-label">Metrics</span>
                            </a>
                        </li>
                        <li>
                            <a href="widgets.html">
                                <i class="fa fa-flask"></i>
                                <span class="nav-label">Widgets</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-edit"></i>
                                <span class="nav-label">Forms</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level collapse">
                                <li><a href="form_basic.html">Basic form</a></li>
                                <li><a href="form_advanced.html">Advanced Plugins</a></li>
                                <li><a href="form_wizard.html">Wizard</a></li>
                                <li><a href="form_file_upload.html">File Upload</a></li>
                                <li><a href="form_editors.html">Text Editor</a></li>
                                <li><a href="form_autocomplete.html">Autocomplete</a></li>
                                <li><a href="form_markdown.html">Markdown</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-desktop"></i>
                                <span class="nav-label">App Views</span>
                                <span class="label label-primary float-right">SPECIAL</span>
                            </a>
                            <ul class="nav nav-second-level collapse">
                                <li><a href="contacts.html">Contacts</a></li>
                                <li><a href="profile.html">Profile</a></li>
                                <li><a href="profile_2.html">Profile v.2</a></li>
                                <li><a href="contacts_2.html">Contacts v.2</a></li>
                                <li><a href="projects.html">Projects</a></li>
                                <li><a href="project_detail.html">Project detail</a></li>
                                <li><a href="activity_stream.html">Activity stream</a></li>
                                <li><a href="teams_board.html">Teams board</a></li>
                                <li><a href="social_feed.html">Social feed</a></li>
                                <li><a href="clients.html">Clients</a></li>
                                <li><a href="full_height.html">Outlook view</a></li>
                                <li><a href="vote_list.html">Vote list</a></li>
                                <li><a href="file_manager.html">File manager</a></li>
                                <li><a href="calendar.html">Calendar</a></li>
                                <li><a href="issue_tracker.html">Issue tracker</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="article.html">Article</a></li>
                                <li><a href="faq.html">FAQ</a></li>
                                <li><a href="timeline.html">Timeline</a></li>
                                <li><a href="pin_board.html">Pin board</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-files-o"></i>
                                <span class="nav-label">Other Pages</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level collapse">
                                <li><a href="search_results.html">Search results</a></li>
                                <li><a href="lockscreen.html">Lockscreen</a></li>
                                <li><a href="invoice.html">Invoice</a></li>
                                <li><a href="login.html">Login</a></li>
                                <li><a href="login_two_columns.html">Login v.2</a></li>
                                <li><a href="forgot_password.html">Forget password</a></li>
                                <li><a href="register.html">Register</a></li>
                                <li><a href="404.html">404 Page</a></li>
                                <li><a href="500.html">500 Page</a></li>
                                <li><a href="empty_page.html">Empty page</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-globe"></i>
                                <span class="nav-label">Miscellaneous</span>
                                <span class="label label-info float-right">NEW</span>
                            </a>
                            <ul class="nav nav-second-level collapse">
                                <li><a href="toastr_notifications.html">Notification</a></li>
                                <li><a href="nestable_list.html">Nestable list</a></li>
                                <li><a href="agile_board.html">Agile board</a></li>
                                <li><a href="timeline_2.html">Timeline v.2</a></li>
                                <li><a href="diff.html">Diff</a></li>
                                <li><a href="pdf_viewer.html">PDF viewer</a></li>
                                <li><a href="i18support.html">i18 support</a></li>
                                <li><a href="sweetalert.html">Sweet alert</a></li>
                                <li><a href="idle_timer.html">Idle timer</a></li>
                                <li><a href="truncate.html">Truncate</a></li>
                                <li><a href="password_meter.html">Password meter</a></li>
                                <li><a href="spinners.html">Spinners</a></li>
                                <li><a href="spinners_usage.html">Spinners usage</a></li>
                                <li><a href="tinycon.html">Live favicon</a></li>
                                <li><a href="google_maps.html">Google maps</a></li>
                                <li><a href="datamaps.html">Datamaps</a></li>
                                <li><a href="social_buttons.html">Social buttons</a></li>
                                <li><a href="code_editor.html">Code editor</a></li>
                                <li><a href="modal_window.html">Modal window</a></li>
                                <li><a href="clipboard.html">Clipboard</a></li>
                                <li><a href="text_spinners.html">Text spinners</a></li>
                                <li><a href="forum_main.html">Forum view</a></li>
                                <li><a href="validation.html">Validation</a></li>
                                <li><a href="tree_view.html">Tree view</a></li>
                                <li><a href="loading_buttons.html">Loading buttons</a></li>
                                <li><a href="chat_view.html">Chat view</a></li>
                                <li><a href="masonry.html">Masonry</a></li>
                                <li><a href="tour.html">Tour</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-flask"></i>
                                <span class="nav-label">UI Elements</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level collapse">
                                <li><a href="typography.html">Typography</a></li>
                                <li><a href="icons.html">Icons</a></li>
                                <li><a href="draggable_panels.html">Draggable Panels</a></li>
                                <li><a href="resizeable_panels.html">Resizeable Panels</a></li>
                                <li><a href="buttons.html">Buttons</a></li>
                                <li><a href="video.html">Video</a></li>
                                <li><a href="tabs_panels.html">Panels</a></li>
                                <li><a href="tabs.html">Tabs</a></li>
                                <li>
                                    <a href="notifications.html">Notifications & Tooltips</a>
                                </li>
                                <li><a href="helper_classes.html">Helper css classes</a></li>
                                <li>
                                    <a href="badges_labels.html">Badges, Labels, Progress</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="grid_options.html">
                                <i class="fa fa-laptop"></i>
                                <span class="nav-label">Grid options</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-table"></i>
                                <span class="nav-label">Tables</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level collapse">
                                <li><a href="table_basic.html">Static Tables</a></li>
                                <li><a href="table_data_tables.html">Data Tables</a></li>
                                <li><a href="table_foo_table.html">Foo Tables</a></li>
                                <li><a href="jq_grid.html">jqGrid</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-shopping-cart"></i>
                                <span class="nav-label">E-commerce</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level collapse">
                                <li>
                                    <a href="ecommerce_products_grid.html">Products grid</a>
                                </li>
                                <li><a href="ecommerce_product_list.html">Products list</a></li>
                                <li><a href="ecommerce_product.html">Product edit</a></li>
                                <li>
                                    <a href="ecommerce_product_detail.html">Product detail</a>
                                </li>
                                <li><a href="ecommerce-cart.html">Cart</a></li>
                                <li><a href="ecommerce-orders.html">Orders</a></li>
                                <li><a href="ecommerce_payments.html">Credit Card form</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-picture-o"></i>
                                <span class="nav-label">Gallery</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level collapse">
                                <li><a href="basic_gallery.html">Lightbox Gallery</a></li>
                                <li><a href="slick_carousel.html">Slick Carousel</a></li>
                                <li><a href="carousel.html">Bootstrap Carousel</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-sitemap"></i>
                                <span class="nav-label">Menu Levels</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level collapse">
                                <li>
                                    <a href="#" id="damian">
                                        Third Level
                                        <span class="fa arrow"></span>
                                    </a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#">Second Level Item</a></li>
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="css_animation.html">
                                <i class="fa fa-magic"></i>
                                <span class="nav-label">CSS Animations</span>
                                <span class="label label-info float-right">62</span>
                            </a>
                        </li>
                        <li class="landing_link">
                            <a target="_blank" href="landing.html">
                                <i class="fa fa-star"></i>
                                <span class="nav-label">Landing Page</span>
                                <span class="label label-warning float-right">NEW</span>
                            </a>
                        </li>
                        <li class="special_link">
                            <a href="package.html">
                                <i class="fa fa-database"></i>
                                <span class="nav-label">Package</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <div id="page-wrapper" class="gray-bg dashbard-1">
                <div class="row border-bottom">
                    <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                        <div class="navbar-header">
                            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary" href="#">
                                <i class="fa fa-bars"></i>
                            </a>
                            <form role="search" class="navbar-form-custom" action="search_results.html">
                                <div class="form-group">
                                    <input type="text" placeholder="Search for something..." class="form-control"
                                        name="top-search" id="top-search" />
                                </div>
                            </form>
                        </div>
                        <ul class="nav navbar-top-links navbar-right">
                            <li style="padding: 20px">
                                <span class="m-r-sm text-muted welcome-message">
                                    Welcome to INSPINIA+ Admin Theme.
                                </span>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                                    <i class="fa fa-envelope"></i>
                                    <span class="label label-warning">16</span>
                                </a>
                                <ul class="dropdown-menu dropdown-messages dropdown-menu-right">
                                    <li>
                                        <div class="dropdown-messages-box">
                                            <a class="dropdown-item float-left" href="profile.html">
                                                <img alt="image" class="rounded-circle" src="img/a7.jpg" />
                                            </a>
                                            <div class="media-body">
                                                <small class="float-right">46h ago</small>
                                                <strong>Mike Loreipsum</strong>
                                                started following
                                                <strong>Monica Smith</strong>
                                                .
                                                <br />
                                                <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown-divider"></li>
                                    <li>
                                        <div class="dropdown-messages-box">
                                            <a class="dropdown-item float-left" href="profile.html">
                                                <img alt="image" class="rounded-circle" src="img/a4.jpg" />
                                            </a>
                                            <div class="media-body">
                                                <small class="text-navy float-right">5h ago</small>
                                                <strong>Chris Johnatan Overtunk</strong>
                                                started following
                                                <strong>Monica Smith</strong>
                                                .
                                                <br />
                                                <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown-divider"></li>
                                    <li>
                                        <div class="dropdown-messages-box">
                                            <a class="dropdown-item float-left" href="profile.html">
                                                <img alt="image" class="rounded-circle" src="img/profile.jpg" />
                                            </a>
                                            <div class="media-body">
                                                <small class="float-right">23h ago</small>
                                                <strong>Monica Smith</strong>
                                                love
                                                <strong>Kim Smith</strong>
                                                .
                                                <br />
                                                <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown-divider"></li>
                                    <li>
                                        <div class="link-block text-center">
                                            <a href="mailbox.html" class="dropdown-item">
                                                <i class="fa fa-envelope"></i>
                                                <strong>Read All Messages</strong>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                                    <i class="fa fa-bell"></i>
                                    <span class="label label-primary">8</span>
                                </a>
                                <ul class="dropdown-menu dropdown-alerts">
                                    <li>
                                        <a href="mailbox.html" class="dropdown-item">
                                            <div>
                                                <i class="fa fa-envelope fa-fw"></i>
                                                You have 16 messages
                                                <span class="text-muted small float-right">4 minutes ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="dropdown-divider"></li>
                                    <li>
                                        <a href="profile.html" class="dropdown-item">
                                            <div>
                                                <i class="fa fa-twitter fa-fw"></i>
                                                3 New Followers
                                                <span class="text-muted small float-right">12 minutes ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="dropdown-divider"></li>
                                    <li>
                                        <a href="grid_options.html" class="dropdown-item">
                                            <div>
                                                <i class="fa fa-upload fa-fw"></i>
                                                Server Rebooted
                                                <span class="text-muted small float-right">4 minutes ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="dropdown-divider"></li>
                                    <li>
                                        <div class="link-block text-center">
                                            <a href="notifications.html" class="dropdown-item">
                                                <strong>See All Alerts</strong>
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="login.html">
                                    <i class="fa fa-sign-out"></i>
                                    Log out
                                </a>
                            </li>
                            <li>
                                <a class="right-sidebar-toggle">
                                    <i class="fa fa-tasks"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="row border-bottom white-bg dashboard-header">
                    <div class="col-md-3">
                        <h2>Welcome Amelia</h2>
                        <small>You have 42 messages and 6 notifications.</small>
                        <ul class="list-group clear-list m-t">
                            <li class="list-group-item fist-item">
                                <span class="float-right">09:00 pm</span>
                                <span class="label label-success">1</span>
                                Please contact me
                            </li>
                            <li class="list-group-item">
                                <span class="float-right">10:16 am</span>
                                <span class="label label-info">2</span>
                                Sign a contract
                            </li>
                            <li class="list-group-item">
                                <span class="float-right">08:22 pm</span>
                                <span class="label label-primary">3</span>
                                Open new shop
                            </li>
                            <li class="list-group-item">
                                <span class="float-right">11:06 pm</span>
                                <span class="label label-default">4</span>
                                Call back to Sylvia
                            </li>
                            <li class="list-group-item">
                                <span class="float-right">12:00 am</span>
                                <span class="label label-primary">5</span>
                                Write a letter to Sandra
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <div class="flot-chart dashboard-chart">
                            <div class="flot-chart-content" id="flot-dashboard-chart"></div>
                        </div>
                        <div class="row text-left">
                            <div class="col">
                                <div class="m-l-md">
                                    <span class="h5 m-t block font-bold">$ 406,100</span>
                                    <small class="text-muted m-b block">Sales marketing report</small>
                                </div>
                            </div>
                            <div class="col">
                                <span class="h5 m-t block font-bold">$ 150,401</span>
                                <small class="text-muted m-b block">Annual sales revenue</small>
                            </div>
                            <div class="col">
                                <span class="h5 m-t block font-bold">$ 16,822</span>
                                <small class="text-muted m-b block">Half-year revenue margin</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="statistic-box">
                            <h4>Project Beta progress</h4>
                            <p>You have two project with not compleated task.</p>
                            <div class="row text-center">
                                <div class="col-lg-6">
                                    <canvas id="doughnutChart2" width="80" height="80"
                                        style="margin: 18px auto 0"></canvas>
                                    <h5>Kolter</h5>
                                </div>
                                <div class="col-lg-6">
                                    <canvas id="doughnutChart" width="80" height="80"
                                        style="margin: 18px auto 0"></canvas>
                                    <h5>Maxtor</h5>
                                </div>
                            </div>
                            <div class="m-t">
                                <small>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry.
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer">
                    <div class="float-right">
                        10GB of
                        <strong>250GB</strong>
                        Free.
                    </div>
                    <div>
                        <strong>Copyright</strong>
                        Example Company &copy; 2014-2018
                    </div>
                </div>
            </div>
            <div id="right-sidebar" class="animated">
                <div class="sidebar-container">
                    <ul class="nav nav-tabs navs-3">
                        <li>
                            <a class="nav-link active" data-toggle="tab" href="#tab-1">Notes</a>
                        </li>
                        <li>
                            <a class="nav-link" data-toggle="tab" href="#tab-2">Projects</a>
                        </li>
                        <li>
                            <a class="nav-link" data-toggle="tab" href="#tab-3">
                                <i class="fa fa-gear"></i>
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane active">
                            <div class="sidebar-title">
                                <h3>
                                    <i class="fa fa-comments-o"></i>
                                    Latest Notes
                                </h3>
                                <small>
                                    <i class="fa fa-tim"></i>
                                    You have 10 new message.
                                </small>
                            </div>

                            <div>
                                <div class="sidebar-message">
                                    <a href="#">
                                        <div class="float-left text-center">
                                            <img alt="image" class="rounded-circle message-avatar" src="img/a1.jpg" />

                                            <div class="m-t-xs">
                                                <i class="fa fa-star text-warning"></i>
                                                <i class="fa fa-star text-warning"></i>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            There are many variations of passages of Lorem Ipsum available.
                                            <br />
                                            <small class="text-muted">Today 4:21 pm</small>
                                        </div>
                                    </a>
                                </div>
                                <div class="sidebar-message">
                                    <a href="#">
                                        <div class="float-left text-center">
                                            <img alt="image" class="rounded-circle message-avatar" src="img/a2.jpg" />
                                        </div>
                                        <div class="media-body">
                                            The point of using Lorem Ipsum is that it has a more-or-less normal.
                                            <br />
                                            <small class="text-muted">Yesterday 2:45 pm</small>
                                        </div>
                                    </a>
                                </div>
                                <div class="sidebar-message">
                                    <a href="#">
                                        <div class="float-left text-center">
                                            <img alt="image" class="rounded-circle message-avatar" src="img/a3.jpg" />

                                            <div class="m-t-xs">
                                                <i class="fa fa-star text-warning"></i>
                                                <i class="fa fa-star text-warning"></i>
                                                <i class="fa fa-star text-warning"></i>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            Mevolved over the years, sometimes by accident, sometimes on purpose
                                            (injected humour and the like).
                                            <br />
                                            <small class="text-muted">Yesterday 1:10 pm</small>
                                        </div>
                                    </a>
                                </div>
                                <div class="sidebar-message">
                                    <a href="#">
                                        <div class="float-left text-center">
                                            <img alt="image" class="rounded-circle message-avatar" src="img/a4.jpg" />
                                        </div>

                                        <div class="media-body">
                                            Lorem Ipsum, you need to be sure there isn't anything embarrassing
                                            hidden in the
                                            <br />
                                            <small class="text-muted">Monday 8:37 pm</small>
                                        </div>
                                    </a>
                                </div>
                                <div class="sidebar-message">
                                    <a href="#">
                                        <div class="float-left text-center">
                                            <img alt="image" class="rounded-circle message-avatar" src="img/a8.jpg" />
                                        </div>
                                        <div class="media-body">
                                            All the Lorem Ipsum generators on the Internet tend to repeat.
                                            <br />
                                            <small class="text-muted">Today 4:21 pm</small>
                                        </div>
                                    </a>
                                </div>
                                <div class="sidebar-message">
                                    <a href="#">
                                        <div class="float-left text-center">
                                            <img alt="image" class="rounded-circle message-avatar" src="img/a7.jpg" />
                                        </div>
                                        <div class="media-body">
                                            Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit
                                            amet..", comes from a line in section 1.10.32.
                                            <br />
                                            <small class="text-muted">Yesterday 2:45 pm</small>
                                        </div>
                                    </a>
                                </div>
                                <div class="sidebar-message">
                                    <a href="#">
                                        <div class="float-left text-center">
                                            <img alt="image" class="rounded-circle message-avatar" src="img/a3.jpg" />

                                            <div class="m-t-xs">
                                                <i class="fa fa-star text-warning"></i>
                                                <i class="fa fa-star text-warning"></i>
                                                <i class="fa fa-star text-warning"></i>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            The standard chunk of Lorem Ipsum used since the 1500s is reproduced
                                            below.
                                            <br />
                                            <small class="text-muted">Yesterday 1:10 pm</small>
                                        </div>
                                    </a>
                                </div>
                                <div class="sidebar-message">
                                    <a href="#">
                                        <div class="float-left text-center">
                                            <img alt="image" class="rounded-circle message-avatar" src="img/a4.jpg" />
                                        </div>
                                        <div class="media-body">
                                            Uncover many web sites still in their infancy. Various versions have.
                                            <br />
                                            <small class="text-muted">Monday 8:37 pm</small>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div id="tab-2" class="tab-pane">
                            <div class="sidebar-title">
                                <h3>
                                    <i class="fa fa-cube"></i>
                                    Latest projects
                                </h3>
                                <small>
                                    <i class="fa fa-tim"></i>
                                    You have 14 projects. 10 not completed.
                                </small>
                            </div>

                            <ul class="sidebar-list">
                                <li>
                                    <a href="#">
                                        <div class="small m-t-xs float-right">9 hours ago</div>
                                        <h4>Business valuation</h4>
                                        It is a long established fact that a reader will be distracted.

                                        <div class="small">Completion with: 22%</div>
                                        <div class="progress progress-mini">
                                            <div style="width: 22%" class="progress-bar progress-bar-warning"></div>
                                        </div>
                                        <div class="small text-muted m-t-xs">
                                            Project end: 4:00 pm - 12.06.2014
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="small m-t-xs float-right">9 hours ago</div>
                                        <h4>Contract with Company</h4>
                                        Many desktop publishing packages and web page editors.

                                        <div class="small">Completion with: 48%</div>
                                        <div class="progress progress-mini">
                                            <div style="width: 48%" class="progress-bar"></div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="small m-t-xs float-right">9 hours ago</div>
                                        <h4>Meeting</h4>
                                        By the readable content of a page when looking at its layout.

                                        <div class="small">Completion with: 14%</div>
                                        <div class="progress progress-mini">
                                            <div style="width: 14%" class="progress-bar progress-bar-info"></div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="label label-primary float-right">NEW</span>
                                        <h4>The generated</h4>
                                        There are many variations of passages of Lorem Ipsum available.
                                        <div class="small">Completion with: 22%</div>
                                        <div class="small text-muted m-t-xs">
                                            Project end: 4:00 pm - 12.06.2014
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="small m-t-xs float-right">9 hours ago</div>
                                        <h4>Business valuation</h4>
                                        It is a long established fact that a reader will be distracted.

                                        <div class="small">Completion with: 22%</div>
                                        <div class="progress progress-mini">
                                            <div style="width: 22%" class="progress-bar progress-bar-warning"></div>
                                        </div>
                                        <div class="small text-muted m-t-xs">
                                            Project end: 4:00 pm - 12.06.2014
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="small m-t-xs float-right">9 hours ago</div>
                                        <h4>Contract with Company</h4>
                                        Many desktop publishing packages and web page editors.

                                        <div class="small">Completion with: 48%</div>
                                        <div class="progress progress-mini">
                                            <div style="width: 48%" class="progress-bar"></div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="small m-t-xs float-right">9 hours ago</div>
                                        <h4>Meeting</h4>
                                        By the readable content of a page when looking at its layout.

                                        <div class="small">Completion with: 14%</div>
                                        <div class="progress progress-mini">
                                            <div style="width: 14%" class="progress-bar progress-bar-info"></div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="label label-primary float-right">NEW</span>
                                        <h4>The generated</h4>
                                        <!--<div class="small m-t-xs float-right">9 hours ago</div>-->
                                        There are many variations of passages of Lorem Ipsum available.
                                        <div class="small">Completion with: 22%</div>
                                        <div class="small text-muted m-t-xs">
                                            Project end: 4:00 pm - 12.06.2014
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div id="tab-3" class="tab-pane">
                            <div class="sidebar-title">
                                <h3>
                                    <i class="fa fa-gears"></i>
                                    Settings
                                </h3>
                                <small>
                                    <i class="fa fa-tim"></i>
                                    You have 14 projects. 10 not completed.
                                </small>
                            </div>

                            <div class="setings-item">
                                <span>Show notifications</span>
                                <div class="switch">
                                    <div class="onoffswitch">
                                        <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox"
                                            id="example" />
                                        <label class="onoffswitch-label" for="example">
                                            <span class="onoffswitch-inner"></span>
                                            <span class="onoffswitch-switch"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="setings-item">
                                <span>Disable Chat</span>
                                <div class="switch">
                                    <div class="onoffswitch">
                                        <input type="checkbox" name="collapsemenu" checked class="onoffswitch-checkbox"
                                            id="example2" />
                                        <label class="onoffswitch-label" for="example2">
                                            <span class="onoffswitch-inner"></span>
                                            <span class="onoffswitch-switch"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="setings-item">
                                <span>Enable history</span>
                                <div class="switch">
                                    <div class="onoffswitch">
                                        <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox"
                                            id="example3" />
                                        <label class="onoffswitch-label" for="example3">
                                            <span class="onoffswitch-inner"></span>
                                            <span class="onoffswitch-switch"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="setings-item">
                                <span>Show charts</span>
                                <div class="switch">
                                    <div class="onoffswitch">
                                        <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox"
                                            id="example4" />
                                        <label class="onoffswitch-label" for="example4">
                                            <span class="onoffswitch-inner"></span>
                                            <span class="onoffswitch-switch"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="setings-item">
                                <span>Offline users</span>
                                <div class="switch">
                                    <div class="onoffswitch">
                                        <input type="checkbox" checked name="collapsemenu" class="onoffswitch-checkbox"
                                            id="example5" />
                                        <label class="onoffswitch-label" for="example5">
                                            <span class="onoffswitch-inner"></span>
                                            <span class="onoffswitch-switch"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="setings-item">
                                <span>Global search</span>
                                <div class="switch">
                                    <div class="onoffswitch">
                                        <input type="checkbox" checked name="collapsemenu" class="onoffswitch-checkbox"
                                            id="example6" />
                                        <label class="onoffswitch-label" for="example6">
                                            <span class="onoffswitch-inner"></span>
                                            <span class="onoffswitch-switch"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="setings-item">
                                <span>Update everyday</span>
                                <div class="switch">
                                    <div class="onoffswitch">
                                        <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox"
                                            id="example7" />
                                        <label class="onoffswitch-label" for="example7">
                                            <span class="onoffswitch-inner"></span>
                                            <span class="onoffswitch-switch"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="sidebar-content">
                                <h4>Settings</h4>
                                <div class="small">
                                    I belive that. Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. And typesetting industry. Lorem Ipsum has been
                                    the industry's standard dummy text ever since the 1500s. Over the
                                    years, sometimes by accident, sometimes on purpose (injected humour and
                                    the like).
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
