# CakePHP API based Application Skeleton for frontend

A skeleton for creating applications with [CakePHP](https://cakephp.org) 3.x.

# Installation & Setup

1. Download [Composer](http://getcomposer.org/doc/00-intro.md) or update `composer self-update`.
2. Download this repository - `git clone git@github.com:shawon922/frontend-boilerplate-cakephp.git`
3. Install dependencies with composer - `composer install`.
4. Copy ``.env.default`` and rename it to ``.env`` in ``config`` directory. Set ``APP_BASE_URL`` and ``API_BASE_URL`` without trailing slash.
5. Copy ``app.default.php`` and rename it to ``app.php`` in ``config`` directory.
6. Start the server `bin/cake server -p 8765`.
7. Go to http://localhost:8765 in your browser.

## As API will communicate with database, so we are not using any database configuration in ``app.php``. We are using a dummy database driver in ``app.php``. The dummy database driver is located here ``src/Database/Driver/Dummy.php``.


# API call

