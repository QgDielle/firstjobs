<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>Document</title>
</head>
<body>

 <h1> Ciao {{$user_data['name']}}, grazie per averci contattato! </h1>
 <h2>Ti ricontatteremo a breve!</h2>

 <p>Il tuo messaggio</p>
 <ul>
  <li>Nome: {{user_data['name']}}</li>
  <li>E-mail: {{user_data['email']}}</li>
  <li>Il tuo messaggio: {{user_data['message']}}</li>
 </ul>

 <p>Se non hai inviato tu il messaggio ignora questa email.</p>

</body>
</html>