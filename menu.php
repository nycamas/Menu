<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Menu</title>
<script src="js/functiones.js"></script>

<link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="css/index.css">

<script src="js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="js/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<style> 


 </style>
</head>
<body>
 <img class="parao" src="https://i.imgur.com/d5qPXgL.jpg" alt="image">
 <?php echo "<span class="."cpy".">Copyright &copy; 2000-".date("Y")." www.angelgjl.space</span>"; ?>
 
  <nav>
    <ul>
      <li><a href="#etq1" onclick="apicar()"><center>Control Picada</center></a></li>
      <li><a href="#etq2" onclick=reinic("etq21")><center>Configuracion  </center></a></li>
      <li><a href="#etq3" onclick=reinic("etq21")><center>Informes</center></a></li>
      <li><a href="#etq4" onclick=reinic("etq21")><center>Resolucion discrepancias </center></a></li>
    </ul>
</nav>
 <div class="inic">
  </div>
  <article id="etq1"> 
  <div id="etq11">
  </div>
   </article> 
  <article id="etq2">
    <div><center><button onclick="escribeP()">Personal</button><button onclick="escribeH()">Horarios</button><button onclick="escribeA()">Ajustar Parámetros</button> </center></div>
    <div id="etq21">
   </div>      
  </article> 
  <article id="etq3"> 
    <p>Informes de picadas </p>
  </article> 
  <article id="etq4">
    <p>Ajuste de picadas erróneas</p>
  </article>
</body>
</html>