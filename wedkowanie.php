<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="utf-8">
<title>Klub wędkowania</title>
<link rel="stylesheet" href="styl2.css">
<script src="skrypt.js"></script>
</head>
<body>
  
<div class="baner">
<h2>Wędkuj z nami!</h2>
</div>
  
<div class="lewy">
<img src="ryba2.jpg" alt="Szczupak" id="obrazek" name="obrazek">
  </div>
  
  <div class="prawy">
      <h3>Ryby spokojnego żeru(białe)</h3>
      
      <?php
      $align='right';
      
      $baza=mysqli_connect('localhost','root','','wedkowanie');
      if(mysqli_connect_errno()){
          echo"Wystapil blad polaczenia z baza";
      }
      
      $wynik=mysqli_query($baza,"SELECT `id`,`nazwa`,`wystepowanie` FROM `ryby`WHERE`styl_zycia` = 2");
        while($row=mysqli_fetch_array($wynik)){  
                
      echo "<ul>";
      echo $row['id']." .".$row['nazwa']." wystepuje w:".$row['wystepowanie'];"<br>"; 
      echo "</ul>";
            
      }
      mysqli_close($baza);
      ?>
      <br>
      
      <ol>
      <li><a href="https://wedkuje.pl" target="_blank">Odwiedź także</a></li>
       <li><a href="http://www.pzw.org.pl" target="_blank">Polski Związek Wędkarski</a></li>
      </ol>
      
  </div>
  <div class="stopka">
      <p>Stronę wykonał: Daniel</p>
  </div>
    </body>
</html>
