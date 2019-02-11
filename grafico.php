


<?php


//-------------------------------------------  GRAFICO TOTAL ANUAL  ----------------------------------------------------------------

$sql1 = mysql_query ("SELECT COUNT(*) AS JAN FROM atv_comp_principal where  MONTH(data) = '01' and year(data) = year(NOW());" );
 while ($dado = mysql_fetch_assoc($sql1 )){


  $JAN = $dado["JAN"];

 } 

 $sql2 = mysql_query ("SELECT COUNT(*) AS FEV FROM atv_comp_principal where  MONTH(data) = '02' and year(data) = year(NOW());" );
 while ($dado = mysql_fetch_assoc($sql2 )){


  $FEV = $dado["FEV"];

 } 


 $sql3 = mysql_query ("SELECT COUNT(*) AS MAR FROM atv_comp_principal where  MONTH(data) = '03' and year(data) = year(NOW());" );
 while ($dado = mysql_fetch_assoc($sql3 )){


  $MAR = $dado["MAR"];

 } 

 $sql4 = mysql_query ("SELECT COUNT(*) AS ABR FROM atv_comp_principal where  MONTH(data) = '04' and year(data) = year(NOW());" );
 while ($dado = mysql_fetch_assoc($sql4 )){


  $ABR = $dado["ABR"];

 } 


 $sql5 = mysql_query ("SELECT COUNT(*) AS MAI FROM atv_comp_principal where  MONTH(data) = '05' and year(data) = year(NOW());" );
 while ($dado = mysql_fetch_assoc($sql5 )){


  $MAI = $dado["MAI"];

 } 


 $sql6 = mysql_query ("SELECT COUNT(*) AS JUN FROM atv_comp_principal where  MONTH(data) = '06' and year(data) = year(NOW());" );
 while ($dado = mysql_fetch_assoc($sql6 )){


  $JUNT = $dado["JUN"];

 } 

 $sql7 = mysql_query ("SELECT COUNT(*) AS JUL FROM atv_comp_principal where  MONTH(data) = '07' and year(data) = year(NOW());" );
 while ($dado = mysql_fetch_assoc($sql7 )){


  $JUL = $dado["JUL"];

 } 


 $sql8 = mysql_query ("SELECT COUNT(*) AS AGO FROM atv_comp_principal where  MONTH(data) = '08' and year(data) = year(NOW());" );
 while ($dado = mysql_fetch_assoc($sql8 )){


  $AGO = $dado["AGO"];

 } 

 $sql9 = mysql_query ("SELECT COUNT(*) AS SETE FROM atv_comp_principal where  MONTH(data) = '09' and year(data) = year(NOW());" );
 while ($dado = mysql_fetch_assoc($sql9 )){


  $SET = $dado["SETE"];

 } 


 $sql10 = mysql_query ("SELECT COUNT(*) AS OUTU FROM atv_comp_principal where  MONTH(data) = '10' and year(data) = year(NOW());" );
 while ($dado = mysql_fetch_assoc($sql10 )){


  $OUT = $dado["OUTU"];

 } 


  $sql11 = mysql_query ("SELECT COUNT(*) AS NOV FROM atv_comp_principal where  MONTH(data) = '11' and year(data) = year(NOW());" );
 while ($dado = mysql_fetch_assoc($sql11 )){


  $NOV = $dado["NOV"];

 } 

  $sql12 = mysql_query ("SELECT COUNT(*) AS DEZ FROM atv_comp_principal where  MONTH(data) = '12' and year(data) = year(NOW());" );
 while ($dado = mysql_fetch_assoc($sql12 )){


  $DEZ = $dado["DEZ"];

 } 



 $sql13 = mysql_query ("SELECT COUNT(*) AS JUL_SAI FROM principal where  MONTH(data) = '12' and tipo_reg = 'saida' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql13 )){


  $JUL_SAI = $dado["JUL_SAI"];

 } 

 $sql14 = mysql_query ("SELECT COUNT(*) AS JUL_ENT FROM principal where  MONTH(data) = '07' and tipo_reg = 'entrada' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql14 )){


  $JUL_ENT = $dado["JUL_ENT"];

 } 

  $sql15 = mysql_query ("SELECT COUNT(*) AS AGO_SAI FROM principal where  MONTH(data) = '08' and tipo_reg = 'saida' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql15 )){


  $AGO_SAI = $dado["AGO_SAI"];

 } 



