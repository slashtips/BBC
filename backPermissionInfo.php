<?php

include 'db/db.php';

$sql1 = "SELECT * FROM `users` WHERE `title` = 'SystemAdministrator'";
$res1 = $db->query($sql1);
$res1->setFetchMode(PDO::FETCH_ASSOC);
$sql2 = "SELECT * FROM `users` WHERE `title` = 'Administrator'";
$res2 = mysqli_query($connect, $sql2);
$res2 = $db->query($sql2);
$res2->setFetchMode(PDO::FETCH_ASSOC);
$sql3 = "SELECT * FROM `users` WHERE `title` = 'HealthcareProfessional'";
$res3 = $db->query($sql3);
$res3->setFetchMode(PDO::FETCH_ASSOC);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>權限調整</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="include/fontawesome-free-6.1.2-web/css/all.css">
    <link rel="stylesheet" href="include/fontawesome-free-6.1.2-web/js/all.js">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>

    <style>
        * {
            font-family: 'Kiwi Maru';
        }

        body,
        html {
            height: 100%;
        }

        .content {
            height: 90vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .content a {
            text-decoration: none;
        }

        .content .card {
            padding: 1.5rem;
            margin-top: 1rem;
        }

        .content .card i {
            font-size: 5rem;
            color: #3975D4;
            text-shadow: 0 0 5px rgba(60, 120, 200, .4);
        }

        .content .card:hover {
            transform: scale(1.05);
            transition: .25s;
            cursor: pointer;
            box-shadow: 0 0 20px rgba(255, 255, 255, .3);
        }

        .content .card h3 {
            color: #FA7188;
            font-weight: 400;
            padding: .5rem 0 0 0;
        }

        .textOverflow {
            overflow: hidden;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2;
            max-width: 100px;
            max-height: 100px;
        }
    </style>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

</head>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>

<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js"
    integrity="sha256-hlKLmzaRlE8SCJC1Kw8zoUbU8BxA+8kR3gseuKfMjxA=" crossorigin="anonymous"></script>

<body>
    <div class="backMenu"></div>


    <div class="container">
        <nav class="mt-3">
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                    type="button" role="tab" aria-controls="nav-home" aria-selected="true">SystemAdministrator</button>
                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                    type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Administrator</button>
                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact"
                    type="button" role="tab" aria-controls="nav-contact"
                    aria-selected="false">HealthcareProfessional</button>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">編號</th>
                                <th scope="col">姓名</th>
                                <th scope="col">email</th>
                                <th scope="col">操作</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            foreach ($res1 as $user) {
                                echo "<tr>";
                                echo "<tr>";
                                echo "<td>" . $user['id'] . "</td>";
                                echo "<td>" . $user['firstName'] . $user['lastName'] . "</td>";
                                echo "<td>" . $user['email'] . "</td>";
                                echo "<td>" . "<form action='system/Permission_edit.php' method='post'><input type='hidden' name='id' value='$user[id]'  ><input type='submit' class='btn btn-outline-success me-2' value='權限調整' >";
                                echo "</tr>";


                            }
                            ?>
                        </tbody>

                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">

                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">編號</th>
                                <th scope="col">姓名</th>
                                <th scope="col">email</th>
                                <th scope="col">操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($res2 as $user) {
                                echo "<tr>";
                                echo "<tr>";
                                echo "<td>" . $user['id'] . "</td>";
                                echo "<td>" . $user['firstName'] . $user['lastName'] . "</td>";
                                echo "<td>" . $user['email'] . "</td>";
                                echo "<td>" . "<form action='system/Permission_edit.php' method='post'><input type='hidden' name='id' value='$user[id]'  ><input type='submit' class='btn btn-outline-success me-2' value='權限調整' >";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">

                <div class="table-responsive">
                    <table class="table table-striped table-hover">

                        <thead>
                            <tr>
                                <th scope="col">編號</th>
                                <th scope="col">姓名</th>
                                <th scope="col">email</th>
                                <th scope="col">操作</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            foreach ($res3 as $user) {
                                echo "<tr>";
                                echo "<tr>";
                                echo "<td>" . $user['id'] . "</td>";
                                echo "<td>" . $user['firstName'] . $user['lastName'] . "</td>";
                                echo "<td>" . $user['email'] . "</td>";
                                echo "<td>" . "<form action='system/Permission_edit.php' method='post'><input type='hidden' name='id' value='$user[id]'  ><input type='submit' class='btn btn-outline-success me-2' value='權限調整' >";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>

                    </table>
                </div>

            </div>
        </div>


    </div>


</body>

</html>
<script src="js/back.js"></script>

<script>
    //Cookie讀取
    function parseCookie() {
        var cookieObj = {};
        var cookieAry = document.cookie.split(';');
        var cookie;

        for (var i = 0, l = cookieAry.length; i < l; ++i) {
            cookie = jQuery.trim(cookieAry[i]);
            cookie = cookie.split('=');
            cookieObj[cookie[0]] = cookie[1];
        }

        return cookieObj;
    }




    function getCookieByName(name) {
        var value = parseCookie()[name];
        if (value) {
            value = decodeURIComponent(value);
        }

        return value;
    }
    //CommonBack
    CommonBack()
</script>