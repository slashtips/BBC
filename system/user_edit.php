<!DOCTYPE html>
<html lang="en">
<?php
include '../db/db.php';
$sql = "SELECT * FROM `users`";
$res = $db->query($sql);
$res->setFetchMode(PDO::FETCH_ASSOC);

$id = $_POST['i'];

$sql2 = "SELECT * FROM `users` where `id` = :id";

$stmt = $db->prepare($sql2);
$stmt->bindValue(':id', $id);
$stmt->execute();
$query = $stmt->fetchAll();

$firstName = "";
$lastName = "";
$email = "";
$title = "";

foreach ($query as $row) {
    $firstName = $row['firstName'];
    $lastName = $row['lastName'];
    $email = $row['email'];
    $title = $row['title'];
}

// $row = mysqli_fetch_array($res2);
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>編輯</title>
    <style>
        .wrap {
            border: 3px solid black;
            border-radius: .5rem;
            padding: 2rem;
        }
    </style>
</head>

<body>
    <div class="wrap container">
        <h3>修改會員編號
            <?php echo $id; ?>的資料
        </h3>
        <form action="user_edit_modify.php" method="POST">
            <div class="mb-3">
                <label for="firstName" class="form-label">姓氏 : </label>
                <input type="text" class="form-control" id="firstName" value="<?php echo $firstName ?>"
                    aria-describedby="emailHelp" name="firstName">
            </div>

            <div class="mb-3">
                <label for="lastName" class="form-label">名字 : </label>
                <input type="text" class="form-control" id="lastName" value="<?php echo $lastName ?>"
                    aria-describedby="emailHelp" name="lastName">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">信箱 : </label>
                <input type="email" class="form-control" id="email" value="<?php echo $email ?>"
                    aria-describedby="emailHelp" name="email">
            </div>




            <div class="mb-3">
                <label for="title" class="form-label">身分 : </label>
                <input type="text" class="form-control" id="title" value="<?php echo $title ?>"
                    aria-describedby="emailHelp" name="title">
            </div>


            <div class="mb-3">
                <label for="status" class="form-label">狀態 : </label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status" id="inlineRadio1" value="1">
                    <label class="form-check-label" for="inlineRadio1">以驗證</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status" id="inlineRadio2" value="0">
                    <label class="form-check-label" for="inlineRadio2">未驗證</label>
                </div>
            </div>

            <input type="submit" value="修改" class="btn btn-outline-success">
            <a href="../back_user_Info.php" class="btn btn-outline-danger">取消</a>
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                刪除
            </button>
            <input type='hidden' name='i' value='<?php echo $id; ?>'>
        </form>
    </div>
</body>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">刪除確認</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                確定刪除此會員嗎?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">取消</button>
                <form action='user_edit_delete.php' method='post'><input type='submit' class='btn btn-danger me-2'
                        value='確定'> <input type='hidden' name='i' value='<?php echo $id; ?>'></form>
            </div>
        </div>
    </div>
</div>

</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
<script src="../js/back.js"></script>