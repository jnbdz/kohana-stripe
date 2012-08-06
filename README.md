kohana-stripe
===========

Stripe payment Kohana module.

How to use
----------

###Setup:

To add the submodule with Git you need to apply these commands:

    git submodule init
    git submodule update

Then in the boostrap file add the Kohana module to the modules method.

Configuration File
----------

The config file is found inside the config folder of the module folder. Copy the config file named, stripe.php, and then paste the copy in the config file inside the config folder found in the application folder.

Now that the config file is inside application/config folder, add the informations needed, that are listed bellow.

You need the test keys (only if you are testing out the code) and the live keys (only when you are ready to go live) that you will get from your Stripe account, in the [settings section](https://manage.stripe.com/#account/apikeys).

1. test
    * secret_key
    * publishable_key
2. live
    * secret_key
    * publishable_key

-------


Copyright (C) 2012 Jean-Nicolas Boulay ([http://jean-nicolas.com/](http://jean-nicolas.com/))

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