$sql16 = mysql_query ("SELECT COUNT(*) AS AGO_ENT FROM principal where  MONTH(data) = '08' and tipo_reg = 'entrada' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql16 )){


  $AGO_ENT = $dado["AGO_ENT"];

 }


$sql17 = mysql_query ("SELECT COUNT(*) AS SET_SAI FROM principal where  MONTH(data) = '09' and tipo_reg = 'saida' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql17 )){


  $SET_SAI = $dado["SET_SAI"];

 }

 $sql18 = mysql_query ("SELECT COUNT(*) AS SET_ENT FROM principal where  MONTH(data) = '09' and tipo_reg = 'entrada' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql18 )){


  $SET_ENT = $dado["SET_ENT"];

 }

  $sql19 = mysql_query ("SELECT COUNT(*) AS OUT_SAI FROM principal where  MONTH(data) = '10' and tipo_reg = 'saida' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql19 )){


  $OUT_SAI = $dado["OUT_SAI"];

 }
   $sql20 = mysql_query ("SELECT COUNT(*) AS OUT_ENT FROM principal where  MONTH(data) = '10' and tipo_reg = 'entrada' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql20 )){


  $OUT_ENT = $dado["OUT_ENT"];

 }

 $sql21 = mysql_query ("SELECT COUNT(*) AS NOV_SAI FROM principal where  MONTH(data) = '11' and tipo_reg = 'saida' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql21 )){


  $NOV_SAI = $dado["NOV_SAI"];

 }


 $sql22 = mysql_query ("SELECT COUNT(*) AS NOV_ENT FROM principal where  MONTH(data) = '11' and tipo_reg = 'entrada' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql22 )){


  $NOV_ENT = $dado["NOV_ENT"];

 }

  $sql23 = mysql_query ("SELECT COUNT(*) AS DEZ_SAI FROM principal where  MONTH(data) = '12' and tipo_reg = 'saida' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql23 )){


  $DEZ_SAI = $dado["DEZ_SAI"];

 }

  $sql24 = mysql_query ("SELECT COUNT(*) AS DEZ_ENT FROM principal where  MONTH(data) = '12' and tipo_reg = 'entrada' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql24 )){


  $DEZ_SAI = $dado["DEZ_ENT"];

 }




 // GRAFICO EQUIPAMENTOS




$sql25 = mysql_query ("SELECT COUNT(*) AS FRAME FROM principal where YEAR(data) = YEAR(NOW()) and tipo_eqp = 'FRAME'" );
 while ($dado = mysql_fetch_assoc($sql25 )){


  $FRAME = $dado["FRAME"];

 }


 $sql26 = mysql_query ("SELECT COUNT(*) AS FITAS FROM principal where YEAR(data) = YEAR(NOW()) and tipo_eqp = 'FITAS'" );
 while ($dado = mysql_fetch_assoc($sql26 )){


  $FITAS = $dado["FITAS"];

 }


