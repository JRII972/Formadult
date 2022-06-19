<?php
function get_menu_items($taxonomy, $parent = 0)
{
    return get_terms(array(
        'taxonomy' => $taxonomy,
        'hide_empty' => false,
        'parent' => $parent
    ));
}

function display_menu_item($arrayItem, $postType)
{
    if (empty($arrayItem)) {
        return '';
    }
    echo '<div class="col">';

    foreach ($arrayItem as $item) {
?>
<li><a href="<?= get_category_link($item->term_id); ?>">
        <?= $item->name; ?>
    </a></li>

<?php

    }
    echo '</div>';
}

function display_menu_item_inline($arrayItem, $postType)
{
    foreach ($arrayItem as $item) {
    ?>
<li><a href="<?= get_category_link($item->term_id); ?>">
        <?= $item->name; ?>
    </a></li>
<?php
    }
}

function get_formations($slug, $postType)
{

    $args = array(
        'post_type' => $postType, // the post type
        'tax_query' => array(
            array(
                'taxonomy' => 'competence', // the custom vocabulary
                'field'    => 'slug',
                'terms'    => 'test',      // provide the term slugs
            ),
        ),
    );

    $the_query = new WP_Query($args);
    if ($the_query->have_posts()) {

        echo '<ul>';
        $html_list_items = '';
        while ($the_query->have_posts()) {
            $the_query->the_post();
            $html_list_items .= '<li>';
            $html_list_items .= '<a href="' . get_permalink() . '">';
            $html_list_items .= get_the_title();
            $html_list_items .= '</a>';
            $html_list_items .= '</li>';
        }
        echo $html_list_items;
        echo '</ul>';
    } else {
    ?>
<li>
    Pas encore disponible
</li>
<?php
    }
    wp_reset_postdata(); // reset global $post;
}

function display_menu_mobile_item($arrayItem, $postType)
{
    foreach ($arrayItem as $item) {
        echo '<div class="col">';
    ?>
<li class="formation-type"><a href="<?= get_category_link($item->term_id); ?>">
        <?= $item->name; ?>
    </a></li>

<?php
        echo '</div>';
    }
}
function get_formations_mobile($slug, $postType)
{
    $taxonomy = 'my_taxonomy'; // this is the name of the taxonomy
    $args = array(
        'post_type' => $postType, // the post type
        'tax_query' => array(
            array(
                'taxonomy' => 'competence', // the custom vocabulary
                'field'    => 'slug',
                'terms'    => 'test',      // provide the term slugs
            ),
        ),
    );

    $the_query = new WP_Query($args);
    if ($the_query->have_posts()) {

        $html_list_items = '';
        while ($the_query->have_posts()) {
            $the_query->the_post();
            $html_list_items .= '<li>';
            $html_list_items .= '<a href="' . get_permalink() . '">';
            $html_list_items .= get_the_title();
            $html_list_items .= '</a>';
            $html_list_items .= '</li>';
        }
        echo $html_list_items;
    } else {
    ?>
<h1>
    NOPE
</h1>
<?php
    }
    wp_reset_postdata(); // reset global $post;
}


$custom_logo_id = get_theme_mod('custom_logo');
$custom_logo_url = wp_get_attachment_image_url($custom_logo_id, 'full');

