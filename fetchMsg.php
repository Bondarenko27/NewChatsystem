<?php
require_once'connectDB.php';
    $sql=" SELECT * FROM messages ORDER BY id DESC LIMIT 20 ";
        $statement= mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($statement, $sql)) {
            echo'<p>no connection</p>';
        }
        else {
            $result=$conn->query($sql);
            $myJSON = array();
            while ($row=$result->fetch_assoc()) {
            array_push($myJSON, $row);
        }
        $out = array_values($myJSON);
        $out = json_encode($out);
        echo $out;
    }


?>