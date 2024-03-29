<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form>
        <select name="cds" id="cd">
        <?php include "name.php"; ?>
        </select>
    </form>
    <br>
    <div id="txtHint"><b>CD info will be listed here.</b></div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            $("#cd").on("change", function(e) {
                var artist = $(this).val();
                $.ajax({
                    url: "show-info.php",
                    type: "POST",
                    data: {
                        artist_name: artist
                    },
                    success: function(data) {
                        $("#txtHint").html(data);
                    }
                });
            });
        });
    </script>
</body>

</html>