<!DOCTYPE html>
<html>
<head>
    <title>Segitiga Generator</title>
</head>
<body>
    <form method="post">
        <label for="inputValue">Input:</label>
        <input type="number" id="inputValue" name="inputValue">
        <button type="submit">Generate</button>
    </form>

    <?php
    function generateTriangle($input) {
        $output = '';

        for ($i = 1; $i <= $input; $i++) {
            for ($j = 1; $j <= ($input - $i); $j++) {
                $output .= '&nbsp;';
            }

            for ($k = 1; $k <= (($i * 2) - 1); $k++) {
                if ($k == 1 || $k == ($i * 2) - 1 || $i == $input) {
                    $output .= '*';
                } else {
                    $output .= '#';
                }
            }
            $output .= "<br>";
        }

        return $output;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $inputValue = $_POST['inputValue'];
        $outputTriangle = generateTriangle($inputValue);
        echo $outputTriangle;
    }
    ?>
</body>
</html>
