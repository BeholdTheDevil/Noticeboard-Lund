<?php

    /*---------------------------------------------------------------------------*
     * Rename and change details of dbh.inc.default.php for database connection. *
     *---------------------------------------------------------------------------*/
     include "includes/dbh.inc.php";

    if(isset($conn) && isset($_POST["submit"])) {
            echo "<pre>" . print_r($_POST, 1) . "</pre>";
        $title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_SPECIAL_CHARS);
        $date_meeting = filter_input(INPUT_POST, "date_meeting", FILTER_SANITIZE_SPECIAL_CHARS);
        $date_post = filter_input(INPUT_POST, "date_post", FILTER_SANITIZE_SPECIAL_CHARS);
        $textcontent = filter_input(INPUT_POST, "textcontent", FILTER_SANITIZE_URL);
        $stub = filter_input(INPUT_POST, "stub", FILTER_SANITIZE_SPECIAL_CHARS);
        $authority = filter_input(INPUT_POST, "authority", FILTER_SANITIZE_SPECIAL_CHARS);
        $accountable = filter_input(INPUT_POST, "accountable", FILTER_SANITIZE_NUMBER_INT);
        $storage_area = filter_input(INPUT_POST, "textcontent", FILTER_SANITIZE_URL);
        $document = "test/test/test.png";
        try {
            echo $accountable;
            $stmt = $conn->prepare("INSERT INTO Anslagstavla (date_meeting, date_post, textcontent, stub, title, authority, accountable, document, storage_area)
                    VALUES(:date_meeting, :date_post, :textcontent, :stub, :title, :authority, :accountable, :document, :storage_area)");
            $stmt->bindParam(":title", $title);
            $stmt->bindParam(":date_meeting", $date_meeting);
            $stmt->bindParam(":date_post", $date_post);
            $stmt->bindParam(":textcontent", $textcontent);
            $stmt->bindParam(":stub", $stub);
            $stmt->bindParam(":authority", $authority);
            $stmt->bindParam(":accountable", $accountable);
            $stmt->bindParam(":storage_area", $storage_area);
            $stmt->bindParam(":document", $document);
            $stmt->execute();
            echo "hello";
        } catch(PDOException $e) {
            echo $e;
        }
    }
 ?>
