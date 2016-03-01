----------------
# SC Generator Tag
----------------

This is a plugin for Joomla that allows you to remove or replace the <meta name="generator"> tag.

By default, Joomla outputs a generator tag that states that the site is generated using Joomla. While it is great to give Joomla credit where it is due, for security reasons it is generally better to avoid having this information here, as malicious hackers frequently scan the web looking for sites where the underlying software can easily be identified. They then know which sites to attack when a security alert is issued.

The recommended option is simply not to have a generator tag at all, but this plugin does allow you to provide an alternative string instead if required.

The generator tag is not visible to everyday users, so using this plugin will have zero *visible* effect on your site. It will, however, affect what is seen by automated systems such as search engines and hacker bots.

Please note: Although search engines will see any generator tag that you specify, please **do not** consider this plugin to be an SEO tool. The generator meta tag is not where you should be putting anything relevant to search engines; it is likely to be ignored by them or worse. You should instead use the description and keywords meta tags for this; these can already be configured in Joomla's core general configuration.

----------
## Version History
----------

* 1.0.0     2016-03-01: Initial release.

----------
## Installation
----------

This is a standard Joomla plugin. Installation is via Joomla's extension manager.

----------
## Usage
----------

The plugin has two paramters:

* Generator tag active? - Setting this to "No" (the default) will result in the generator meta tag simply not being output at all in your HTML. Setting it to "Yes" will result in it being output, but with your chosen string instead of Joomla's default string.

* Generator Tag String - If you specified "Yes" above, then use this field to define the string you want for your site's generator tag. If the option above is set to "No", then this string field is ignored.

----------
## Motivation
----------

This plugin was written from scratch after attempting to find a similar extension on the Joomla Extensions directory (JED).

An existing plugin does exist for this functionality (TJ Set Generator Tag) so some credit must go to the developers of that plugin. However it is has a bug that results in it not being able to remove the generator tag.

Note that although this plugin was written from scratch, the functionality to hide or change the generator tag actually only requires a single line calling a built-in Joomla API method. This line is effectively identical between this plugin and the existing one. This plugin does have the additional functionality to suppress the tag entirely, but it remains a very simple piece of code.

----------
## License
----------

As with all Joomla extensions, this plugin is licensed under the GPLv2. The full license document should have been included with the source code.
