# Word Count Filter

A Twig filter to count words in a string

## Requirements

This plugin requires Craft CMS 5.1.0 or later, and PHP 8.2 or later.

## Installation

You can install this plugin from the Plugin Store or with Composer.

#### From the Plugin Store

Go to the Plugin Store in your project’s Control Panel and search for “Word Count Filter”. Then press “Install”.

#### With Composer

Open your terminal and run the following commands:

```bash
# go to the project directory
cd /path/to/my-project.test

# tell Composer to load the plugin
composer require john-f-morton/craft-word-count-filter

# tell Craft to install the plugin
./craft plugin/install word-count-filter
```

## Usage

Use the `wordCount` filter in your Twig templates to count the number of words in a string:

```twig
{{ entry.body | wordCount }}
```
