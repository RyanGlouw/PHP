<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>PHPMailer Upload</title>
</head>

<body>
        <form method="post" action="action.php" enctype="multipart/form-data">
            <div class="form-data">
                <label for="">
                    <input type="text" name="first-name">
                </label>
            </div>
            <div class="form-data">
                <label for="">
                    <input name="userfile" type="file">
                </label>
            </div>
            <div class="form-data">
                <label for="">
                    <input name="userfile1" type="file">
                </label>
            </div>

            <input type="submit" value="Отправить форму">
        </form>

</body>

</html>