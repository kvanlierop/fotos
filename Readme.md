# Fotos
[Example](http://fotos.lukasepple.de/)
## Setup
* Modify text in `index.php` to personalize your Installation
* Modify `main.css` to customize style
* Create Folders in the directory of `index.php` to create categories
* Drop your pictures in your Folders
* You're done!
## Templating
* Put your template in template.php
* Replace the title of your page with `<?php echo $title; ?>`
* Into the `<ul>` of your Navigation insert `<?php echo $navitems; ?>` (This only prints `<li>`s not a wraping `<ul>`!)
* In your main container insert <?php echo $content; ?>, so there will be your Images.
* [Example template is here](./template.php)