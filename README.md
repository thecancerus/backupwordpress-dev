A BackUpWordPress development environment
=======

Want to hack on BackUpWordPress? clone this repo and get hacking!

### Setup Instructions.

* Create an empty directory for your project. In terminal, navigate to this directory.
* Clone the repository `git clone --recursive git://github.com/humanmade/backupwordpress-dev.git .`
* Add any submodules that your project requires to the `mu-plugins` directory. Here's some to get you started.
* Create a database.
* Setup wp-config.php: `mv wp-config-sample.php wp-config-local.php`, then add your local database settings.

Done!

### Notes

* HM Base sets the MU Plugins directory to `plugins-mu` instead of `mu-plugins` for consistency.

Run unit tests:

* Change to the root backupwordpress dev dir: `cd /srv/www/backupwordpress`
* Install the wordpress tests framework: `wp core init-tests /srv/www/wp-tests --dbname=wp_test --dbuser=root --dbpass=`
* Setup database for the tests to use: `mysql -u'root' -p'' -e 'CREATE DATABASE IF NOT EXISTS wp_test'`
* Define the WP_TESTS_DIR env var: `export WP_TESTS_DIR=/srv/www/wp-tests`
* Change back to the backupwordpress plugin directory: `cd content/plugins/backupwordpress`
* run the unit tests`phpunit`