<?php
add_filter( 'rwmb_meta_boxes', 'Référence_formation' );

function Référence_formation( $meta_boxes ) {
    $prefix = 'formation_';

    $meta_boxes[] = [
        'title'      => esc_html__( 'Formation ', 'formAdult' ),
        'id'         => 'formation_data',
        'post_types' => ['formations'],
        'context'    => 'side',
        'priority'   => 'low',
        'autosave'   => true,
        'fields'     => [
            [
                'type' => 'text',
                'name' => esc_html__( 'Sous titre', 'formAdult' ),
                'id'   => $prefix . 'sous_titre',
                'desc' => esc_html__( 'Sous titre de la formation', 'formAdult' ),
                'std'  => 'Porter un autre regard sur votre entreprise',
            ],
            [
                'type' => 'divider',
            ],
            [
                'type' => 'text',
                'name' => esc_html__( 'Référence de la formation', 'formAdult' ),
                'id'   => $prefix . 'reference',
                'desc' => esc_html__( 'Référence de la formation', 'formAdult' ),
            ],
            [
                'type' => 'text',
                'name' => esc_html__( 'Durée de la formation', 'formAdult' ),
                'id'   => $prefix . 'duree',
                'desc' => esc_html__( 'Durée de la formation', 'formAdult' ),
            ],
            [
                'type' => 'number',
                'name' => esc_html__( 'Prix interentreprise ', 'formAdult' ),
                'id'   => $prefix . 'prix_inter',
            ],
            [
                'type' => 'number',
                'name' => esc_html__( 'Prix intra entreprise', 'formAdult' ),
                'id'   => $prefix . 'prix_intra',
            ],
            [
                'type' => 'checkbox',
                'name' => esc_html__( 'Possibilité de devis', 'formAdult' ),
                'id'   => $prefix . 'devis',
                'desc' => esc_html__( 'Afficher la demande de devis', 'formAdult' ),
                'std'  => true,
            ],
            [
                'type' => 'divider',
            ],
            [
                'type' => 'color',
                'name' => esc_html__( 'Couleur de mise en avant', 'formAdult' ),
                'id'   => $prefix . 'coulor',
                'desc' => esc_html__( 'Couleur qui sera mise en avant pour cette foramtion', 'formAdult' ),
            ],
            [
                'type'             => 'image',
                'name'             => esc_html__( 'Image Bannière', 'formAdult' ),
                'id'               => $prefix . 'image_banniere',
                'desc'             => esc_html__( 'Image pour la présentation de la formation', 'formAdult' ),
                'max_file_uploads' => 1,
                'force_delete'     => true,
            ],
            [
                'type' => 'oembed',
                'name' => esc_html__( 'Video via platforme', 'formAdult' ),
                'id'   => $prefix . 'embed_video',
                'desc' => esc_html__( 'Lien de la video présentant la formation', 'formAdult' ),
            ],
            [
                'type' => 'video',
                'name' => esc_html__( 'Fichier video', 'formAdult' ),
                'id'   => $prefix . 'upload_video',
                'desc' => esc_html__( 'Lien de la video youtube présentant la vidéo', 'formAdult' ),
            ],
            [
                'type' => 'text',
                'name' => esc_html__( 'Description Video', 'formAdult' ),
                'id'   => $prefix . 'youtube_description',
                'desc' => esc_html__( 'Fichier de la video  présentant la formation', 'formAdult' ),
            ],
            [
                'type'             => 'file_advanced',
                'name'             => esc_html__( 'PDF', 'formAdult' ),
                'id'               => $prefix . 'pdf',
                'desc'             => esc_html__( 'Fichier PDF décrivant la formation', 'formAdult' ),
                'max_file_uploads' => 5,
            ],
            [
                'type' => 'divider',
            ],
            [
                'type'       => 'post',
                'name'       => esc_html__( 'Formateurs', 'formAdult' ),
                'id'         => $prefix . 'formateur',
                'desc'       => esc_html__( 'Liste des formateurs associer à cette formation', 'formAdult' ),
                'post_type'  => 'formateur',
                'field_type' => 'checkbox_list',
            ],
            [
                'type'             => 'image',
                'name'             => esc_html__( 'Image ss prix', 'formAdult' ),
                'id'               => $prefix . 'image_sup_prix',
                'desc'             => esc_html__( 'Image sous le prix', 'formAdult' ),
                'max_file_uploads' => 1,
                'force_delete'     => true,
            ],
        ],
    ];

    return $meta_boxes;
}

add_filter( 'rwmb_meta_boxes', 'Taux_formation' );

function Taux_formation( $meta_boxes ) {
    $prefix = 'formation_';

    $meta_boxes[] = [
        'title'    => esc_html__( 'Résultat sondage de la formation', 'FormAdult' ),
        'id'       => 'Taux',
        'post_types' => ['formations'],
        'context'  => 'side',
        'autosave' => true,
        'fields'   => [
            [
                'type' => 'number',
                'name' => esc_html__( 'Nombre de participant', 'FormAdult' ),
                'id'   => $prefix . 'nbr_participant',
                'desc' => esc_html__( 'Nombre de participant durant la dernière année', 'FormAdult' ),
                'step' => 1,
            ],
            [
                'type' => 'number',
                'name' => esc_html__( 'Note de satisfaction', 'FormAdult' ),
                'id'   => $prefix . 'taux_satisfaction',
                'desc' => esc_html__( 'Taux de réussite durant la dernière année', 'FormAdult' ),
                'max'  => 20,
                'step' => 1,
            ],
            [
                'type' => 'number',
                'name' => esc_html__( 'Note formateur', 'FormAdult' ),
                'id'   => $prefix . 'taux_formateur',
                'desc' => esc_html__( 'Taux de satisfaction durant la dernière année', 'FormAdult' ),
                'max'  => 10,
                'step' => 1,
            ],
            [
                'type' => 'number',
                'name' => esc_html__( 'Note Qualité', 'FormAdult' ),
                'id'   => $prefix . 'taux_qualite',
                'desc' => esc_html__( 'Taux de employabilité durant la dernière année', 'FormAdult' ),
                'max'  => 10,
                'step' => 1,
            ],
        ],
    ];

    return $meta_boxes;
}

add_filter( 'rwmb_meta_boxes', 'your_prefix_register_meta_boxes' );

function your_prefix_register_meta_boxes( $meta_boxes ) {
    $prefix = 'formation_';

    $meta_boxes[] = [
        'title'    => esc_html__( 'Date ', 'FormADULT' ),
        'id'       => 'Date',
        'context'  => 'side',
        'priority' => 'low',
        'post_types' => ['formation'],
        'autosave' => true,
        'fields'   => [
            [
                'type'  => 'date',
                'name'  => esc_html__( 'Date', 'FormADULT' ),
                'id'    => $prefix . 'date',
                'desc'  => esc_html__( 'Date des prochaines formation', 'FormADULT' ),
                'clone' => true,
            ],
        ],
    ];

    return $meta_boxes;
}