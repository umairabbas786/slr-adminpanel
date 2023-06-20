<?php include "components/header.php"; ?>
<?php 
    if(isset($_POST['update_profile'])){
        $name = $_POST['name'];
        $s = "update admins set name = '$name' where id = '$id'";
        $rr = $conn->query($s);
        if($rr){
            $msg = "Profile Updated Successfully";
            $id = $_SESSION['admin'];
        $sql = "select * from admins where id = '$id'";
        $r = $conn->query($sql);
        $admin = mysqli_fetch_assoc($r);
        }
        else{
            $msg = "Something Went Wrong";
        }
    }
    $msgg = "";
    $errorr = "";
    if(isset($_POST['update_password'])){
        $curr = $_POST['curr'];
        $new = $_POST['new'];
        $confirm = $_POST['confirm'];
        
        if($admin['password'] === $curr){
            if($curr === $new){
                $errorr = "Please Enter Unique Password";
            }
            if($new === $confirm){
                $s = "update admins set password = '$new' where id = '$id'";
                $rr = $conn->query($s);
                if($rr){
                    $msgg = "PAssword updated successfully";
                }
                else{
                    $errorr = "Something Went Wrong";
                }
            }
            else{
                $errorr = "Password not Matched";
            }
        }
        else{
            $errorr = "Current Password is Wrong";
        }
        
    }

?>
<?php include "components/sideNav.php"; ?>
<?php include "components/nav.php"; ?>
<main id="main-container">
    <div class="content">
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">
                    <i class="fa fa-user-circle me-1 text-muted"></i>Edit Profile
                </h3>
            </div>
            <div class="block-content">
                <form action="" method="POST">
                    <div class="row items-push">
                        <div class="col-lg-3">
                            <p class="text-muted">
                                Your account’s vital info. <?php echo $id;?>
                            </p>
                        </div>
                        <div class="col-lg-7 offset-lg-1">
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
                            <div class="mb-4">
                                <label class="form-label" for="profile-settings-name">Name</label>
                                <input type="text" class="form-control form-control-lg" id="profile-settings-name" name="name" placeholder="Enter your name.." value="<?php echo $admin['name'];?>">
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="profile-settings-email">Email Address</label>
                                <input type="email" disabled class="form-control form-control-lg" id="profile-settings-email" name="email" placeholder="Enter your email.." value="<?php echo $admin['email'];?>">
                            </div>
                            <div class="mb-4">
                                <button type="submit" name="update_profile" class="btn btn-alt-primary">Update</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- END User Profile -->

        <!-- Change Password -->
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">
                    <i class="fa fa-asterisk me-1 text-muted"></i> Change Password
                </h3>
            </div>
            <div class="block-content">
                <form action="" method="POST">
                    <div class="row items-push">
                        <div class="col-lg-3">
                            <p class="text-muted">
                                Changing your sign in password is an easy way to keep your account secure.
                            </p>
                        </div>
                        <div class="col-lg-7 offset-lg-1">
                            <?php if ($errorr != '') { ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $errorr;?>
                        </div>
                    <?php } ?>
                    <?php if ($msgg != '') { ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo $msgg;?>
                        </div>
                    <?php } ?>
                            <div class="mb-4">
                                <label class="form-label" for="profile-settings-password">Current Password</label>
                                <input type="password" class="form-control form-control-lg" id="profile-settings-password" required name="curr">
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="profile-settings-password-new">New Password</label>
                                <input type="password" class="form-control form-control-lg" min="6" id="profile-settings-password-new" required name="new">
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="profile-settings-password-new-confirm">Confirm New Password</label>
                                <input type="password" class="form-control form-control-lg" min="6" id="profile-settings-password-new-confirm" required name="confirm">
                            </div>
                            <div class="mb-4">
                                <button type="submit" name="update_password" class="btn btn-alt-primary">Update</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- END Change Password -->
    </div>
</main>
<?php include "components/footer.php"; ?>