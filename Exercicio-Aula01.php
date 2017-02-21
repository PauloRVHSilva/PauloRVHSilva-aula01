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

   <H1 class='Titulo'> PHP - Atividade 01</H1>
   
   <p> Considerando que A seja igual a 10 e B seja igual a 20, eis o seguintes cálculos</p>
   
 
 <?php
  $A = 10;
  $B = 20;
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