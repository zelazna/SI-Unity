<?php header("Access-Control-Allow-Origin: *"); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script>
    $.ajax({
        url: 'form/data_submitted',
        type: 'POST',
        data: '{"score":"999","scores_id":"69"}',
        dataType: 'json',
        crossDomain: true,
        success: function (msg) {
            if (msg) {
                alert("Somebody" + name + " was added in list !");
                location.reload(true);
            }
        },
        error: function (resultat, statut, erreur) {
            console.log(resultat,statut,erreur);
        },

        complete: function (resultat, statut) {
            console.log(resultat,statut);
        }


    });
    console.log($.ajax.data);
</script>
</body>
</html>


