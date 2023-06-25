<?php
if (isset($_POST['FrondeurEntrainement1'])){
    FrondeurEntrainement1();
}

function FrondeurEntrainement1(){

global $mysqli;
// lancement de la requête
if (getInfo($_SESSION['user']['pseudo'])['nourriture']>=50) :
    $sql ="UPDATE users SET frondeur=frondeur+'1' WHERE pseudo='test'";
    mysqli_query($mysqli ,$sql);
    $sql ="UPDATE users SET nourriture=nourriture-'50' WHERE pseudo='test'";
    mysqli_query($mysqli ,$sql);
endif;
}

if (isset($_POST['FrondeurEntrainement10'])){
    FrondeurEntrainement10();
}

function FrondeurEntrainement10(){

global $mysqli;
// lancement de la requête
if (getInfo($_SESSION['user']['pseudo'])['nourriture']>=500) :
    $sql ="UPDATE users SET frondeur=frondeur+'10' WHERE pseudo='test'";
    mysqli_query($mysqli ,$sql);
    $sql ="UPDATE users SET nourriture=nourriture-'500' WHERE pseudo='test'";
    mysqli_query($mysqli ,$sql);
endif;
}

if (isset($_POST['FrondeurEntrainement100'])){
    FrondeurEntrainement100();
}

function FrondeurEntrainement100(){

global $mysqli;
// lancement de la requête
if (getInfo($_SESSION['user']['pseudo'])['nourriture']>=5000) :
    $sql ="UPDATE users SET frondeur=frondeur+'100' WHERE pseudo='test'";
    mysqli_query($mysqli ,$sql);
    $sql ="UPDATE users SET nourriture=nourriture-'5000' WHERE pseudo='test'";
    mysqli_query($mysqli ,$sql);
endif;
}




if (isset($_POST['LancierEntrainement1'])){
    LancierEntrainement1();
}

function LancierEntrainement1(){

global $mysqli;
// lancement de la requête
if (getInfo($_SESSION['user']['pseudo'])['nourriture']>=100 and getInfo($_SESSION['user']['pseudo'])['bois']>=100) :
    $sql ="UPDATE users SET lancier=lancier+'1' WHERE pseudo='test'";
    mysqli_query($mysqli ,$sql);
    $sql ="UPDATE users SET nourriture=nourriture-'100' WHERE pseudo='test'";
    mysqli_query($mysqli ,$sql);
    $sql ="UPDATE users SET bois=bois-'100' WHERE pseudo='test'";
    mysqli_query($mysqli ,$sql);
endif;
}

if (isset($_POST['LancierEntrainement10'])){
    LancierEntrainement10();
}

function LancierEntrainement10(){

global $mysqli;
// lancement de la requête
if (getInfo($_SESSION['user']['pseudo'])['nourriture']>=1000 and getInfo($_SESSION['user']['pseudo'])['bois']>=1000) :
    $sql ="UPDATE users SET lancier=lancier+'10' WHERE pseudo='test'";
    mysqli_query($mysqli ,$sql);
    $sql ="UPDATE users SET nourriture=nourriture-'1000' WHERE pseudo='test'";
    mysqli_query($mysqli ,$sql);
    $sql ="UPDATE users SET bois=bois-'1000' WHERE pseudo='test'";
    mysqli_query($mysqli ,$sql);
endif;
}

if (isset($_POST['LancierEntrainement100'])){
    LancierEntrainement100();
}

function LancierEntrainement100(){

global $mysqli;
// lancement de la requête
if (getInfo($_SESSION['user']['pseudo'])['nourriture']>=10000 and getInfo($_SESSION['user']['pseudo'])['bois']>=10000) :
    $sql ="UPDATE users SET lancier=lancier+'100' WHERE pseudo='test'";
    mysqli_query($mysqli ,$sql);
    $sql ="UPDATE users SET nourriture=nourriture-'10000' WHERE pseudo='test'";
    mysqli_query($mysqli ,$sql);
    $sql ="UPDATE users SET bois=bois-'10000' WHERE pseudo='test'";
    mysqli_query($mysqli ,$sql);
endif;
}





if (isset($_POST['ChevalierEntrainement1'])){
    ChevalierEntrainement1();
}

