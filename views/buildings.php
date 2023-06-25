<?php

if (isset($_POST['ScierieUpgrade'])){
    ScierieUpgrade();
}

function ScierieUpgrade(){

global $mysqli;
// lancement de la requête
if (getInfo($_SESSION['user']['pseudo'])['bois']>=100 and getInfo($_SESSION['user']['pseudo'])['gold']>=50) :
    $sql ="UPDATE users SET scierie=scierie+'1' WHERE pseudo='test'";
    mysqli_query($mysqli ,$sql);
    $sql ="UPDATE users SET bois=bois-'100' WHERE pseudo='test'";
    mysqli_query($mysqli ,$sql);
    $sql ="UPDATE users SET gold=gold-'50' WHERE pseudo='test'";
    mysqli_query($mysqli ,$sql);
endif;
}

if (isset($_POST['CarriereUpgrade'])){
    CarriereUpgrade();
}

function CarriereUpgrade(){

global $mysqli;
// lancement de la requête
if (getInfo($_SESSION['user']['pseudo'])['pierre']>=100 and getInfo($_SESSION['user']['pseudo'])['gold']>=50) :
    $sql ="UPDATE users SET carriere=carriere+'1' WHERE pseudo='test'";
    mysqli_query($mysqli ,$sql);
    $sql ="UPDATE users SET pierre=pierre-'100' WHERE pseudo='test'";
    mysqli_query($mysqli ,$sql);
    $sql ="UPDATE users SET gold=gold-'50' WHERE pseudo='test'";
    mysqli_query($mysqli ,$sql);
endif;


}

if (isset($_POST['FermeUpgrade'])){
    FermeUpgrade();
}

function FermeUpgrade(){

global $mysqli;
// lancement de la requête
if (getInfo($_SESSION['user']['pseudo'])['nourriture']>=100 and getInfo($_SESSION['user']['pseudo'])['gold']>=50) :
    $sql ="UPDATE users SET ferme=ferme+'1' WHERE pseudo='test'";
    mysqli_query($mysqli ,$sql);
    $sql ="UPDATE users SET nourriture=nourriture-'100' WHERE pseudo='test'";
    mysqli_query($mysqli ,$sql);
    $sql ="UPDATE users SET gold=gold-'50' WHERE pseudo='test'";
    mysqli_query($mysqli ,$sql);
endif;

}

if (isset($_POST['MarcheUpgrade'])){
    MarcheUpgrade();
}

function MarcheUpgrade(){

global $mysqli;
// lancement de la requête
if (getInfo($_SESSION['user']['pseudo'])['gold']>=500) :
    $sql ="UPDATE users SET marche=marche+'1' WHERE pseudo='test'";
    mysqli_query($mysqli ,$sql);
    $sql ="UPDATE users SET gold=gold-'500' WHERE pseudo='test'";
    mysqli_query($mysqli ,$sql);
endif;


}


if (isset($_POST['CaserneUpgrade'])){
    caserneUpgrade();
}

function caserneUpgrade(){

global $mysqli;
// lancement de la requête
if (getInfo($_SESSION['user']['pseudo'])['gold']>=2000) :
    $sql ="UPDATE users SET caserne=caserne+'1' WHERE pseudo='test'";
    mysqli_query($mysqli ,$sql);
    $sql ="UPDATE users SET gold=gold-'2000' WHERE pseudo='test'";
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
        <ul class="buildings">
            <li>  
                <img src="scierie.png" alt="Image" height="43%" width="40%">
                <p>scierie niveau <td><?= getInfo($_SESSION['user']['pseudo'])['scierie']?></td></p>
                <p>Cout: 100 bois, 50 or</p>  
                <ul class="Submit">
                    <form action="" method="post" class="form">
                    <button value="valider" class="button" type="submit" name="ScierieUpgrade">Améliorer</button> 
                </ul>  
            </li>
        </ul>
    </li>
    <li>
        <ul class="buildings">
            <li>  
                <img src="https://vignette.wikia.nocookie.net/anno1404guide/images/5/51/Crop_farm.png/revision/latest/scale-to-width-down/250?cb=20091119161140" alt="Image" height="40%" width="40%">
                <p>ferme niveau <td><?= getInfo($_SESSION['user']['pseudo'])['ferme']?></td></p>
                <p>Cout: 100 nourriture, 50 or</p>
                <ul class="Submit">
                    <form action="" method="post" class="form">
                    <button value="valider" class="button" type="submit" name="FermeUpgrade">Améliorer</button> 
                </ul>  
            </li>
        </ul>
    </li> 
    <li>
        <ul class="buildings">
            <li>  
                <img src="carriere.png" alt="Image" height="46.5%" width="40%">
                <p>carrière niveau <td><?= getInfo($_SESSION['user']['pseudo'])['carriere']?></td></p>
                <p>Cout: 100 pierre, 50 or</p>
                <ul class="Submit">
                    <form action="" method="post" class="form">
                    <button value="valider" class="button" type="submit" name="CarriereUpgrade">Améliorer</button> 
                </ul>    
            </li>
        </ul>
    </li>  
</div>



<div class="container-form">
    <li>
        <ul class="buildings">
            <li>  
                <img src="marche.png" alt="Image" height="40%" width="40%">
                <p>marché niveau <td><?= getInfo($_SESSION['user']['pseudo'])['marche']?></td></p>
                <p>Cout: 500 or</p>
                <ul class="Submit">
                    <form action="" method="post" class="form">
                    <button value="valider" class="button" type="submit" name="MarcheUpgrade">Améliorer</button> 
                </ul>    
            </li>
        </ul>
    </li>
    <li>
        <ul class="buildings">
            <li>  
                <img src="caserne.png" alt="Image" height="36%" width="40%">
                <p>caserne niveau <td><?= getInfo($_SESSION['user']['pseudo'])['caserne']?></td></p>
                <p>Cout: 2000 or</p>
                <ul class="Submit">
                    <form action="" method="post" class="form">
                    <button value="valider" class="button" type="submit" name="CaserneUpgrade">Améliorer</button> 
                </ul>    
            </li>
        </ul>
    </li>  
    <li>
        <ul class="buildings">
            <li>  
                <ul class="Submit">
                </ul>
            </li>
        </ul>
    </li> 
</div>