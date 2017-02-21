<!DOCTYPE html>
<html>

  <head>
    <meta charset= 'utf-8'>
 
    <title>
      Exerecio - Aula 1 - PHP"
    </title>

    <style>
      h1{
        
        text-align: center ;
        color: red;
        
      }
      .TituloTabela{
        
        font-weight:bold;
      }
      
      td{
        width: 150px;
        text-align: center;
      }
     </style>
  </head>

  <body>
  
  <?php
    $A = $_POST["NumA"];
    $B = $_POST["NumB"];
  ?>

   <H1 class='Titulo'> PHP - Atividade 01 / DESAFIO</H1>
   <?php
      echo "<p> Considerando que A seja igual a $A e B seja igual a $B, eis o seguintes cálculos</p>"
   ?>

 
   <table border='1'>
      <tr>
        <td class='TituloTabela'>Equação</td>
        <td class='TituloTabela'>Resultado</td>
      </tr>
      
      <tr>
        <td>A + B</td>
        <td><?php  
              echo $A + $B;
            ?>
        </td>
      </tr>
      
      <tr>
        <td>A - B</td>
        <td><?php  
              echo $A - $B;
            ?>
        </td>
      </tr>
      
      <tr>
        <td>A X B</td>
        <td><?php  
              echo $A * $B;
            ?>
        </td>
      </tr>
      
      <tr>
        <td>A / B</td>
        <td><?php  
              echo $A / $B;
            ?>
        </td>
      </tr>
      
      <tr>
        <td>B <sup>A</sup></td>
        <td>
          <?php 
            echo number_format(pow($B,$A),3);
          ?></td>
      </tr>
            
      
      
   </table>
   
    
  </body>

</html>