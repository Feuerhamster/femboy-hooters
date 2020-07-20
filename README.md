# Femboy Hooter // official website
This project and website is NOT a part of Hooters of America, LLC.

## Contribute
**The Femboy hooters website is an ongoing project which should be extended with content by the community over time.**

#### Three ways to contribute:
- Share this project! Any person can help by sharing and promoting the site.
- Suggest content and changes or report bugs by [creating an issue](https://github.com/Feuerhamster/femboy-hooters/issues)
- Fork the project, do your stuff and make a pull request. But please have a look at the contribution guidelines. For this, you should have a basic knowledge about HTML, CSS and maybe a bit PHP. 

#### Contribution guidelines:
- Make sure that the added content is presented in a professional manner.
- Watch out for spelling
- Paying attention to code quality and best practices
- Keep to the structure of the project

## Hosting
Current official address: https://femboy-hooters.sytes.net
It is a free subdomain because I don't spend money to buy a real top-level domain. But if you have a better domain, you can send me a message :)

Server: Linux Debian with NGINX webserver.

## Installation
If you want to run this website locally, follow these steps:
1. Install a web server with PHP 7 or higher. I recommend XAMPP on Windows.
2. Download this repository and put the root directory in your web servers http directory (commonly \var\www or htdocs)
3. Make sure you configured the rewrite rules to index.php (if you use XAMPP, the .htaccess do this)
4. Open *index.html* and change the second argument of this `ViewRouter::config("base_path", "/femboy-hooters/");` to the path of the website on your webserver.

## Project structure
**/assets** This directory contains all assets for the website including CSS, JS and Images.

**/components** This directory contains HTML snippets that are a part of the Website.

**/views** This directory contains PHP files with the main content of the page. 
Each file will be accessible as route = filename in the browser via ViewRouter.php

**.htaccess** This file configures the rewrite rule for an Apache web server.
If you use NGINX, you have to create rewrite rules to index.php.

## `ViewRouter`
The ViewRouter is the main part written in PHP to handle which page is shown.
It accesses the /views directory.

### `ViewRouter::config($key: string, $value: string)`
Set config variables of the ViewRouter.
**Keys:**
- **base_path** This specifies the path of the website on your web server. Example: *https://femboy-hooters.ga/* has the base path */*. *http://localhost/femboy-hooters/* has the base path */femboy-hooters/*.
- **views_path** This defines the directory with your views.
- **default_view** The name of the default view file which will be loaded if no route is provided. (Homepage)
- **not_found_view** The name of the view which will be loaded if a route or view was not found.

### `ViewRouter::run()`
This method starts the routing. At this position, the views will be included.

### `ViewRouter::view($view: string)`
Includes a view by name on the position where this method is called.
A view name is the filename of your views_path without the .php extension.

### `ViewRouter::getFullBasePath()`
Returns the full base path of the website.
This has to be used if images, css or other resources will be loaded in HTML.
**Example:**
If you want to load an image, and you are on the about page and use the src without this method, it looks like this:
`http://localhost/femboy-hooters/about/assets/img/test.png`
But this is wrong. We have to get:
`http://localhost/femboy-hooters/assets/img/test.png`.
So the `getFullBasePath()` method returns you:
`http://localhost/femboy-hooters/` (depends on your host and configuration)

## Maintainer & Contact
**This project is developed and mainained by Feuerhamser**
- **Discord:** Feuerhamster#8828
- **Email:** feuerhamster02@gmail.com