=== autometa's WOODO ===
Contributors: JorgeAmVF
Donate link: https://quaestio.org/
Tags: shortcode, automation, metadata, taxonomy, cloud, category, tag, woocommerce
Requires at least: 2.5.0
Tested up to: 4.9.2
Stable Tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

It reproduces product categories and tags in products and it generates a cloud mixing categories and tags of products simply via: `[woocats]` and `[wootags]` and `[woodo]`.
== Description ==

**autometa's WOODO** is a simple plugin that uses the following shortcodes:

* `[woocats]` = to reproduce product categories;
* `[wootags]` = to reproduce product tags;
* `[woodo]`   = to generate a product taxonomies cloud.

**autometa's WOODO** is a standalone component of **[autometa](https://wordpress.org/plugins/autometa/)** shortcodes pack.

== Installation ==

1. Install it from *Dashboard*/*Plugins*/*Add Plugins* or download it to your plugin folder;
2. Activate it from *Dashboard*/*Plugins*/*Installed Plugins*;
3. Write the following shortcodes in text fields: `[woocats]`, `[wootags]`, `[woodo]`.

== Frequently Asked Questions ==

= Plugin Features =

**[autometa](https://wordpress.org/plugins/autometa/)** reproduces metadata information automatically via shorcodes in general, **autometa's WOODO** reproduces product taxonomy-related data in special.

= How To =

Just write one or more of the following shortcodes inside a text field and between brackets as usual: `[woocats]` and/or `[wootags]` and/or `[woodo]`.

= CSS Style Selectors =

* `#woocats`  = `[woocats]` ID;
* `#wootags`  = `[wootags]` ID;
* `#woodo`    = `[woodo]` ID;
* `.autometa` = **autometa** class.

= PHP Functions Reference =

* [`add_shortcode()`](https://developer.wordpress.org/reference/functions/add_shortcode/)
* [`get_the_term_list()`](https://developer.wordpress.org/reference/functions/get_the_term_list/)
* [`wp_tag_cloud()`](https://developer.wordpress.org/reference/functions/wp_tag_cloud/)
