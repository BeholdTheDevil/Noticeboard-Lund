<form action="formPost.php" class="create-post-form" method="POST">
    <div class="inputContainer">
        <label for="title">Titel</label>
        <input class="inputField inputTitle" type="text" name="title"></input>
    </div>
    <div class="inputContainer">
        <label for="date_meeting">Sammanträde</label>
        <input class="inputMeetingDate" type="date" name="date_meeting"></input>
    </div>
    <div class="inputContainer">
        <label for="date_post">Publiceringsdatum</label>
        <input class="inputPostDate" type="date" name="date_post"></input>
    </div>
    <div class="inputTextContainer">
        <label for="textcontent">Text</label>
        <input class="inputField inputText" type="textarea" name="textcontent"></input>
    </div>
    <div class="inputTextContainer">
        <label for="stub">Stub</label>
        <input class="inputField inputStub" type="textarea" name="stub"></input>
    </div>
    <div class="inputContainer">
        <label for="authority">Organ</label>
        <input class="inputField inputAuthority" type="text" name="authority"></input>
    </div>
    <div class="inputContainer">
        <label for="accountable">Ansvarig</label>
        <select name="accountable" class="inputAccountable">
            <option value="1">Test</option>
        </select>
    </div>
    <div class="inputContainer">
        <label for="document">Dokument</label>
        <input class="inputField inputDocument" type="text" name="document" disabled></input>
    </div>
    <div class="inputContainer">
        <label for="storage_area">Förvaringsplats</label>
        <input class="inputField inputStorageArea" type="text" name="storage_area"></input>
    </div>
    <button type="submit" name="submit">Publicera</button>
</form>
