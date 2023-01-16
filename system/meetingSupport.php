<?php
include '../db/db.php';

$methodN = $_POST['methodN'];
$str = "";
if ($methodN == 0) {

    $sql = "SELECT * FROM `meeting` ORDER BY `date` ";
    $res = $db->query($sql);
    $res->setFetchMode(PDO::FETCH_ASSOC);

    foreach ($res as $meeting) {
        $str .= '
        <div class="row">
            <div class="card" data-id = "' . $meeting['id'] . '">
                <img class="errorImg" src = "' . $meeting['imgPath'] . '"  alt="">
                <div class="textWrap">
                    <div class="cardTitle">
                        <div class="tag">' . $meeting['tag'] . '</div>
                        <small>' . $meeting['date'] . '</small>
                    </div>
                    <h5>會議地點 :' . $meeting['location'] . '</h5>
                    <div class="content">' . $meeting['content'] . '</div>
                </div>
            </div>
        </div>
        ';
    }

    echo $str;
} else if ($methodN == 1) {

    $sql = "SELECT * FROM `meeting` ORDER BY `date` DESC ";
    $res = $db->query($sql);
    $res->setFetchMode(PDO::FETCH_ASSOC);

    foreach ($res as $meeting) {
        $str .= '
            <div class="row">
                <div class="card" data-id = "' . $meeting['id'] . '">
                    <img class="errorImg" src = "' . $meeting['imgPath'] . '"  alt="">
                    <div class="textWrap">
                        <div class="cardTitle">
                            <div class="tag">' . $meeting['tag'] . '</div>
                            <small>' . $meeting['date'] . '</small>
                        </div>
                        <h5>會議地點 :' . $meeting['location'] . '</h5>

                        <div class="content">' . $meeting['content'] . '</div>
                    </div>
                </div>
            </div>
        ';
    }

    echo $str;
} else if ($methodN == 2) {
    $SelectNumber = $_POST['SelectNumber'];
    $strT = "";
    for ($i = 0; $i < count($SelectNumber); $i++) {
        if (count($SelectNumber) == 1) {
            $strT = "`tag` = '" . $SelectNumber[$i] . "'";
        } else if (count($SelectNumber) > 1) {

            if ($i == count($SelectNumber) - 1) {
                $strT .= "`tag` = '" . $SelectNumber[$i] . "'";
            } else {
                $strT .= "`tag` = '" . $SelectNumber[$i] . "' OR";
            }
        }
    }
    $sql = "SELECT * FROM `meeting` Where $strT ORDER BY `date` DESC";
    $res = $db->query($sql);
    $res->setFetchMode(PDO::FETCH_ASSOC);
    foreach ($res as $meeting) {
        $str .= '
            <div class="row">
                <div class="card" data-id = "' . $meeting['id'] . '">
                    <img class="errorImg" src = "' . $meeting['imgPath'] . '"  alt="">
                    <div class="textWrap">
                        <div class="cardTitle">
                            <div class="tag">' . $meeting['tag'] . '</div>
                            <small>' . $meeting['date'] . '</small>
                        </div>
                        <h5>會議地點 :' . $meeting['location'] . '</h5>

                        <div class="content">' . $meeting['content'] . '</div>
                    </div>
                </div>
            </div>
        ';
    }
    echo $str;
}