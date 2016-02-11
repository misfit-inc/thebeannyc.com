=== Plugin Name ===
Contributors: jayberz
Donate link: http://redlettersstudio.com/wordpress-custom-admin-branding/
Tags: branding, logos, admin, custom
Requires at least: 2.7
Tested up to: 2.9
Stable tag: 2.0

The Custom Admin Branding Plugin allows you to brand your WordPress install for clients.  You can display custom images and styles for the login screen, admin header and footer.

== Description ==

The Custom Admin Branding Plugin allows you to re-brand the Wordpress login screen, the admin header and footer with your own custom images. 

It should be fairly easy to use for anyone familiar with Wordpress and has basic css and html skills. At its simplest it only requires you to activate and then replace three images with your own. Photoshop templates are included to help you with that.

**Get more support at [the official Custom Admin Branding page](http://redlettersstudio.com/blog/wordpress-blog/admin/wordpress-custom-admin-branding/).**

== Installation ==

1. Download the Custom Branding Plugin
2. Upload the ‘custom_branding’ folder to your plugins folder
3. Go to the plugin section in your admin and activate

=Customization=

**Changing Colors**
The options that support color change have a swatch next to the form field. You can either click the color swatch or click into the form field. Doing so will bring up a pallete of color options. You are not restrcited by the choices in the pallete. You can enter any 6 figure hexidecial color code. You must however precede your code with the pound sign (#).

**Customizing Images**
There are five images that you can customize:

* Login Form Background
* Login Form Login Button Background
* Admin Header Logo
* Favorite Actions Button Background
* Footer Logo

All of the default images are in the images folder which is in the custom-admin-branding plugin folder. To change an image:

1. Create your custom images with the provided Photoshop templates. (They are in the psd_image_templates folder)
2. Upload your custom image(s) to the images folder.
3. Enter the file name of the image you wish to use in the proper form field in the options page.
4. Click the save changes button at the bottom of options page and you will see your changes immediately.

**Important**
To avoid having your custom images overwritten when you upgrade the plugin you'll need to name them something different than the default names which are:

* wordpress_blue.jpg
* button-grad.png
* logo_wordpress_gray.png
* fav.png
* footer_wordpress_gray.png


**Changing the Admin Footer Link**
You can have the image in the footer link back to your site, another site, or no site if you wish. Just fill in full url in the Footer Link form field.


== Screenshots ==

1. The Custom Admin Branding interface

== Changelog ==

= 2.0 =
* Added new options to change colors on for elements in the login and admin header
* Cleaned and updated code to be forward compatible
* Added a live preview for the login screen to the admin options
* Added a screenshot to the WordPress repository
* Updated the admin options page to current styles
* Added the ability to turn off the Back to Blog link in the login screen
* Updated the psd templates and added new default images
* Fixed updating issue where updating would overwrite your current images

= 1.3.5 =
* Updated version bug in the WordPress repository

= 1.3.4 =
* Corrected a bug in the way the plugin got the username of the person logged in

= 1.3 =
* Added link to main site in admin header
* Updated css for login page
* Updated .psd template for login page

= 1.2 =
* Verified 2.7 compatibility.

= 1.1.2 =
* Updated css to work with 2.5 version of OZH Drop Down Menu.
* Verified 2.6 compatibility.


= 1.1.1 =
* Added custom classes to style the login button.

= 1.1 =
* Added a settings page to update the footer link.

= 1.0.1 =
* Adjusted plugin to the new Admin for WP 2.5
* Simplified the login image
* Enlarged the main logo image for the admin header
* Added support for Ozh’s Drop Down Menu Plugin
* Added a priority to the style sheet to have seamless integration with the Drop Down Menu Plugin

= 1.0 =
* The first version