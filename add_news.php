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

            <h2 class="page-title">Add News</h2>

            <div class="row">



                <div class="col-md-5 col-sm-5">

                    <div class="panel panel-primary">

                        <div class="panel-heading">

                            ADD NEW NEWS FEED

                        </div>

                        <div class="panel-body">

                            <form method="POST" enctype="multipart/form-data">

                                <input type="text" name="name" class="form-control" placeholder="news heading" required> <br>

                                <input type="text" name="description" class="form-control" placeholder="news body" required><br>

                                <input type="file" name="image" class="form-control"><br>



                                <input type="submit" name="add" value="Add New" class="btn btn-primary">

                            </form>

                            <?php

                            if (isset($_POST['add'])) {

                                $errors = array();
                                $file_name = $_FILES['image']['name'];
                                $file_size = $_FILES['image']['size'];
                                $file_tmp = $_FILES['image']['tmp_name'];
                                $file_type = $_FILES['image']['type'];
                                $temp_expload=explode('.', $_FILES['image']['name']);

                                $file_ext = strtolower(end($temp_expload));

                                $extensions = array("jpeg", "jpg", "png");

                                if (in_array($file_ext, $extensions) === false) {
                                    $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
                                }

                                if ($file_size > 2097152) {
                                    $errors[] = 'File size must be excately 2 MB';
                                }

                                if (empty($errors) == true) {
                                    $u_name = $_POST['name'];
                                    $u_descr  = $_POST['description'];
                                    $date= date('Y-m-d H:i:s');

                                    require_once('include/config.php');
                            
                                    $sql = "INSERT INTO agrifarm_news (title,description,image,date) VALUES ('$u_name','$u_descr','$file_name','$date')";
                                    $data = mysqli_query($mysqli, $sql);
                                    if ($data) {
                                        move_uploaded_file($file_tmp, "img/" . $file_name);
                                        echo "news update added successfully";
                                    } else {
                                        echo "failed" . mysqli_error($mysqli);
                                    }
                                } else {
                                    print_r($errors);
                                }
                            }

                            ?>

                        </div>



                    </div>

                </div>





            </div>

            <div class="col-1"></div>

        </div>



    </div>

    <br>





    <?php

    include('include/footer.php');

    ?>