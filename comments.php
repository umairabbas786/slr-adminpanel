<?php include "components/header.php"; ?>
<?php include "components/sideNav.php"; ?>
<?php include "components/nav.php"; ?>
<main id="main-container">
    <div class="content">
        <h2 class="content-heading">Ambigious Comments</h2>
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">
                    Manage Ambigious Comments
                </h3>
            </div>
            <div class="block-content block-content-full">
                <table class="table table-bordered table-striped js-dataTable-responsive table-vcenter">
                    <thead>
                        <tr>
                            <th class="text-center">Id</th>
                            <th>User details</th>
                            <th>Comment</th>
                            <th>Date/Time</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td>Details</td>
                            <td>any comment</td>
                            <td>Date/Time</td>
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