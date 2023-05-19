<nav id="sidebar">
    <div class="sidebar-content">
        <div class="content-header justify-content-lg-center">
            <div>
                <a class="link-fx fw-bold tracking-wide mx-auto" href="index.php">
                    <span class="smini-hidden">
                        <span class="fs-4 text-dual">SLR</span>
                    </span>
                </a>
            </div>
            <div>
                <button type="button" class="btn btn-sm btn-alt-danger d-lg-none" data-toggle="layout" data-action="sidebar_close">
                    <i class="fa fa-fw fa-times"></i>
                </button>
            </div>
        </div>
        <div class="js-sidebar-scroll">
            <div class="content-side content-side-user px-0 py-0">
                <div class="smini-hidden text-center mx-auto">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <a class="link-fx text-dual fs-sm fw-semibold text-uppercase" href="index.php">Admin</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="link-fx text-dual" href="login.php">
                                <i class="fa fa-sign-out-alt"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- END Visible only in normal mode -->
            </div>
            <!-- END Side User -->

            <!-- Side Navigation -->
            <div class="content-side content-side-full">
                <ul class="nav-main">
                    <li class="nav-main-item">
                        <a class="nav-main-link <?php if ($_SERVER['REQUEST_URI'] == "/index.php") {
                                                    echo 'active';
                                                } ?>" href="index.php">
                            <i class="nav-main-link-icon fa fa-house-user"></i>
                            <span class="nav-main-link-name">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link <?php if ($_SERVER['REQUEST_URI'] == "/admins.php") {
                                                    echo 'active';
                                                } ?>" href="admins.php">
                            <i class="nav-main-link-icon fa fa-list-alt"></i>
                            <span class="nav-main-link-name">Admins</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                            <i class="nav-main-link-icon fa fa-list-alt"></i>
                            <span class="nav-main-link-name">Students</span>
                        </a>
                        <ul class="nav-main-submenu">
                            <li class="nav-main-item">
                                <a class="nav-main-link <?php if ($_SERVER['REQUEST_URI'] == "/students.php") {
                                                            echo 'active';
                                                        } ?>" href="students.php">
                                    <span class="nav-main-link-name">All Students</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link <?php if ($_SERVER['REQUEST_URI'] == "/approvedStudents.php") {
                                                            echo 'active';
                                                        } ?>" href="approvedStudents.php">
                                    <span class="nav-main-link-name">Approved Students</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link <?php if ($_SERVER['REQUEST_URI'] == "/disapprovedStudents.php") {
                                                            echo 'active';
                                                        } ?>" href="disapprovedStudents.php">
                                    <span class="nav-main-link-name">Disapproved Students</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                            <i class="nav-main-link-icon fa fa-list-alt"></i>
                            <span class="nav-main-link-name">Teachers</span>
                        </a>
                        <ul class="nav-main-submenu">
                            <li class="nav-main-item">
                                <a class="nav-main-link <?php if ($_SERVER['REQUEST_URI'] == "/teachers.php") {
                                                            echo 'active';
                                                        } ?>" href="teachers.php">
                                    <span class="nav-main-link-name">All Teachers</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link <?php if ($_SERVER['REQUEST_URI'] == "/approvedTeachers.php") {
                                                            echo 'active';
                                                        } ?>" href="approvedTeachers.php">
                                    <span class="nav-main-link-name">Approved Teachers</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link <?php if ($_SERVER['REQUEST_URI'] == "/disapprovedTeachers.php") {
                                                            echo 'active';
                                                        } ?>" href="disapprovedTeachers.php">
                                    <span class="nav-main-link-name">Disapproved Teachers</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                            <i class="nav-main-link-icon fa fa-list-alt"></i>
                            <span class="nav-main-link-name">Posts</span>
                        </a>
                        <ul class="nav-main-submenu">
                            <li class="nav-main-item">
                                <a class="nav-main-link <?php if ($_SERVER['REQUEST_URI'] == "/posts.php") {
                                                            echo 'active';
                                                        } ?>" href="posts.php">
                                    <span class="nav-main-link-name">All Posts</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link <?php if ($_SERVER['REQUEST_URI'] == "/approvedPosts.php") {
                                                            echo 'active';
                                                        } ?>" href="approvedPosts.php">
                                    <span class="nav-main-link-name">Approved Posts</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link <?php if ($_SERVER['REQUEST_URI'] == "/disapprovedPosts.php") {
                                                            echo 'active';
                                                        } ?>" href="disapprovedPosts.php">
                                    <span class="nav-main-link-name">Disapproved Posts</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link <?php if ($_SERVER['REQUEST_URI'] == "/chats.php") {
                                                    echo 'active';
                                                } ?>" href="chats.php">
                            <i class="nav-main-link-icon fa fa-list-alt"></i>
                            <span class="nav-main-link-name">Ambigious Messages</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link <?php if ($_SERVER['REQUEST_URI'] == "/comments.php") {
                                                    echo 'active';
                                                } ?>" href="comments.php">
                            <i class="nav-main-link-icon fa fa-list-alt"></i>
                            <span class="nav-main-link-name">Ambigious Comments</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link <?php if ($_SERVER['REQUEST_URI'] == "/generalSettings.php") {
                                                    echo 'active';
                                                } ?>" href="generalSettings.php">
                            <i class="nav-main-link-icon fa fa-list-alt"></i>
                            <span class="nav-main-link-name">General Settings</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>