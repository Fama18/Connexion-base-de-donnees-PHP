
<!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link type="text/css" rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <style>
            ul {
                background-color:#eee;
                cursor:pointer;
            }
            li {
                padding:15px;
            }
        </style>
        <title></title>
    </head>
    <body>
        <div id="container">
                <label>Prenom : </label>
                <input type="text" name="prenom" id="prenom" placeholder="Entrer un prenom" />
                <div id="ListPrenom">
                </div>
            <br />


        </div>
    </body>
</html>
<script>
$(document).ready(function() {
    $('#prenom').keyup(function() {
        var query = $(this).val();
        if(query != '') {
            $.ajax({
                url:"search.php",
                method:"POST",
                data:{query:query},
                success:function(data) {
                    $('#ListPrenom').fadeIn();
                    $('#ListPrenom').html(data);
                }
            });
        }
    });
    $(document).on('click', 'li', function() {
        $('#prenom').val($(this).text());
        $('#ListPrenom').fadeOut();
    });
});
</script>