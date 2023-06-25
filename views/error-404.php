<div class="container-form">
        <form action="" method="post" class="form">
            
        <p>
        <BLOCKQUOTE><BLOCKQUOTE>Il semblerait que vous vous soyez perdu,
            <?php if(!isConnected()) : ?>
                <a href=<?php uri('HomeIG'); ?>>laissez moi vous guider</a>
            
            <?php else : ?>
                <a href=<?php uri('signin'); ?>>laissez moi vous guider</a>
            <?php endif; ?>
            </BLOCKQUOTE></BLOCKQUOTE>
        </p>
        
        </form>
    </div>