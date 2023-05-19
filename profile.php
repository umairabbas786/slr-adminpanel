<?php include "components/header.php"; ?>
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
                <form action="be_pages_generic_profile.edit.html" method="POST" enctype="multipart/form-data" onsubmit="return false;">
                    <div class="row items-push">
                        <div class="col-lg-3">
                            <p class="text-muted">
                                Your account’s vital info.
                            </p>
                        </div>
                        <div class="col-lg-7 offset-lg-1">
                            <div class="mb-4">
                                <label class="form-label" for="profile-settings-username">Username</label>
                                <input type="text" class="form-control form-control-lg" id="profile-settings-username" name="profile-settings-username" placeholder="Enter your username.." value="admin">
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="profile-settings-name">Name</label>
                                <input type="text" class="form-control form-control-lg" id="profile-settings-name" name="profile-settings-name" placeholder="Enter your name.." value="umair abbas">
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="profile-settings-email">Email Address</label>
                                <input type="email" class="form-control form-control-lg" id="profile-settings-email" name="profile-settings-email" placeholder="Enter your email.." value="admin@example.com">
                            </div>
                            <div class="mb-4">
                                <button type="submit" class="btn btn-alt-primary">Update</button>
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
                <form action="be_pages_generic_profile.edit.html" method="POST" onsubmit="return false;">
                    <div class="row items-push">
                        <div class="col-lg-3">
                            <p class="text-muted">
                                Changing your sign in password is an easy way to keep your account secure.
                            </p>
                        </div>
                        <div class="col-lg-7 offset-lg-1">
                            <div class="mb-4">
                                <label class="form-label" for="profile-settings-password">Current Password</label>
                                <input type="password" class="form-control form-control-lg" id="profile-settings-password" name="profile-settings-password">
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="profile-settings-password-new">New Password</label>
                                <input type="password" class="form-control form-control-lg" id="profile-settings-password-new" name="profile-settings-password-new">
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="profile-settings-password-new-confirm">Confirm New Password</label>
                                <input type="password" class="form-control form-control-lg" id="profile-settings-password-new-confirm" name="profile-settings-password-new-confirm">
                            </div>
                            <div class="mb-4">
                                <button type="submit" class="btn btn-alt-primary">Update</button>
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