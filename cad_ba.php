
<?php
      
session_start();

if(!isset($_SESSION["login"]) &&  !isset($_SESSION["senha"])  )
{
  header("Location: index.html");
  exit;
  
  
}

?>


<!DOCTYPE html>



<html lang="pt-br">
<head>


<!--  FUNCAO COMPLETAR CAMPO TRECHO-->


<script type="text/javascript">
function completar_campos(){
document.getElementById("loading").style.display = "block";
var con_consulta;
if (window.XMLHttpRequest){

con_consulta = new XMLHttpRequest();

}else{


con_consulta  = new ActiveXObject("Microsoft.XMLHTTP");



}

con_consulta.onreadystatechange = function(){

if(con_consulta.readyState ==  4 && con_consulta.status == 200){

document.getElementById("principal").innerHTML = con_consulta.responseText;
document.getElementById("loading").style.display = "none";

}

}

var cabo = document.getElementById("cabo").value;

con_consulta.open("GET","processar_cabo.php?cabo="+cabo,true);
con_consulta.send(null);






}
</script>




<!--   FIM FUNCAO                            -->







  <meta charset="utf-8">

<link rel="stylesheet"  href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<link rel="stylesheet"  href="/resources/demos/style.css">



<script type="text/javascript" src="jquery-ui.js"></script>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="jquery.maskedinput.js"></script>
<script type="text/javascript" src="validacaoid.js"></script>
<script type="text/javascript" src="jquery-ui.min.js"></script>
<script type="text/javascript" src="jquery-ui.js"></script>









<link rel="icon" href="img/logo_oi.ico">




<style>
 footer {
      background-color: #555;
      color: white;
      padding: 15px;
       text-align:center;
    }
	.container-fluid
	{
	background-color: purple;
	}
  #realcar
  {
  background-color: grey;
  }
   #realcar2
  {
  background-color: #D3D3D3;
  }

  #loading
{
  
width:70px;
height:70px;  
  
  
  
  
}



</style>
  <title>PREVENTIVA DE FIBRA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>



  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Serede</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active" style="float:right"><a href="pesq_ba.php">Busca BA</a></li>
      <li class="active" style="float:right"><a href="pesq_per.php">Busca Período</a></li>
      <li class="active" style="float:right"><a href="logout.php">Logout</a></li>
      
      
      <li><a href="#"></a></li> 
      <li><a href="#"></a></li> 
    </ul>
  </div>
</nav>
<div class="container">


<div class="row content">


    <div class="col-sm-10 "  >

    
  
  <form class="form" role="form" name="seachform" method="post" action="enviar.php " enctype="multipart/form-data" >


    <div class="form-group">

       <label for="email">BA:</label>
      <input type="text" class="form-control" id="ba" name="ba" maxlength="9"  placeholder="9 digitos" required>
    </div>
     
       <div class="form-group">
    <label for="cabo">CABO:</label>
      <input type="text" class="form-control" id="cabo" name="cabo" onblur="completar_campos();"  required>
       <img src="loading.gif" id="loading" style="display:none " />
      </div>

      <div id="principal" >
    <br>
   
    </div>

      <div class="form-group">
    <label for="cabo">REDISPOSIÇÃO DE CABOS (KM):</label>
      <input type="text" class="form-control" id="redis_cabo" name="redis_cabo"   required>
       
      </div>
      <div class="form-group">
    <label for="cabo">LANÇAMENTO DE CABOS (KM):</label>
      <input type="text" class="form-control" id="lanc_cb" name="lanc_cb"   required>
       
      </div>

      <div class="form-group">
    <label for="cabo">VISTORIAS CABOS (KM):</label>
      <input type="text" class="form-control" id="vist_cb" name="vist_cb"   required>
       
      </div>

      <div class="form-group">
    <label for="cabo">READEQUAÇÃO DE REDE (KM):</label>
      <input type="text" class="form-control" id="read_rede" name="read_rede"   required>
       
      </div>

      <div class="form-group">
    <label for="cabo">PODA ROÇADAS (KM):</label>
      <input type="text" class="form-control" id="poda" name="poda"   required>
       
      </div>
    

 

    <fieldset style="border: 1px solid; padding: 12px;">
    <div class="form-group">
      &nbsp<label for="pwd">POSTES SUBSTITUÍDOS:</label>
      <br><select class="custom-select my-1 mr-sm-2" name="post_subs">
