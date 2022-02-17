<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <form action="assets/php/traitement.php" method="post">
      votre nom:<input
        type="text"
        name="name"
        placeholder="votre nom"
        required
      />
        votre prenom:<input
          type="text"
          name="surname"
          placeholder="votre prenom" 
          required
        />
        votre date de naissance:<input
          type="date"
          name="birthday"
          value="2012-07-22"
          min="1918-01-01"
          max="2022-12-31"
        />
      <input type="submit" value="OK" />
    </form>
  </body>
</html>
