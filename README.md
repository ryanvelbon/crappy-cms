## Auth

Authentication system is solely for website admins.
There is no page to sign up. Users are instead to be created from inside Tinker shell.

	php artisan tinker
	
	$user = new User();
	$user->name = "admin";
	$user->email = "admin@example.com";
	$user->password = Hash::make('12345678');
	$user->save();

## Content

Content such as pages relevant to Services, Projects, Careers, should be managed through the admin panel.






## Edit the following pages:

#  config/constants.php




## Notes

- Sass file structure was inspired by the following article: https://itnext.io/structuring-your-sass-projects-c8d41fa55ed4
- navbar was taken from https://codepen.io/mutedblues/pen/MmPNPG


## #########################################################################################

#    CSS & Sass

visit example.test/css-demo to see your main.css styling

comment out $test* variable resets to see coloured divs for testing layout

#    Javascript

JS code which is necessary throughout the sitemap should be required in resources/js/app.js


## #########################################################################################
## CUSTOMIZING PAGES

#    Landing page
-      Zig Zag Layout https://www.w3schools.com/howto/howto_css_zig_zag_layout.asp
-      watch https://www.youtube.com/watch?v=aoQ6S1a32j8



## #########################################################################################
## CUSTOMIZING ELEMENTS

#    Navbar
-      Hide Navbar on Scroll https://www.w3schools.com/howto/howto_js_navbar_hide_scroll.asp

#    Footer

#    Text Animations
-      https://codepen.io/yemon/pen/pWoROm