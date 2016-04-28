purple-flamingo
===============

purple-flamingo is web application to localize where is the nearest bar is. 

Application use Symfony Framework in version 2. There is simple frontend and one REST backend endpoint (api/localizations).
Frontend provides Google Map with geolocalization + geocode mechanism (searching place by name).
There is one button below the map - "let's rock" and whey you click this button application searching for bars located within 2km radius around place we are.

Configurable parameters:
* place_radius
* place_type
* google api keys (for server and browser side)
Parameters can be change in ``` /app/config/parameters.yml ```
 
 
### Prerequirements:
* PHP 5.4 or higher

### Install
* Installation Symfony2 framework: http://symfony.com/doc/2.8/book/installation.html

### Running
* ``` php app/console server:run ```
* application is on http://127.0.0.1:8000/

### Tests running
* ``` cd app ```
* ``` phpunit ```
