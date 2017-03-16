<?php
    include("class/stringtokenizer.class.php") or die();
    include("class/lexer.class.php") or die();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>LEXER.LX</title>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>

    <div>
        <h1>ANALIZADOR LEXICO LX</h1>
        <br />
        <?php
            $txt = '';
            $fp = fopen("source.lx", "r");
            while(!feof($fp)) $txt .= fgets($fp);
            fclose($fp);

            echo "<b>ENTRADA (source.lx)</b>: <BR /><PRE>".$txt."</PRE>";
            $lexer = new Lexer($txt);
        ?>
    </div>

</body>
</html>