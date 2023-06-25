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
        <form action="" method="post" class="form">
            
        <p>
        <BLOCKQUOTE><BLOCKQUOTE>Oyé Oyé votre majesté, laissez cet humble bouffon vous expliquer la situation de votre nouveau royaume.</BLOCKQUOTE></BLOCKQUOTE> Faisant autrefois parti de la cour de la précédente royauté, je connais ce territoire comme ma poche. Suite à la guerre, ces terres se retrouvèrent désolées et il ne tient qu'à vous, votre souveraineté, de lui redonner sa splendeur d'autrefois. Il vous faudra donc tout d'abord donner des ordres à vos sujets, ces simplets ne peuvent rien faire d'eux même, il faut donc les diriger d'une main de fer et vous faites parfaitement l'affaire mon roi. Ces paysants devrons vous rapporter du bois, de la nourriture, de la pierre et un peu d'or toutes les 5 minutes dans un intervalle de 3 secondes, il vous foudra tout simplement vous actualiser sur la vision de votre royaume pendant ces 3 secondes pour obtenir vos biens sinon ces malotrus se feront un plaisir de garder vos précieuses ressources. Nous ne pourrons malheureusement pas obtenir de fer de nos exploitations, ces terres sont bien pauvres, il vous sera donc nécessaire de faire un tour au marché de temps en temps pour vendre vous ressources contre de l'or ou en acheter avec cette précieuse monnaie, c'est le seul moyen d'obtenir le fer dans notre contrée. Si votre royauté désire développer l'économie de ce royaume, il vous sufira d'améliorer les bâtiments de productions pour augmenter la quantité de ressources obtenue à chaque collectes du cens ou l'entrainement de nouvelles recrues pour le cas de la caserne. Mais une fois la partie économie stabilisée, vous devrez défendre votre royaume des barbares voulant conquérir et détruire tout ce qui se trouve sur leur passage à chaque fois qu'il sera 3 minutes sur votre horloge pendant un intervalle de 3 secondes, c'est pour cela que la caserne est indispensable, vous pourrez créer des armées en grande quantité si vous avez les ressources nécessaires. Avec l'aide de vos armées, vous pourrez oblitérer les menaces pesant sur votre territoire et obtenir de l'or sur les barbares, cet or est bénéfique pour développer plus rapidement votre royaume. Maintenant que nous avons fait le tour de mes connaissances sur ce royaume, je vous laisse le diriger selon votre bon voloir et je reprend mon rôle d'idiot du roi pour vous divertir et vous faire relacher de toutes ces fâcheuses tensions qu'apporte la gestion d'un royaume si grand. Votre bouffon restera toujours à votre disposition pour tout éventuelles questions sur des sujets complexes nécessitant de plus amples explications. Sur ce, bonne chance votre majesté et que dieu vous garde.
        </p>
        
        </form>
    </div>

<?php
