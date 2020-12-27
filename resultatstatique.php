<!doctype html>
<?php require_once("connect.php"); ?>

<html>
<head>
<title>resultatstatiques</title>
</head>
<body>






    <?php 
    //appel
    //dite a fonction pour prend le varaible de programme,
    
    function Topvolontaire(){
      GLOBAL $idConnexion;
    $req="select b.nomb as nom,count(*) as presence
    from Est_present Ep,buvette b 
    where Ep.idb=b.idb 
    group by Ep.idb 
    order by presence
    DESC limit 5";
    
    
    $res=mysqli_query($idConnexion,$req);
    
    if(mysqli_num_rows($res)!=0)
    {
        ?>
    
        <table border="1" width="80%" align="center">
        <tbody>
        <th>volotiare</th>
        <th>présence</th>
        </tbody>
        <?php 
        while ($row = mysqli_fetch_array($res)){
         echo "
          <tr>
          <td>".$row['nom']."</td>
          <td>".$row['presence']."</td>
          </tr>
         ";
        }
        ?>
        </table>
        
        <?php
    }
  }
    Topvolontaire()
    ?>

<?php
    
    function Topbuvette(){
      GLOBAL $idConnexion;
      $req="SELECT b.nomb as buv ,b.emplacement as emp ,count(*) as nbv
       from buvette b,est_present ep 
      where ep.idb=b.idb 
      group by b.idb 
      order by nbv DESC LIMIT 5";

$res=mysqli_query($idConnexion,$req);
    
if(mysqli_num_rows($res)!=0)
{
    ?>

    <table border="1" width="80%" align="center">
    <tbody>
    <th>volontaires</th>
    <th>présence</th>
    </tbody>
    <?php 
    while ($row = mysqli_fetch_assoc($res)){
     echo "
      <tr>
      <td>".$row['buv']."</td>
      <td>".$row['nbv']."</td>
      </tr>
     ";
    }
    ?>
    

  
   <?php 
  }
}

  

Topbuvette();
?>
</body>
</html>