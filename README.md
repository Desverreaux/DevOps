# Desverreaux.com

This git repo holds all the code to my personal website Desverreaux.com, which I use as a growing list of things such as a portfolio and professional page, a (kinda) ftp server, and general server to play around with whatever seems neat at the time.

This is the whole site aside from data that exists on some separate servers that I also manage, and this will be the case until I can get the money to buy own physical git server. This being the case I want to say that: 
1. This is horribly insecure and from a security perspective about the only thing I could do worse is put a passwords.txt in here. I realize this and just ask that whoever is reading this not to take advantage of a developer still learning some of the ropes.
2. If you are using this as a reference, I can't put into words how much I'd love to help out anyone who is also learning about any of this neato stuff. Feel free to contact me at the info i've provided below if you have any questions about this code base or anything you happen to be trying to make with this.  

### A note on its quality

I am currently a unemployeed developer fresh out of college, and this site's completion with at least a v1.0 is a self imposed requirement before I start applying to jobs. Unfortunately I only have so much money for food/rent/etc so achieving core functionality and moving closer to having a source of income again is important if I want to not starve. This is simply a note to explain the somewhat rushed quality found in this repo. However once I get to a point in life where im not constantly having to worry about being homeless, I will come back to fix and give this project all the polish it deserves. 


## Technology Stack

The site is hosted on a docker worker node in a cluster that I rent out from Amazon Web Services. The specific image that is used to build the server can be found at docker hub under desverreaux/webserver and here's a url for it https://hub.docker.com/r/desverreaux/webserver/. The image branches off from a ubuntu server 16.04 image also found on docker hub. The rest of the web stack would be...
*Apache2 for serving http requests
*Php for pretty much all the backend code 
*Laravel as a back end framework
*Composer & Npm as back end and front end package managers 
*Vue as the a front end framework 
*Sass as a Asset Compiler and preprocessor 
*Others that im sure im forgetting 

### Deployment 

This process could be simplified by formatting a docker build script that would do this whole section for you, and I will write this eventually however to have a functional site this is optional and I have decided to defer it for now. 

To create the docker container that runs the server use "docker run" with the following arguments

```
docker run 
    -it
	-p 80:80 -p 10000:10000 
	-v d:/Serverdata/Desverreaux.com/Filesystem:/var/www/Desverreaux.com/ 
	--name Webserver 
	-h Webserver 
	-d desverreaux/webserver:latest 
	tail -f /dev/null

```

Go to /var/www/Desverreaux.com/ and clone this repo to that directory 


```
cd /var/www/Desverreaux.com/
git clone https://github.com/Desverreaux/Desverreaux.com.git
```

Initialize npm and composer by running

```
npm install 
composer install
```

Install the following packages with apt-get

*alien
*libmagicwand-dev
*imagemagick
*jpegoptim
*optipng
*pngquant
*gifsicle

and these with npm install 

*svgo

You will need to create this new environments .env file for laravel with 

```
cp /var/www/Desverreaux.com/.env.example /var/www/Desverreaux.com/.env
```

as well as create an application key for laravel with 

```
php artisan key:generate
```

To use the scripts that optimize the images in the asset folder you will need to install the php extension for the library used with 

```
Touch /etc/php/7.2/mods-available/imagick.ini
cat extension=imagick.so > /etc/php/7.2/mods-available/imagick.ini
ln -s /etc/php/7.2/mods-available/imagick.ini /etc/php/7.2/apache2/conf.d/20-imagick.ini
```

Finally you should be able to run the following to start all the services needed

```
sh startServices.sh
```

As of now this is all I have documented. 


## Running the Tests

As i personally dislike tests, along with every other developer I assume, and they are not needed for base functionality test are currently deferred to a later date

## Authors

* **John Norris Desverreaux** - Email:john@desverreaux.com

I would also provide a link to my website but I'm REAL confused on how you got here without knowing what the site is  

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details

