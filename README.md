﻿sauerkraut
==========

Sauerkraut est le dossier de travail pour le wordpress du site http://comgraph.esad-stg.org.

Sauerkraut est également le nom du thème développé par les étudiants.


ajouter à la fin du fichier wp-config.php :
```php
if(is_admin()) {
  add_filter('filesystem_method', create_function('$a', 'return "direct";' )); define( 'FS_CHMOD_DIR', 0751 );
}
```

Tutoriaux CSS sur le site du zéro :

http://www.siteduzero.com/informatique/css/tutoriels


Plugins jQuery sticky post :
- http://bashooka.com/coding/jquery-sticky-scroll-plugins/
- http://mojotech.github.io/stickymojo/
- http://www.jquery4u.com/plugins/10-jquery-sticky-scroll-plugins/
- http://dropthebit.com/demos/stickyfloat/stickyfloat.html
- http://yckart.github.io/jquery.fixer.js/
- *** https://github.com/ymschaap/jquery-lockfixed#readme


Scrollbar :
- http://manos.malihu.gr/jquery-custom-content-scroller/
