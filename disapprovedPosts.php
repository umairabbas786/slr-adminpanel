<?php include "components/header.php"; ?>
<?php include "components/sideNav.php"; ?>
<?php include "components/nav.php"; ?>
<main id="main-container">
    <div class="content">
        <h2 class="content-heading">Posts</h2>
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">
                    Disapproved Posts
                </h3>
            </div>
            <div class="block-content block-content-full">
                <table class="table table-bordered table-striped js-dataTable-responsive table-vcenter">
                    <thead>
                        <tr>
                            <th class="text-center">Id</th>
                            <th>Post Details</th>
                            <th>Posted By</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td>Details</td>
                            <td>Umair Abbas</td>
                            <td>Approved/Disapproved</td>
                            <td class="text-center">
                                <button type="button" class="btn btn-sm btn-secondary" data-bs-toggle="tooltip" title="Delete">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
<?php include "components/footer.php"; ?>