# Create the Locky Project step by step.
## This is how I make my first Symfony project, with all the commands I've used and their short description.

#### First, I create my project with:
```
symfony new Locky --webapp
```
#### Then, I just init git on my project, create a new repository on my GitHub account and follow the few commands that git present at the start when we already get the project on local.
#### I start the Symfony server to launch my project:
```
symfony server:start
```
#### Well, my project was launched. 
#### I started to create my first controller, the LockyController, by making this command:
```
php bin/console make:controller
```
#### That actually create the LockyController and its Twig view.
#### I make the /locky my index page (/) by adding this lines on the /config/routes.yaml:
```
index:
    path: /
    controller: App\Controller\LockyController::index
```
#### Next, I decide to install WebPack Encore to manage all the CSS and JS. So, I made this command:
```
 composer require symfony/webpack-encore-bundle
```
#### When it was done, I run WebPack with:
```
npm run watch
```
#### After done a little configuration, with adding a new Entry for my Locky.js and link my Locky.css etc. I wanted to install Bootstrap to make my front faster:
```
npm install bootstrap --save-dev
```
#### I moved from CSS to Sass that is actually way better than basic CSS. So, I just rename all the .css by .scss and uncomment the .enableSassLoader() line that allows me to use Sass and I install Sass on my project:
```
npm install sass-loader@^13.0.0 sass --save-dev
```
#### Then, I import Bootstrap in the app.css to use it wherever on the app:
```
@import "~bootstrap/scss/bootstrap";
```
#### I create the two entities for the project by using these command:
```
php bin/console make:entity
```
#### For the entity 'Prestation', but for the entity 'Utilisateur', I do this:
```
php bin/console make:user 
```
#### I decide to add some fields to my Utilisateur entity, for that, I needed to use the make:entity and precise which entity I would like to edit:
```
php bin/console make:entity Utilisateur 
```