function ChevalierEntrainement1(){

global $mysqli;
// lancement de la requête
if (getInfo($_SESSION['user']['pseudo'])['nourriture']>=200 and getInfo($_SESSION['user']['pseudo'])['fer']>=100) :
    $sql ="UPDATE users SET chevalier=chevalier+'1' WHERE pseudo='test'";
    mysqli_query($mysqli ,$sql);
    $sql ="UPDATE users SET nourriture=nourriture-'200' WHERE pseudo='test'";
    mysqli_query($mysqli ,$sql);
    $sql ="UPDATE users SET fer=fer-'100' WHERE pseudo='test'";
    mysqli_query($mysqli ,$sql);
endif;
}

if (isset($_POST['ChevalierEntrainement10'])){
    ChevalierEntrainement10();
}

function ChevalierEntrainement10(){

global $mysqli;
// lancement de la requête
if (getInfo($_SESSION['user']['pseudo'])['nourriture']>=2000 and getInfo($_SESSION['user']['pseudo'])['fer']>=1000) :
    $sql ="UPDATE users SET chevalier=chevalier+'10' WHERE pseudo='test'";
    mysqli_query($mysqli ,$sql);
    $sql ="UPDATE users SET nourriture=nourriture-'2000' WHERE pseudo='test'";
    mysqli_query($mysqli ,$sql);
    $sql ="UPDATE users SET fer=fer-'1000' WHERE pseudo='test'";
    mysqli_query($mysqli ,$sql);
endif;
}

if (isset($_POST['ChevalierEntrainement100'])){
    ChevalierEntrainement100();
}

function ChevalierEntrainement100(){

global $mysqli;
// lancement de la requête
if (getInfo($_SESSION['user']['pseudo'])['nourriture']>=20000 and getInfo($_SESSION['user']['pseudo'])['fer']>=10000) :
    $sql ="UPDATE users SET chevalier=chevalier+'100' WHERE pseudo='test'";
    mysqli_query($mysqli ,$sql);
    $sql ="UPDATE users SET nourriture=nourriture-'20000' WHERE pseudo='test'";
    mysqli_query($mysqli ,$sql);
    $sql ="UPDATE users SET fer=fer-'10000' WHERE pseudo='test'";
    mysqli_query($mysqli ,$sql);
endif;
}






if (isset($_POST['CavalierEntrainement1'])){
    CavalierEntrainement1();
}

function CavalierEntrainement1(){

global $mysqli;
// lancement de la requête
if (getInfo($_SESSION['user']['pseudo'])['nourriture']>=300 and getInfo($_SESSION['user']['pseudo'])['fer']>=200 and getInfo($_SESSION['user']['pseudo'])['gold']>=150) :
    $sql ="UPDATE users SET cavalier=cavalier+'1' WHERE pseudo='test'";
    mysqli_query($mysqli ,$sql);
    $sql ="UPDATE users SET nourriture=nourriture-'300' WHERE pseudo='test'";
    mysqli_query($mysqli ,$sql);
    $sql ="UPDATE users SET fer=fer-'200' WHERE pseudo='test'";
    mysqli_query($mysqli ,$sql);
    $sql ="UPDATE users SET gold=gold-'150' WHERE pseudo='test'";
    mysqli_query($mysqli ,$sql);
endif;
}

if (isset($_POST['CavalierEntrainement10'])){
    CavalierEntrainement10();
}

function CavalierEntrainement10(){

global $mysqli;
// lancement de la requête
if (getInfo($_SESSION['user']['pseudo'])['nourriture']>=3000 and getInfo($_SESSION['user']['pseudo'])['fer']>=2000 and getInfo($_SESSION['user']['pseudo'])['gold']>=1500) :
    $sql ="UPDATE users SET cavalier=cavalier+'10' WHERE pseudo='test'";
    mysqli_query($mysqli ,$sql);
    $sql ="UPDATE users SET nourriture=nourriture-'3000' WHERE pseudo='test'";
    mysqli_query($mysqli ,$sql);
    $sql ="UPDATE users SET fer=fer-'2000' WHERE pseudo='test'";
    mysqli_query($mysqli ,$sql);
    $sql ="UPDATE users SET gold=gold-'1500' WHERE pseudo='test'";
    mysqli_query($mysqli ,$sql);
endif;
}

