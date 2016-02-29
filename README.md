# Piwik on Heroku

[![Deploy](https://www.herokucdn.com/deploy/button.png)](https://heroku.com/deploy)
[![](https://badge.imagelayers.io/dz0ny/heroku-docker-piwik:latest.svg)](https://imagelayers.io/?images=dz0ny/heroku-docker-piwik:latest 'Get your own badge on imagelayers.io')

Version: *2.16.0*

## Installation

Deploy to Heroku and add mysql add-on then simply follow install steps.

## Technical stuff

 - Uses php-fpm with 4 workers(128MB per worker)
 - Nginx with one worker
 - Access to config and temp is disabled (secure for live production)

## How about plugins?

You can use composer to install additional plug-ins. See https://github.com/composer/installers 
for more info...

## What about that Dockerfile?

You can run app on any cloud service that supports docker(dokku, deis, metal...).
