<?php
include("control_sesion/seguridad.php");
include("functions/traductor.php");

$uri = $_SERVER["REQUEST_URI"];
$uriArray = explode('=', $uri);
$id_url = $uriArray[1];

include("conexion.php");
$sentencia = "select * from informes where id=".$id_url;
$consulta = mysqli_query($conexion, $sentencia) or die("Error de Consulta");

// Recorrer la consulta y guardar los datos del informe
while ($fila = mysqli_fetch_array($consulta)) {
    $nombre_doc = $fila['nombre_doc'];
    $id_empresa_auditada = $fila['id_empresa_auditada'];
    $fecha = $fila['fecha'];
    $estado = $fila['estado'];
    $recomendaciones = $fila['recomendaciones'];
    $conclusiones = $fila['conclusiones'];
}

// Obtener datos de la empresa auditada
$sentencia_empresa_auditada = "select * from empresas where id=".$id_empresa_auditada; 
$consulta_empresa_auditada = mysqli_query($conexion, $sentencia_empresa_auditada) or die("Error de Consulta");

// Recorrer la consulta y guardar los datos de la empresa auditada
while ($fila = mysqli_fetch_array($consulta_empresa_auditada)) {
    $id_empresa_audit = $fila['id'];
    $nombre_empresa_auditada = $fila['nombre'];   
    $logo_empresa = $fila['logo']; 
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="Generator" content="Microsoft Word 15 (filtered)">
  <link rel="stylesheet" href="estilos/estilos_informes.css">
  <title><?php echo $nombre_doc; ?></title>
  <style>
    body {
      max-width: 750px;
      margin: 0 auto;
      padding: 20px;
      background-color: #444d55;
    }
    .contenedor {
      background-color: white;
      padding: 70px;
    }
  </style>

<!-- PORTADA  -->
<body lang=ES link="#0563C1" vlink="#954F72" style='word-wrap:break-word'>
<div class="contenedor">
  <div class=WordSection1>

  <div style="display: flex; align-items: center; justify-content: center;">
    <img src="assets/images/report/logo-4k4m1m3.png" alt="Logo 4k4m1m3" style="width: 100px; margin-right: 20px;">
    <div style="text-align: center; margin-left: 20px;">
        <h1 style="font-family:'Verdana',sans-serif; font-size: 35px;">Informe de Pentesting</h1>
        <h2 style="font-family:'Verdana',sans-serif; font-size: 20px;">Autor: 4k4m1m3</h2>
    </div>
  </div>
  <hr>
  <br><br><br>
  <center>
      <p style="text-align:center;font-size:35px;">
          <?php echo lang("Análisis de Vulnerabilidades");?>
      </p>
      <span style="font-family:'Verdana',sans-serif; font-size: 30px;">
          <b><?php echo $nombre_empresa_auditada; ?></b>
      </span>
  </center>
  <br><br>
  <p class=MsoBodyText align=center style='margin-top:0cm;margin-right:23.05pt; margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:center'>
    <img width=200 height=200 id=image1.jpeg src="<?php echo $logo_empresa?>" style="border-radius:100px;">
    <br><br>
  </p>
  <span style="font-family:'Verdana',sans-serif; font-size: 15px; float:right;"><b><?php echo lang("Fecha");?>:</b></span><br>
  <span style="font-family:'Verdana',sans-serif; font-size: 15px; float:right;"><?php echo $fecha ?></span><br><br>
  <span style="font-family:'Verdana',sans-serif; font-size: 15px; float:right;"><b><?php echo lang("Documento");?>:</b></span><br>
  <span style="font-family:'Verdana',sans-serif; font-size: 15px; float:right;"><?php echo $nombre_doc ?></span><br><br>
  <span style="font-family:'Verdana',sans-serif; font-size: 15px; float:right;"><b><?php echo lang("Versión");?>:</b></span><br>
  <span style="font-family:'Verdana',sans-serif; font-size: 15px; float:right;">2024-03-27-RV.001-MM</span><br><br>
  <span style="font-family:'Verdana',sans-serif; font-size: 15px; float:right;"><b><?php echo lang("Web");?>:</b></span><br>
  <span style="font-family:'Verdana',sans-serif; font-size: 15px; float:right;">4k4m1m3.github.io</span><br><br>
  <span style="font-family:'Verdana',sans-serif; font-size: 15px; float:right;"><b><?php echo lang("Teléfono");?>:</b></span><br>
  <span style="font-family:'Verdana',sans-serif; font-size: 15px; float:right;"><?php echo $telefono ?></span><br><br>
  <span style="font-family:'Verdana',sans-serif; font-size: 15px; float:right;"><b><?php echo lang("Correo");?>:</b></span><br>
  <span style="font-family:'Verdana',sans-serif; font-size: 15px; float:right;">4k4m1m3@gmail.com</span>
</div>
<center>
<br><br><hr>
  <?php $anioActual = date("Y"); ?>
  <span style="font-family:'Verdana',sans-serif; font-size: 12px;">
    Copyright &copy; <?php echo $anioActual; ?>. All rights reserved.
  </span>
  </center>

<!-- TITULO DEL INFORME -->
<div class=WordSection2>
  <p class=MsoBodyText style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><b><span style='font-size:13.0pt'>&nbsp;</span></b></p>
  <p class=MsoBodyText style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><b><span style='font-size:13.0pt'>&nbsp;</span></b></p>
  <p class=MsoBodyText style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><b><span style='font-size:13.0pt'>&nbsp;</span></b></p>
  <p class=MsoBodyText style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><b><span style='font-size:13.0pt'>&nbsp;</span></b></p>
  <p class=TableParagraph style='margin-top:0cm;margin-right:23.05pt; margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'> 
  </p>
</td>
</div>
<div style="height: 10px; background-color: #444d55; margin-left: -75px; margin-right: -75px;"></div>
<!-- AVISO LEGAL -->
<div class=WordSection3>
  <p class=MsoBodyText style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><b><span style='font-size:13.0pt'>&nbsp;</span></b></p>
  <p class=MsoBodyText style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><b><span style='font-size:13.0pt'>&nbsp;</span></b></p>


  <h4 style="color:<?php echo $color;?> !important;">
    <?php echo lang("LEGAL WARNING");?>
  </h4>

  <p class=MsoBodyText style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><b><span style='font-size:13.0pt'>&nbsp;</span></b></p>

  <p>
      <?php echo lang("This document contains confidential and proprietary information which is for the exclusive use of ");?><?php echo $nombre_empresa_auditada?>. <?php echo lang("Unauthorized reproduction or use of this document is strictly prohibited.");?>
  </p>

  <p class=MsoBodyText style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><b><span style='font-size:13.0pt'>&nbsp;</span></b></p>
  <p class=MsoBodyText style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><b><span style='font-size:13.0pt'>&nbsp;</span></b></p>

  <h4 style="color:<?php echo $color;?> !important;">
      <?php echo lang("DOCUMENT CONTROL");?>
  </h4>
  <p class=MsoBodyText style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><b><span style='font-size:13.0pt'>&nbsp;</span></b></p>

  <table>
  <!-- NOMBRE DOCUMENTO -->
  <tr style='height:35.0pt'>
    <td width=122 valign=top style='width:91.8pt;border:solid black 1.0pt;background:#191c24;padding:0cm 5.4pt 0cm 5.4pt;height:35.0pt'>
      <p class=TableParagraph style='margin-top:6.05pt;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'>
        <b>
          <span style='font-size:10.0pt;font-family:"Verdana",sans-serif;color:white'><?php echo lang("NAME");?><span style='letter-spacing:.05pt'> 
          </span><?php echo lang("DOCUMENT:");?></span>
        </b>
      </p>
    </td>
    <td width=523 valign=top style='width:392.2pt;border:solid black 1.0pt;border-left:none;padding:0cm 5.4pt 0cm 5.4pt;height:35.0pt'>
      <p class=TableParagraph style='margin-top:.25pt;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'>
        <b> <span style='font-size:9.5pt'>&nbsp;</span> </b>
      </p>
      <p class=TableParagraph style='margin-top:.05pt;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'>
        <b>
          <span style='font-size:10.0pt;font-family:"Verdana",sans-serif'><?php echo $nombre_doc; ?><span style='letter-spacing:-.05pt'> 
        </b>
      </p>
    </td>
  </tr>

  <!-- AUTOR -->
  <tr style='height:35.0pt'>
    <td width=122 valign=top style='width:91.8pt;border:solid black 1.0pt;background:#191c24;padding:0cm 5.4pt 0cm 5.4pt;height:35.0pt'>
      <p class=TableParagraph style='margin-top:11.05pt;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'>
        <b>
          <span style='font-size:10.0pt;font-family:"Verdana",sans-serif;color:white;'><?php echo lang("AUTHOR:");?><span style='letter-spacing:-.05pt'> 
        </b>
      </p>
    </td>
    <td width=523 valign=top style='width:392.2pt;border:solid black 1.0pt;border-left:none;padding:0cm 5.4pt 0cm 5.4pt;height:35.0pt'>
      <p class=TableParagraph style='margin-top:.25pt;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'>
        <b> <span style='font-size:9.5pt'>&nbsp;</span> </b>
      </p>
      <p class=TableParagraph style='margin-top:.05pt;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'>
        <b>
          <span style='font-size:10.0pt;font-family:"Verdana",sans-serif'>4k4m1m3<span style='letter-spacing:-.05pt'> 
        </b>
      </p>
    </td>
  </tr>

  <!-- FECHA -->
  <tr style='height:35.0pt'>
    <td width=122 valign=top style='width:91.8pt;border:solid black 1.0pt;background:#191c24;padding:0cm 5.4pt 0cm 5.4pt;height:35.0pt'>
      <p class=TableParagraph style='margin-top:11.05pt;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'>
        <b>
          <span style='font-size:10.0pt;font-family:"Verdana",sans-serif;color:white;'><?php echo lang("FECHA:");?><span style='letter-spacing:-.05pt'> 
        </b>
      </p>
    </td>
    <td width=523 valign=top style='width:392.2pt;border:solid black 1.0pt;border-left:none;padding:0cm 5.4pt 0cm 5.4pt;height:35.0pt'>
      <p class=TableParagraph style='margin-top:.25pt;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'>
        <b> <span style='font-size:9.5pt'>&nbsp;</span> </b>
      </p>
      <p class=TableParagraph style='margin-top:.05pt;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'>
        <b>
          <span style='font-size:10.0pt;font-family:"Verdana",sans-serif'><?php echo $fecha ?><span style='letter-spacing:-.05pt'> 
        </b>
      </p>
    </td>
  </tr>

  <!-- CLIENTE -->
  <tr style='height:35.0pt'>
    <td width=122 valign=top style='width:91.8pt;border:solid black 1.0pt;background:#191c24;padding:0cm 5.4pt 0cm 5.4pt;height:35.0pt'>
      <p class=TableParagraph style='margin-top:11.05pt;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'>
        <b>
          <span style='font-size:10.0pt;font-family:"Verdana",sans-serif;color:white'><?php echo lang("CUSTOMER:");?><span style='letter-spacing:.05pt'> 
        </b>
      </p>
    </td>
    <td width=523 valign=top style='width:392.2pt;border:solid black 1.0pt;border-left:none;padding:0cm 5.4pt 0cm 5.4pt;height:35.0pt'>
      <p class=TableParagraph style='margin-top:.25pt;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'>
        <b> <span style='font-size:9.5pt'>&nbsp;</span> </b>
      </p>
      <p class=TableParagraph style='margin-top:.05pt;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'>
        <b>
          <span style='font-size:10.0pt;font-family:"Verdana",sans-serif'><?php echo $nombre_empresa_auditada; ?><span style='letter-spacing:-.05pt'> 
        </b>
      </p>
    </td>
  </tr>
</table>
    <p class=MsoBodyText style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><b><span style='font-size:13.0pt'>&nbsp;</span></b></p>
    <p class=MsoBodyText style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><b><span style='font-size:13.0pt'>&nbsp;</span></b></p>
<!--CONFIDENCIALIDAD-->
<h4 style="color:<?php echo $color;?> !important;">
    <?php echo lang("CONFIDENTIALITY STATEMENT");?>
</h4>
<p class=MsoBodyText style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><b><span style='font-size:13.0pt'>&nbsp;</span></b></p>
<p>
    <?php echo lang("This report contains information regarding possible security breaches of ");?><?php echo $nombre_empresa_auditada?>
    <?php echo lang("and their systems.");?> 4k4m1m3  <?php echo lang("recommends that special precautions be taken to");?>
    <?php echo lang(" protect the confidentiality of this document and the information contained in it.");?> 
    <?php echo lang("All other copies of the report have been delivered to ");?><?php echo $nombre_empresa_auditada?>. <?php echo lang("The security assessment");?> 
    <?php echo lang("it is an uncertain process, based on experiences, currently available information and known threats.");?>
    <?php echo lang("It must be understood that all information systems, by their nature, depend on human beings and are vulnerable in some degree.");?>
</p>
<p class=MsoBodyText style='margin-top:.4pt;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'>&nbsp;</p>
<p>
  <?php echo lang("This report");?>
  <?php echo lang("may recommend that");?> <?php echo $nombre_empresa_auditada?> <?php echo lang("use certain software or hardware products manufactured");?>
  <?php echo lang("or maintained by other providers. 4k4m1m3 bases these recommendations on of your previous experience with the capabilities of these products. However, 4k4m1m3 cannot and should not guarantee that any particular product will perform as advertised by the seller.");?>
</p>
</div>
<span style='font-size:11.0pt;font-family:"Verdana",sans-serif'><br clear=all style='page-break-before:always'></span>
<div class=WordSection4>
<p class=MsoBodyText style='margin-top:.4pt;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'>&nbsp;</p>
</div>
<div class=WordSection5>
  <p class=MsoBodyText style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><b><span style='font-size:10.0pt'>&nbsp;</span></b></p>
  <p class=MsoBodyText style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><b>&nbsp;</b></p>


  <!-- LINEA QUE DIVIDE Y SALTO DE PAGINA -->
<div style="height: 10px; background-color: #444d55; margin-left: -75px; margin-right: -75px;"></div>
<div class="WordSection" style="page-break-before: always;">
    <p>&nbsp;</p>
</div>
<!--INDICE-->
<h4 style="color:<?php echo $color;?> !important; text-align: center;">
  <?php echo lang("INDEX");?>
</h4>
<br><br>
<h4 style="color:<?php echo $color;?> !important; text-align: center;">
  <?php echo lang("(GENERATE INDEX WITH WORD)");?>
</h4>
</div>
<span style='font-size:12.0pt;font-family:"Verdana",sans-serif'><br clear=all style='page-break-before:always'></span>
<div class=WordSection6>
<!-- LINEA QUE DIVIDE Y SALTO DE PAGINA -->
<div style="height: 10px; background-color: #444d55; margin-left: -75px; margin-right: -75px;"></div>
<div class="WordSection" style="page-break-before: always;">
    <p>&nbsp;</p>
</div>
<!--INTRODUCCIÓN-->
<h1 style="color:<?php echo $color; ?>" >
    1.&nbsp;<?php echo lang("INTRODUCTION");?>
</h1><br>
<p>
  <?php echo lang("During the tests, the activities that a real attacker would carry out are simulated, discovering the vulnerabilities, their level of risk, and generating recommendations that allow the client to carry out the remediation of these. Each section of this report details important aspects of how an attacker could use the vulnerability to compromise and gain unauthorized access to sensitive information. Are included In addition, guidelines that, when applied, will improve the levels of confidentiality, integrity and availability of the analyzed systems.");?>
</p><br>
<!--OBJETIVO-->
<h2 style="color:<?php echo $color; ?>" >
    1.1.&nbsp;<?php echo lang("OBJECTIVE");?>
</h2><br>
<p>
  <?php echo lang("The objective of the security evaluation is to detect the existing security vulnerabilities in the analyzed systems in order to subsequently generate a report with the findings and recommendations that allow their remediation.");?>
</p><br>  
<!--ALCANCE-->
<h2 style="color:<?php echo $color; ?>" >
  1.2.&nbsp;<?php echo lang("SCOPE");?>
</h2><br>
<p>
  <?php echo lang("The evaluation carried out has focused on the objectives approved in the scope of the contract, which establishes:");?>
</p> <br>
<!--RESUMEN EJECUTIVO-->
<table>
  <!-- Encabezado de la tabla -->
  <tr style='height:23.9pt'>
    <!-- Columna para el número -->
    <td width=70 nowrap style='width:52.75pt;border:solid windowtext 1.0pt; background:#191c24;padding:0cm 3.5pt 0cm 3.5pt;height:23.9pt'>
      <p class=MsoNormal style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><b>
        <span style='font-family:"Calibri",sans-serif;color:white'>No.</span></b></p>
    </td>
    <!-- Columna para los objetivos -->
    <td width=380 nowrap style='width:284.7pt;border:solid windowtext 1.0pt;border-left:none;background:#191c24;padding:0cm 3.5pt 0cm 3.5pt;height:23.9pt'>
      <p class=MsoNormal style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><b>
        <span style='font-family:"Calibri",sans-serif;color:white'><?php echo lang("Objectives");?></span></b></p>
    </td>
  </tr>

  <!-- Iteración sobre los objetivos -->
  <?php 
    $cantidad_objetivos_informe = "select * from scope where id_informe=".$id_url;  
    $consulta_objetivos_informe = mysqli_query($conexion, $cantidad_objetivos_informe) or die("Error de conexión");
    $contador_scope = 1;

    while($fila_scope = mysqli_fetch_array($consulta_objetivos_informe)){
        $id_scope=$fila_scope['id'];
        $url_scope=$fila_scope['url'];

        echo"         
        <tr style='height:23.9pt'>
          <!-- Número de objetivo -->
          <td width=70 nowrap style='width:52.75pt;border:solid windowtext 1.0pt;border-top:none;padding:0cm 3.5pt 0cm 3.5pt;height:23.9pt'>
            <p class=MsoNormal style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'>
              <span style='font-family:'Calibri',sans-serif;color:black'>$contador_scope</span>
            </p>
          </td>
          <!-- URL del objetivo -->
          <td width=380 nowrap style='width:284.7pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:23.9pt'>
            <p class=MsoNormal style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'>
              <span style='font-family:'Calibri',sans-serif;color:black'>$url_scope</span>
            </p>
          </td>
        </tr>
        ";
        $contador_scope ++;
    }
  ?>
</table>
</div>
<!-- Separador de página -->
<span style='font-size:11.0pt;font-family:"Verdana",sans-serif'><br clear=all style='page-break-before:always'></span>
<div class=WordSection9>
  <p class=MsoBodyText style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><span style='font-size:10.0pt'>&nbsp;</span></p>

  
  <!-- Encabezado del resumen ejecutivo -->
  <h1 style="color:<?php echo $color; ?>" >
    2.&nbsp;<?php echo lang("EXECUTIVE SUMMARY");?>
  </h1><br>

  <!--DESARROLLO DE GRAFICO EJECUTIVO--->
<?php
// Establecer la visualización de errores
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// Inicialización de variables
$cantidad_criticas = 0;
$cantidad_altas = 0;
$cantidad_medias = 0;
$cantidad_bajas = 0;
$total_vulnerabilidades = 0;
// Consulta para obtener la cantidad de objetivos del informe
$cantidad_objetivos_informe = "select * from scope where id_informe=".$id_url;  
$consulta_objetivos_informe = mysqli_query($conexion, $cantidad_objetivos_informe) or die("Error de conexión");
// Calcular la cantidad de vulnerabilidades por nivel
while($fila_scope = mysqli_fetch_array($consulta_objetivos_informe)){
    $id_scope=$fila_scope['id'];
    $nombre_scope=$fila_scope['url'];

    // Consulta para obtener las vulnerabilidades del alcance
    $cantidad_vulns_scope = "select * from scope_vulnerabilidades where id_scope=".$id_scope." order by nivel desc";  
    $consulta_vulns_scope = mysqli_query($conexion, $cantidad_vulns_scope) or die("Error de conexión");

    while($fila_vulns_scope = mysqli_fetch_array($consulta_vulns_scope)){
        $nivel_scope=$fila_vulns_scope['nivel'];
       
        // Contabilizar las vulnerabilidades por nivel
        if($nivel_scope == 0){
            $total_vulnerabilidades ++;
        }

        if($nivel_scope == 1){
            $cantidad_bajas ++;
        } else if ($nivel_scope == 2){
            $cantidad_medias ++;
        } else if ($nivel_scope == 3){
            $cantidad_altas ++;
        } else if ($nivel_scope == 4){
            $cantidad_criticas ++;
        }
    }
}
// Calcular el total de vulnerabilidades
$total_vulnerabilidades = $cantidad_altas + $cantidad_bajas + $cantidad_medias + $cantidad_criticas;
// Calcular porcentajes si hay vulnerabilidades
if($cantidad_altas > 0 || $cantidad_criticas > 0 || $cantidad_medias > 0 || $cantidad_bajas > 0){
    $porcentaje_criticas = $cantidad_criticas * 100 / $total_vulnerabilidades;
    $porcentaje_altas = $cantidad_altas * 100 / $total_vulnerabilidades;
    $porcentaje_medias = $cantidad_medias * 100 / $total_vulnerabilidades;
    $porcentaje_bajas = $cantidad_bajas * 100 / $total_vulnerabilidades;

    $porcentaje_criticas = round($porcentaje_criticas, 1);
    $porcentaje_altas = round($porcentaje_altas, 1);
    $porcentaje_medias = round($porcentaje_medias, 1);
    $porcentaje_bajas = round($porcentaje_bajas, 1);
} else {
    // Si no hay vulnerabilidades, los porcentajes son 0
    $porcentaje_criticas = 0;
    $porcentaje_altas = 0;
    $porcentaje_medias = 0;
    $porcentaje_bajas = 0;
}
?>

<!-- Inclusión de la librería Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- Estilos para la tabla -->
<style>
    td{border: 1px black solid}
    th{border: 1px black solid; background-color:black; color:white;}
</style>

<!-- Centro del gráfico -->
<center>
    <!-- Lienzo para el gráfico -->
    <canvas id="grafico" width="400" height="300"></canvas>
</center>
<br>
<!--GENERAR TABLA--->

  <table id="tabla" style='font-size:11.0pt;font-family:"Verdana",sans-serif;'>
    <tr>
      <th><center><?php echo lang("Vulnerability");?></center></th>
      <th><center><?php echo lang("Amount");?></center></th>
      <th><center><?php echo lang("Percentage");?></center></th>
    </tr>
    <tr>
      <td><center><?php echo lang("Very High");?></center></td>
      <td id="cantidad-criticas"><center><?php echo $cantidad_criticas;?></center></td>
      <td id="porcentaje-criticas"><center><?php echo $porcentaje_criticas;?>%</center></td>
    </tr>
    <tr>
      <td><center><?php echo lang("High");?></center></td>
      <td id="cantidad-altas"><center><?php echo $cantidad_altas;?></center></td>
      <td id="porcentaje-altas"><center><?php echo $porcentaje_altas;?>%</center></td>
    </tr>
    <tr>
      <td><center><?php echo lang("Medium");?></center></td>
      <td id="cantidad-medias"><center><?php echo $cantidad_medias;?></center></td>
      <td id="porcentaje-medias"><center><?php echo $porcentaje_medias;?>%</center></td>
    </tr>
    <tr>
      <td><center><?php echo lang("Low");?></center></td>
      <td id="cantidad-bajas"><center><?php echo $cantidad_bajas;?></center></td>
      <td id="porcentaje-bajas"><center><?php echo $porcentaje_bajas;?></center></td>
    </tr>
  </table>

<script>
  const datos = {
    labels: ['<?php echo lang("Very High");?>', '<?php echo lang("High");?>', '<?php echo lang("Medium");?>', '<?php echo lang("Low");?>'],
    datasets: [{
      data: [<?php echo $cantidad_criticas;?>, <?php echo $cantidad_altas;?>, <?php echo $cantidad_medias;?>, <?php echo $cantidad_bajas;?>], // Reemplaza estos valores con tus datos reales
      backgroundColor: ['#ff1e16', '#ff8018', '#faef22', '#00a933']
    }]
  };
  const ctx = document.getElementById('grafico').getContext('2d');
  const myChart = new Chart(ctx, {
    type: 'doughnut',
    data: datos,
    options: {
      responsive: false,
      maintainAspectRatio: false
    }
  });

  // Función para calcular y mostrar porcentajes en la tabla
  function mostrarPorcentajes() {
    const cantidadTotal = datos.datasets[0].data.reduce((acc, val) => acc + val, 0);
    datos.labels.forEach((label, index) => {
      const cantidad = datos.datasets[0].data[index];
      const porcentaje = ((cantidad / cantidadTotal) * 100).toFixed(2) + '%';
      document.getElementById(`cantidad-${label.toLowerCase()}`).innerText = cantidad;
      document.getElementById(`porcentaje-${label.toLowerCase()}`).innerText = porcentaje;
    });
  }

  // Mostrar porcentajes al cargar la página
  mostrarPorcentajes();
</script>

<span style='font-size:12.0pt;font-family:"Times New Roman",serif'><br clear=all style='page-break-before:always'></span>

<div class=WordSection10>
  <p class=MsoBodyText style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><span style='font-size:10.0pt'>&nbsp;</span></p>
<br><br><br>
<!-- RESULTADOS -->
<h1 style="color:<?php echo $color; ?>" >
  3.&nbsp;<?php echo lang("TEST RESULTS");?>
</h2><br>

<!-- Detalles de los objetivos -->
<h2 style="color:<?php echo $color; ?>" >
  3.1&nbsp;<?php echo lang("OBJETIVES DETAILS");?>
</h2><br>

<?php 
  // Consulta para obtener los objetivos del informe
  $cantidad_objetivos_informe = "select * from scope where id_informe=".$id_url;  
  $consulta_objetivos_informe = mysqli_query($conexion, $cantidad_objetivos_informe) or die("Error de conexión");
  
  // Iterar sobre cada objetivo del informe
  while($fila_scope = mysqli_fetch_array($consulta_objetivos_informe)){
      $id_scope=$fila_scope['id'];
      $nombre_scope=$fila_scope['url'];

      // Mostrar el nombre del objetivo
      echo "<h3><u>$nombre_scope</u></h3>";

      // Consulta para obtener las vulnerabilidades relacionadas con el objetivo actual
      $cantidad_vulns_scope = "select * from scope_vulnerabilidades where id_scope=".$id_scope." order by nivel desc";  
      $consulta_vulns_scope = mysqli_query($conexion, $cantidad_vulns_scope) or die("Error de conexión");
  
      // Iterar sobre cada vulnerabilidad del objetivo actual
      while($fila_vulns_scope = mysqli_fetch_array($consulta_vulns_scope)){
        // Obtener los detalles de la vulnerabilidad
        $id_scope=$fila_vulns_scope['id'];
        $nivel_scope0=$fila_vulns_scope['nivel'];
        $nivel_scope=$fila_vulns_scope['nivel'];
        $nombre_scope=$fila_vulns_scope['nombre'];
        $descripcion_scope=$fila_vulns_scope['descripcion'];
        $recomendacion_scope=$fila_vulns_scope['solucion'];

        // Convertir el nivel de criticidad a etiquetas legibles
        if($nivel_scope == 1){
          $nivel_scope = '<label>'.lang('Low').'</label>';
        }else if ($nivel_scope == 2){
          $nivel_scope = '<label>'.lang('Medium').'</label>';
        }else if ($nivel_scope == 3){
          $nivel_scope = '<label>'.lang('High').'</label>';
        }else if ($nivel_scope == 4){
          $nivel_scope = '<label>'.lang('Very High').'</label>';
        }

        // Mostrar los detalles de la vulnerabilidad
        echo 
        "<br>
        <p style='text-align:justify !important;'>
          <b>".lang("Vulnerabilidad:").":</b> ".$nombre_scope."<br>
        </p>";

        echo
        "<p style='text-align:justify !important; '>
          <b>".lang("Criticality").":</b> ".$nivel_scope."<br>
        </p><br>";

        echo 
        "<p style='text-align:justify !important; '>
          <b>".lang("Description:")."</b><br>".$descripcion_scope."
        </p>";
        
        // Consulta para obtener las imágenes relacionadas con la vulnerabilidad
        $cantidad_vulns_imagen = "select * from pocs where id_scope_vulnerabilidad=".$id_scope;  
        $consulta_vulns_imagen = mysqli_query($conexion, $cantidad_vulns_imagen) or die("Error de conexión");

        // Iterar sobre cada imagen relacionada con la vulnerabilidad
        while($fila_vulns_imagen = mysqli_fetch_array($consulta_vulns_imagen)){
          $scope_imagen=$fila_vulns_imagen['ruta'];
          $descripcion_imagen=$fila_vulns_imagen['descripcion'];
        
          // Mostrar la imagen y su descripción si existe
          if($scope_imagen > ''){
              echo "<center><img src='$scope_imagen' width=436 height=300 ><br></center>";
              echo "<br><p>$descripcion_imagen</p><br>";
          }
        }

        // Mostrar la recomendación para resolver la vulnerabilidad
        echo
        "<br><p style='text-align:justify !important;'>
          <b>".lang("Recommendation").":</b><br>".$recomendacion_scope."<br><br>
        </p>";

        // Separador entre cada vulnerabilidad
        echo "<hr>";
      }
  }
?>

<span style='font-size:12.0pt;font-family:"Times New Roman",serif'><br clear=all style='page-break-before:always'></span>

<!-- TABLA DE CRITICIDAD -->
<h1 style="color:<?php echo $color; ?>" >
  4.&nbsp;<?php echo lang("CRITICALITY TABLE");?>
</h1><br>
<?php 
$cantidad_objetivos_informe = "select * from scope where id_informe=".$id_url;  
$consulta_objetivos_informe = mysqli_query($conexion, $cantidad_objetivos_informe) or die("Error de conexión");

while($fila_scope = mysqli_fetch_array($consulta_objetivos_informe)){
    $id_scope=$fila_scope['id'];
    $nombre_scope=$fila_scope['url'];

      // Mostrar el nombre del objetivo
      echo "<h3><u>$nombre_scope</u></h3><br>";

    // Definir las variables antes de utilizarlas
    $desc_nombre  = lang("Name");
    $criticidad_nivel  = lang("Criticality");

    echo"
    <table>
      <tr style='height:14.8pt'>
        <!--CABECERAS-->
          <td width=175 nowrap valign=bottom style='width:300.1pt;border:solid windowtext 1.0pt; background:#191c24;padding:0cm 3.5pt 0cm 3.5pt;height:14.8pt;color:white;'>
            <p class=MsoNormal style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:3.5pt;margin-bottom:.0001pt;'>
              <b>
                <span style='font-family:'Calibri',sans-serif;color:white'>$desc_nombre</span>
              </b>
            </p>
          </td>
          <td width=165 nowrap valign=bottom style='width:7.55pt;border:solid windowtext 1.0pt;border-left:none;background:#191c24;padding:0cm 3.5pt 0cm 3.5pt;height:14.8pt;color:white;'>
            <p class=MsoNormal style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:center'>
              <b>
                <span style='font-family:'Calibri',sans-serif;color:white'>$criticidad_nivel</span>
              </b>
            </p>
          </td>
        </tr>
    ";

    $cantidad_vulns_scope = "select * from scope_vulnerabilidades where id_scope=".$id_scope." order by nivel desc";  
    $consulta_vulns_scope = mysqli_query($conexion, $cantidad_vulns_scope) or die("Error de conexión");

    while($fila_vulns_scope = mysqli_fetch_array($consulta_vulns_scope)){

      $id_scope=$fila_vulns_scope['id'];
      $nivel_scope0=$fila_vulns_scope['nivel'];
      $nivel_scope=$fila_vulns_scope['nivel'];
      $nombre_scope=$fila_vulns_scope['nombre'];
      $descripcion_scope=$fila_vulns_scope['descripcion'];
      $recomendacion_scope=$fila_vulns_scope['solucion'];

      if($nivel_scope == 1){
        $nivel_scope = '<label>'.lang('Low').'</label>';
      }else if ($nivel_scope == 2){
        $nivel_scope = '<label>'.lang('Medium').'</label>';
      }else if ($nivel_scope == 3){
        $nivel_scope = '<label>'.lang('High').'</label>';
      }else if ($nivel_scope == 4){
        $nivel_scope = '<label>'.lang('Very High').'</label>';
      }

      echo "
      <tr>
        <td width=175 nowrap style='width:300.1pt;border:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:14.8pt'>
          <p class=MsoNormal style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-bottom:.0001pt;margin-left:3.5pt;'>
            <span style='font-size:10.0pt;font-family:'Calibri',sans-serif;color:black'>$nombre_scope</span>
          </p>
        </td>
        
        <td width=165 nowrap style='width:70.55pt;border:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:14.8pt'>
          <p class=MsoNormal style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-bottom:.0001pt;margin-left:3.5pt;'>
            <span style='font-size:10.0pt;font-family:'Calibri',sans-serif;color:black'><center>$nivel_scope</center></span>
          </p>
        </td>
      </tr>
      ";
    }
    echo "</table>";
}
?>

<span style='font-size:11.0pt;font-family:"Verdana",sans-serif'><br clear=all style='page-break-before:always'></span>

<!-- CONCLUSIONES -->
<h1 style="color:<?php echo $color; ?>" >
  5.&nbsp;<?php echo lang("CONCLUSIONS");?>
</h1><br>
<p>
  <?php echo $conclusiones; ?>
</p>
