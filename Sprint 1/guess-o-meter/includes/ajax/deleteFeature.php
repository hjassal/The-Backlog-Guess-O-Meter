<?php
        include_once '../db.inc.php';
        session_start();

        $sql = "DELETE FROM tb_features
                WHERE feature_id = :featureid";

        $statement = $dbh->prepare($sql);

        $statement->bindParam(':featureid', $_POST['featureid'], PDO::PARAM_STR);

        $statement->execute();

 ?>
