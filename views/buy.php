<?php
if (isset($_POST['AchatBois'])){
    AchatBois();
}

function AchatBois(){

global $mysqli;
// lancement de la requête
if (getInfo($_SESSION['user']['pseudo'])['gold']>=20) :
    $sql ="UPDATE users SET bois=bois+'100' WHERE pseudo='test'";
    mysqli_query($mysqli ,$sql);
    $sql ="UPDATE users SET gold=gold-'20' WHERE pseudo='test'";
    mysqli_query($mysqli ,$sql);
endif;
}



if (isset($_POST['AchatNourriture'])){
    AchatNourriture();
}

function AchatNourriture(){

global $mysqli;
// lancement de la requête
if (getInfo($_SESSION['user']['pseudo'])['gold']>=20) :
    $sql ="UPDATE users SET nourriture=nourriture+'100' WHERE pseudo='test'";
    mysqli_query($mysqli ,$sql);
    $sql ="UPDATE users SET gold=gold-'20' WHERE pseudo='test'";
    mysqli_query($mysqli ,$sql);
endif;
}



if (isset($_POST['AchatPierre'])){
    AchatPierre();
}

function AchatPierre(){

global $mysqli;
// lancement de la requête
if (getInfo($_SESSION['user']['pseudo'])['gold']>=20) :
    $sql ="UPDATE users SET pierre=pierre+'100' WHERE pseudo='test'";
    mysqli_query($mysqli ,$sql);
    $sql ="UPDATE users SET gold=gold-'20' WHERE pseudo='test'";
    mysqli_query($mysqli ,$sql);
endif;
}


if (isset($_POST['AchatFer'])){
    AchatFer();
}

function AchatFer(){

global $mysqli;
// lancement de la requête
if (getInfo($_SESSION['user']['pseudo'])['gold']>=70) :
    $sql ="UPDATE users SET fer=fer+'100' WHERE pseudo='test'";
    mysqli_query($mysqli ,$sql);
    $sql ="UPDATE users SET gold=gold-'70' WHERE pseudo='test'";
    mysqli_query($mysqli ,$sql);
endif;
}

?>






<ul class="ressources">
                    <li>
                    <img src="timer.png" alt="Image" height="80%" width="40%">
                    <?php
    $waiting_day = 1637210196;
    $time_left = $waiting_day + time();

    $days = floor($time_left / (60*60*24));
    $time_left %= (60 * 60 * 24);

    $hours = floor($time_left / (60 * 60));
    $time_left %= (5 * 60);

    $min = floor($time_left / 60);
    $time_left %= 60;

    $sec = $time_left;

    echo "Timer jusqu'à 5min: $min min et $sec sec";
if ($min == 0 and $sec == 0 or $min == 0 and $sec == 1 or $min == 0 and $sec == 2) :
    global $mysqli;
    // lancement de la requête
    $sql ="UPDATE users SET bois=bois+'3'+'2'*scierie WHERE pseudo='test'";
    $result = mysqli_query($mysqli ,$sql);
endif;
if ($min == 0 and $sec == 0 or $min == 0 and $sec == 1 or $min == 0 and $sec == 2) :
    global $mysqli;
    // lancement de la requête
    $sql ="UPDATE users SET nourriture=nourriture+'3'+'2'*ferme WHERE pseudo='test'";
    $result = mysqli_query($mysqli ,$sql);
endif;
if ($min == 0 and $sec == 0 or $min == 0 and $sec == 1 or $min == 0 and $sec == 2) :
    global $mysqli;
    // lancement de la requête
    $sql ="UPDATE users SET pierre=pierre+'3'+'2'*carriere WHERE pseudo='test'";
    $result = mysqli_query($mysqli ,$sql);
endif;
if ($min == 0 and $sec == 0 or $min == 0 and $sec == 1 or $min == 0 and $sec == 2) :
    global $mysqli;
    // lancement de la requête
    $sql ="UPDATE users SET gold=gold+'1'*marche WHERE pseudo='test'";
    $result = mysqli_query($mysqli ,$sql);
endif;
if ($min == 0 and $sec == 0 or $min == 0 and $sec == 1 or $min == 0 and $sec == 2) :
    global $mysqli;
    // lancement de la requête
    $sql ="UPDATE users SET frondeur=frondeur+'5'*caserne WHERE pseudo='test'";
    $result = mysqli_query($mysqli ,$sql);
    $sql ="UPDATE users SET lancier=lancier+'3'*caserne WHERE pseudo='test'";
    $result = mysqli_query($mysqli ,$sql);
    $sql ="UPDATE users SET chevalier=chevalier+'1'*caserne WHERE pseudo='test'";
    $result = mysqli_query($mysqli ,$sql);
