# PROJECT CLOSED
# TestchanEngine
The engine of "Test.ch" imageboard

# What is it?

TestchanEngine is a site engine of "Test.ch" imageboard.

# Features

<ul>
  <li>BBcodes supporting</li>
  <li>Easy setup</li>
  <li>Defend from site's hacking</li>
  <li>Engine's working split to functions for easy managing</li>
</ul>

# Installing

First you should download engine's archive and put it into your site's folder. After you must to include engine to all your pages that will be worked in this engine.

```php
    require_once('path/to/engine/folder/engine.php');
```

## Setup

Second you must to open engine.php on your browser and open config.ini at any text editor. Set the engine's working: showing info, change page background, text color, language, host, username, hour time(12 hours or 24), showing errors, div's background(tred and answers).

## Adding new forum

Now you must to open newpage.php on your browser and fill the form: forum name and forum folder. After submit form, new forum will added on all pages.

## Using functions

If you already include engine, you can use all functions. For starting work, you must to write this:
```php
    #page code
    start_job('FORUM NAME');
    #page code
```
