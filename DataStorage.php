<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="DataStorage.css">
    <title>Data Server</title>
</head>
<body>
    <div style="z-index: 1; position: fixed; top: 0px; right: 0px; background-color: rgba(0, 0, 0, 0.9); color: white; padding: 1%;">
        <p>Connect: 192.168.86.37</p>
    </div>

    <form method="POST" action="">
        <div class="textarea" spellcheck="false" data-gramm_editor="false" onfocus="this.style.animationName = 'textarea-enter'" onfocusout="this.style.animationName = 'textarea-leave'" onkeyup="document.getElementsByName('textarea')[0].value = this.textContent;" contenteditable>
            <?php
                if (isset($_POST["textarea"]) && isset($_POST["textareafilename"])) {
                    if ($_POST["textarea"] != "" && $_POST["textareafilename"] != "") {
                        file_put_contents($_POST["textareafilename"], $_POST["textarea"]);
                    }
                }

                if (isset($_POST["command"])) {
                    if ($_POST["command"] != "") {
                        echo "Command output: ".shell_exec($_POST["command"]);
                    }
                }
            ?>
        </div>
        <input name="textarea" style="display: none;">
        <input placeholder="Filename" name="textareafilename" class="textarea" autocomplete="off" spellcheck="false" onfocus="this.style.animationName = 'textarea-enter'" onfocusout="this.style.animationName = 'textarea-leave'">
        <input type="submit" value="Save" class="textareasubmit" onmouseover="this.style.animationName = 'textarea-enter'" onmouseout="this.style.animationName = 'textarea-leave'">
    </form>
    <form method="POST" action="">
        <input placeholder="Command" name="command" class="command" autocomplete="off" spellcheck="false" onfocus="this.style.animationName = 'textarea-enter'" onfocusout="this.style.animationName = 'textarea-leave'">
        <input type="submit" value="Run" class="commandsubmit" onmouseover="this.style.animationName = 'textarea-enter'" onmouseout="this.style.animationName = 'textarea-leave'">
    </form>
</body>
</html>