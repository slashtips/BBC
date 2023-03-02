<?php
include 'db/db.php';
$sql  = "SELECT * FROM `questions`";
$res = $db->query($sql);
$res->setFetchMode(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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
        .cookieHide{
            display: none;
        }
    </style>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

</head>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js" integrity="sha256-hlKLmzaRlE8SCJC1Kw8zoUbU8BxA+8kR3gseuKfMjxA=" crossorigin="anonymous"></script>

<body>

    <div class="backMenu"></div>
    <div class="container cookieHide">
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
                    <th scope="col">姓名</th>
                    <th scope="col">信箱</th>
                    <th scope="col">No.1</th>
                    <th scope="col">No.2</th>
                    <th scope="col">No.3</th>
                    <th scope="col">No.4</th>
                    <th scope="col">No.5</th>
                    <th scope="col">提問區</th>
                    <th scope="col">提問時間</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($res as $askQ) {
                    echo "<tr>";
                    echo "<td>" . $askQ['username'] . "</td>";
                    echo "<td>" . $askQ['email'] . "</td>";
                    echo "<td>" . $askQ['No1'] . "</td>";
                    echo "<td>" . $askQ['No2'] . "</td>";
                    echo "<td>" . $askQ['No3'] . "</td>";
                    echo "<td>" . $askQ['No4'] . "</td>";
                    echo "<td>" . $askQ['No5'] . "</td>";
                    echo "<td>" . $askQ['Q1'] .  $askQ['Q2'] . $askQ['Q3'] . $askQ['Q4'] . $askQ['Q5'] . $askQ['Q6'] . $askQ['Q7'] . $askQ['Q8'] . $askQ['Q9'] .  "</td>";
                    echo "<td>" . $askQ['createTime'] . "</td>";
                  
                    echo "</tr>";
                }
                ?>
            </tbody>

        </table>
    </div>


</body>

</html>
<script src="js/back.js"></script>
<script src="js/backF.js"></script>
<script>ForceLogout()</script>
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
        //PageItems.innerHTML = "";


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
    CookieShow();
</script>