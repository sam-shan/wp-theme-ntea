<?php

/****************************************************************************
/* searchform.php - The Search Form Template
/* ----------------------------------------------------------------------
/* Author: sam@birdinkweb.com
/* Version: 2.0.1.7;
/* Date: December 2016;
/* Origin: LK;
/* ---------------------------------------------------------------------- */
/* Copyright (c) 2017-2018 http://birdinkweb.com @ Indika Creations
/* All rights reserved
/* ========================================================================== */

?>
<form class="search-form" action="/" method="get">
<div class="row">
	<div class="small-11 columns">
		<input type="search" placeholder="Type to search this website..." name="s" id="search" value="<?php the_search_query(); ?>" />
		<button type="submit" name="search" class="icon-search path2 ico-search"></button>
	</div>
</div>
</form>