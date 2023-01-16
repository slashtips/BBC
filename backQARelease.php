<?php
include 'db/db.php';
$sql  = "SELECT * FROM `QA` Where `status` = 1";
$res = $db->query($sql);
$res->setFetchMode(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QA發布</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <style>
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

        .content {
            max-height: 80%;
            overflow: auto;
            flex-wrap: wrap;
        }

        .type {
            text-align: right;
            margin-right: 3%;
            font-weight: bold;

        }

        .overflowText {
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
        }

        td {
            max-width: 150px;
            overflow: hidden;


        }
    </style>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

</head>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js" integrity="sha256-hlKLmzaRlE8SCJC1Kw8zoUbU8BxA+8kR3gseuKfMjxA=" crossorigin="anonymous"></script>


<body>
    <div class="backMenu"></div>

    <div class="container">
        <div class="table-responsive"></div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">標題</th>
                    <th scope="col">類別</th>
                    <th scope="col">內容</th>
                    <th scope="col">創建時間</th>
                </tr>

            </thead>
            <tbody>
                <?php
                foreach ($res as $QA) {
                    echo "<tr>";
                    echo "<td>" . $QA['title'] . "</td>";
                    echo "<td>" . $QA['topicSec'] . "</td>";
                    echo "<td >" . $QA['content'] . "</td>";
                    echo "<td>" . $QA['createTime'] . "</td>";
                    echo "<td>" . "<input type='button'" . "data-id='" . $QA['id'] . "'data-title='" . $QA['title'] . "'data-type='" . $QA['type'] . "'data-content='" . $QA['content']  .   "'  class='btn btn-outline-primary me-2 QABtn' value='查看完整內容' data-bs-toggle='modal' data-bs-target='#QA'>" .
                        "<a href='system/backQARelease.php?id=" . $QA['id'] . "' class='btn btn-outline-success me-2'>發布</a>" .
                        "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>

        </table>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="QA" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="type"></div>
                <div class="modal-body content">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
<script src="js/back.js"></script>
<script>
    let QA = document.querySelector("#QA");
    let QATitle = document.querySelector("#QA h5")
    let QAType = document.querySelector("#QA .type")
    let QAContent = document.querySelector("#QA .content")
    let QABtn = document.querySelectorAll(".QABtn")
    QABtn.forEach(function(element) {

        element.addEventListener("click", function(e) {
            QATitle.textContent = this.dataset.title
            QAType.textContent = this.dataset.type;
            QAContent.innerHTML = this.dataset.content

        }, false)
    })
</script>

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

    CommonBack()
</script>