$sql27 = mysql_query ("SELECT COUNT(*) AS SERVIDORES FROM principal where YEAR(data) = YEAR(NOW()) and tipo_eqp = 'SERVIDORES'" );
 while ($dado = mysql_fetch_assoc($sql27)){


  $SERVIDORES = $dado["SERVIDORES"];

 }

 $sql28 = mysql_query ("SELECT COUNT(*) AS SWITCH FROM principal where YEAR(data) = YEAR(NOW()) and tipo_eqp = 'SWITCH' " );
 while ($dado = mysql_fetch_assoc($sql28)){


  $SWITCH = $dado["SWITCH"];

 }


  $sql29 = mysql_query ("SELECT COUNT(*) AS CABOS FROM principal where YEAR(data) = YEAR(NOW()) and tipo_eqp = 'CABOS'" );
 while ($dado = mysql_fetch_assoc($sql29)){


  $CABOS = $dado["CABOS"];

 }


   $sql30 = mysql_query ("SELECT COUNT(*) AS OUTROS FROM principal where YEAR(data) = YEAR(NOW()) and tipo_eqp = 'OUTROS' " );
 while ($dado = mysql_fetch_assoc($sql30)){


  $OUTROS = $dado["OUTROS"];

 }



 // GRAFICO  CABOS



   $sql31 = mysql_query ("SELECT COUNT(*) AS JAN FROM cabos where month(data) ='01' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql31)){


  $JAN = $dado["JAN"];

 }

 $sql32 = mysql_query ("SELECT COUNT(*) AS FEV FROM cabos where month(data) ='02' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql32)){


  $FEV = $dado["FEV"];

 }

  $sql33 = mysql_query ("SELECT COUNT(*) AS MAR FROM cabos where month(data) ='03' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql33)){


  $MAR = $dado["MAR"];

}


  $sql34 = mysql_query ("SELECT COUNT(*) AS ABR FROM cabos where month(data) ='04' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql34)){


  $ABR = $dado["ABR"];

}

  $sql35 = mysql_query ("SELECT COUNT(*) AS MAI FROM cabos where month(data) ='05' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql35)){


  $MAI = $dado["MAI"];

}


 $sql36 = mysql_query ("SELECT COUNT(*) AS JUN FROM cabos where month(data) ='06' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql36)){


  $JUN = $dado["JUN"];

}


 $sql37 = mysql_query ("SELECT COUNT(*) AS JUL FROM cabos where month(data) ='07' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql37)){


  $JUL = $dado["JUL"];

}


 $sql38 = mysql_query ("SELECT COUNT(*) AS AGO FROM cabos where month(data) ='08' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql38)){


  $AGO = $dado["AGO"];

}

 $sql39 = mysql_query ("SELECT COUNT(*) AS SETE FROM cabos where month(data) ='09' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql39)){


  $SETE = $dado["SETE"];

}

 $sql40 = mysql_query ("SELECT COUNT(*) AS OUTU FROM cabos where month(data) ='10' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql40)){


  $OUTU = $dado["OUTU"];

}


 $sql41 = mysql_query ("SELECT COUNT(*) AS NOV FROM cabos where month(data) ='11' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql41)){


  $NOV = $dado["NOV"];

}

 $sql42 = mysql_query ("SELECT COUNT(*) AS DEZ FROM cabos where month(data) ='12' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql42)){


  $DEZ = $dado["DEZ"];

}



// GRAFICO PORCENTAGEM MASSIVE / COLOCATION


 $sql43 = mysql_query ("SELECT count(*) AS TOTAL  from PRINCIPAL" );
 while ($dado = mysql_fetch_assoc($sql43)){


  $TOTAL = $dado["TOTAL"];

}

 $sql44 = mysql_query ("SELECT count(*) AS HOSTING  from principal WHERE SERVICO = 'HOSTING' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql44)){


  $HOSTING = $dado["HOSTING"];

}


 $sql45 = mysql_query ("SELECT count(*) AS COLOCATION  from principal WHERE SERVICO = 'COLOCATION' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql45)){


  $COLOCATION = $dado["COLOCATION"];

}

$sql48 = mysql_query ("SELECT count(*) AS ENGENHARIA  from principal WHERE SERVICO = 'ENGENHARIA' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql48)){


  $ENGENHARIA = $dado["ENGENHARIA"];

}






?>

