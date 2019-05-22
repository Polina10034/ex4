<!DOCTYPE html>
<html>
    <head>
    <title>forms</title>
</head>
<body>
    <section>
        Welcome
        <?php
        $un = $_GET["reg_un"];
        $pw = $_GET["reg_pass"];

        if ($un== "polina" && $pw=="111")
        echo "<h2>Good morning user " . $un . "</h2>";
        else
        echo "<h2>Who are u? u can't log in</h2>"
        ?>
    </section>
</body>
</html>