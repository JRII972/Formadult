<?php 

class formation_handler {
    var $ID;

    var $bannerImg = "https://www.quickanddirtytips.com/sites/default/files/styles/article_main_image/public/images/2332/people-persons-peoples.jpg?itok=OXWARzCz";
    var $sous_titre = "Porter un autre regard sur le monde du travail";

    var $formationRating = 4.5;
    var $formationNbrAvis = 25;

    var $modalite = '';
    var $tags = '';
    var $tags_inline = '';
    var $MAJ;

    var $Description_video ;
    var $LienVideo ;
    var $prix_intra ;
    var $prix_inter ;
    var $devis ;
    var $reference;
    var $Date ;

    function __construct($formation_ID){
        $this->ID = $formation_ID;
        
        $this->bannerImg = $this->get_taxonomy_value('bannerImg');
        
        $listeModalite = get_the_terms($this->ID, 'formation_modalite');
        if ($listeModalite){
            foreach($listeModalite as $modaliteItem){
                $this->modalite = $this->modalite.'<span class="modalite"> '.$modaliteItem->name.'</span>';
            }
        }

        
        $list_tag = wp_get_post_tags($this->ID);
        if ($list_tag){
            foreach($list_tag as $tag){
                $this->tags_inline = $this->tags_inline.'<li class="pull-left"><span class="postit postit-cfp">'.$tag->name.'</span></li>';
            }
        }

        $list_tag = wp_get_post_tags($this->ID);
        if ($list_tag){
            foreach($list_tag as $tag){
                $this->tags = $this->tags.'<li class="attributes__item"><i class="icon-attributs">done</i><span>'.$tag->name.'</span></li>';
            }
        }


        $MAJ = get_post_datetime($this->ID, 'modified', 'gmt');
        if($MAJ){
            $MAJ->setTimeZone(new DateTimeZone('America/Cayenne'));
            $this->MAJ = ($MAJ != false) ? $MAJ->format('d/m/y à H:i') : '';
        }

        $this->sous_titre = $this->get_taxonomy_value('formation_sous_titre');
        $this->Description_video = $this->get_taxonomy_value('formation_youtube_description');
        $LienVideo = $this->get_taxonomy_value('formation_youtube');
        $this->LienVideo = substr($LienVideo, strpos($LienVideo, '=')+1);
        $this->prix_intra = $this->get_taxonomy_value('formation_prix_intra');
        $this->prix_inter = $this->get_taxonomy_value('formation_prix_inter');
        $this->devis = $this->get_taxonomy_value('formation_devis');
        $this->reference = $this->get_taxonomy_value('formation_reference');
        $this->Date = $this->get_taxonomy_value('formation_duree');
        $bannerImg['url'] = rwmb_meta( 'formation_image_banniere', ['size' => 'large'] );

        foreach($bannerImg as $img){
            foreach($img as $img2){
                $this->bannerImg = $img2;
                break;
            }
            break;
        }
    }

    function get_taxonomy_value($tag){
        return get_post_meta($this->ID, $tag, true);
    }

    
    

}