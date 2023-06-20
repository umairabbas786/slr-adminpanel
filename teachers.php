<?php include "components/header.php"; ?>
<?php 
    if(isset($_GET['active'])){
        $idd = $_GET['active'];
        $s = "update users set status = 1 where id = '$idd'";
        $rr = $conn->query($s);
        if($rr){
            $msg = "User Activated Successfully";
        }
        else{
            $error = "Something Went Wrong";
        }
    }
    if(isset($_GET['deactive'])){
        $idd = $_GET['deactive'];
        $s = "update users set status = 0 where id = '$idd'";
        $rr = $conn->query($s);
        if($rr){
            $msg = "User Deactivated Successfully";
        }
        else{
            $error = "Something Went Wrong";
        }
    }
?>
<?php include "components/sideNav.php"; ?>
<?php include "components/nav.php"; ?>
<main id="main-container">
    <div class="content">
        <h2 class="content-heading">Teachers</h2>
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">
                    Manage Teachers
                </h3>
            </div>
            <div class="block-content block-content-full">
                <?php if ($error != '') { ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $error;?>
                        </div>
                    <?php } ?>
                    <?php if ($msg != '') { ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo $msg;?>
                        </div>
                    <?php } ?>
                <table class="table table-bordered table-striped js-dataTable-responsive table-vcenter">
                    <thead>
                        <tr>
                            <th class="text-center">Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone #</th>
                            <th>Gender</th>
                            <th>Course</th>
                            <th>Department</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $s = "select * from users where user_type = 'TEACHER'";
                            $rr = $conn->query($s);
                            while($row = mysqli_fetch_assoc($rr)){
                        ?>
                        <tr>
                            <td class="text-center"><?php echo $row['id'];?></td>
                            <td><?php echo $row['first_name'] . ' ' . $row['last_name'] ;?></td>
                            <td><?php echo $row['email'];?></td>
                            <td><?php echo $row['phone'];?></td>
                            <td><?php echo $row['gender'];?></td>
                            <td><?php echo $row['teaching_course'];?></td>
                            <td><?php echo $row['teaching_department'];?></td>
                            <td><?php if($row['status'] === 1 || $row['status'] === '1'){echo 'Active';}else{echo 'Inactive';}?></td>
                            <td class="text-center">
                                <?php if($row['status'] === 0 || $row['status'] === '0'){?>
                                <a href="?active=<?php echo $row['id'];?>" class="btn btn-sm btn-success">Activate</a>
                                <?php }else if($row['status'] === 1 || $row['status'] === '1'){?>
                                <a href="?deactive=<?php echo $row['id'];?>" class="btn btn-sm btn-danger">Deactivate</a>
                                <?php }?>
                            </td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
<?php include "components/footer.php"; ?>