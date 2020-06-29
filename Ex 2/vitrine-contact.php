<!doctype html>

<body>
<html lang="fr">
  <link rel="stylesheet" href="style/vitrine.css">

<head>
  <meta charset="utf-8">
  <title>Summer Code Camp - Contact</title>
  <script src="script.js"></script>

<?php
  $navigation='contact';
  include 'header.php';
?> 

</head>
<header>

</header>
<main>
    <div class="border-nav"><h2>Contact</h2></div>
<br>
<div class="bordure-form">
    <div class="form">
    <div class="container" >
     <form action="action_page.php">
       <label for="nom">Votre nom</label>
       <br>
        <input type="text" id="nom" name="firstname" placeholder="ex: Loris Feist"><br>  
       <label for="email">votre email</label>
       <br>
        <input type="text" id="nom" name="firstname" placeholder="ex: loris.feist@gmail.com"><br>
       <label for="amélioration">Comment améliorer mon site?</label>
       <br>
       <input type="text" id="nom" name="firstname" placeholder="vos suggestions..."><br>
     <br>
        <input type="submit" value="Envoyer">


    </div>
    </div>
</div>

</main>
<footer>
<?php
  include 'footer.php'
?>
</footer>  

</body>
</html>