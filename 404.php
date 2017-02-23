<?php

/****************************************************************************
/* 404 Error Page Template
/* ----------------------------------------------------------------------
/* Author: sam@birdinkweb.com
/* Version: 2.0.1.7;
/* Date: December 2016;
/* Origin: LK;
/* ---------------------------------------------------------------------- */
/* Copyright (c) 2017-2018 http://birdinkweb.com @ Indika Creations
/* All rights reserved
/* ========================================================================== */

    getTemplateParts(
        array(
            'partials/shared/html-header',
            'partials/shared/header'
        )
    );

?>
    
    <div class="featured-content tpl-ourminds"><!-- .featured-image -->
        <div class="featured-image">
            <div class="row">
                <div class="small-12 columns">
                    <div class="featured-headings">
                        <div class="small-12 columns text-center">
                            <div class="featured-text">
                                <h1>Page Not Found</h1>
                            </div>
                        </div>
                    </div><!-- /.featured-headings -->
                </div>
            </div>
        </div>
    </div>

<?php

    getTemplateParts(
        array(
            'partials/shared/footer',
            'partials/shared/html-footer'
        )
    );

?>