if (isset($_POST['CavalierEntrainement100'])){
    CavalierEntrainement100();
}

function CavalierEntrainement100(){

global $mysqli;
// lancement de la requête
if (getInfo($_SESSION['user']['pseudo'])['nourriture']>=30000 and getInfo($_SESSION['user']['pseudo'])['fer']>=20000 and getInfo($_SESSION['user']['pseudo'])['gold']>=15000) :
    $sql ="UPDATE users SET cavalier=cavalier+'100' WHERE pseudo='test'";
    mysqli_query($mysqli ,$sql);
    $sql ="UPDATE users SET nourriture=nourriture-'30000' WHERE pseudo='test'";
    mysqli_query($mysqli ,$sql);
    $sql ="UPDATE users SET fer=fer-'20000' WHERE pseudo='test'";
    mysqli_query($mysqli ,$sql);
    $sql ="UPDATE users SET gold=gold-'15000' WHERE pseudo='test'";
    mysqli_query($mysqli ,$sql);
endif;
}




if (isset($_POST['BelierEntrainement1'])){
    BelierEntrainement1();
}

function BelierEntrainement1(){

global $mysqli;
// lancement de la requête
if (getInfo($_SESSION['user']['pseudo'])['bois']>=500 and getInfo($_SESSION['user']['pseudo'])['fer']>=400 and getInfo($_SESSION['user']['pseudo'])['gold']>=300) :
    $sql ="UPDATE users SET belier=belier+'1' WHERE pseudo='test'";
    mysqli_query($mysqli ,$sql);
    $sql ="UPDATE users SET bois=bois-'500' WHERE pseudo='test'";
    mysqli_query($mysqli ,$sql);
    $sql ="UPDATE users SET fer=fer-'400' WHERE pseudo='test'";
    mysqli_query($mysqli ,$sql);
    $sql ="UPDATE users SET gold=gold-'300' WHERE pseudo='test'";
    mysqli_query($mysqli ,$sql);
endif;
}

if (isset($_POST['BelierEntrainement10'])){
    BelierEntrainement10();
}

function BelierEntrainement10(){

global $mysqli;
// lancement de la requête
if (getInfo($_SESSION['user']['pseudo'])['bois']>=5000 and getInfo($_SESSION['user']['pseudo'])['fer']>=4000 and getInfo($_SESSION['user']['pseudo'])['gold']>=3000) :
    $sql ="UPDATE users SET belier=belier+'10' WHERE pseudo='test'";
    mysqli_query($mysqli ,$sql);
    $sql ="UPDATE users SET bois=bois-'5000' WHERE pseudo='test'";
    mysqli_query($mysqli ,$sql);
    $sql ="UPDATE users SET fer=fer-'4000' WHERE pseudo='test'";
    mysqli_query($mysqli ,$sql);
    $sql ="UPDATE users SET gold=gold-'3000' WHERE pseudo='test'";
    mysqli_query($mysqli ,$sql);
endif;
}

if (isset($_POST['BelierEntrainement100'])){
    BelierEntrainement100();
}

function BelierEntrainement100(){

global $mysqli;
// lancement de la requête
if (getInfo($_SESSION['user']['pseudo'])['bois']>=50000 and getInfo($_SESSION['user']['pseudo'])['fer']>=40000 and getInfo($_SESSION['user']['pseudo'])['gold']>=30000) :
    $sql ="UPDATE users SET belier=belier+'100' WHERE pseudo='test'";
    mysqli_query($mysqli ,$sql);
    $sql ="UPDATE users SET bois=bois-'50000' WHERE pseudo='test'";
    mysqli_query($mysqli ,$sql);
    $sql ="UPDATE users SET fer=fer-'40000' WHERE pseudo='test'";
    mysqli_query($mysqli ,$sql);
    $sql ="UPDATE users SET gold=gold-'30000' WHERE pseudo='test'";
    mysqli_query($mysqli ,$sql);
endif;
}






if (isset($_POST['CatapulteEntrainement1'])){
    CatapulteEntrainement1();
}