endif;
?>
                    </li>
                    <li>
                    <img src="https://vignette.wikia.nocookie.net/rust/images/c/c7/Bois_icon.png/revision/latest/scale-to-width-down/480?cb=20150614211642&path-prefix=fr" alt="Image" height="40%" width="40%">
                    <td><?= getInfo($_SESSION['user']['pseudo'])['bois']?></td>
                    </li>
                    <li>
                    <img src="https://images.vexels.com/media/users/3/145684/isolated/preview/01c67d3d73e2e6420cff24303fc5becf-roca-de-grava-by-vexels.png" alt="Image" height="40%" width="40%">
                    <td><?= getInfo($_SESSION['user']['pseudo'])['pierre']?></td>
                    </li>
                    <li>
                    <img src="https://cdn3.iconfinder.com/data/icons/minecraft-icons/512/Iron_Ingot.png" alt="Image" height="40%" width="40%">
                    <td><?= getInfo($_SESSION['user']['pseudo'])['fer']?></td>
                    </li>
                    <li>
                    <img src="https://th.bing.com/th/id/R.f7472dc4a4c217bfda7e43fc7f1f2bff?rik=DTSvEH7khsQgKg&riu=http%3a%2f%2ficons.iconarchive.com%2ficons%2fgoogle%2fnoto-emoji-food-drink%2f512%2f32380-cut-of-meat-icon.png&ehk=xBLtWtmfoLkzyWjWgi%2fk1kp9uKRGwCZvl8PSNmoICc8%3d&risl=&pid=ImgRaw&r=0" alt="Image" height="40%" width="40%">
                    <td><?= getInfo($_SESSION['user']['pseudo'])['nourriture']?></td>
                    </li>
                    <li>
                    <img src="or.png" alt="Image" height="40%" width="40%">
                    <td><?= getInfo($_SESSION['user']['pseudo'])['gold']?></td>
                    </li>
                    
            </ul>


<nav class="menuIG">
<div class="SubMenu">
            <ul>
                <?php if(!isConnected()) : ?>
                    <li>
                    <a href=<?php uri('HomeIG'); ?>>Accueil</a>
                    </li>
                    <li>
                    <a href=<?php uri('buildings'); ?>>Bâtiments</a>
                    </li>
                    <li>
                    <a href=<?php uri('army'); ?>>Armée</a>
                    </li>
                    <li>
                    <a href=<?php uri('market'); ?>>Marché</a>
                    </li>
                    <li>
                    <a href=<?php uri('fight'); ?>>Combat</a>
                    </li>

                <?php endif; ?>

            </ul>

    </div>    
</nav>

<div class="container-form">
    <li>
        <ul class="market">
            <li>
                <ul class="Submit">  
                    <img src="or.png" alt="Image" height="15%" width="15%">
                    <img src="fleche.png" alt="Image" height="25%" width="25%">
                    <img src="https://vignette.wikia.nocookie.net/rust/images/c/c7/Bois_icon.png/revision/latest/scale-to-width-down/480?cb=20150614211642&path-prefix=fr" alt="Image" height="15%" width="15%">
                </ul>  
                <p>acheter 100 de bois</p>
                <p>pour 20 d'or</p>
                <ul class="Submit">
                    <form action="" method="post" class="form">
                    <button value="valider" class="button" type="submit" name="AchatBois">acheter</button>  
                </ul>    
            </li>
        </ul>
    </li>
    <li>
        <ul class="market">
            <li>
                <ul class="Submit">  
                    <img src="or.png" alt="Image" height="15%" width="15%">
                    <img src="fleche.png" alt="Image" height="25%" width="25%">
                    <img src="https://images.vexels.com/media/users/3/145684/isolated/preview/01c67d3d73e2e6420cff24303fc5becf-roca-de-grava-by-vexels.png" alt="Image" height="15%" width="15%">
                </ul>  
                <p>acheter 100 de pierre</p>
                <p>pour 20 d'or</p>
                <ul class="Submit">
                    <form action="" method="post" class="form">
                    <button value="valider" class="button" type="submit" name="AchatPierre">acheter</button>  
                </ul>    
            </li>
        </ul>
    </li>
</div>



<div class="container-form">
    <li>
        <ul class="market">
            <li>
                <ul class="Submit"> 
                    <img src="or.png" alt="Image" height="15%" width="15%">
                    <img src="fleche.png" alt="Image" height="25%" width="25%">
                    <img src="https://th.bing.com/th/id/R.f7472dc4a4c217bfda7e43fc7f1f2bff?rik=DTSvEH7khsQgKg&riu=http%3a%2f%2ficons.iconarchive.com%2ficons%2fgoogle%2fnoto-emoji-food-drink%2f512%2f32380-cut-of-meat-icon.png&ehk=xBLtWtmfoLkzyWjWgi%2fk1kp9uKRGwCZvl8PSNmoICc8%3d&risl=&pid=ImgRaw&r=0" alt="Image" height="15%" width="15%">
                </ul>  
                <p>acheter 100 de nouriture</p>
                <p>pour 20 d'or</p>
                <ul class="Submit">
                    <form action="" method="post" class="form">
                    <button value="valider" class="button" type="submit" name="AchatNourriture">acheter</button>  
                </ul>    
            </li>
        </ul>
    </li>
    <li>
        <ul class="market">
            <li>
                <ul class="Submit">  
                    <img src="or.png" alt="Image" height="15%" width="15%">
                    <img src="fleche.png" alt="Image" height="25%" width="25%">
                    <img src="https://cdn3.iconfinder.com/data/icons/minecraft-icons/512/Iron_Ingot.png" alt="Image" height="15%" width="15%">
                </ul>  
                <p>acheter 100 de fer</p>
                <p>pour 70 d'or</p>
                <ul class="Submit">
                    <form action="" method="post" class="form">
                    <button value="valider" class="button" type="submit" name="AchatFer">acheter</button>  
                </ul>    
            </li>
        </ul>
    </li>
</div>