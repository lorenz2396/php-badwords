<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Badwords</title>
    </head>
    <body>
        <div>
            <form action="indexResponse.php" method="get">
                <div>
                    <label for="userText">
                        Paragrafo
                    </label>
                    <textarea name="textArea" id="textArea" cols="30" rows="5" placeholder="Your text"></textarea>
                </div>
                <div>
                    <label for="badWord">
                        Parola da censurare
                    </label>
                    <input type="text" name="badWord" placeholder="Text to be censored">
                </div>
                
                <button type="submit">
                    Submit
                </button>
            </form>
        </div>
    </body>
</html>