function CatapulteEntrainement1(){

global $mysqli;
// lancement de la requête
if (getInfo($_SESSION['user']['pseudo'])['bois']>=1000 and getInfo($_SESSION['user']['pseudo'])['pierre']>=1000 and getInfo($_SESSION['user']['pseudo'])['fer']>=750 and getInfo($_SESSION['user']['pseudo'])['gold']>=500) :
    $sql ="UPDATE users SET Catapulte=Catapulte+'1' WHERE pseudo='test'";
    mysqli_query($mysqli ,$sql);
    $sql ="UPDATE users SET bois=bois-'1000' WHERE pseudo='test'";
    mysqli_query($mysqli ,$sql);
    $sql ="UPDATE users SET pierre=pierre-'1000' WHERE pseudo='test'";
    mysqli_query($mysqli ,$sql);
    $sql ="UPDATE users SET fer=fer-'750' WHERE pseudo='test'";
    mysqli_query($mysqli ,$sql);
    $sql ="UPDATE users SET gold=gold-'500' WHERE pseudo='test'";
    mysqli_query($mysqli ,$sql);
endif;
}

if (isset($_POST['CatapulteEntrainement10'])){
    CatapulteEntrainement10();
}

function CatapulteEntrainement10(){

global $mysqli;
// lancement de la requête
if (getInfo($_SESSION['user']['pseudo'])['bois']>=10000 and getInfo($_SESSION['user']['pseudo'])['pierre']>=10000 and getInfo($_SESSION['user']['pseudo'])['fer']>=7500 and getInfo($_SESSION['user']['pseudo'])['gold']>=5000) :
    $sql ="UPDATE users SET Catapulte=Catapulte+'10' WHERE pseudo='test'";
    mysqli_query($mysqli ,$sql);
    $sql ="UPDATE users SET bois=bois-'10000' WHERE pseudo='test'";
    mysqli_query($mysqli ,$sql);
    $sql ="UPDATE users SET pierre=pierre-'10000' WHERE pseudo='test'";
    mysqli_query($mysqli ,$sql);
    $sql ="UPDATE users SET fer=fer-'7500' WHERE pseudo='test'";
    mysqli_query($mysqli ,$sql);
    $sql ="UPDATE users SET gold=gold-'5000' WHERE pseudo='test'";
    mysqli_query($mysqli ,$sql);
endif;
}

if (isset($_POST['CatapulteEntrainement100'])){
    CatapulteEntrainement100();
}

