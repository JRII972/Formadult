

<div class="wrap" style="background: #22324C;">
        <p class="breadcrumb" style="color: white;">Vous êtes ici : 
                <a style="color: white;" href="<?= get_home_url() ?>" title="Accueil">Accueil</a> 
                <?php 
                        function _s($text){
                                return ucfirst(str_replace(array("_", "/", "-"), " ", $text));
                        }
                        $url = get_permalink();
                        if (!$url){
                                echo "  &gt;&nbsp; Desoler nous ne savons pas où vous êtes";
                        }else{
                        $set = strpos($url, '/', 9);
                        while ($set < strlen($url) -1 ):
                                $set2 = strpos($url, '/', $set+1);
                                $text = substr($url, $set+1, $set2 - $set -1);
                                ?>
                                        &gt;&nbsp; <a style="color: white;" href="<?= substr($url, 0, $set2) ?>" title="<?= $text ?>"><?= _s($text) ?></a> 
                                <?php 

                                $set = $set2;
                        endwhile;
                }
                        
                        
                ?>
        </p>=
</div>