?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<header id="header" class="page-header page-header--default z-index">
    <div class="page-header__content">
        <div class="page-header__branding page-header__branding--Form Adult">
            <div height="100%"><a href="@acceuil"><img height="100%" alt="Logo Form Adult"
                        src="<?= esc_url($custom_logo_url) ?>" loading="lazy"><span class="baseline">Leader regional de
                        la formation<br>professionnelle et continue</span></a></div>
        </div>

        <ul class="page-header__content-right">
            <li class="phone"><a href="#"><i class="icon"></i><span class="menu-label">01 55 00 95 95</span></a>
            </li>
            <li class="contact">
                <a href="<?= site_url() ?>/contact">
                    <i class="icon"></i>
                    <span class="menu-label">Nous contacter</span>
                </a>
            </li>
            <!-- Espace client -->
            <li class="client has-chidren" id="accountWrapper"
                data-url-forgot=""><a href="<?= is_user_logged_in() ? site_url().'/wp-login.php?action=logout': '#' ?> "><i
                        class="icon"></i><span class="menu-label"><?= is_user_logged_in() ? 'Deconnexion': 'Espace client' ?> </span></a>
                <?php if (!is_user_logged_in()) { ?>
                <div class="page-header__account page-header__account--login has-error is-visible">
                    <div class="page-header__account-header"><span><strong>Identifiez-vous</strong></span></div>
                    <form class="page-header__account-body p-10" name="loginform" id="loginform" action="<?= site_url()?>/wp-login.php" method="post">
                        <div class="page-header__account-form">
                            <input type="text" name="log" id="user_login" value="formadult" size="20" autocapitalize="off" class="form-control"></div>
                        <div class="page-header__account-form">
                            <input type="password" name="pwd" id="user_pass" value="" size="20" class="form-control"></div>
                        <div class="error-login-message none"><span>L'adresse mail et le mot de passe ne
                                correspondent pas, veuillez réessayer</span></div>
                        <div class="loadingAccountConnection"
                            data-img="<?php echo esc_url(get_theme_file_uri()); ?>/asset/images/loading-v5.gif">
                            <img src="<?php echo esc_url(get_theme_file_uri()); ?>/asset/images/loading-v5.gif"
                                height="20" width="20">
                        </div>
                        <div class="page-header__account-form">
                                <input type="submit" name="wp-submit" id="wp-submit" class="cta-default cta-default--main" value="Se connecter">
                            </div>
                                <input type="hidden" name="redirect_to" value="<?= site_url() ?>/wp-admin/">
									<input type="hidden" name="testcookie" value="1">
                    </form>
                    <div class="page-header__account-footer">
                        <ul>
                            <li class="motdepasseoublie"><a href="<?= site_url() ?>/espace-client/oubli-mot-passe">Mot
                                    de passe
                                    oublié ?</a></li>
                            <li class="creeruncompte"><a href="<?= site_url() ?>/espace-client/creation-compte">Créer un
                                    compte</a></li>
                        </ul>
                    </div>
                </div>
                <?php } ?>
            </li>
        </ul>
        <nav class="main-nav is-desktop">
            <ul class="primary-nav">
                <li class="has-children has-col-last can-open"><a href="<?= get_site_url() ?>/formation">

                        <span>
                            <div><img src="<?= esc_url(get_template_directory_uri() . " /asset/images/SVG/icon-nav.svg") ?>
                                "></div>
                            <div>
                                Offre de formation
                            </div>
                        </span></a>
                    <ul data-custom-scrollbar="" data-subitems-columns="" class="secondary-nav is--hidden has-col-last">
                        <div class="go-back"><a href="#"><span class="back-label">Retour</span></a></div>
                        <?php display_menu_item(get_menu_items('competence'), 'formation'); ?>
                        <?php display_menu_item(get_menu_items('formation_metier'), 'formation'); ?>

                        <div data-col-last="" class="page_speed_218163443 col" style="display: block;">
                            <?php display_menu_item_inline(get_menu_items('category'), 'formation'); ?>
                        </div>
                    </ul>
                </li>
                <li class="has-children can-open"><a href="<?= get_site_url() . " /equipes-et-methodes" ?>">
                        <span>
                            <div><img src="<?= esc_url(get_template_directory_uri() . " /asset/images/SVG/icon-nav.svg") ?>
                                "></div>
                            <div>
                                Equipes et Méthodes
                            </div>
                        </span></a>
                </li>
                <li class="has-children can-open"><a href="<?= get_site_url() . " /qui-sommes-nous" ?>"><span>
                            <div><img src="<?= esc_url(get_template_directory_uri() . " /asset/images/SVG/icon-nav.svg") ?>
                                "></div>
                            <div>Qui sommes-nous ?</div>
                        </span></a>
                </li>
                <li class="has-children can-open"><a href="<?= get_site_url() . " /Qualite" ?>"><span>
                            <div><img src="<?= esc_url(get_template_directory_uri() . " /asset/images/SVG/icon-nav.svg") ?>
                                "></div>
                            <div>Qualite</div>
                        </span></a>
                </li>

                <li class="has-button-style"><a style="margin-top: 20px;" href="<?= site_url() ?>/moodle"><span>Moodle</span></a></li>
                
                <ul class="sidebar-nav__social list list--center list--horizontal">
                    <li><a href="@facebook" target="_blank" rel="nofollow noopener" class="social-link"><i
                                class="icon icon--facebook"></i><span class="social-name">Facebook</span></a></li>
                    <li><a href="@instagram" target="_blank" rel="nofollow noopener" class="social-link"><i
                                class="icon icon--instagram"></i><span class="social-name">Instagram</span></a></li>
                    <li><a href="@youtube" target="_blank" rel="nofollow noopener" class="social-link"><i
                                class="icon icon--youtube"></i><span class="social-name">YouTube</span></a></li>
                    <li><a href="https://www.linkedin.com/in/marie-bernadel-7622a9154/" target="_blank" rel="nofollow noopener" class="social-link"><i
                                class="icon icon--linkedin"></i><span class="social-name">Linkedin</span></a></li>
                </ul>
            </ul>
        </nav>
    </div>
