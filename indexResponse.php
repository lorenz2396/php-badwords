<?php
        $userText = $_GET['textArea'];
        $badWord = $_GET['badWord'];
        
        $censored = str_replace($badWord, "***", $userText);
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
                echo 'Text from user: '.$userText;
                echo 'Lenght text: ' .strlen($userText);
            ?>
        </p>

        <p>
            <?php
                echo 'Changed Text: ' .str_replace($badWord, "***", $userText);
                echo 'Lenght text censored' .strlen($censored);
            ?>
        </p>
    </body>
</html>