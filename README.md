# CakePHP School Management Application

[![Build Status](https://img.shields.io/travis/cakephp/app/master.svg?style=flat-square)](https://travis-ci.org/cakephp/app)
[![License](https://img.shields.io/packagist/l/cakephp/app.svg?style=flat-square)](https://packagist.org/packages/cakephp/app)

A project for conducting test,taking ateendances,managing assignments and peoples(Teachers,Students and Stuffs) related to the school. 

This project is incomplete and ongoing.Any improvisation is greatly appreciated. The source code can be found here: https://github.com/zia/school

## Installation

1. Download [Composer](http://getcomposer.org/doc/00-intro.md) or update `composer self-update`.
2. Run `php composer.phar create-project --prefer-dist cakephp/app [app_name]`.

If Composer is installed globally, run

```bash
composer create-project --prefer-dist cakephp/app
```

In case you want to use a custom app dir name (e.g. `/myapp/`):

```bash
composer create-project --prefer-dist cakephp/app myapp
```

You should now be able to visit the path to where you installed the app and see the default home page.

### Installation of 3.next

In case you want to try the unstable branch:

```bash
composer create-project --prefer-dist cakephp/app=dev-3.next app
```

You may then install specific RC, for example:

```bash
cd app;
composer require cakephp/cakephp:3.4.0-RC3
```

## Update

Since this skeleton is a starting point for your application and various files would have been modified as per your needs, there isn't a way to provide automated upgrades, so you have to do any updates manually.

## Configuration

Read and edit `config/app.php` and setup the `'Datasources'` and any other
configuration relevant for your application.

## Layout
The app skeleton uses a subset of [Foundation](http://foundation.zurb.com/) CSS framework by default. You can, however, replace it with any other library or custom styles.
