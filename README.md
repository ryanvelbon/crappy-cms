
## Welcome to CrappyCMS

CrappyCMS is a CMS for building websites for agencies. Allowing the agency to publish info regarding services, case studies, and job listings.

WordPress or Statamic


## Website Deployment

CrappyCMS is a Database CMS (as opposed to a Flat-File CMS such as Statamic).

Hence all your content regarding Services, Projects and Careers is stored in a database.


## Admin Panel

Content such as pages relevant to Services, Projects, Careers, should be managed through the admin panel.

CrappyCMS uses Breeze for authentication.

The authentication system is solely for privileged users and not for the general public.

There is no page to sign up.

Users are instead to be created by the website administrator. This can be done from inside a Tinker shell as illustrated in the code snippet below.

```php
php artisan tinker

$user = new User();
$user->name = "admin";
$user->email = "admin@example.com";
$user->password = Hash::make('12345678');
$user->save();
```




# Notes for Developer
- this is an ongoing project
- continue `config/constants.php`



- Sass file structure was inspired by [this article](https://itnext.io/structuring-your-sass-projects-c8d41fa55ed4)
- navbar was taken from [here](https://codepen.io/mutedblues/pen/MmPNPG)



## CSS & Sass

visit `example.test/css-demo` to see your `main.css` styling

comment out $test\* variable resets to see coloured divs for testing layout

## Javascript

JS code which is necessary throughout the sitemap should be required in `resources/js/app.js`.


# CUSTOMIZING PAGES

## Landing page
- [Zig Zag Layout](https://www.w3schools.com/howto/howto_css_zig_zag_layout.asp)
- [watch](https://www.youtube.com/watch?v=aoQ6S1a32j8)

# CUSTOMIZING ELEMENTS

## Navbar
- [Hide Navbar on Scroll](https://www.w3schools.com/howto/howto_js_navbar_hide_scroll.asp)

## Footer

## Text Animations
- [link](https://codepen.io/yemon/pen/pWoROm)
