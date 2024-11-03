<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            justify-content: center;
            align-items: center;
            display: flex;
        }
        fieldset{
            justify-content: center;
            align-self: center;
            display: flex;
            padding: 15px 35px 15px 5px;
            border: 1px solid black;
            width: 40vh;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <fieldset>
        <div>
            <form action="check_acc.php" method="post">
                <p>
                    <label for="name">帳號:</label>
                    <input type="text" name="acc" placeholder="使用者名稱" require>
                </p>
                <p>
                    <label for="password">密碼:</label>
                    <input type="password" name="password" placeholder="密碼" require>
                </p>
                <p>
                    <input type="submit" value="登入">
                </p>
            </form>
        </div>
    </fieldset>

    
</body>
</html>