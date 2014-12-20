# Epicrowd
Source of the main website for [Epicrowd](http://epicrowd.org) simposium.

[![Deployment status from dploy.io](https://dddmg2015.dploy.io/badge/45290641919850/17093.png)](http://dploy.io)

## Setup

1. If you don't have installed [npm](http://npmjs.org), [bower](http://bower.io) and [grunt](http://gruntjs.com/) do it now.

2. After install run the `npm install` command to install all the dependencies.

    ```
    $ npm install
    ```

3. Run `grunt` command to initialize.

    ```
    $ grunt
    ```

## Pay Attention

1. We use **bower** to manage all the dependencies.

    ```
      $ bower search name-package
      $ bower install name-package --save-dev
    ```

2. We use **grunt** to make hard work.

3. We work with two paths for images:

* `src` to images in development.
* `dist` to images in production.

> run `grunt img` command to minify and optmize images.

4. We use [browserSync](http://www.browsersync.io/) to test in differents browsers and devices.

> remove this script when production server.

    <script type='text/javascript'>//<![CDATA[
    ;document.write("<script defer src='//HOST:3000/socket.io/socket.io.js'><\/script><script defer src='//HOST:3001/client/browser-sync-client.0.9.1.js'><\/script>".replace(/HOST/g, location.hostname));
    //]]></script>

4. For best control of scripts, add libs and your scripts to compile and concatenate in `grunt-config.json` file, the task **uglify**.

## Have a nice job :)
