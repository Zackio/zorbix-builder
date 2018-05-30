# Zorbix Builder

## What

It's a page builder build built in Javascript for WordPress.

## Why

There are plenty of builder so why create another one?

This was made for my themes at zorbixthemes.com. The reason was because none of the ones on the market were right for me. Some where very clunky, some very bloated, some slow,
some overly complicated.

What I wanted was one that:

- Was fast
- Was completely optional, could be disabled and the shortcodes for the theme could be used without it
- Simple to use
- Was not a "website builder"
- Required the minimal of configuration and would work with any shortcode
- Didn't ship with a bunch of shortcodes
- Does not load code to the frontend - thusly will never slow down the site
- Stable - not constantly adding new features and breaking sites
- Uses CSS classes over options

I didn't want to build a "build a site" type theme laden with options but I did want to give users some control over their layout.

## How

The builder is mostly Javascript so it's not adding much bloat. There is some PHP of cause but it's kept to a minimum. The important thing is that it only loads on the front end and never to the backend.

## Status

It was very stable as has been used in themes. But it's been pulled out of the bigger Zorbix framework in order to isolate the builder functionality. So it needs testing and it needs new tests written.

## Future

I would like to convert the project from jQuery to VueJS or React. I would like to add a function to automatically create blocks for any shortcode installed.

## Info

Built with

- Webpack
- SASS
- Composer
- JQuery
