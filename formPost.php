<?php

    /*---------------------------------------------------------------------------*
     * Rename and change details of dbh.inc.default.php for database connection. *
     *---------------------------------------------------------------------------*/
     include "includes/dbh.inc.php";

    if(isset($conn) && isset($_POST["submit"])) {
        /* Debug echo
            echo "<pre>" . print_r($_POST, 1) . "</pre>";
        */
        try {
            //Prepare SQL statement.
            $stmt = $conn->prepare("INSERT INTO Anslagstavla(date_meeting, date_post, textcontent, stub, title, authority, accountable, document, storage_area)
                    VALUES(:date_meeting,
                        :date_post,
                        :textcontent,
                        :stub,
                        :title,
                        :authority,
                        :accountable,
                        :document,
                        :storage_area)");

            //Array with filters.
            $args = array(
                ":date_meeting" => FILTER_SANITIZE_SPECIAL_CHARS,
                ":date_post" => FILTER_SANITIZE_SPECIAL_CHARS,
                ":textcontent" => FILTER_SANITIZE_SPECIAL_CHARS,
                ":stub" => FILTER_SANITIZE_SPECIAL_CHARS,
                ":title" => FILTER_SANITIZE_SPECIAL_CHARS,
                ":authority" => FILTER_SANITIZE_SPECIAL_CHARS,
                ":accountable" => FILTER_VALIDATE_INT,
                ":document" => FILTER_SANITIZE_URL,
                ":storage_area" => FILTER_SANITIZE_SPECIAL_CHARS
            );

            //Array containing variables retrieved from POST.
            $data = array(
                ":date_meeting" => $_POST["date_meeting"],
                ":date_post" => $_POST["date_post"],
                ":textcontent" => $_POST["textcontent"],
                ":stub" => $_POST["stub"],
                ":title" => $_POST["title"],
                ":authority" => $_POST["authority"],
                ":accountable" => $_POST["accountable"],
                ":document" => $_POST["document"],
                ":storage_area" => $_POST["storage_area"]
            );

            //Filter array and execute statement with filtered array.
            filter_var_array($data, $args);
            $stmt->execute($data);

            //Reset location header to index page.
            header("Location: /");
        } catch(PDOException $e) {
            echo $e;
        }
    }
 ?>
