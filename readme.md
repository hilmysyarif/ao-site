# Ao-Site

## 1) Installation
#### Using Composer
````
$ composer create-project alex-oliveira/ao-site:dev-master
````
#### Using Git
````
$ git clone https://github.com/alex-oliveira/ao-site.git
$ cd ao-site
$ composer install
````

## 2) Dependencies
````
$ bower install
````

````
$ npm install --no-bin-links
````

## 3) Building
````
$ gulp build
````

## 4) Configurations (".env" and ".env.example")
By default, the file ".env.example" has the configurations below, and are copied to ".env":
````
APP_TITLE=AoSite.com
APP_TITLE_HTML=Ao<b>Site</b>.com

APP_DOMAIN=ao-site.com
APP_SUBDOMAINS=false
````
#### Warning
- You should replace these data using your own informations
- Fill the variables using production informations in ".env.example"
- Use informations specifically of your development enviroment in the ".env"
- If APP_DOMAIN not is equal your "vhost", you will have problems of session, if APP_SUBDOMAINS is true
