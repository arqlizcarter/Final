Project Scope - CS50.12
=======================

Webiste has been setup to be render `VALID` HTML5 on all pages and has been verified by a third party.


HTML5 Page Structure
--------------------

*10 points*:
  The website needs to be structured semantically, using current document and metadata markup.

The site uses 100% semantic markup for valid HTML5. The validator found here "http://html5.validator.nu/?doc=http%3A%2F%2Fmarriedtoagringo.com%2F" indicates that the site 100% HTML5 complient.


Interactivity
-------------

*45 points*:
  The website needs to provide some way of interacting with the user - either through form elements, services such as geolocation or data apis, or visual interactions using media or vector elements.

This site has several methods of interaction with the end user. First of all I am using several third party APIs which create a very social feel to the site. The user can repost the site contents via pinterest, facebook, twitter, linkedin and google plus. Additionally, I have a disqus comment system and a custom made shoutbox. for users to post and publicly share content. Lastly, the site has is using lightbox for image displays and has a simple contact form.


--------


Project Scope - CS53.11b
========================

The site I created, as referenced previously, is based on the content I created within my book.  The idea of the site is to promote my book while also providing a place for my users to share experiences. The site's code is 100% php which allows the HTML5 content to be dynamically generated. I use the MySQL database to house posts from users, city and country locations, and user data.


Database Interaction
--------------------

*30 points*:
  The website needs to demonstrate the ability to interact with data in a database using the PHP - AJAX - Javascript techniques demonstrated in the class tutorials.

This site uses AJAX and javascript extensively when interacting with images in lightbox, the contact form, or the custom shoutbox. The most interesting of the AJAX / Javascript applications that the site uses is the shoutbox. This system allows for posts to be automatically rendered on the page without the need for the user to refresh the page. Additionally, I set up an auto-sugestion box for all country input fields on the shout box page. 


Database Design
---------------

*25 points*:
  The database needs to be designed using the entity-relationship constraints we explored in the SQL tutorials (ie not in one table).

The database design has been setup to be a relational database with several constraints. All posts are set in the shoutbox table, messages are in the comments table, auto- suggestive countries are in the countries table and cities are in the geolocation table. The constraints used are set on the users ID for messages, geolocation.


Here are the constraints:

  .. code-block:: mysql 

    CONSTRAINT `city` FOREIGN KEY (`user_id`) REFERENCES `shoutbox` (`id`) ON UPDATE CASCADE
    CONSTRAINT `city` FOREIGN KEY (`user_id`) REFERENCES `shoutbox` (`id`) ON UPDATE CASCADE


For the entire, in use database, please have a look in the notes folder for a database dump.


--------


Entries on Both CS53.11b & CS50.12
==================================

Both of these sections are found on both classes. Which has been outlined in one place to reduce repetitive information.


Responsive Layout
-----------------

*25 points*:
  The website page layouts must be designed for at least 2 screen-widths using basic HTML5 viewport and media query capabilities.

This site has 4 different page sizes it can use and is touch/mobile friendly. This ability is achieved with twitter bootstraps framework.


Overall Concept & Execution
---------------------------

*20 points*:
  How innovative is your website concept and how fully realized is it the project.

I think that the site is very innovative for my project which has been to create a place to share my book as well as allow people a place to share information whom were already interested in my book.