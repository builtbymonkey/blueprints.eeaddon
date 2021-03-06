<?php

// get the version from config.php
require PATH_THIRD.'blueprints/config.php';

$lang = array(
    
"blueprints_module_name" => $config['name'],
"blueprints_module_description" => $config['description'],
    
"blueprint_directory_label" =>
"Thumbnail Directory",

"blueprint_directory_detail" =>
"Enter the path to the directory where your template thumbnails/previews exist.",

"blueprint_template_heading" =>
"Template<p class=\"heading_description\">Choose a template to assign to this Publish Layout.</p>",

"blueprint_template_detailed_heading" =>
"Template<p class=\"heading_description\">Choose a template group, or specific templates to make visible in this Channel. Non-selected groups or templates will not appear in the Publish Page.</p>",

"blueprint_thumbnail_heading" =>
"Thumbnail<p class=\"heading_description\">Choose an image to represent your Publish Layout. Images should be sized to 155px wide, and max of 180px tall for best results.</p>",

"blueprint_layout_heading" =>
"Publish Layout Name<p class=\"heading_description\">Choose a friendly name to represent your Publish Layout to your content editors. They will see this name instead of the template name.</p>",

"blueprint_channel_heading" =>
"Channel",

"enable_detailed_template" =>
"Detailed Template Visibility?",

"enable_detailed_template_detail" =>
"By default only the templates you defined above will be visible in the Template dropdown or carousel on the publish page.
This setting lets you define more templates to display in the dropdown menu or carousel.",

"thumbnail_path" =>
"Thumbnails Path",

"thumbnail_path_detail" =>
"Change the path to your thumbnail files. If changed to something other than the default, 
the settings must be saved and reloaded. Path must be below your web root.<br /><br />Optimal image sizes are 155px by 180px.",

"enable_publish_layout_takeover" =>
"Mode",

"enable_publish_layout_takeover_detail" =>
"Set to <i>Advanced</i> if you want to allow template changes to immediately reflect the Publish Layout.<br />
Set to <i>Simple</i> to use the settings below to determine which templates are visible to the publisher for selection.",

"enable_carousel" =>
"Enable Template Carousel?",

"enable_carousel_detail" => 
"Set to <i>Yes</i> to replace the template dropdown menu with a carousel using the thumbnail images defined below.",

"enable_template_multi_channel" =>
"Enable assigning templates to multiple Channels?",

"enable_template_multi_channel_detail" => 
"If enabled, you will be able to assign a template, thus a Publish Layout, to more than 1 Channel. 
By default, if you choose a template that has a Publish Layout attached to it, but in a Channel other 
than the one the Publish Layout was created in, the Publish Layout will not be loaded. This option allows for such behavior.",

"enable_edit_menu_tweaks" =>
"Enabled Edit Menu Tweaks?",

"enable_edit_menu_tweaks_detail" =>
"If enabled, the Content > Edit menu in the main navigation will directly link to Channels just 
like the Publish option.<br /><b>The Blueprints Accessory must be installed.</b>",

"template_display_header" =>
"Visible Templates",

"template_display_detail" =>
"Select which templates you would like to be visible in the Structure Publish Tab. If a channel is 
not defined, all templates will be displayed in the Structure Publish Tab.",


// IGNORE
''=>'');

