<DOCTYPE html>
<?php 
    require_once("connect.php");
  ?>
<html>
    <head>
   
        <title> N'importe quoi </title>
        <link href="css/bootstrap.css">
        
        <style>
            .nb{
                float: left;
            }
            #hm{
                width: 70px;
                height: 70px;
            }
            .jl{
                color: rebeccapurple;
                margin-left: 100px;
            }
            h5{
                color: aqua;
            }
            ul li{
                float:left;
                margin: 20px;
                
            }
            .list{
                color: white;
                background-color: navy;
                height: 50px;
                text-align: center;
            }
            ul li a{
                text-decoration: none;
                color: white;
            }
            ul li a:hover{
                color: orangered;
            }
            ul{
                margin-left: 200px;
                list-style: none;
                font-size: 20px;
            }
            .list ul li:hover{
                opacity: 0.6; 
                background-color: aqua;
                width:200px;
                color: orangered;
                
            
            }
            .pied{
                width: 100%;
                height: 70px;
                color: orangered;
                background-color: navy;
            }
            .siwar{
                 background-color:grey;
                height: 700px;
            }
            table{
                border: 1px solid black;
                border-style: double;
                width: 80%;
                text-align: center;
                margin-left: 10%;
            }
            th,td{
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        <br>
        <div class="container">
            <div class="row">
                <div class="nb"><img src="material_projet/img/logo.jpg" id="hm"></div>
                <div class="jl"><h1>EUROBuvettes </h1>
                <h5>Le Site de Gestien de Buvette de l'EURO 2016 !!</h5></div>
            
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="list">
                  <ul>
                      <li><a href="#">Accueil.php</a></li>
                      <li><a href="#">Statistiqye.php</a></li>
                      <li><a href="#">Recherchemembrres.php</a></li>
                      <li><a href="#">Affectations.php</a></li>
                      <li><a href="#">Prive.php</a></li>
                    </ul>
                </div> 
                <aside>
                    <?php 
                    if(isset($_POST['submit'])){
                        $stats=$_POST['stats'];
                        switch($stats){
                            case 'volontaires';
                                TopVolontaires();
                                break;
                            default:
                                break;
                        }
                    }
                    ?>
        <form name="f" action="resultstatistiques.php" method="post">
        <h3>Selectioner:</h3>
        <select size="1" name="stats">
        <option value="volontaire">Les 5 volantaires le plus présents</option>
        <option value="buvette">les 5 buvettes ayant mobilisé le plus de volontaires</option>
        <option value="match">Les buvettes ouvertes pour un match donneé</option>
        </select>
        <input type="text" name="textee" placeholder="selectionner le match">
        <input type="submit" value="Envoyer" name="submit">
        </form>
</aside>
                    
                    <div class="pied"><br> pied de page</div>
            
                
            
                </div>
            </div>
        

        
        
      
         <script src="bootstrap.js"></script>
        <script src="jquery-3.5.1.min.js"></script>
    </body>
 </html>   
