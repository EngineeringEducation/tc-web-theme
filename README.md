# Theme for the [Tradecraft](http://www.tradecrafted.com) website

## Development

* Download MAMP, install and run
* Download the latest version of [wordpress](http://www.wordpress.org) and unzip it to the MAMP www (or htdocs) directory
* In the MAMP start page, under the `tools` dropdown, run phpMyAdmin
* Create a database named `tradecraft`, utf8_unicode
* In a new tab, navigate to `localhost:8888/<directory where you unzipped wordpress>`, and follow the wordpress install steps. Username and password are probably `root`
* In terminal, navigate to the directory you unzipped wordpress, then in `/wp-content/themes/`, `git clone` this repository.
* Once done, run `npm install` and `bower install`
* Login to the wordpress dashboard, then go to appearance > themes, then activate the `tradecraft` theme.