<?php
    for ($i=0; $i<=100; $i++)
    {
        ?>
            <option value="<?php echo $i;?>"><?php echo $i;?></option>
        <?php
    }
?>
</select>
    </div>
    <div class="form-group">
    <label for="pwd">POSTES APRUMADOS</label>
    <br><select class="custom-select my-1 mr-sm-2" name="post_aprum">
<?php
    for ($i=0; $i<=100; $i++)
    {
        ?>
            <option value="<?php echo $i;?>"><?php echo $i;?></option>
        <?php
    }
?>
</select>
    </div><br>
<div class="form-group">
      <label for="pwd">POSTES IMPLANTADOS:</label>
      <br><select class="custom-select my-1 mr-sm-2" name="post_impl">
<?php
    for ($i=0; $i<=100; $i++)
    {
        ?>
            <option value="<?php echo $i;?>"><?php echo $i;?></option>
        <?php
    }
?>
</select>
    </div> <div class="form-group">

    </fieldset><br>
   
    <div class="form-group">
      <label for="pwd">VISTÓRIAS ESTÁTICAS HORAS:</label>
      <input type="text" class="form-control" id="vist_hr" name="vist_hr" required>
    </div>
    
    
     
     

     <div class="form-group">
      <label for="pwd">OBS:</label><br>  
      <textarea name="obs"  cols="70" rows="5" placeholder="Máximo 500 caracteres" maxlength="500"></textarea>
    </div>
    
    
     
     <div class="form-group">

      <label for="pwd">COORDENADAS LATITUDE:</label>
      <input type="text" class="form-control" id="coord1" name="coord1" maxlength="10" placeholder="ex: -25.476079" required>
    </div>
     <div class="form-group">
   <label for="pwd">COORDENADAS LONGITUDE:</label>
      <input type="text" class="form-control" id="coord2" name="coord2" maxlength="10" placeholder="ex: -29.34737" required>
    </div>
  

    <!--
    <br><br>
    <div class="form-group" id="realcar">
    <label for="email">Foto Antes: </label>
    <input type="file"  id="ftaarquivo1" name="ftaarquivo1"   /> 


   
 <input type="file" id="ftaarquivo2"  name="ftaarquivo2" />
    <input type="file"  id="ftaarquivo3"  name="ftaarquivo3" />
    <input type="file"  id="ftaarquivo4"  name="ftaarquivo4" />
    <input type="file"  style="float:left" id="ftaarquivo5"  name="ftaarquivo5" /><br><br>
     </div>

     <div class="form-group" id="realcar2">
     <label for="email"  >Foto Depois </label>
    <input type="file"  id="ftdarquivo1"  name="ftdarquivo1" />  
    <input type="file"  id="ftdarquivo2"  name="ftdarquivo2" />
    <input type="file"   id="ftdarquivo3"  name="ftdarquivo3" />
    <input type="file"   id="ftdarquivo4"  name="ftdarquivo4" />
    <input type="file"  id="ftdarquivo5" name="ftdarquivo5"   />
     </div>

     -->
     <br><br><button type="submit" value="Enviar" class="btn btn-danger" id="enviar"> <strong>Enviar</strong> </button><br><br><br><br>



     

        
   

  

  
    
   
     

    
    
  
  
    
    


    
  </form>
  

 
 </div>
 
</div>


</body>
</html>


<script>
  
$(function() {

/*var  availableTags = [

"ajskkdp",
"iiisosoa",
"ooiismsm",
"aassdddd",
"ooedmmmd",
"iisoosoos"
];

$( "#cabo" ).autocomplete({
  source: availableTags

  });
*/

$.getJSON("listar_cabos.php", function(data){
//console.log(data);
var retorno = [];


$(data).each( function (key, value){

 // console.log(value.cabo);

 retorno.push(value.cabo);


});
$("#cabo").autocomplete({
  source: retorno ,

 

  });




  });
});






</script>

<!--
<script>
  
$(function() {



$.getJSON("listar_cabos.php", function(data2){
//console.log(data);
var retorno2 = [];


$(data2).each( function (key2, value2){

 // console.log(value.cabo);

 retorno2.push(value2.trecho);


});
$("#localidade").autocomplete({
  source: retorno2

  });




  });
});






</script>
-->