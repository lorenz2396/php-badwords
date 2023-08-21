<?php
        $userText = $_GET['textArea'];
        $badWord = $_GET['badWord'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Response</title>
    </head>
    <body>
    <p>
        <?php
            echo 'text from user: '.$userText;
        ?>
    </p>

    <p>
        <?php
            echo 'changed Text: ' . str_replace("$badWord", "***", $userText);
        ?>
    </p>
    </body>
</html>