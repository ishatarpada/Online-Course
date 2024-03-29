<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form>
        <select name="users" id="user">
            <option value="">Select a person:</option>
            <option value="1">Isha</option>
            <option value="2">Disha</option>
            <option value="3">Manshi</option>
        </select>
    </form>
    <br>
    <div id="txtHint"><b>Person info will be listed here.</b></div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            $("#user").on("change", function(e) {
                var userId = $(this).val();
                $.ajax({
                    url: "show-info.php",
                    type: "POST",
                    data: { user_id: userId },
                    success: function(data) {
                        $("#txtHint").html(data);
                    }
                });
            });
        });
    </script>
</body>

</html>