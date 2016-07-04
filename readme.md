# Craft starter package

I've put together a small set of defaults to kickstart the development of a new Craft CMS project.

## Features

 - Ready to version control: files that need not to be in GIT are excluded
 - Database config is extracted to the `web/env.php` file
 - The `index.php` is also modified to require the environment file
 
## Folders

 - `/static` folder contains a Gulp setup that compiles SASS + JS to a minified version
 - `/temp` folder is just my convention to store client assets there, they ignored by GIT
 - `/web` is where you should copy the Craft installation

# Getting started
 
## Step 1

Download the Craft CMS package from https://craftcms.com/ and copy everything from the zip to the `web` directory.

Delete Craft's `public/index.php` and use the `_index.php` instead. Or _alternatively_ simply copy and paste this to the beginning of the `index.php` file:

    if ( file_exists("../env.php") )
    {
    	require_once 'env.php';
    }
    else 
    {
    	exit('<h1>Fatal error: no database environment file found!</h1><p>Please check the readme.md for instructions.<p>');
    }

## Step 2

Rename `web/_env.pho` to `env.php` and set the correct credentials.

# You are all set, proceed with installing Craft as usual

Follow me on Twitter: [@tiborsaas](http://twitter.com/tiborsaas)
