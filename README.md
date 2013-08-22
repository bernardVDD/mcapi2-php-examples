MailChimp API v2.0 PHP Example Application
==========================================
An example application utilizing our [official PHP API wrapper](https://packagist.org/packages/mailchimp/mailchimp). The purpose of the app is to demo setting up the wrapper in a common environment, make some basic API calls against our API, and consume/display the results. This will not necessarily show an example of every available method or the numerous permutations of each. For that, the developer will be expected to refer to the [the API v2 docs](http://apidocs.mailchimp.com/api/2.0/) and wrapper source to test calls. This, however, should provide a simple framework to kickstart testing.

Community
---------
Unlike our [official API wrapper](https://packagist.org/packages/mailchimp/mailchimp) which is generated and thus non-conducive to pull requests, we'll be happy to consider them to:

* update existing examples
* add new basic functionality, especially for calls that you've found non-trivial
* foster best practices for the language

Just please remember this is intended as a beginner's demo, so please try to keep things organized and [K.I.S.S.](http://en.wikipedia.org/wiki/KISS_principle).

Installation
------------
Generally, these steps should suffice to install and run the examples contained here.

* Clone the repo or download the example code and put it ... somewhere.
* Download and install composer. Just run `curl -sS https://getcomposer.org/installer | php` in the command line from the project directory
* run `php composer.phar install` to have dependencies installed
* Make the tmp directory writable and executable by running `chmod -R 0777 tmp` in the command line from the project directory
* edit `Controller/AppController.php`. Inside the single quotes, paste your [MailChimp API Key](http://kb.mailchimp.com/article/where-can-i-find-my-api-key) into

    `````
    $this->mc = new Mailchimp(''); //your api key here
    `````
* point your development web server web root at webroot/ and restart your web server
* if you use a web server other than Apache which does not support .htaccess files, you will need to modify the rewrite rules to work with CakePHP. On lighttpd, just add the following to your virtual host: 

```
url.rewrite = (
        "(css|files|img|js)/(.*)" => "/$1/$2",
        "^([^\?]*)(\?(.+))?$" => "/index.php?url=$1&$3",
    )
```
