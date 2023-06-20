<?php include "components/header.php"; ?>
<?php include "components/sideNav.php"; ?>
<?php include "components/nav.php"; ?>
<main id="main-container">
    <div class="content">
        <div class="row">
            <div class="col-6">
                <a class="block block-rounded bg-gd-dusk text-white block-link-shadow text-end" href="javascript:void(0)">
                    <div class="block-content block-content-full d-sm-flex justify-content-between align-items-center">
                        <div class="d-none d-sm-block">
                            <i class="fa fa-user fa-2x opacity-25"></i>
                        </div>
                        <div>
                            <?php 
                                $s = "select count(id) from users where user_type = 'STUDENT'";
                                $rr = $conn->query($s);
                                $row = mysqli_fetch_assoc($rr);
                            ?>
                            <div class="fs-3 fw-semibold"><?php echo $row['count(id)'];?></div>
                            <div class="fs-sm fw-semibold text-uppercase">Students</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6">
                <a class="block block-rounded bg-gd-dusk text-white block-link-shadow text-end" href="javascript:void(0)">
                    <div class="block-content block-content-full d-sm-flex justify-content-between align-items-center">
                        <div class="d-none d-sm-block">
                            <i class="fa fa-user fa-2x opacity-25"></i>
                        </div>
                        <div>
                            <?php 
                                $s = "select count(id) from users where user_type = 'TEACHER'";
                                $rr = $conn->query($s);
                                $row = mysqli_fetch_assoc($rr);
                            ?>
                            <div class="fs-3 fw-semibold"><?php echo $row['count(id)'];?></div>
                            <div class="fs-sm fw-semibold text-uppercase">Teachers</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6">
                <a class="block block-rounded bg-gd-dusk text-white block-link-shadow text-end" href="javascript:void(0)">
                    <div class="block-content block-content-full d-sm-flex justify-content-between align-items-center">
                        <div class="d-none d-sm-block">
                            <i class="fa fa-user fa-2x opacity-25"></i>
                        </div>
                        <div>
                            <?php 
                                $s = "select count(id) from users where user_type = 'STUDENT' and status = 1";
                                $rr = $conn->query($s);
                                $row = mysqli_fetch_assoc($rr);
                            ?>
                            <div class="fs-3 fw-semibold"><?php echo $row['count(id)'];?></div>
                            <div class="fs-sm fw-semibold text-uppercase">Approved Students</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6">
                <a class="block block-rounded bg-gd-dusk text-white block-link-shadow text-end" href="javascript:void(0)">
                    <div class="block-content block-content-full d-sm-flex justify-content-between align-items-center">
                        <div class="d-none d-sm-block">
                            <i class="fa fa-users fa-2x opacity-25"></i>
                        </div>
                        <div>
                            <?php 
                                $s = "select count(id) from users where user_type = 'TEACHER' and status = 1";
                                $rr = $conn->query($s);
                                $row = mysqli_fetch_assoc($rr);
                            ?>
                            <div class="fs-3 fw-semibold"><?php echo $row['count(id)'];?></div>
                            <div class="fs-sm fw-semibold text-uppercase">Approved Teachers</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6">
                <a class="block bg-gd-dusk text-white block-rounded block-link-shadow text-end" href="javascript:void(0)">
                    <div class="block-content block-content-full d-sm-flex justify-content-between align-items-center">
                        <div class="d-none d-sm-block">
                            <i class="fa fa-users fa-2x opacity-25"></i>
                        </div>
                        <div>
                            <?php 
                                $s = "select count(id) from posts";
                                $rr = $conn->query($s);
                                $row = mysqli_fetch_assoc($rr);
                            ?>
                            <div class="fs-3 fw-semibold"><?php echo $row['count(id)'];?></div>
                            <div class="fs-sm fw-semibold text-uppercase">Posts</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6">
                <a class="block block-rounded bg-gd-dusk text-white block-link-shadow text-end" href="javascript:void(0)">
                    <div class="block-content block-content-full d-sm-flex justify-content-between align-items-center">
                        <div class="d-none d-sm-block">
                            <i class="fa fa-users fa-2x opacity-25"></i>
                        </div>
                        <div>
                            <?php 
                                $s = "select count(id) from posts where status = 1";
                                $rr = $conn->query($s);
                                $row = mysqli_fetch_assoc($rr);
                            ?>
                            <div class="fs-3 fw-semibold"><?php echo $row['count(id)'];?></div>
                            <div class="fs-sm fw-semibold text-uppercase">Approved Posts</div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</main>
<?php include "components/footer.php"; ?>