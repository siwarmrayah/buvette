<DOCTYPE html>
<?php 
    require_once("connect.php");
  ?>    
<html>
    <head>
   
        <title> siwar mrayah </title>
        <link href="css/bootstrap.css">
        
        <style>
            .a{
                float: left;
            }
            #si{
                width: 70px;
                height: 70px;
            }
            .b{
                color: rebeccapurple;
                margin-left: 100px;
            }
            h5{
                color: red;
            }
            ul li{
                float:left;
                margin: 20px;
                
            }
            .list{
                color: white;
                background-color: orange;
                height: 50px;
                text-align: center;
            }
            ul li a{
                text-decoration: none;
                color: white;
            }
            ul{
                margin-left: 200px;
                list-style: none;
                font-size: 20px;
            }
            .list ul li:{
                opacity: 0.6;
                color: red;
                background-color: aqua;
                width:10px;
                
            
            }
            .pl{
                width: 100%;
                height: 70px;
                color: blueviolet;
                background-color: orchid;
                text-align: center;
                font-size:20px
            }
            .siwar{
                 background-color:bisque;
                height: 700px;
            }
        </style>
    </head>
    <body>
        <br>
        <div class="container">
            <div class="row">
                <div class="a"><img src="material_projet/img/logo.jpg" id="si"></div>
                <div class="b"><h1>EUROBuvettes </h1>
                <h5>Le Site de Gestien de Buvette de l'EURO 2016 !!</h5></div>
            
            </div>
        </div>
        
        <div class="container">
       
"
            <div class="row">
                <div class="list">
                  <ul>
                      <li><a href="#">nouveautée</a></li>
                      <li><a href="#">Statistiqye</a></li>
                      <li><a href="#">Recherchemembrres</a></li>
                      <li><a href="#">Affectations</a></li>
                      <li><a href="#">administrateur</a></li>
                    </ul>
                </div>
<section  name="container" class="container">
                <?php
        $req="SELECT m.idM 'mid', m.date, m.scoreA, m.scoreB, a.pays as paysA, a.drapeau as drapeauA, b.pays as paysB, b.drapeau as drapeauB, COUNT(*) as nb_bo, m.idM
         FROM `match`m, `Equipe` a, `Equipe` b ,`Est_ouverte` o
         WHERE M.eqA = a.idE AND M.eqB = B.idE
         AND m.idM= o.idM
         GROUPE BY m.idM
         ";
         $result= mysqli_query($idConnexion,$req);
         ?>
            <table border="1" width="80%" align="center">
            <tbody>
                <th>date de match </th>
                <th>equipe A</th>
                <th> equipeB</th>
                <th> score</th>
                <th>buvette ouvertes</th>
                <th>nomber de volentaire</th>
            
            </tbody>
            <?php
            //this is a comment
             while ($row = mysqli_fetch_array($result)){
                $req_nbv="SELECT COUNT(*)
                 FROM `match` m, `Est_present` ep
                 WHERE m.idM =ep.idM
                 AND m.idM=".$row['mid'];
        $res=mysqli_query($idConnexion,$requet_nbv);
        $nbv=mysqli_fetch_array($res);
                
            
        
            echo"
            <tr>
            <td>".
             $row['date'].
             "</td>
             <td><img src=\"".$row['drapeauA']."\" alt=\"".$row['paysA']."\" height=\"50px\"/></td>
             <td><img src=\"".$row['drapeauB']."\" alt=\"".$row['paysB']."\" height=\"50px\"/></td>
             <td>".$row['scoreA']."--".$row['scoreB']."</td>
             <td>".$row['nb_bo']." </td>
             <td>".$nbv[0]."</td>
             </tr>
             ";
        }
    
        ?>


        </table>
                </div>
                </div>
                <div class="pl"><br> pied de page</div>
                
            
            </div>
        </div>
        
        
        <script src="bootstrap.js"></script>
        <script src="jquery-3.5.1.min.js"></script>
        
        
        
      
    </body>
    </html>