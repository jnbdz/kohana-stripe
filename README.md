kohana-stripe
===========

Stripe payment Kohana module.

How to use
----------

###Setup:

To add the submodule with Git you need to use these commands:

    git submodule init
    git submodule update

Then in the boostrap file add this module, to the modules method.

###Adding the code:

In one of your methods or in PHP (OOP) __construct method, you add this line:

    Kohana_Stripe::init();

This will load the "stripe-php" library and will setup the secret key. Afterwards you can just use Stripe static classes following [Stripe documentation](https://stripe.com/docs/api?lang=php#top).

Configuration File
----------

You need the keys to configure this module. You can find the keys in your Stripe account, in the [settings section](https://manage.stripe.com/#account/apikeys).

1. status
2. test
    * secret_key
    * publishable_key
3. live
    * secret_key
    * publishable_key

The first parameter of the config file is "status". Status is for Kohana_Stripe to know whichof the set of keys it should use when loading the Stripe API. You can also create your own custom set of keys other than the two stanard ones (test and live).

-------


Copyright (C) 2012 Jean-Nicolas Boulay ([http://jean-nicolas.com/](http://jean-nicolas.com/))

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
