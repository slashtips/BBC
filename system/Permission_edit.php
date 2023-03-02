<!DOCTYPE html>
<html lang="en">
<?php
include '../db/db.php';
$sql = "SELECT * FROM `users`";
$res = $db->query($sql);
$res->setFetchMode(PDO::FETCH_ASSOC);

$idd = $_POST['id'];
$sql2 = "SELECT * FROM `users` where `id` = :id DESC LIMIT 0 , 1";
$stmt = $db->prepare($sql);
$stmt->bindValue(':id', $idd);
$stmt->execute();
$query = $stmt->fetchAll();

$email;
$firstName;
$lastName;
foreach ($query as $roww) {
    $email = $roww['email'];
    $firstName = $roww['firstName'];
    $lastName = $roww['lastName'];
}


?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>權限調整</title>
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
        <h3>調整會員編號
            <?php echo $_POST["id"]; ?>的資料
        </h3>
        <form action="Permission_edit_modify.php" method="POST">

            <select name="title" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                <option selected value="SystemAdministrator">SystemAdministrator</option>
                <option value="Administrator">Administrator</option>
                <option value="HealthcareProfessional">HealthcareProfessional</option>
            </select>

            <input type="submit" value="確定" class="btn btn-outline-success">
            <a href="../backPermissionInfo.php" class="btn btn-outline-danger">取消</a>
            <input type="hidden" value="<?php echo $_POST["id"]; ?>" name="i">
            <input type="hidden" value="<?php echo $email ?>" name="email">
            <input type="hidden" value="<?php echo $firstName ?>" name="firstName">
            <input type="hidden" value="<?php echo $lastName ?>" name="lastName">
            <?php
            $emailNum = strlen($email);
            $firstNameNum = strlen($firstName);
            $lastNameNum = strlen($lastName);

            ?>
            <input type='hidden' name='emailNum' value='<?php echo $emailNum; ?>'>
            <input type='hidden' name='firstNameNum' value='<?php echo $firstNameNum; ?>'>
            <input type='hidden' name='lastNameNum' value='<?php echo $lastNameNum; ?>'>

        </form>
    </div>
</body>




</html>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
crossorigin="anonymous"></script>
<script src="../js/back.js"></script>
<script src="../js/backF.js"></script>
<script>ForceLogout2()</script>