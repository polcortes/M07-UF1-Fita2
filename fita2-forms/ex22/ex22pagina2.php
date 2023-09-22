<?php
    $quantitat = $_POST["quantitat"];
    echo "has selÂ·leccionat ".$quantitat."<br>\n";
    for ($i=1; $i <= $quantitat ; $i++) { 
        echo "<a href=\"ex22pg3.php?quantitat=$i\">Comanda ".$i."</a><br>\n";
    }
?>