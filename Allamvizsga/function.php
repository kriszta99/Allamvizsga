<?php
function getCategorie(){
    $link =mysqli_connect('localhost','krisztina', 'admin', 'krisztina');

    /* check connection */
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }

    $query = "SELECT categorieName,categorieId FROM categories ORDER by categorieId  LIMIT 5";

    if ($stmt = mysqli_prepare($link, $query)) {

        /* execute statement */
        mysqli_stmt_execute($stmt);

        /* bind result variables */
        mysqli_stmt_bind_result($stmt, $categorieName,$categorieId);

        /* fetch values */
        
        while (mysqli_stmt_fetch($stmt)) {
              echo '<li> <a href="programing_techinc.php?pageid='.$categorieId . '&pagename='. str_replace(' ','-',$categorieName).'">' . $categorieName.'</a></li>';
        }

        /* close statement */
        mysqli_stmt_close($stmt);
    }

    /* close connection */
    mysqli_close($link);
}
function getLogo(){
    
        $link =mysqli_connect('localhost','krisztina', 'admin', 'krisztina') or die($link->connect_errno);
        $result= $link->query('SELECT pictureNine FROM pictures where pictureName="logo"');
         
         while ($data = $result->fetch_assoc()) {
            echo "<img src= '{$data['pictureNine']}' width='250px' height='240px'>";
             
         }
        
}

function getHomePageRegistration(){
    $link =mysqli_connect('localhost','krisztina', 'admin', 'krisztina') or die($link->connect_errno);
        $result= $link->query('SELECT homepage.homepageDescript,pictures.pictureNine
         FROM pictures JOIN homepage ON pictures.pictureId = homepage.homepageId WHERE homepage.homepageName="fiok"');
         
         while ($data = $result->fetch_assoc()) {
            echo "<div class='homepage_disigne'>"; 
            echo "<img class='center' src='{$data['pictureNine']}' width='300px' height='300px'>";

             $text = str_replace('?','?<br>',$data['homepageDescript']);
             $text2= str_replace('Regisztrálj!','<a class="homeLink" href="register.php"><br>Regisztrálj</a>',$text);
            echo "<h2 class='text-homepage'>{$text2}</h2>";
             echo "</div>";   
             
         }
}
function getProgramingLaunguageIcon(){

        $link =mysqli_connect('localhost','krisztina', 'admin', 'krisztina') or die($link->connect_errno);
        $result= $link->query('SELECT pictureNine FROM pictures where homepageId=2');
        $result2=$link->query('SELECT homepageDescript FROM `homepage` WHERE homepageName="nyelv_icon"');
        while ($data = $result2->fetch_assoc()) {
            $text = $data['homepageDescript'];
            echo "<h2 class='text-homepage'>{$text}</h2>";
        }

        while ($data = $result->fetch_assoc()) {
            echo "<div class='homepage_disigne2'>"; 
            echo "<img class='center' src='{$data['pictureNine']}' width='150px' height='150px'>";

            echo "</div>";   


        }
         
}


?>

