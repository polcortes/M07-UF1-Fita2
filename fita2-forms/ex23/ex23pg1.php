<html>
<head>
    <?php
    if(isset($_GET["elements"])) {
        if ($_GET['elements'] == "foc") {
            echo "<link rel=\"stylesheet\" href=\"foc.css\">";
        }
        if ($_GET["elements"] == "aigua") {
            echo "<link rel=\"stylesheet\" href=\"aigua.css\">";
        }
        if ($_GET["elements"] == "terra") {
            echo "<link rel=\"stylesheet\" href=\"terra.css\">";
        }
    }
    ?>
</head>
<body>
    <form method="GET">
        <label>Selecciona un elemento:</label><br>
        <select name='elements'>
            <option value="foc">Foc!</option>
            <option value="aigua">~ aIGuA ~</option>
            <option value="terra">terra</option>
        </select>
        <input type="submit" value="tramet">
    </form>
</body>
</html>