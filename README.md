EdpModuleLayouts
================
Version 1.0 Created by Evan Coury

Introduction
------------

EdpModuleLayouts is a very simple ZF2 module (less than 20 lines) that simply
allows you to specify alternative layouts to use for each module.

Usage
-----

Using EdpModuleLayouts is very, very simple. In any module config or autoloaded
config file simply specify the following:

```php
array(
    'module_layouts' => array(
        'ModuleName' => 'layout/some-layout',
    ),
);
```

That's it!
