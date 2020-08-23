<?php
include('include/header.php');
include('include/config.php');
include('include/checklogin.php');
check_login();

?>
<div class="container-fluid">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
            <h2 class="page-title">Manage Users</h2>

        </div>
        <div class="col-1"></div>

    </div>

    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Fullname</th>
                    <th>Id number</th>
                    <th>Phone Number</th>
                    <th>Date added</th>
                    <th>image</th>
                    <th>status</th>

                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>

</div> <?php
        include('include/footer.php');
        ?>