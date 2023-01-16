<?php
include 'db/db.php';
$sql  = "SELECT * FROM `meeting`";
$res = $db->query($sql);
$res->setFetchMode(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會議編輯</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="include/fontawesome-free-6.1.2-web/css/all.css">
    <link rel="stylesheet" href="include/fontawesome-free-6.1.2-web/js/all.js">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

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
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

</head>

<body>
    <div class="backMenu"></div>


    <div class="container">
        <div class="PageNumber text-end mt-4">
            <span>每頁分頁量</span> <input min="10" type="number" placeholder="最小為10">
            <input type="button" value="啟動分頁" class="btn btn-outline-success paginationBtn">
            <ul class=" justify-content-center align-items-center pagination pagination1  " style="flex-wrap: wrap">

            </ul>
        </div>
        <div class="table-responsive"></div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">編號</th>

                    <th scope="col">標題</th>
                    <th scope="col">Tag</th>
                    <th scope="col">資訊來源</th>
                    <th scope="col">日期</th>
                    <th scope="col">地點</th>
                    <th scope="col">創建時間</th>
                    <th scope="col">最後編輯時間</th>
                    <th scope="col">操作</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($res as $meeting) {
                    echo "<tr>";
                    echo "<td>" . $meeting['id'] . "</td>";

                    echo "<td>" . $meeting['title'] . "</td>";
                    echo "<td>" . $meeting['tag'] . "</td>";
                    echo "<td>" . $meeting['source'] . "</td>";
                    echo "<td>" . $meeting['date'] . "</td>";
                    echo "<td>" . $meeting['location'] . "</td>";
                    echo "<td>" . $meeting['createTime'] . "</td>";
                    echo "<td>" . $meeting['updateTime'] . "</td>";
                    echo "<td>"
                        . "<a href='backMeetingEdit.php?id=$meeting[id]' class='btn btn-outline-success me-2'>編輯</a>"
                        . "<button type='button' data-id='" . $meeting['id'] . "' class='btn btn-outline-danger btnDeleteCheck' data-bs-toggle='modal' data-bs-target='#exampleModal'>刪除</button>"
                        . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>

        </table>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">刪除確認</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    確定刪除嗎 ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger btnDelete">刪除</button>
                    <button type="button" class="btn btn-secondary " data-bs-dismiss="modal">關閉</button>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
<script src="js/back.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js" integrity="sha256-hlKLmzaRlE8SCJC1Kw8zoUbU8BxA+8kR3gseuKfMjxA=" crossorigin="anonymous"></script>

<script>
    //分頁
    let table = document.querySelector('.table');
    let rows = table.rows;
    let table_length = table.rows.length;
    let PageNumber = document.querySelector(".PageNumber input[type='number']");
    let PageButton = document.querySelector(".PageNumber input[type='button']");
    PageButton.addEventListener('click', function(e) {
        //console.clear();

        let rowsLength = rows.length - 1;
        let pageNumberValue = PageNumber.value;
        //防呆 使用者輸入小於10
        if (pageNumberValue < 10) {
            PageNumber.value = 10
            pageNumberValue = 10
        }
        //限制不能超過最大資料量
        if (pageNumberValue > rowsLength) {
            pageNumberValue = rowsLength
        }
        let page = Math.ceil(rowsLength / pageNumberValue);
        localStorage.setItem('PageNumber', page)


        localStorage.setItem('pageNumberValue', PageNumber.value)
        let PageItems = document.querySelector('.pagination1')



        //創建li
        pageStr = ''
        let TotalNumber = `<span class='text-primary me-2' >總共${rows.length-1}筆</span>`
        let Previous = ' <li class="page-item "> <a class = "page-link"href = "#"aria - label = "Previous" > « </a > </li>'
        let next = ' <li class = "page-item " ><a class = "page-link"href = "#"aria - label = "Next" > » </a> </li>'
        for (let i = 1; i <= page; i++) {
            pageStr += `<li class="page-item"><a class="page-link page-number" href="#">${i}</a></li>`
        }
        PageItems.innerHTML = TotalNumber + Previous + pageStr + next;

        //內容分頁

        //  獲取數值


        //創建數值紀錄 預設第一頁

        //表格清除

        //看到時預設第一頁


        // console.log(tbody3);

        console.log("頁數 : " + page + "每頁資料" + pageNumberValue);
        pageNumberValue = parseInt(pageNumberValue)
        console.log(typeof(pageNumberValue));

        //分頁表格建置

        //點擊按鈕一下
        document.querySelector('.page-number').click();
        document.querySelector('.PageNumber input[type=number]').style = "display:none"
        document.querySelector('.PageNumber .paginationBtn').style = "display:none"
        document.querySelector('.PageNumber span').style = "display:none"
    }, false)


    ///!分頁表格程式
    let RowsArray = [];
    for (let i = 0; i < rows.length; i++) {
        RowsArray.push(rows[i])
    }
    let pagination1 = document.querySelector('.pagination1')
    let tbody2 = document.querySelector('.table tbody')
    pagination1.addEventListener('click', function(e) {

        let str = e.target.textContent.trim();
        let number
        //切換的時候 取消選取 select_all 

        //解決冒泡事件最外層會點到UL
        if (e.target.nodeName == "UL") {
            return
        }
        //跳到最前面
        else if (str == "«") {
            let pageNumberValue = parseInt(localStorage.getItem("pageNumberValue"))
            tbody2.innerHTML = ""
            for (let i = (1 - 1) * pageNumberValue; i < 1 * pageNumberValue; i++) {

                if (RowsArray[i + 1] == undefined) {
                    return
                }
                tbody2.appendChild(RowsArray[i + 1])
            }
        }
        //跳到最後面
        else if (str == "»") {
            let thisNumber = parseInt(localStorage.getItem("PageNumber"))
            let pageNumberValue = parseInt(localStorage.getItem("pageNumberValue"))
            tbody2.innerHTML = ""
            for (let i = (thisNumber - 1) * pageNumberValue; i < thisNumber * pageNumberValue; i++) {

                if (RowsArray[i + 1] == undefined) {
                    return
                }
                tbody2.appendChild(RowsArray[i + 1])
            }
        } else {
            number = parseInt(str)
        }
        if (number != undefined) {

            let pageNumberValue = parseInt(localStorage.getItem("pageNumberValue"))
            tbody2.innerHTML = ""
            for (let i = (number - 1) * pageNumberValue; i < number * pageNumberValue; i++) {

                if (RowsArray[i + 1] == undefined) {
                    return
                }
                tbody2.appendChild(RowsArray[i + 1])
            }
            table.appendChild(tbody2)
        }

    }, true)

    
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


    let btnDeleteCheck = document.querySelectorAll(".btnDeleteCheck");
    let btnDelete = document.querySelectorAll(".btnDelete");
    let id;

    if (btnDeleteCheck) {
        btnDeleteCheck.forEach(function(element) {
            element.addEventListener("click", function(e) {
                id = element.dataset.id;
            }, false)
        })
    }

    btnDelete.forEach(function(element) {
        element.addEventListener("click", function(e) {
            $(document).ready(function() {
                $.ajax({
                    type: "POST",
                    url: "system/backMeetingDelete.php",
                    data: {
                        "id": id
                    },
                    success: function(response) {
                        window.location.reload();
                    }
                });
            });
        }, false)
    })
</script>