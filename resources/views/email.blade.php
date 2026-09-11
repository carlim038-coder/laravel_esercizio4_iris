<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuovo Contatto</title>
</head>
<body>

    <div>
        <h1>Nuovo contatto ricevuto!</h1>
        <p>Hai ricevuto una nuova richiesta dal form del blog.</p>
    </div>

    <hr>

    <h1>Ciao, {{$username}}</h1>
    <h3>Grazie di averci contattato</h3>
    <p>Questi sono i tuoi dati:</p>
    <ul>
        <li>email: {{$useremail}}</li>
        <li>Messaggio: {{$usermessage}}</li>
    </ul>

</body>
</html>