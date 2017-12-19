<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, inital-scale=1.0">
    <title>Anslagstavla</title>
    <link rel="stylesheet" type="text/css" href="static/style/form.css">
    <link rel="stylesheet" type="text/css" href="static/style/stylesheet.css">
    <script src="static/js/inputTextStyle.js"></script>
</head>
<body>
    <div class="form-header">
        Skapa tillkännagivelse
    </div>
    <div class="form-container">
        <form action="formPost.php" class="create-post-form" method="POST">
            <div class="inputContainer">
                <label for="title">Titel</label>
                <input class="inputField inputTitle" type="text" name="title" required></input>
            </div>
            <div class="inputContainer">
                <label for="date_meeting">Sammanträde</label>
                <input class="inputMeetingDate" type="date" name="date_meeting" required></input>
            </div>
            <div class="inputContainer">
                <label for="date_post">Publiceringsdatum</label>
                <input class="inputPostDate" type="date" name="date_post" required></input>
            </div>
            <div class="inputContainer">
                <label for="authority">Organ</label>
                <input class="inputField inputAuthority" type="text" name="authority" required></input>
            </div>
            <div class="inputContainer">
                <label for="accountable">Ansvarig</label>
                <select name="accountable" class="inputAccountable">
                    <option value="1">Jörgen</option>
                    <option value="2">Anna</option>
                    <option value="3">Emil</option>
                </select>
            </div>
            <div class="inputContainer">
                <label for="document">Dokument</label>
                <input class="inputField inputDocument" type="text" name="document" required></input>
            </div>
            <div class="inputContainer">
                <label for="storage_area">Förvaringsplats</label>
                <input class="inputField inputStorageArea" type="text" name="storage_area" required></input>
            </div>
            <div class="textfields">
                <div class="inputTextContainer">
                    <label for="textcontent">Text</label>
                    <textarea class="inputField inputText" name="textcontent" wrap="soft" required></textarea>
                </div>
                <div class="inputStubContainer">
                    <label for="stub">Stub</label>
                    <textarea class="inputField inputStub" type="textarea" wrap="soft" name="stub"></textarea>
                </div>
            </div>
            <button type="submit" name="submit">Publicera</button>
        </form>
    </div>
</body>
</html>
