<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $vote = $_POST['vote'];

        // Get content of text file
        $filename = "poll_result.txt";
        $content = file_get_contents($filename);

        // Put content in array
        $array = explode("||", $content);
        $yes = $array[0];
        $no = $array[1];

        if ($vote == 0) {
            $yes++;
        }
        if ($vote == 1) {
            $no++;
        }

        // Insert votes into txt file
        $insertvote = $yes . "||" . $no;
        file_put_contents($filename, $insertvote);
    }
    ?>

    <h2>Result:</h2>
    <table>
        <tr>
            <td>Yes:</td>
            <td><img src="poll.png" width='<?php echo (100 * round($yes / ($no + $yes), 2)); ?>' height='20'>
                <?php echo (100 * round($yes / ($no + $yes), 2)); ?>%
            </td>
        </tr>
        <tr>
            <td>No:</td>
            <td><img src="poll.png" width='<?php echo (100 * round($no / ($no + $yes), 2)); ?>' height='20'>
                <?php echo (100 * round($no / ($no + $yes), 2)); ?>%
            </td>
        </tr>
    </table>

</body>

</html>