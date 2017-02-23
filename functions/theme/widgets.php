<?php
    /**
     * Register our sidebars and widgetized areas.
     *
     */
    function arphabet_widgets_init() {
        
        register_sidebar( array(
            'name' => 'Homepage Content Blocks',
            'id' => 'page_blocks',
            'before_widget' => '<div class="column"><div class="prefooter-block">',
            'after_widget' => '</div></div>',
            'before_title' => '<span class="btitle">',
            'after_title' => '</span>',
        ) );

        // register_sidebar( array(
        //     'name' => 'Homepage Icon Blocks',
        //     'id' => 'icon_blocks',
        //     'before_widget' => '<div class="column"><div class="single" data-equalizer-watch>',
        //     'after_widget' => '</div></div>',
        //     'before_title' => '<span class="hide">',
        //     'after_title' => '</span>',
        // ) );        

        register_sidebar( array(
            'name' => 'Footer Blocks',
            'id' => 'footer_blocks',
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '<h3 class="hide">',
            'after_title' => '</h3>',
        ) );
        
        
    }
    
    add_action( 'widgets_init', 'arphabet_widgets_init' );
?>