</header>
<header class="page-header page-header--sticky">
    <div class="page-header__content">
        <div class="page-header__button-link">
            <button id="mobile-menu-btn" onclick="show_nav()" data-toggle-nav="" type="button" class="bt-menu"
                aria-label="Afficher/Masquer la navigation"><span class="bar"></span><span class="bar"></span><span
                    class="bar"></span>
            </button>
        </div>
        <div class="page-header__branding"><a href="@acceuil"><img alt="Logo Form Adult"
                    src="<?= esc_url($custom_logo_url) ?>" loading="lazy"></a>
        </div>

        <ul id="mobile-nav" class="page-header__content-right">
            <li class="contact"><a href="<?= site_url() ?>/contact"><i class="icon"></i><span class="menu-label">Nous
                        contacter</span></a></li>
            <li class="client has-chidren " id="accountWrapper-sticky"
                data-url-forgot=""><a href="/wp-login.php"><i
                        class="icon"></i><span class="menu-label">Espace client</span></a>
            </li>

        </ul>
        <ul class="page-header__nav-mobile">
            <li class="contact"><a href="tel:0155009595" aria-label="0155009595"><i class="icon"></i><span
                        class="menu-label"></span></a></li>
            <li class="pencil"><a href="<?= site_url() ?>/contact"><i class="icon"></i><span
                        class="menu-label"></span></a></li>
            <li class="client"><a href="<?= site_url() ?>/wp-login.php" aria-label="Espace client"><i
                        class="icon"></i></a></li>

        </ul>
    </div>
</header>
<nav class="sidebar-nav" >
    <nav class="main-nav is-mobile">
        <ul id="primary-nav" class="primary-nav">
            <li class="has-children has-col-last can-open"><a onclick="mobile_show_nav_menu(this)"><span>Offre de formation</span></a>
                <ul data-custom-scrollbar="" data-subitems-columns="" class="secondary-nav is--hidden has-col-last">
                    <div class="go-back"><a onclick="mobile_hidde_nav_menu(this)" href="#"><span
                                class="back-label">Retour</span></a></div>
                    <?php display_menu_mobile_item(get_menu_items('competence'), 'formation'); ?>
                    <?php display_menu_mobile_item(get_menu_items('formation_metier'), 'formation'); ?>


                    <div data-col-last="" class="page_speed_2103722848 col" style="display: block;">
                        <?php display_menu_item_inline(get_menu_items('category'), 'formation'); ?>
                       
                    </div>
                </ul>
            </li>
            <!-- TODO : automation menu page !-->
            <li class="has-children can-open"><a href="<?= get_site_url() . " /equipes-et-methodes" ?>"><span>Equipes et
                        méthodes</span></a>
            </li>
            <li class="has-children can-open"><a href="<?= get_site_url() . " /qui-sommes-nous" ?>"><span>Qui
                        sommes-nous ?</span></a>
            </li>
            <li class="has-children can-open"><a href="<?= get_site_url() . " /qualite" ?>"><span>Qualite</span></a>
            </li>
            <li class="has-children can-open"><a href="<?= get_site_url() . " /Contact" ?>"><span>Contact</span></a>
            </li>
            <li class="has-button-style"><a href="<?= site_url() ?>/moodle"><span>Moodle</span></a>
                </li>
                <li class="page_speed_2103722848"><a href="<?= site_url() ?>/wp-login.php?loggedout=true">Se
                        déconnecter</a></li>
            <ul class="sidebar-nav__social list list--center list--horizontal">
                <li><a href="@facebook" target="_blank" rel="nofollow noopener" class="social-link"><i
                            class="icon icon--facebook"></i><span class="social-name">Facebook</span></a></li>
                <li><a href="@instagram" target="_blank" rel="nofollow noopener" class="social-link"><i
                            class="icon icon--instagram"></i><span class="social-name">Instagram</span></a></li>
                <li><a href="@youtube" target="_blank" rel="nofollow noopener" class="social-link"><i
                            class="icon icon--youtube"></i><span class="social-name">YouTube</span></a></li>
                <li><a href="https://www.linkedin.com/in/marie-bernadel-7622a9154/" target="_blank" rel="nofollow noopener" class="social-link"><i
                            class="icon icon--linkedin"></i><span class="social-name">Linkedin</span></a></li>
            </ul>
        </ul>
    </nav>
</nav>

<div class="pop-up-background__container none">
    <div class="pop-up-custom__container"><span data-close-pop-in="" class="icon-close"></span>
        <div id="pop-up-content__container" class="pop-up-custom-content__container"></div>
    </div>
</div>