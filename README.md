# SatDar WordPress theme

Contributors: [Satyadarshin Perry](https://www.satyadarshin.com/author/granddesigner)
Requires at least: 4.0
Tested up to: 6.7
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

SatDar is an original WordPress theme built on CSS grid with PostCSS.

## Requirements

This theme is specifically designed for my own portfolio website. Whilst it is a project goal to incrementaly improve the theme's code quality and adherence to pertinent coding standards, it does not purport to function well in an arbitrary WordPress installation.  

Many of it's features revlove around [Jetpack](https://jetpack.com/blog/portfolios-wordpress-jetpack/)'s Portfolio Projects custom content type.


## Installation 

* In WordPress admin, go to *Appearance* > *themes* and click the *Add New* button.
* Click *Upload* and *Choose File*, then select the theme's ZIP file. Click *Install Now*.
* Click *Activate*.

## The development cycle

This project is part-demonstration of a structured development process:
* **Local Dev:** features a snapshot of the production database and partial plugin set, sufficient to develop the theme and UI features. Server setup run under Docker, running Node.js and NPM for PostCSS for the build. Heavy use of Git branches pushed to GitHub.
* **Staging:** remote, partial clone of production. Pulls theme code as *master*. Used for confirmation of update stability (WordPress core through all plugins), debugging, user feedback, all content creation.  
* **Production:** receives all content from staging. 

### Branches

* The published theme is always pulled from *master*. 
* The *foundation* branch features the older, deprecated theme code that was created with Zurb Foundation. It accepts modest feature modifications, refinements, and bug fixes. Requires SASS and a Ruby runtime in order to build. 
* The *empire* branch is a complete, framework-free rewrite, and entirely unstable. Requires Node.js and NPM for PostCSS for the build.

```bash
git clone git@github.com:Satyadarshin/satdar-wordpress-theme.git
```

