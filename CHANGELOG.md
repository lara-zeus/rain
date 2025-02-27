# Changelog

All notable changes to `Dynamic Dashboard` will be documented in this file

## v3.0.2 - 2024-10-05

### What's Changed

* Bump ramsey/composer-install from 2 to 3 by @dependabot in https://github.com/lara-zeus/dynamic-dashboard/pull/36
* Bump dependabot/fetch-metadata from 1.6.0 to 2.0.0 by @dependabot in https://github.com/lara-zeus/dynamic-dashboard/pull/37
* Bump aglipanci/laravel-pint-action from 2.3.1 to 2.4 by @dependabot in https://github.com/lara-zeus/dynamic-dashboard/pull/39
* Bump dependabot/fetch-metadata from 2.0.0 to 2.1.0 by @dependabot in https://github.com/lara-zeus/dynamic-dashboard/pull/40
* Bump dependabot/fetch-metadata from 2.1.0 to 2.2.0 by @dependabot in https://github.com/lara-zeus/dynamic-dashboard/pull/41
* Update HeadingWidget.blade.php by @atmonshi in https://github.com/lara-zeus/dynamic-dashboard/pull/42

**Full Changelog**: https://github.com/lara-zeus/dynamic-dashboard/compare/v3.0.1...v3.0.2

## v3.0.1 - 2024-02-09

### What's Changed

* Bump aglipanci/laravel-pint-action from 2.3.0 to 2.3.1 by @dependabot in https://github.com/lara-zeus/dynamic-dashboard/pull/34
* fix UI and the usage of plugin config in FE by @atmonshi in https://github.com/lara-zeus/dynamic-dashboard/pull/35

**Full Changelog**: https://github.com/lara-zeus/dynamic-dashboard/compare/v3.0.0...v3.0.1

## v3.0.0 - 2023-12-11

### changing the package name and new features

to upgrade to v3, the name and the name space changed from `Rain` to `DynamicDashboard`

1- so first publish the config:

```bash
php artisna vendor:publish --tag=zeus-dynamic-dashboard-config



```
this will crate the new config file `zeus-dynamic-dashboard.php`, and you can move your configuration from the old file `zeus-rain`

2- change the call in the `plugins` array in your panel provider

```php
DynamicDashboardPlugin::make()



```
3- run the update script, since the namespace has changed, you need to run this command in the production to update the class names

> make sure to backup your database

```bash
php artisan dynamic-dashboard:update-class



```
this will change `LaraZeus\Rain` to `LaraZeus\DynamicDashboard`

## 1.1.1 - 2023-07-12

### What's Changed

- Update trans by @atmonshi in https://github.com/lara-zeus/dynamic-dashboard/pull/21
- update core by @atmonshi in https://github.com/lara-zeus/dynamic-dashboard/pull/22

**Full Changelog**: https://github.com/lara-zeus/dynamic-dashboard/compare/1.1.0...1.1.1

## 1.1.0 - 2023-07-07

### What's Changed

- Customize columns models by @atmonshi in https://github.com/lara-zeus/dynamic-dashboard/pull/20

### important

update the config file to include:
`'columns' => \LaraZeus\DynamicDashboard\Models\Columns::class,`

in the `models` array

or republish the config file

```bash
php artisan vendor:publish --tag=zeus-dynamic-dashboard-config --force





```
**Full Changelog**: https://github.com/lara-zeus/dynamic-dashboard/compare/1.0.6...1.1.0

## 1.0.6 - 2023-07-07

### What's Changed

- fix migration file name by @atmonshi in https://github.com/lara-zeus/dynamic-dashboard/pull/19

**Full Changelog**: https://github.com/lara-zeus/dynamic-dashboard/compare/1.0.5...1.0.6

## 1.0.5 - 2023-07-06

### What's Changed

- add some validation for all widgets by @atmonshi in https://github.com/lara-zeus/dynamic-dashboard/pull/17

**Full Changelog**: https://github.com/lara-zeus/dynamic-dashboard/compare/1.0.4...1.0.5

## 1.0.4 - 2023-07-04

### What's Changed

- Bump dependabot/fetch-metadata from 1.5.1 to 1.6.0 by @dependabot in https://github.com/lara-zeus/dynamic-dashboard/pull/15
- update all dependecies by @atmonshi in https://github.com/lara-zeus/dynamic-dashboard/pull/16

### New Contributors

- @dependabot made their first contribution in https://github.com/lara-zeus/dynamic-dashboard/pull/15

**Full Changelog**: https://github.com/lara-zeus/dynamic-dashboard/compare/1.0.3...1.0.4

## 1.0.3 - 2023-06-30

### What's Changed

- tons of updates by @atmonshi in https://github.com/lara-zeus/dynamic-dashboard/pull/14
- 
- add new widgets: Forms, Menu, Library, Faq. All from Sky update Docs on how to make a new widget
- 
- fixes for phpstan
- 
- improve UI
- 
- refactor widget class
- 
- add a command to create a custom widget
- 

**Full Changelog**: https://github.com/lara-zeus/dynamic-dashboard/compare/1.0.2...1.0.3

## 1.0.2 - 2023-06-24

### What's Changed

- update zeus core by @atmonshi in https://github.com/lara-zeus/dynamic-dashboard/pull/13

**Full Changelog**: https://github.com/lara-zeus/dynamic-dashboard/compare/1.0.1...1.0.2

## 1.0.1 - 2023-06-19

### What's Changed

- fix primary color 🦩 by @atmonshi in https://github.com/lara-zeus/dynamic-dashboard/pull/12

**Full Changelog**: https://github.com/lara-zeus/dynamic-dashboard/compare/1.0.0...1.0.1

## 1.0.0 - 2023-06-19

### What's Changed

- refactor and prepare for stable release by @atmonshi in https://github.com/lara-zeus/dynamic-dashboard/pull/11

**Full Changelog**: https://github.com/lara-zeus/dynamic-dashboard/compare/0.0.8...1.0.0

## 0.0.8 - 2023-06-17

### What's Changed

- Refactor widgets by @atmonshi in https://github.com/lara-zeus/dynamic-dashboard/pull/10
- Update core by @atmonshi in https://github.com/lara-zeus/dynamic-dashboard/pull/9
- Imporve UI by @atmonshi in https://github.com/lara-zeus/dynamic-dashboard/pull/8
- Add sky widget by @atmonshi in https://github.com/lara-zeus/dynamic-dashboard/pull/7

**Full Changelog**: https://github.com/lara-zeus/dynamic-dashboard/compare/0.0.7...0.0.8

## 0.0.5 - 2023-06-16

### What's Changed

- Update config by @atmonshi in https://github.com/lara-zeus/dynamic-dashboard/pull/4

**Full Changelog**: https://github.com/lara-zeus/dynamic-dashboard/compare/0.0.4...0.0.5

## 0.0.4 - 2023-06-16

### What's Changed

- fix image path by @atmonshi in https://github.com/lara-zeus/dynamic-dashboard/pull/3

**Full Changelog**: https://github.com/lara-zeus/dynamic-dashboard/compare/0.0.3...0.0.4

## 0.0.3 - 2023-06-16

### What's Changed

- fix route name by @atmonshi in https://github.com/lara-zeus/dynamic-dashboard/pull/2

**Full Changelog**: https://github.com/lara-zeus/dynamic-dashboard/compare/0.0.2...0.0.3
