<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<script>
    function getVote(int) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("poll").innerHTML = this.responseText;
            }
        }
        xmlhttp.open("POST", "poll.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send("vote=" + int);
    }
</script>
</head>

<body>

    <div id="poll">
    <h3>Do you like PHP and AJAX so far?</h3>
    <form method="post">
        Yes: <input type="radio" name="vote" value="0"><br>
        No: <input type="radio" name="vote" value="1"><br>
        <input type="submit" value="Submit">
    </form>
    </div>

</body>

</html>