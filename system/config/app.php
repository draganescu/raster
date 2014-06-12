<?php
// ##Important
// in index.php you have a line boot::$appname = 'application'; which is basically 
// setting the name of the folder of the application. The views_path and the models_path
// configuration directives below are relative to that.

// Where are your views located relative to application
config::set('views_path')->to('views');
// where are the models located relative to the application
config::set('models_path')->to('models');
// the default theme is located in the application folder 
// and has the user_guide in it as well as the Welcome to Raster page
config::set('theme')->to('default');
// The default file in the theme to load if no page is found
// This should be loaded for the front page and 404s handled separately
// or you could use this for 404s and handle the index page in a manual route
config::set('default_view')->to('index');
// Some people like to be very specific and name their templates with a .tpl .stl .view etc
// type of suffix
config::set('views_ext')->to('.html');