function CatapulteEntrainement100(){

global $mysqli;
// lancement de la requête
if (getInfo($_SESSION['user']['pseudo'])['bois']>=100000 and getInfo($_SESSION['user']['pseudo'])['pierre']>=100000 and getInfo($_SESSION['user']['pseudo'])['fer']>=75000 and getInfo($_SESSION['user']['pseudo'])['gold']>=50000) :
    $sql ="UPDATE users SET Catapulte=Catapulte+'100' WHERE pseudo='test'";
    mysqli_query($mysqli ,$sql);
    $sql ="UPDATE users SET bois=bois-'100000' WHERE pseudo='test'";
    mysqli_query($mysqli ,$sql);
    $sql ="UPDATE users SET pierre=pierre-'100000' WHERE pseudo='test'";
    mysqli_query($mysqli ,$sql);
    $sql ="UPDATE users SET fer=fer-'75000' WHERE pseudo='test'";
    mysqli_query($mysqli ,$sql);
    $sql ="UPDATE users SET gold=gold-'50000' WHERE pseudo='test'";
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
        <ul class="Unit">
            <li>  
                <img src="frondeur.png" alt="Image" height="40%" width="40%">
                <p>Frondeur : <td><?= getInfo($_SESSION['user']['pseudo'])['frondeur']?></td></p>
                <p>Cout:50 nourriture</p>
                <ul class="Submit">
                    <form action="" method="post" class="form">
                    <button value="valider" class="button" type="submit" name="FrondeurEntrainement1">+1</button> 
                    <form action="" method="post" class="form">
                    <button value="valider" class="button" type="submit" name="FrondeurEntrainement10">+10</button> 
                    <form action="" method="post" class="form">
                    <button value="valider" class="button" type="submit" name="FrondeurEntrainement100">+100</button> 
                </ul>  
            </li>
        </ul>
    </li>
    <li>
        <ul class="Unit">
            <li>  
                <img src="lancier.png" alt="Image" height="40%" width="40%">
                <p>lancier : <td><?= getInfo($_SESSION['user']['pseudo'])['lancier']?></td></p>
                <p>Cout:100 nourriture, 100 bois</p>
                <ul class="Submit">
                    <form action="" method="post" class="form">
                    <button value="valider" class="button" type="submit" name="LancierEntrainement1">+1</button> 
                    <form action="" method="post" class="form">
                    <button value="valider" class="button" type="submit" name="LancierEntrainement10">+10</button> 
                    <form action="" method="post" class="form">
                    <button value="valider" class="button" type="submit" name="LancierEntrainement100">+100</button> 
                </ul>  
            </li>
        </ul>
    </li> 
    <li>
        <ul class="Unit">
            <li>  
                <img src="chevalier.png" alt="Image" height="40%" width="40%">
                <p>Chevalier : <td><?= getInfo($_SESSION['user']['pseudo'])['chevalier']?></td></p>
                <p>Cout:200 nourriture, 100 fer</p>
                <ul class="Submit">
                    <form action="" method="post" class="form">
                    <button value="valider" class="button" type="submit" name="ChevalierEntrainement1">+1</button> 
                    <form action="" method="post" class="form">
                    <button value="valider" class="button" type="submit" name="ChevalierEntrainement10">+10</button> 
                    <form action="" method="post" class="form">
                    <button value="valider" class="button" type="submit" name="ChevalierEntrainement100">+100</button> 
                </ul> 
            </li>
        </ul>
    </li>  
</div>



<div class="container-form">
    <li>
        <ul class="Unit">
            <li>  
                <img src="https://i.pinimg.com/originals/71/52/db/7152db092e40125691236da3363cc002.gif" alt="Image" height="40%" width="40%">
                <p>Cavalier : <td><?= getInfo($_SESSION['user']['pseudo'])['cavalier']?></td></p>
                <p>Cout:300 nourriture, 200 fer, 150 or</p>
                <ul class="Submit">
                    <form action="" method="post" class="form">
                    <button value="valider" class="button" type="submit" name="CavalierEntrainement1">+1</button> 
                    <form action="" method="post" class="form">
                    <button value="valider" class="button" type="submit" name="CavalierEntrainement10">+10</button> 
                    <form action="" method="post" class="form">
                    <button value="valider" class="button" type="submit" name="CavalierEntrainement100">+100</button>  
                </ul>   
            </li>
        </ul>
    </li>
    <li>
        <ul class="Unit">
            <li>  
                <img src="belier.png" alt="Image" height="40%" width="40%">
                <p>Bélier : <td><?= getInfo($_SESSION['user']['pseudo'])['belier']?></td></p>
                <p>Cout:500 bois, 400 fer, 300 or</p>
                <ul class="Submit">
                    <form action="" method="post" class="form">
                    <button value="valider" class="button" type="submit" name="BelierEntrainement1">+1</button> 
                    <form action="" method="post" class="form">
                    <button value="valider" class="button" type="submit" name="BelierEntrainement10">+10</button> 
                    <form action="" method="post" class="form">
                    <button value="valider" class="button" type="submit" name="BelierEntrainement100">+100</button> 
                </ul> 
            </li>
        </ul>
    </li> 
    <li>
        <ul class="Unit">
            <li>  
                <img src="catapulte.png" alt="Image" height="40%" width="40%">
                <p>Catapulte : <td><?= getInfo($_SESSION['user']['pseudo'])['catapulte']?></td></p>
                <p>Cout:1000 bois, 1000 pierre, 750 fer, 500 or</p>
                <ul class="Submit">
                <form action="" method="post" class="form">
                <button value="valider" class="button" type="submit" name="CatapulteEntrainement1">+1</button> 
                <form action="" method="post" class="form">
                <button value="valider" class="button" type="submit" name="CatapulteEntrainement10">+10</button> 
                <form action="" method="post" class="form">
                <button value="valider" class="button" type="submit" name="CatapulteEntrainement100">+100</button> 
                </ul> 
            </li>
        </ul>
    </li>  
</div>