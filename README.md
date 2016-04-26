purple-flamingo
===============

purple-flamingo is web application to localize where is the nearest bar is. 

Application use Symfony Framework in version 2. There is simple frontend and one REST backend endpoint (api/localizations).
Frontend provides Google Map with geolocalization + geocode mechanism (seraching place by name).
There is one button below the map - "let's rock" and whey you click this button application searching for bars located within 2km radius around place we are.

Configurable parameters:
1. place_radius
2. place_type
3. google api keys (for server and browser side)_
Parameters can be change in /app/config/parameters.yml
 
 
### Prerequirements:
1. PHP 5.4 or higher

### Install
1. Installation Symfony2 framework: http://symfony.com/doc/2.8/book/installation.html

### Running
1. php app/console server:run
2. application is on http://127.0.0.1:8000/
 
