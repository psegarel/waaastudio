<?php 


$options['db_type'] = 'mysqli';
$options['db_host'] = 'localhost';
$options['db_port'] = '3306';
$options['db_passwd'] = 'aMKPJaVLBc';
$options['db_name'] = 'waaastudiocom';
$options['db_user'] = 'waaastudiocom';
$options['packages'] = array (
  'platforms' => 
  array (
    'drupal' => 
    array (
      'short_name' => 'drupal',
      'version' => '6.26',
      'description' => 'This platform is running Drupal 6.26',
    ),
  ),
  'profiles' => 
  array (
    'default' => 
    array (
      'name' => 'default',
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/profiles/default/default.profile',
      'project' => '',
      'info' => 
      array (
        'name' => 'Pressflow',
        'description' => 'Select this profile to enable some basic Drupal functionality and the default theme.',
        'languages' => 
        array (
          0 => 'en',
        ),
        'version' => NULL,
      ),
      'version' => '6.26',
      'status' => 1,
    ),
  ),
  'modules' => 
  array (
    'aggregator' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/modules/aggregator/aggregator.module',
      'name' => 'aggregator',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Aggregator',
        'description' => 'Aggregates syndicated content (RSS, RDF, and Atom feeds).',
        'package' => 'Core - optional',
        'version' => '6.26',
        'core' => '6.x',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => '6.26',
    ),
    'block' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/modules/block/block.module',
      'name' => 'block',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Block',
        'description' => 'Controls the boxes that are displayed around the main content.',
        'package' => 'Core - required',
        'version' => '6.26',
        'core' => '6.x',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => '6.26',
    ),
    'blog' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/modules/blog/blog.module',
      'name' => 'blog',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Blog',
        'description' => 'Enables keeping easily and regularly updated user web pages or blogs.',
        'package' => 'Core - optional',
        'version' => '6.26',
        'core' => '6.x',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => '6.26',
    ),
    'blogapi' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/modules/blogapi/blogapi.module',
      'name' => 'blogapi',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Blog API',
        'description' => 'Allows users to post content using applications that support XML-RPC blog APIs.',
        'package' => 'Core - optional',
        'version' => '6.26',
        'core' => '6.x',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => '6.26',
    ),
    'book' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/modules/book/book.module',
      'name' => 'book',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Book',
        'description' => 'Allows users to structure site pages in a hierarchy or outline.',
        'package' => 'Core - optional',
        'version' => '6.26',
        'core' => '6.x',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => '6.26',
    ),
    'color' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/modules/color/color.module',
      'name' => 'color',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Color',
        'description' => 'Allows the user to change the color scheme of certain themes.',
        'package' => 'Core - optional',
        'version' => '6.26',
        'core' => '6.x',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => '6.26',
    ),
    'comment' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/modules/comment/comment.module',
      'name' => 'comment',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6005',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Comment',
        'description' => 'Allows users to comment on and discuss published content.',
        'package' => 'Core - optional',
        'version' => '6.26',
        'core' => '6.x',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => '6.26',
    ),
    'contact' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/modules/contact/contact.module',
      'name' => 'contact',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Contact',
        'description' => 'Enables the use of both personal and site-wide contact forms.',
        'package' => 'Core - optional',
        'version' => '6.26',
        'core' => '6.x',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => '6.26',
    ),
    'cookie_cache_bypass' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/modules/cookie_cache_bypass/cookie_cache_bypass.module',
      'name' => 'cookie_cache_bypass',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Cookie cache bypass',
        'description' => 'Sets a cookie on form submission directing a reverse proxy to temporarily not serve cached pages for an anonymous user that just submitted content.',
        'core' => '6.x',
        'package' => 'Pressflow',
        'dependencies' => 
        array (
        ),
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'dblog' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/modules/dblog/dblog.module',
      'name' => 'dblog',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Database logging',
        'description' => 'Logs and records system events to the database.',
        'package' => 'Core - optional',
        'version' => '6.26',
        'core' => '6.x',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => '6.26',
    ),
    'filter' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/modules/filter/filter.module',
      'name' => 'filter',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Filter',
        'description' => 'Handles the filtering of content in preparation for display.',
        'package' => 'Core - required',
        'version' => '6.26',
        'core' => '6.x',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => '6.26',
    ),
    'forum' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/modules/forum/forum.module',
      'name' => 'forum',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Forum',
        'description' => 'Enables threaded discussions about general topics.',
        'dependencies' => 
        array (
          0 => 'taxonomy',
          1 => 'comment',
        ),
        'package' => 'Core - optional',
        'version' => '6.26',
        'core' => '6.x',
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => '6.26',
    ),
    'help' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/modules/help/help.module',
      'name' => 'help',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Help',
        'description' => 'Manages the display of online help.',
        'package' => 'Core - optional',
        'version' => '6.26',
        'core' => '6.x',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => '6.26',
    ),
    'locale' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/modules/locale/locale.module',
      'name' => 'locale',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Locale',
        'description' => 'Adds language handling functionality and enables the translation of the user interface to languages other than English.',
        'package' => 'Core - optional',
        'version' => '6.26',
        'core' => '6.x',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => '6.26',
    ),
    'menu' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/modules/menu/menu.module',
      'name' => 'menu',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Menu',
        'description' => 'Allows administrators to customize the site navigation menu.',
        'package' => 'Core - optional',
        'version' => '6.26',
        'core' => '6.x',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => '6.26',
    ),
    'node' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/modules/node/node.module',
      'name' => 'node',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node',
        'description' => 'Allows content to be submitted to the site and displayed on pages.',
        'package' => 'Core - required',
        'version' => '6.26',
        'core' => '6.x',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => '6.26',
    ),
    'openid' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/modules/openid/openid.module',
      'name' => 'openid',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'OpenID',
        'description' => 'Allows users to log into your site using OpenID.',
        'version' => '6.26',
        'package' => 'Core - optional',
        'core' => '6.x',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => '6.26',
    ),
    'admin' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01',
      'name' => 'admin',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6202',
      'weight' => '1',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'blockcache_alter' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01',
      'name' => 'blockcache_alter',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'boost' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01',
      'name' => 'boost',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '-90',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'cache' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01',
      'name' => 'cache',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'config_perms' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01',
      'name' => 'config_perms',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'css_emimage' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01',
      'name' => 'css_emimage',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'dbtuner' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01',
      'name' => 'dbtuner',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'esi' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01',
      'name' => 'esi',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'expire' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01',
      'name' => 'expire',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'filefield_nginx_progress' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01',
      'name' => 'filefield_nginx_progress',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6100',
      'weight' => '1',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'fpa' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01',
      'name' => 'fpa',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'httprl' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01',
      'name' => 'httprl',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'login_security' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01',
      'name' => 'login_security',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'private_upload' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01',
      'name' => 'private_upload',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'purge' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01',
      'name' => 'purge',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'readonlymode' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01',
      'name' => 'readonlymode',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'robotstxt' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01',
      'name' => 'robotstxt',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6100',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'seckit' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01',
      'name' => 'seckit',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'securesite' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01',
      'name' => 'securesite',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'site_verify' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01',
      'name' => 'site_verify',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'taxonomy_edge' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01',
      'name' => 'taxonomy_edge',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'views_taxonomy_edge' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01',
      'name' => 'views_taxonomy_edge',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'textile' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01',
      'name' => 'textile',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'variable_clean' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01',
      'name' => 'variable_clean',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'views404' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01',
      'name' => 'views404',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'views_content_cache_test' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01',
      'name' => 'views_content_cache_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'views_content_cache' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01',
      'name' => 'views_content_cache',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'path' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/modules/path/path.module',
      'name' => 'path',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Path',
        'description' => 'Allows users to rename URLs.',
        'package' => 'Core - optional',
        'version' => '6.26',
        'core' => '6.x',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => '6.26',
    ),
    'path_alias_cache' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/modules/path_alias_cache/path_alias_cache.module',
      'name' => 'path_alias_cache',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '1',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Path alias cache',
        'description' => 'A path alias implementation which adds a cache to the core version.',
        'core' => '6.x',
        'package' => 'Pressflow',
        'dependencies' => 
        array (
        ),
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'php' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/modules/php/php.module',
      'name' => 'php',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'PHP filter',
        'description' => 'Allows embedded PHP code/snippets to be evaluated.',
        'package' => 'Core - optional',
        'version' => '6.26',
        'core' => '6.x',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => '6.26',
    ),
    'ping' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/modules/ping/ping.module',
      'name' => 'ping',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Ping',
        'description' => 'Alerts other sites when your site has been updated.',
        'package' => 'Core - optional',
        'version' => '6.26',
        'core' => '6.x',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => '6.26',
    ),
    'poll' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/modules/poll/poll.module',
      'name' => 'poll',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Poll',
        'description' => 'Allows your site to capture votes on different topics in the form of multiple choice questions.',
        'package' => 'Core - optional',
        'version' => '6.26',
        'core' => '6.x',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => '6.26',
    ),
    'profile' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/modules/profile/profile.module',
      'name' => 'profile',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Profile',
        'description' => 'Supports configurable user profiles.',
        'package' => 'Core - optional',
        'version' => '6.26',
        'core' => '6.x',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => '6.26',
    ),
    'search' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/modules/search/search.module',
      'name' => 'search',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Search',
        'description' => 'Enables site-wide keyword searching.',
        'package' => 'Core - optional',
        'version' => '6.26',
        'core' => '6.x',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => '6.26',
    ),
    'simpletest' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/modules/simpletest/simpletest.module',
      'name' => 'simpletest',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'SimpleTest',
        'description' => 'Provides a framework for unit and functional testing.',
        'package' => 'Development',
        'core' => '6.x',
        'php' => '5 ; Drupal 6',
        'files' => 
        array (
          0 => 'simpletest.module',
          1 => 'simpletest.pages.inc',
          2 => 'simpletest.install',
          3 => 'simpletest.test',
          4 => 'drupal_web_test_case.php',
          5 => 'tests/block.test',
        ),
        'version' => '6.x-2.10',
        'project' => 'simpletest',
        'datestamp' => '1262212859',
        'dependencies' => 
        array (
        ),
      ),
      'project' => 'simpletest',
      'version' => '6.x-2.10',
    ),
    'statistics' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/modules/statistics/statistics.module',
      'name' => 'statistics',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Statistics',
        'description' => 'Logs access statistics for your site.',
        'package' => 'Core - optional',
        'version' => '6.26',
        'core' => '6.x',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => '6.26',
    ),
    'syslog' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/modules/syslog/syslog.module',
      'name' => 'syslog',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Syslog',
        'description' => 'Logs and records system events to syslog.',
        'package' => 'Core - optional',
        'version' => '6.26',
        'core' => '6.x',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => '6.26',
    ),
    'system' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/modules/system/system.module',
      'name' => 'system',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6055',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'System',
        'description' => 'Handles general site configuration for administrators.',
        'package' => 'Core - required',
        'version' => '6.26',
        'core' => '6.x',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => '6.26',
    ),
    'taxonomy' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/modules/taxonomy/taxonomy.module',
      'name' => 'taxonomy',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Taxonomy',
        'description' => 'Enables the categorization of content.',
        'package' => 'Core - optional',
        'version' => '6.26',
        'core' => '6.x',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => '6.26',
    ),
    'throttle' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/modules/throttle/throttle.module',
      'name' => 'throttle',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Throttle',
        'description' => 'Handles the auto-throttling mechanism, to control site congestion.',
        'package' => 'Core - optional',
        'version' => '6.26',
        'core' => '6.x',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => '6.26',
    ),
    'tracker' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/modules/tracker/tracker.module',
      'name' => 'tracker',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Tracker',
        'description' => 'Enables tracking of recent posts for users.',
        'dependencies' => 
        array (
          0 => 'comment',
        ),
        'package' => 'Core - optional',
        'version' => '6.26',
        'core' => '6.x',
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => '6.26',
    ),
    'translation' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/modules/translation/translation.module',
      'name' => 'translation',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Content translation',
        'description' => 'Allows content to be translated into different languages.',
        'dependencies' => 
        array (
          0 => 'locale',
        ),
        'package' => 'Core - optional',
        'version' => '6.26',
        'core' => '6.x',
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => '6.26',
    ),
    'trigger' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/modules/trigger/trigger.module',
      'name' => 'trigger',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Trigger',
        'description' => 'Enables actions to be fired on certain system events, such as when new content is created.',
        'package' => 'Core - optional',
        'version' => '6.26',
        'core' => '6.x',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => '6.26',
    ),
    'update' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/modules/update/update.module',
      'name' => 'update',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Update status',
        'description' => 'Checks the status of available updates for Drupal and your installed modules and themes.',
        'version' => '6.26',
        'package' => 'Core - optional',
        'core' => '6.x',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => '6.26',
    ),
    'upload' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/modules/upload/upload.module',
      'name' => 'upload',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Upload',
        'description' => 'Allows users to upload and attach files to content.',
        'package' => 'Core - optional',
        'version' => '6.26',
        'core' => '6.x',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => '6.26',
    ),
    'user' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/modules/user/user.module',
      'name' => 'user',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'User',
        'description' => 'Manages the user registration and login system.',
        'package' => 'Core - required',
        'version' => '6.26',
        'core' => '6.x',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => '6.26',
    ),
    'advagg' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/advagg/advagg.module',
      'name' => 'advagg',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6110',
      'weight' => '250',
      'info' => 
      array (
        'name' => 'Advanced CSS/JS Aggregation',
        'description' => 'Aggregates multiple CSS/JS files, serves them with gzip encoding and smart client-side cache headers.',
        'package' => 'Advanced CSS/JS Aggregation',
        'core' => '6.x',
        'version' => '6.x-1.8',
        'project' => 'advagg',
        'datestamp' => '1332962738',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'advagg',
      'version' => '6.x-1.8',
    ),
    'advagg_bundler' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/advagg/advagg_bundler/advagg_bundler.module',
      'name' => 'advagg_bundler',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'AdvAgg Bundler',
        'description' => 'Provides intelligent bundling of CSS and JS files by grouping files that belong together.',
        'package' => 'Advanced CSS/JS Aggregation',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'advagg',
        ),
        'version' => '6.x-1.8',
        'project' => 'advagg',
        'datestamp' => '1332962738',
        'php' => '4.3.5',
      ),
      'project' => 'advagg',
      'version' => '6.x-1.8',
    ),
    'advagg_css_compress' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/advagg/advagg_css_compress/advagg_css_compress.module',
      'name' => 'advagg_css_compress',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6100',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'AdvAgg Compress CSS',
        'description' => 'Compress CSS with a 3rd party compressor, CSSTidy currently.',
        'package' => 'Advanced CSS/JS Aggregation',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'advagg',
        ),
        'php' => '5.0',
        'version' => '6.x-1.8',
        'project' => 'advagg',
        'datestamp' => '1332962738',
      ),
      'project' => 'advagg',
      'version' => '6.x-1.8',
    ),
    'advagg_js_cdn' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/advagg/advagg_js_cdn/advagg_js_cdn.module',
      'name' => 'advagg_js_cdn',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'AdvAgg CDN Javascript',
        'description' => 'Use a shared CDN for javascript libraries, Google Libraries API currently.',
        'package' => 'Advanced CSS/JS Aggregation',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'advagg',
        ),
        'version' => '6.x-1.8',
        'project' => 'advagg',
        'datestamp' => '1332962738',
        'php' => '4.3.5',
      ),
      'project' => 'advagg',
      'version' => '6.x-1.8',
    ),
    'advagg_js_compress' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/advagg/advagg_js_compress/advagg_js_compress.module',
      'name' => 'advagg_js_compress',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6103',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'AdvAgg Compress Javascript',
        'description' => 'Compress Javascript with a 3rd party compressor, JSMin+ currently.',
        'package' => 'Advanced CSS/JS Aggregation',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'advagg',
        ),
        'version' => '6.x-1.8',
        'project' => 'advagg',
        'datestamp' => '1332962738',
        'php' => '4.3.5',
      ),
      'project' => 'advagg',
      'version' => '6.x-1.8',
    ),
    'auto_nodetitle' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/auto_nodetitle/auto_nodetitle.module',
      'name' => 'auto_nodetitle',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '1',
      'weight' => '5',
      'info' => 
      array (
        'name' => 'Automatic Nodetitles',
        'description' => 'Allows hiding of the content title field and automatic title creation.',
        'core' => '6.x',
        'version' => '6.x-1.2',
        'project' => 'auto_nodetitle',
        'datestamp' => '1249042505',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'auto_nodetitle',
      'version' => '6.x-1.2',
    ),
    'backup_migrate' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/backup_migrate/backup_migrate.module',
      'name' => 'backup_migrate',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '2006',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Backup and Migrate',
        'description' => 'Backup or migrate the Drupal Database quickly and without unnecessary data.',
        'core' => '6.x',
        'version' => '6.x-2.5',
        'project' => 'backup_migrate',
        'datestamp' => '1330970437',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'backup_migrate',
      'version' => '6.x-2.5',
    ),
    'content' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/cck/content.module',
      'name' => 'content',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6010',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Content',
        'description' => 'Allows administrators to define new content types.',
        'package' => 'CCK',
        'core' => '6.x',
        'version' => '6.x-2.9',
        'project' => 'cck',
        'datestamp' => '1294407979',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'cck',
      'version' => '6.x-2.9',
    ),
    'content_copy' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/cck/modules/content_copy/content_copy.module',
      'name' => 'content_copy',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Content Copy',
        'description' => 'Enables ability to import/export field definitions.',
        'dependencies' => 
        array (
          0 => 'content',
        ),
        'package' => 'CCK',
        'core' => '6.x',
        'version' => '6.x-2.9',
        'project' => 'cck',
        'datestamp' => '1294407979',
        'php' => '4.3.5',
      ),
      'project' => 'cck',
      'version' => '6.x-2.9',
    ),
    'content_permissions' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/cck/modules/content_permissions/content_permissions.module',
      'name' => 'content_permissions',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Content Permissions',
        'description' => 'Set field-level permissions for CCK fields.',
        'package' => 'CCK',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'content',
        ),
        'version' => '6.x-2.9',
        'project' => 'cck',
        'datestamp' => '1294407979',
        'php' => '4.3.5',
      ),
      'project' => 'cck',
      'version' => '6.x-2.9',
    ),
    'fieldgroup' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/cck/modules/fieldgroup/fieldgroup.module',
      'name' => 'fieldgroup',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6007',
      'weight' => '9',
      'info' => 
      array (
        'name' => 'Fieldgroup',
        'description' => 'Create display groups for CCK fields.',
        'dependencies' => 
        array (
          0 => 'content',
        ),
        'package' => 'CCK',
        'core' => '6.x',
        'version' => '6.x-2.9',
        'project' => 'cck',
        'datestamp' => '1294407979',
        'php' => '4.3.5',
      ),
      'project' => 'cck',
      'version' => '6.x-2.9',
    ),
    'nodereference' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/cck/modules/nodereference/nodereference.module',
      'name' => 'nodereference',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node Reference',
        'description' => 'Defines a field type for referencing one node from another.',
        'dependencies' => 
        array (
          0 => 'content',
          1 => 'text',
          2 => 'optionwidgets',
        ),
        'package' => 'CCK',
        'core' => '6.x',
        'version' => '6.x-2.9',
        'project' => 'cck',
        'datestamp' => '1294407979',
        'php' => '4.3.5',
      ),
      'project' => 'cck',
      'version' => '6.x-2.9',
    ),
    'number' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/cck/modules/number/number.module',
      'name' => 'number',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Number',
        'description' => 'Defines numeric field types.',
        'dependencies' => 
        array (
          0 => 'content',
        ),
        'package' => 'CCK',
        'core' => '6.x',
        'version' => '6.x-2.9',
        'project' => 'cck',
        'datestamp' => '1294407979',
        'php' => '4.3.5',
      ),
      'project' => 'cck',
      'version' => '6.x-2.9',
    ),
    'optionwidgets' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/cck/modules/optionwidgets/optionwidgets.module',
      'name' => 'optionwidgets',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Option Widgets',
        'description' => 'Defines selection, check box and radio button widgets for text and numeric fields.',
        'dependencies' => 
        array (
          0 => 'content',
        ),
        'package' => 'CCK',
        'core' => '6.x',
        'version' => '6.x-2.9',
        'project' => 'cck',
        'datestamp' => '1294407979',
        'php' => '4.3.5',
      ),
      'project' => 'cck',
      'version' => '6.x-2.9',
    ),
    'text' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/cck/modules/text/text.module',
      'name' => 'text',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6003',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Text',
        'description' => 'Defines simple text field types.',
        'dependencies' => 
        array (
          0 => 'content',
        ),
        'package' => 'CCK',
        'core' => '6.x',
        'version' => '6.x-2.9',
        'project' => 'cck',
        'datestamp' => '1294407979',
        'php' => '4.3.5',
      ),
      'project' => 'cck',
      'version' => '6.x-2.9',
    ),
    'userreference' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/cck/modules/userreference/userreference.module',
      'name' => 'userreference',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'User Reference',
        'description' => 'Defines a field type for referencing a user from a node.',
        'dependencies' => 
        array (
          0 => 'content',
          1 => 'text',
          2 => 'optionwidgets',
        ),
        'package' => 'CCK',
        'core' => '6.x',
        'version' => '6.x-2.9',
        'project' => 'cck',
        'datestamp' => '1294407979',
        'php' => '4.3.5',
      ),
      'project' => 'cck',
      'version' => '6.x-2.9',
    ),
    'context' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/context/context.module',
      'name' => 'context',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Context',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'description' => 'Provide modules with a cache that lasts for a single page request.',
        'package' => 'Context',
        'core' => '6.x',
        'version' => '6.x-3.0',
        'project' => 'context',
        'datestamp' => '1282588006',
        'php' => '4.3.5',
      ),
      'project' => 'context',
      'version' => '6.x-3.0',
    ),
    'context_layouts' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/context/context_layouts/context_layouts.module',
      'name' => 'context_layouts',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Context layouts',
        'description' => 'Allow theme layer to provide multiple region layouts and integrate with context.',
        'dependencies' => 
        array (
          0 => 'context',
        ),
        'package' => 'Context',
        'core' => '6.x',
        'version' => '6.x-3.0',
        'project' => 'context',
        'datestamp' => '1282588006',
        'php' => '4.3.5',
      ),
      'project' => 'context',
      'version' => '6.x-3.0',
    ),
    'context_ui' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/context/context_ui/context_ui.module',
      'name' => 'context_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Context UI',
        'description' => 'Provides a simple UI for settings up a site structure using Context.',
        'dependencies' => 
        array (
          0 => 'context',
        ),
        'package' => 'Context',
        'core' => '6.x',
        'version' => '6.x-3.0',
        'project' => 'context',
        'datestamp' => '1282588006',
        'php' => '4.3.5',
      ),
      'project' => 'context',
      'version' => '6.x-3.0',
    ),
    'adminrole' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01',
      'name' => 'adminrole',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'dhtml_menu' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01',
      'name' => 'dhtml_menu',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6003',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'extlink' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01',
      'name' => 'extlink',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6100',
      'weight' => '1',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'fontyourface' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01',
      'name' => 'fontyourface',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'common_fonts' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01',
      'name' => 'common_fonts',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'fontsquirrel' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01',
      'name' => 'fontsquirrel',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'fonts_com' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01',
      'name' => 'fonts_com',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'google_fonts_api' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01',
      'name' => 'google_fonts_api',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'kernest' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01',
      'name' => 'kernest',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'local_fonts' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01',
      'name' => 'local_fonts',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'typekit_api' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01',
      'name' => 'typekit_api',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'memcache' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01',
      'name' => 'memcache',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'memcache_admin' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01',
      'name' => 'memcache_admin',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6001',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'memcache_test' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01',
      'name' => 'memcache_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'modalframe' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01',
      'name' => 'modalframe',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'modalframe_example' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01',
      'name' => 'modalframe_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'node_convert' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01',
      'name' => 'node_convert',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'poormanscron' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01',
      'name' => 'poormanscron',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'seochecklist' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01',
      'name' => 'seochecklist',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'varnish' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01',
      'name' => 'varnish',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'bulk_export' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/ctools/bulk_export/bulk_export.module',
      'name' => 'bulk_export',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Bulk Export',
        'description' => 'Performs bulk exporting of data objects known about by Chaos tools.',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'package' => 'Chaos tool suite',
        'version' => '6.x-1.8',
        'project' => 'ctools',
        'datestamp' => '1288393844',
        'php' => '4.3.5',
      ),
      'project' => 'ctools',
      'version' => '6.x-1.8',
    ),
    'ctools' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/ctools/ctools.module',
      'name' => 'ctools',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6007',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Chaos tools',
        'description' => 'A library of helpful tools by Merlin of Chaos.',
        'core' => '6.x',
        'package' => 'Chaos tool suite',
        'version' => '6.x-1.8',
        'project' => 'ctools',
        'datestamp' => '1288393844',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'ctools',
      'version' => '6.x-1.8',
    ),
    'ctools_access_ruleset' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/ctools/ctools_access_ruleset/ctools_access_ruleset.module',
      'name' => 'ctools_access_ruleset',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Custom rulesets',
        'description' => 'Create custom, exportable, reusable access rulesets for applications like Panels.',
        'core' => '6.x',
        'package' => 'Chaos tool suite',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'version' => '6.x-1.8',
        'project' => 'ctools',
        'datestamp' => '1288393844',
        'php' => '4.3.5',
      ),
      'project' => 'ctools',
      'version' => '6.x-1.8',
    ),
    'ctools_ajax_sample' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/ctools/ctools_ajax_sample/ctools_ajax_sample.module',
      'name' => 'ctools_ajax_sample',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Chaos Tools (CTools) AJAX Example',
        'description' => 'Shows how to use the power of Chaos AJAX.',
        'package' => 'Chaos tool suite',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'version' => '6.x-1.8',
        'core' => '6.x',
        'project' => 'ctools',
        'datestamp' => '1288393844',
        'php' => '4.3.5',
      ),
      'project' => 'ctools',
      'version' => '6.x-1.8',
    ),
    'ctools_custom_content' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/ctools/ctools_custom_content/ctools_custom_content.module',
      'name' => 'ctools_custom_content',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Custom content panes',
        'description' => 'Create custom, exportable, reusable content panes for applications like Panels.',
        'core' => '6.x',
        'package' => 'Chaos tool suite',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'version' => '6.x-1.8',
        'project' => 'ctools',
        'datestamp' => '1288393844',
        'php' => '4.3.5',
      ),
      'project' => 'ctools',
      'version' => '6.x-1.8',
    ),
    'ctools_plugin_example' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/ctools/ctools_plugin_example/ctools_plugin_example.module',
      'name' => 'ctools_plugin_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Chaos Tools (CTools) Plugin Example',
        'description' => 'Shows how an external module can provide ctools plugins (for Panels, etc.).',
        'package' => 'Chaos tool suite',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'panels',
          2 => 'page_manager',
          3 => 'advanced_help',
        ),
        'core' => '6.x',
        'version' => '6.x-1.8',
        'project' => 'ctools',
        'datestamp' => '1288393844',
        'php' => '4.3.5',
      ),
      'project' => 'ctools',
      'version' => '6.x-1.8',
    ),
    'page_manager' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/ctools/page_manager/page_manager.module',
      'name' => 'page_manager',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6101',
      'weight' => '99',
      'info' => 
      array (
        'name' => 'Page manager',
        'description' => 'Provides a UI and API to manage pages within the site.',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'package' => 'Chaos tool suite',
        'version' => '6.x-1.8',
        'project' => 'ctools',
        'datestamp' => '1288393844',
        'php' => '4.3.5',
      ),
      'project' => 'ctools',
      'version' => '6.x-1.8',
    ),
    'stylizer' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/ctools/stylizer/stylizer.module',
      'name' => 'stylizer',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Stylizer',
        'description' => 'Create custom styles for applications such as Panels.',
        'core' => '6.x',
        'package' => 'Chaos tool suite',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'version' => '6.x-1.8',
        'project' => 'ctools',
        'datestamp' => '1288393844',
        'php' => '4.3.5',
      ),
      'project' => 'ctools',
      'version' => '6.x-1.8',
    ),
    'views_content' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/ctools/views_content/views_content.module',
      'name' => 'views_content',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views content panes',
        'description' => 'Allows Views content to be used in Panels, Dashboard and other modules which use the CTools Content API.',
        'package' => 'Chaos tool suite',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'views',
        ),
        'core' => '6.x',
        'version' => '6.x-1.8',
        'project' => 'ctools',
        'datestamp' => '1288393844',
        'php' => '4.3.5',
      ),
      'project' => 'ctools',
      'version' => '6.x-1.8',
    ),
    'date' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/date/date/date.module',
      'name' => 'date',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6005',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date',
        'description' => 'Defines CCK date/time fields and widgets.',
        'dependencies' => 
        array (
          0 => 'content',
          1 => 'date_api',
          2 => 'date_timezone',
        ),
        'package' => 'Date/Time',
        'core' => '6.x',
        'version' => '6.x-2.9',
        'project' => 'date',
        'datestamp' => '1335549078',
        'php' => '4.3.5',
      ),
      'project' => 'date',
      'version' => '6.x-2.9',
    ),
    'date_api' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/date/date_api.module',
      'name' => 'date_api',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6006',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date API',
        'description' => 'A Date API that can be used by other modules.',
        'package' => 'Date/Time',
        'core' => '6.x',
        'version' => '6.x-2.9',
        'project' => 'date',
        'datestamp' => '1335549078',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'date',
      'version' => '6.x-2.9',
    ),
    'date_locale' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/date/date_locale/date_locale.module',
      'name' => 'date_locale',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date Locale',
        'description' => 'Allows the site admin to configure multiple formats for date/time display to tailor dates for a specific locale or audience.',
        'package' => 'Date/Time',
        'dependencies' => 
        array (
          0 => 'date_api',
          1 => 'locale',
        ),
        'core' => '6.x',
        'version' => '6.x-2.9',
        'project' => 'date',
        'datestamp' => '1335549078',
        'php' => '4.3.5',
      ),
      'project' => 'date',
      'version' => '6.x-2.9',
    ),
    'date_php4' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/date/date_php4/date_php4.module',
      'name' => 'date_php4',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date PHP4',
        'description' => 'Emulate PHP 5.2 date functions in PHP 4.x, PHP 5.0, and PHP 5.1. Required when using the Date API with PHP versions less than PHP 5.2.',
        'package' => 'Date/Time',
        'dependencies' => 
        array (
          0 => 'date_api',
        ),
        'core' => '6.x',
        'version' => '6.x-2.9',
        'project' => 'date',
        'datestamp' => '1335549078',
        'php' => '4.3.5',
      ),
      'project' => 'date',
      'version' => '6.x-2.9',
    ),
    'date_popup' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/date/date_popup/date_popup.module',
      'name' => 'date_popup',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date Popup',
        'description' => 'Enables jquery popup calendars and time entry widgets for selecting dates and times.',
        'dependencies' => 
        array (
          0 => 'date_api',
          1 => 'date_timezone',
        ),
        'package' => 'Date/Time',
        'core' => '6.x',
        'version' => '6.x-2.9',
        'project' => 'date',
        'datestamp' => '1335549078',
        'php' => '4.3.5',
      ),
      'project' => 'date',
      'version' => '6.x-2.9',
    ),
    'date_repeat' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/date/date_repeat/date_repeat.module',
      'name' => 'date_repeat',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date Repeat API',
        'description' => 'A Date Repeat API to calculate repeating dates and times from iCal rules.',
        'dependencies' => 
        array (
          0 => 'date_api',
        ),
        'package' => 'Date/Time',
        'core' => '6.x',
        'version' => '6.x-2.9',
        'project' => 'date',
        'datestamp' => '1335549078',
        'php' => '4.3.5',
      ),
      'project' => 'date',
      'version' => '6.x-2.9',
    ),
    'date_timezone' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/date/date_timezone/date_timezone.module',
      'name' => 'date_timezone',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '5200',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date Timezone',
        'description' => 'Needed when using Date API. Overrides site and user timezone handling to set timezone names instead of offsets.',
        'package' => 'Date/Time',
        'dependencies' => 
        array (
          0 => 'date_api',
        ),
        'core' => '6.x',
        'version' => '6.x-2.9',
        'project' => 'date',
        'datestamp' => '1335549078',
        'php' => '4.3.5',
      ),
      'project' => 'date',
      'version' => '6.x-2.9',
    ),
    'date_tools' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/date/date_tools/date_tools.module',
      'name' => 'date_tools',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date Tools',
        'description' => 'Tools to import and auto-create dates and calendars.',
        'dependencies' => 
        array (
          0 => 'content',
          1 => 'date',
        ),
        'package' => 'Date/Time',
        'core' => '6.x',
        'version' => '6.x-2.9',
        'project' => 'date',
        'datestamp' => '1335549078',
        'php' => '4.3.5',
      ),
      'project' => 'date',
      'version' => '6.x-2.9',
    ),
    'devel' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/devel/devel.module',
      'name' => 'devel',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '88',
      'info' => 
      array (
        'name' => 'Devel',
        'description' => 'Various blocks, pages, and functions for developers.',
        'package' => 'Development',
        'dependencies' => 
        array (
          0 => 'menu',
        ),
        'core' => '6.x',
        'version' => '6.x-1.26',
        'project' => 'devel',
        'datestamp' => '1311355315',
        'php' => '4.3.5',
      ),
      'project' => 'devel',
      'version' => '6.x-1.26',
    ),
    'devel_generate' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/devel/devel_generate.module',
      'name' => 'devel_generate',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Devel generate',
        'description' => 'Generate dummy users, nodes, and taxonomy terms.',
        'package' => 'Development',
        'core' => '6.x',
        'version' => '6.x-1.26',
        'project' => 'devel',
        'datestamp' => '1311355315',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'devel',
      'version' => '6.x-1.26',
    ),
    'devel_node_access' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/devel/devel_node_access.module',
      'name' => 'devel_node_access',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Devel node access',
        'description' => 'Developer block and page illustrating relevant node_access records.',
        'package' => 'Development',
        'core' => '6.x',
        'version' => '6.x-1.26',
        'project' => 'devel',
        'datestamp' => '1311355315',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'devel',
      'version' => '6.x-1.26',
    ),
    'disable_messages' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/disable_messages/disable_messages.module',
      'name' => 'disable_messages',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Disable messages',
        'description' => 'Add options to filter messages shown to the end users',
        'core' => '6.x',
        'version' => '6.x-1.1',
        'project' => 'disable_messages',
        'datestamp' => '1306673815',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'disable_messages',
      'version' => '6.x-1.1',
    ),
    'emaudio' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/emfield/contrib/emaudio/emaudio.module',
      'name' => 'emaudio',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Embedded Audio Field',
        'description' => 'Defines a field type for displaying third party music, podcasts, and other audio, such as podOmatic and Odeo.',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'emfield',
        ),
        'package' => 'Media',
        'version' => '6.x-2.5',
        'project' => 'emfield',
        'datestamp' => '1304705515',
        'php' => '4.3.5',
      ),
      'project' => 'emfield',
      'version' => '6.x-2.5',
    ),
    'embonus' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/emfield/contrib/embonus/embonus.module',
      'name' => 'embonus',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Embedded Media Bonus Pack',
        'description' => 'Provides extra field information for embedded media fields.',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'emfield',
        ),
        'package' => 'Media',
        'version' => '6.x-2.5',
        'project' => 'emfield',
        'datestamp' => '1304705515',
        'php' => '4.3.5',
      ),
      'project' => 'emfield',
      'version' => '6.x-2.5',
    ),
    'emimage' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/emfield/contrib/emimage/emimage.module',
      'name' => 'emimage',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Embedded Image Field',
        'description' => 'Defines a field type for displaying images from third party providers, such as Flickr or Photobucket.',
        'dependencies' => 
        array (
          0 => 'emfield',
        ),
        'package' => 'Media',
        'core' => '6.x',
        'version' => '6.x-2.5',
        'project' => 'emfield',
        'datestamp' => '1304705515',
        'php' => '4.3.5',
      ),
      'project' => 'emfield',
      'version' => '6.x-2.5',
    ),
    'eminline' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/emfield/contrib/eminline/eminline.module',
      'name' => 'eminline',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Embedded Inline Media',
        'description' => 'Allows users to embed media into text-areas.',
        'dependencies' => 
        array (
          0 => 'emfield',
          1 => 'emvideo',
        ),
        'core' => '6.x',
        'package' => 'Media',
        'version' => '6.x-2.5',
        'project' => 'emfield',
        'datestamp' => '1304705515',
        'php' => '4.3.5',
      ),
      'project' => 'emfield',
      'version' => '6.x-2.5',
    ),
    'emthumb' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/emfield/contrib/emthumb/emthumb.module',
      'name' => 'emthumb',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Embedded Media Thumbnail',
        'description' => 'Allows custom thumbnails for Embedded Media Fields.',
        'dependencies' => 
        array (
          0 => 'emfield',
        ),
        'package' => 'Media',
        'core' => '6.x',
        'version' => '6.x-2.5',
        'project' => 'emfield',
        'datestamp' => '1304705515',
        'php' => '4.3.5',
      ),
      'project' => 'emfield',
      'version' => '6.x-2.5',
    ),
    'emvideo' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/emfield/contrib/emvideo/emvideo.module',
      'name' => 'emvideo',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6101',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Embedded Video Field',
        'description' => 'Defines a field type for displaying third party videos, such as YouTube and Google Video.',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'emfield',
        ),
        'package' => 'Media',
        'version' => '6.x-2.5',
        'project' => 'emfield',
        'datestamp' => '1304705515',
        'php' => '4.3.5',
      ),
      'project' => 'emfield',
      'version' => '6.x-2.5',
    ),
    'emwave' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/emfield/contrib/emwave/emwave.module',
      'name' => 'emwave',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Embedded Wave Field',
        'description' => 'Defines a field type for displaying waves from third party providers, such as Google or ...',
        'dependencies' => 
        array (
          0 => 'emfield',
        ),
        'package' => 'Media',
        'core' => '6.x',
        'version' => '6.x-2.5',
        'project' => 'emfield',
        'datestamp' => '1304705515',
        'php' => '4.3.5',
      ),
      'project' => 'emfield',
      'version' => '6.x-2.5',
    ),
    'emfield' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/emfield/emfield.module',
      'name' => 'emfield',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6204',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Embedded Media Field',
        'description' => 'Provides an engine for modules to integrate various 3rd party media content providers.',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'content',
        ),
        'package' => 'Media',
        'php' => '5.2',
        'version' => '6.x-2.5',
        'project' => 'emfield',
        'datestamp' => '1304705515',
      ),
      'project' => 'emfield',
      'version' => '6.x-2.5',
    ),
    'external' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/external/external.module',
      'name' => 'external',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'External Links',
        'description' => 'Opens links to external sites in new tabs',
        'core' => '6.x',
        'version' => '6.x-1.9',
        'project' => 'external',
        'datestamp' => '1269285311',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'external',
      'version' => '6.x-1.9',
    ),
    'features' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/features/features.module',
      'name' => 'features',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Features',
        'description' => 'Provides feature management for Drupal.',
        'core' => '6.x',
        'package' => 'Features',
        'version' => '6.x-1.2',
        'project' => 'features',
        'datestamp' => '1323963939',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'features',
      'version' => '6.x-1.2',
    ),
    'features_test' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/features/tests/features_test.module',
      'name' => 'features_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'features',
          1 => 'fieldgroup',
          2 => 'text',
          3 => 'views',
        ),
        'description' => 'Test module for Features testing.',
        'features' => 
        array (
          'content' => 
          array (
            0 => 'features_test-field_features_test',
            1 => 'features_test-field_features_test_child_a',
            2 => 'features_test-field_features_test_child_b',
          ),
          'fieldgroup' => 
          array (
            0 => 'features_test-group_features_test',
          ),
          'filter' => 
          array (
            0 => 'features_test',
          ),
          'imagecache' => 
          array (
            0 => 'features_test',
          ),
          'node' => 
          array (
            0 => 'features_test',
          ),
          'user_permission' => 
          array (
            0 => 'create features_test content',
          ),
          'views' => 
          array (
            0 => 'features_test',
          ),
          'views_api' => 
          array (
            0 => 'api:2',
          ),
        ),
        'name' => 'Features Tests',
        'package' => 'Testing',
        'version' => '6.x-1.2',
        'project' => 'features',
        'datestamp' => '1323963939',
        'php' => '4.3.5',
      ),
      'project' => 'features',
      'version' => '6.x-1.2',
    ),
    'filefield' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/filefield/filefield.module',
      'name' => 'filefield',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6104',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'FileField',
        'description' => 'Defines a file field type.',
        'dependencies' => 
        array (
          0 => 'content',
        ),
        'package' => 'CCK',
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-3.10',
        'project' => 'filefield',
        'datestamp' => '1303970816',
      ),
      'project' => 'filefield',
      'version' => '6.x-3.10',
    ),
    'filefield_meta' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/filefield/filefield_meta/filefield_meta.module',
      'name' => 'filefield_meta',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'FileField Meta',
        'description' => 'Add metadata gathering and storage to FileField.',
        'dependencies' => 
        array (
          0 => 'filefield',
          1 => 'getid3',
        ),
        'package' => 'CCK',
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-3.10',
        'project' => 'filefield',
        'datestamp' => '1303970816',
      ),
      'project' => 'filefield',
      'version' => '6.x-3.10',
    ),
    'googleanalytics' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/google_analytics/googleanalytics.module',
      'name' => 'googleanalytics',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Google Analytics',
        'description' => 'Adds Google Analytics javascript tracking code to all your site\'s pages.',
        'core' => '6.x',
        'package' => 'Statistics',
        'version' => '6.x-3.3',
        'project' => 'google_analytics',
        'datestamp' => '1301340368',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'google_analytics',
      'version' => '6.x-3.3',
    ),
    'imageapi' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/imageapi/imageapi.module',
      'name' => 'imageapi',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'ImageAPI',
        'description' => 'ImageAPI supporting multiple toolkits.',
        'package' => 'ImageCache',
        'core' => '6.x',
        'php' => '5.1',
        'version' => '6.x-1.10',
        'project' => 'imageapi',
        'datestamp' => '1305563215',
        'dependencies' => 
        array (
        ),
      ),
      'project' => 'imageapi',
      'version' => '6.x-1.10',
    ),
    'imageapi_gd' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/imageapi/imageapi_gd.module',
      'name' => 'imageapi_gd',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'ImageAPI GD2',
        'description' => 'Uses PHP\'s built-in GD2 image processing support.',
        'package' => 'ImageCache',
        'core' => '6.x',
        'version' => '6.x-1.10',
        'project' => 'imageapi',
        'datestamp' => '1305563215',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'imageapi',
      'version' => '6.x-1.10',
    ),
    'imageapi_imagemagick' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/imageapi/imageapi_imagemagick.module',
      'name' => 'imageapi_imagemagick',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'ImageAPI ImageMagick',
        'description' => 'Command Line ImageMagick support.',
        'package' => 'ImageCache',
        'core' => '6.x',
        'version' => '6.x-1.10',
        'project' => 'imageapi',
        'datestamp' => '1305563215',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'imageapi',
      'version' => '6.x-1.10',
    ),
    'imagecache' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/imagecache/imagecache.module',
      'name' => 'imagecache',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'ImageCache',
        'description' => 'Dynamic image manipulator and cache.',
        'package' => 'ImageCache',
        'dependencies' => 
        array (
          0 => 'imageapi',
        ),
        'core' => '6.x',
        'version' => '6.x-2.0-beta12',
        'project' => 'imagecache',
        'datestamp' => '1305566515',
        'php' => '4.3.5',
      ),
      'project' => 'imagecache',
      'version' => '6.x-2.0-beta12',
    ),
    'imagecache_ui' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/imagecache/imagecache_ui.module',
      'name' => 'imagecache_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'ImageCache UI',
        'description' => 'ImageCache User Interface.',
        'dependencies' => 
        array (
          0 => 'imagecache',
          1 => 'imageapi',
        ),
        'package' => 'ImageCache',
        'core' => '6.x',
        'version' => '6.x-2.0-beta12',
        'project' => 'imagecache',
        'datestamp' => '1305566515',
        'php' => '4.3.5',
      ),
      'project' => 'imagecache',
      'version' => '6.x-2.0-beta12',
    ),
    'imagefield' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/imagefield/imagefield.module',
      'name' => 'imagefield',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6006',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'ImageField',
        'description' => 'Defines an image field type.',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'content',
          1 => 'filefield',
        ),
        'package' => 'CCK',
        'version' => '6.x-3.10',
        'project' => 'imagefield',
        'datestamp' => '1303971115',
        'php' => '4.3.5',
      ),
      'project' => 'imagefield',
      'version' => '6.x-3.10',
    ),
    'jquery_ui' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/jquery_ui/jquery_ui.module',
      'name' => 'jquery_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'jQuery UI',
        'description' => 'Provides the jQuery UI plug-in to other Drupal modules.',
        'package' => 'User interface',
        'core' => '6.x',
        'version' => '6.x-1.5',
        'project' => 'jquery_ui',
        'datestamp' => '1308323216',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'jquery_ui',
      'version' => '6.x-1.5',
    ),
    'libraries' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/libraries/libraries.module',
      'name' => 'libraries',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Libraries',
        'description' => 'Allows version dependent and shared usage of external libraries.',
        'core' => '6.x',
        'version' => '6.x-1.0',
        'project' => 'libraries',
        'datestamp' => '1296096157',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'libraries',
      'version' => '6.x-1.0',
    ),
    'link' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/link/link.module',
      'name' => 'link',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Link',
        'description' => 'Defines simple link field types.',
        'dependencies' => 
        array (
          0 => 'content',
        ),
        'package' => 'CCK',
        'core' => '6.x',
        'version' => '6.x-2.9',
        'project' => 'link',
        'datestamp' => '1276539609',
        'php' => '4.3.5',
      ),
      'project' => 'link',
      'version' => '6.x-2.9',
    ),
    'linkimagefield' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/linkimagefield/linkimagefield.module',
      'name' => 'linkimagefield',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'LinkImage',
        'description' => 'Defines an link image field type.',
        'dependencies' => 
        array (
          0 => 'content',
          1 => 'filefield',
          2 => 'imagefield',
        ),
        'package' => 'CCK',
        'core' => '6.x',
        'version' => '6.x-1.0-beta2',
        'project' => 'linkimagefield',
        'datestamp' => '1252089639',
        'php' => '4.3.5',
      ),
      'project' => 'linkimagefield',
      'version' => '6.x-1.0-beta2',
    ),
    'link_image' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/link_image/link_image.module',
      'name' => 'link_image',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Link image formatter',
        'description' => 'Defines a field formatter to display a link to an image as an HTML image element.',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'content',
          1 => 'link',
        ),
        'package' => 'CCK',
        'version' => '6.x-1.0-alpha2',
        'project' => 'link_image',
        'datestamp' => '1321382441',
        'php' => '4.3.5',
      ),
      'project' => 'link_image',
      'version' => '6.x-1.0-alpha2',
    ),
    'media_vimeo' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/media_vimeo/media_vimeo.module',
      'name' => 'media_vimeo',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Media: Vimeo',
        'description' => 'Provides Vimeo support to the Embedded Media Field module.',
        'package' => 'Media',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'emfield',
          1 => 'emvideo',
        ),
        'version' => '6.x-1.1',
        'project' => 'media_vimeo',
        'datestamp' => '1285276865',
        'php' => '4.3.5',
      ),
      'project' => 'media_vimeo',
      'version' => '6.x-1.1',
    ),
    'page_title' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/page_title/page_title.module',
      'name' => 'page_title',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6200',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Page Title',
        'description' => 'Enhanced control over the page title (in the &lt;head> tag).',
        'dependencies' => 
        array (
          0 => 'token',
        ),
        'core' => '6.x',
        'package' => 'SEO',
        'version' => '6.x-2.5',
        'project' => 'page_title',
        'datestamp' => '1309438921',
        'php' => '4.3.5',
      ),
      'project' => 'page_title',
      'version' => '6.x-2.5',
    ),
    'page_title_views_test' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/page_title/tests/page_title_views_test.module',
      'name' => 'page_title_views_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Page Title Views SimpleTest',
        'description' => 'SimpleTest dependency modue for testing Views with Page Title',
        'core' => '6.x',
        'package' => 'Development',
        'dependencies' => 
        array (
          0 => 'page_title',
          1 => 'views',
        ),
        'version' => '6.x-2.5',
        'project' => 'page_title',
        'datestamp' => '1309438921',
        'php' => '4.3.5',
      ),
      'project' => 'page_title',
      'version' => '6.x-2.5',
    ),
    'panels' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/panels/panels.module',
      'name' => 'panels',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6311',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Panels',
        'description' => 'Core Panels display functions; provides no external UI, at least one other Panels module should be enabled.',
        'core' => '6.x',
        'package' => 'Panels',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'version' => '6.x-3.10',
        'project' => 'panels',
        'datestamp' => '1326917148',
        'php' => '4.3.5',
      ),
      'project' => 'panels',
      'version' => '6.x-3.10',
    ),
    'panels_ipe' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/panels/panels_ipe/panels_ipe.module',
      'name' => 'panels_ipe',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Panels In-Place Editor',
        'description' => 'Provide a UI for managing some Panels directly on the frontend, instead of having to use the backend.',
        'package' => 'Panels',
        'dependencies' => 
        array (
          0 => 'panels',
          1 => 'jquery_ui',
        ),
        'core' => '6.x',
        'version' => '6.x-3.10',
        'project' => 'panels',
        'datestamp' => '1326917148',
        'php' => '4.3.5',
      ),
      'project' => 'panels',
      'version' => '6.x-3.10',
    ),
    'panels_mini' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/panels/panels_mini/panels_mini.module',
      'name' => 'panels_mini',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6303',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Mini panels',
        'description' => 'Create mini panels that can be used as blocks by Drupal and panes by other panel modules.',
        'package' => 'Panels',
        'dependencies' => 
        array (
          0 => 'panels',
        ),
        'core' => '6.x',
        'version' => '6.x-3.10',
        'project' => 'panels',
        'datestamp' => '1326917148',
        'php' => '4.3.5',
      ),
      'project' => 'panels',
      'version' => '6.x-3.10',
    ),
    'panels_node' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/panels/panels_node/panels_node.module',
      'name' => 'panels_node',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6001',
      'weight' => '11',
      'info' => 
      array (
        'name' => 'Panel nodes',
        'description' => 'Create nodes that are divided into areas with selectable content.',
        'package' => 'Panels',
        'dependencies' => 
        array (
          0 => 'panels',
        ),
        'core' => '6.x',
        'version' => '6.x-3.10',
        'project' => 'panels',
        'datestamp' => '1326917148',
        'php' => '4.3.5',
      ),
      'project' => 'panels',
      'version' => '6.x-3.10',
    ),
    'pathauto' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/pathauto/pathauto.module',
      'name' => 'pathauto',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '7',
      'weight' => '1',
      'info' => 
      array (
        'name' => 'Pathauto',
        'description' => 'Provides a mechanism for modules to automatically generate aliases for the content they manage.',
        'dependencies' => 
        array (
          0 => 'path',
          1 => 'token',
        ),
        'core' => '6.x',
        'recommends' => 
        array (
          0 => 'path_redirect',
        ),
        'version' => '6.x-1.6',
        'project' => 'pathauto',
        'datestamp' => '1320076535',
        'php' => '4.3.5',
      ),
      'project' => 'pathauto',
      'version' => '6.x-1.6',
    ),
    'shadowbox' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/shadowbox/shadowbox.module',
      'name' => 'shadowbox',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Shadowbox',
        'description' => 'Allows content to be displayed in a JavaScript modal media viewer application.',
        'core' => '6.x',
        'version' => '6.x-4.2',
        'project' => 'shadowbox',
        'datestamp' => '1276621808',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'shadowbox',
      'version' => '6.x-4.2',
    ),
    'skinr' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/skinr/skinr.module',
      'name' => 'skinr',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6100',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Skinr',
        'description' => 'Provides a way to define and/or skin bits of Drupal output from the UI.',
        'core' => '6.x',
        'version' => '6.x-1.6',
        'project' => 'skinr',
        'datestamp' => '1289424665',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'skinr',
      'version' => '6.x-1.6',
    ),
    'swfobject_api' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/swfobject_api/swfobject_api.module',
      'name' => 'swfobject_api',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'SWFObject API',
        'description' => 'Implements the SWFObject Library, makes it easy for developers to add flash content',
        'core' => '6.x',
        'version' => '6.x-1.0-beta2',
        'project' => 'swfobject_api',
        'datestamp' => '1297714958',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'swfobject_api',
      'version' => '6.x-1.0-beta2',
    ),
    'taxonomy_menu' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/taxonomy_menu/taxonomy_menu.module',
      'name' => 'taxonomy_menu',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6200',
      'weight' => '0',
      'info' => 
      array (
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'taxonomy',
        ),
        'description' => 'Adds links to taxonomy terms to a menu.',
        'name' => 'Taxonomy Menu',
        'package' => 'Taxonomy Menu',
        'version' => '6.x-2.9',
        'project' => 'taxonomy_menu',
        'datestamp' => '1280800574',
        'php' => '4.3.5',
      ),
      'project' => 'taxonomy_menu',
      'version' => '6.x-2.9',
    ),
    'taxonomy_menu_hierarchy' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/taxonomy_menu/taxonomy_menu_hierarchy/taxonomy_menu_hierarchy.module',
      'name' => 'taxonomy_menu_hierarchy',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'taxonomy',
          1 => 'taxonomy_menu',
        ),
        'description' => 'Enables Hierarchy path to Taxonomy Menu.',
        'name' => 'Taxonomy Menu Hierarchy',
        'package' => 'Taxonomy Menu',
        'version' => '6.x-2.9',
        'project' => 'taxonomy_menu',
        'datestamp' => '1280800574',
        'php' => '4.3.5',
      ),
      'project' => 'taxonomy_menu',
      'version' => '6.x-2.9',
    ),
    'taxonomy_menu_path_custom' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/taxonomy_menu/taxonomy_menu_path_custom/taxonomy_menu_path_custom.module',
      'name' => 'taxonomy_menu_path_custom',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'taxonomy',
          1 => 'taxonomy_menu',
        ),
        'description' => 'Enables Custom path base to Taxonomy Menu.',
        'name' => 'Taxonomy Menu Custom Path',
        'package' => 'Taxonomy Menu',
        'version' => '6.x-2.9',
        'project' => 'taxonomy_menu',
        'datestamp' => '1280800574',
        'php' => '4.3.5',
      ),
      'project' => 'taxonomy_menu',
      'version' => '6.x-2.9',
    ),
    'taxonomy_menu_vocabulary_path' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/taxonomy_menu/taxonomy_menu_vocabulary_path/taxonomy_menu_vocabulary_path.module',
      'name' => 'taxonomy_menu_vocabulary_path',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'taxonomy',
          1 => 'taxonomy_menu',
        ),
        'description' => 'Enables a custom path for each vocabulary through Taxonomy Menu.',
        'name' => 'Taxonomy Menu Vocabulary Path',
        'package' => 'Taxonomy Menu',
        'version' => '6.x-2.9',
        'project' => 'taxonomy_menu',
        'datestamp' => '1280800574',
        'php' => '4.3.5',
      ),
      'project' => 'taxonomy_menu',
      'version' => '6.x-2.9',
    ),
    'token_test' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/token/tests/token_test.module',
      'name' => 'token_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Token Test',
        'description' => 'Testing module for token functionality.',
        'package' => 'Testing',
        'core' => '6.x',
        'files' => 
        array (
          0 => 'token_test.module',
        ),
        'hidden' => true,
        'version' => '6.x-1.18',
        'project' => 'token',
        'datestamp' => '1320336935',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'token',
      'version' => '6.x-1.18',
    ),
    'token' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/token/token.module',
      'name' => 'token',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '1',
      'weight' => '10',
      'info' => 
      array (
        'name' => 'Token',
        'description' => 'Provides a shared API for replacement of textual placeholders with actual data.',
        'core' => '6.x',
        'version' => '6.x-1.18',
        'project' => 'token',
        'datestamp' => '1320336935',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'token',
      'version' => '6.x-1.18',
    ),
    'tokenSTARTER' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/token/tokenSTARTER.module',
      'name' => 'tokenSTARTER',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'TokenSTARTER',
        'description' => 'Provides additional tokens and a base on which to build your own tokens.',
        'dependencies' => 
        array (
          0 => 'token',
        ),
        'core' => '6.x',
        'version' => '6.x-1.18',
        'project' => 'token',
        'datestamp' => '1320336935',
        'php' => '4.3.5',
      ),
      'project' => 'token',
      'version' => '6.x-1.18',
    ),
    'token_actions' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/token/token_actions.module',
      'name' => 'token_actions',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Token actions',
        'description' => 'Provides enhanced versions of core Drupal actions using the Token module.',
        'dependencies' => 
        array (
          0 => 'token',
        ),
        'core' => '6.x',
        'version' => '6.x-1.18',
        'project' => 'token',
        'datestamp' => '1320336935',
        'php' => '4.3.5',
      ),
      'project' => 'token',
      'version' => '6.x-1.18',
    ),
    'transliteration' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/transliteration/transliteration.module',
      'name' => 'transliteration',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Transliteration',
        'description' => 'Converts non-latin text to US-ASCII and sanitizes file names.',
        'core' => '6.x',
        'version' => '6.x-3.0',
        'project' => 'transliteration',
        'datestamp' => '1279738213',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'transliteration',
      'version' => '6.x-3.0',
    ),
    'vertical_tabs' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/vertical_tabs/vertical_tabs.module',
      'name' => 'vertical_tabs',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6104',
      'weight' => '300',
      'info' => 
      array (
        'name' => 'Vertical Tabs',
        'description' => 'Provides vertical tabs for supported forms like the node edit page.',
        'core' => '6.x',
        'package' => 'User interface',
        'recommends' => 
        array (
          0 => 'form',
        ),
        'version' => '6.x-1.0-rc2',
        'project' => 'vertical_tabs',
        'datestamp' => '1309875122',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'vertical_tabs',
      'version' => '6.x-1.0-rc2',
    ),
    'views' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/views/views.module',
      'name' => 'views',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6013',
      'weight' => '10',
      'info' => 
      array (
        'name' => 'Views',
        'description' => 'Create customized lists and queries from your database.',
        'package' => 'Views',
        'core' => '6.x',
        'version' => '6.x-2.16',
        'project' => 'views',
        'datestamp' => '1321305946',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'views',
      'version' => '6.x-2.16',
    ),
    'views_export' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/views/views_export/views_export.module',
      'name' => 'views_export',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views exporter',
        'description' => 'Allows exporting multiple views at once.',
        'package' => 'Views',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'core' => '6.x',
        'version' => '6.x-2.16',
        'project' => 'views',
        'datestamp' => '1321305946',
        'php' => '4.3.5',
      ),
      'project' => 'views',
      'version' => '6.x-2.16',
    ),
    'views_ui' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/views/views_ui.module',
      'name' => 'views_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views UI',
        'description' => 'Administrative interface to views. Without this module, you cannot create or edit your views.',
        'package' => 'Views',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'version' => '6.x-2.16',
        'project' => 'views',
        'datestamp' => '1321305946',
        'php' => '4.3.5',
      ),
      'project' => 'views',
      'version' => '6.x-2.16',
    ),
    'views_slideshow_cycle' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/views_slideshow/contrib/views_slideshow_cycle/views_slideshow_cycle.module',
      'name' => 'views_slideshow_cycle',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views Slideshow: Cycle',
        'description' => 'Adds a Rotating slideshow mode to Views Slideshow.',
        'dependencies' => 
        array (
          0 => 'views_slideshow',
          1 => 'libraries',
        ),
        'package' => 'Views',
        'core' => '6.x',
        'version' => '6.x-3.0',
        'project' => 'views_slideshow',
        'datestamp' => '1319589618',
        'php' => '4.3.5',
      ),
      'project' => 'views_slideshow',
      'version' => '6.x-3.0',
    ),
    'views_slideshow' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/views_slideshow/views_slideshow.module',
      'name' => 'views_slideshow',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views Slideshow',
        'description' => 'Provides a View style that displays rows as a jQuery slideshow.  This is an API and requires Views Slideshow Cycle or another module that supports the API.',
        'dependencies' => 
        array (
          0 => 'views',
          1 => 'ctools',
          2 => 'libraries',
        ),
        'package' => 'Views',
        'core' => '6.x',
        'version' => '6.x-3.0',
        'project' => 'views_slideshow',
        'datestamp' => '1319589618',
        'php' => '4.3.5',
      ),
      'project' => 'views_slideshow',
      'version' => '6.x-3.0',
    ),
    'webform' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/webform/webform.module',
      'name' => 'webform',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6331',
      'weight' => '-1',
      'info' => 
      array (
        'name' => 'Webform',
        'description' => 'Enables the creation of forms and questionnaires.',
        'core' => '6.x',
        'package' => 'Webform',
        'php' => '5.1',
        'version' => '6.x-3.17',
        'project' => 'webform',
        'datestamp' => '1331149550',
        'dependencies' => 
        array (
        ),
      ),
      'project' => 'webform',
      'version' => '6.x-3.17',
    ),
    'wysiwyg' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/wysiwyg/wysiwyg.module',
      'name' => 'wysiwyg',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Wysiwyg',
        'description' => 'Allows users to edit contents with client-side editors.',
        'package' => 'User interface',
        'core' => '6.x',
        'version' => '6.x-2.4',
        'project' => 'wysiwyg',
        'datestamp' => '1308450722',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'wysiwyg',
      'version' => '6.x-2.4',
    ),
    'xmlsitemap' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/xmlsitemap/xmlsitemap.module',
      'name' => 'xmlsitemap',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6204',
      'weight' => '1',
      'info' => 
      array (
        'name' => 'XML sitemap',
        'description' => 'Creates an XML sitemap conforming to the <a href="http://sitemaps.org/">sitemaps.org protocol</a>.',
        'package' => 'XML sitemap',
        'core' => '6.x',
        'php' => '5.1',
        'files' => 
        array (
          0 => 'xmlsitemap.module',
          1 => 'xmlsitemap.inc',
          2 => 'xmlsitemap.admin.inc',
          3 => 'xmlsitemap.drush.inc',
          4 => 'xmlsitemap.generate.inc',
          5 => 'xmlsitemap.xmlsitemap.inc',
          6 => 'xmlsitemap.pages.inc',
          7 => 'xmlsitemap.install',
          8 => 'xmlsitemap.test',
        ),
        'recommends' => 
        array (
          0 => 'ctools',
          1 => 'elements',
          2 => 'robotstxt',
          3 => 'vertical_tabs',
        ),
        'configure' => 'admin/config/search/xmlsitemap',
        'version' => '6.x-2.0-rc1',
        'project' => 'xmlsitemap',
        'datestamp' => '1324004145',
        'dependencies' => 
        array (
        ),
      ),
      'project' => 'xmlsitemap',
      'version' => '6.x-2.0-rc1',
    ),
    'xmlsitemap_custom' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/xmlsitemap/xmlsitemap_custom/xmlsitemap_custom.module',
      'name' => 'xmlsitemap_custom',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'XML sitemap custom',
        'description' => 'Adds user configurable links to the sitemap.',
        'package' => 'XML sitemap',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'xmlsitemap',
        ),
        'files' => 
        array (
          0 => 'xmlsitemap_custom.module',
          1 => 'xmlsitemap_custom.admin.inc',
          2 => 'xmlsitemap_custom.install',
          3 => 'xmlsitemap_custom.test',
        ),
        'version' => '6.x-2.0-rc1',
        'project' => 'xmlsitemap',
        'datestamp' => '1324004145',
        'php' => '4.3.5',
      ),
      'project' => 'xmlsitemap',
      'version' => '6.x-2.0-rc1',
    ),
    'xmlsitemap_engines_test' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/xmlsitemap/xmlsitemap_engines/tests/xmlsitemap_engines_test.module',
      'name' => 'xmlsitemap_engines_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'XML sitemap engines test',
        'description' => 'Support module for XML sitemap engines testing.',
        'package' => 'Testing',
        'core' => '6.x',
        'files' => 
        array (
          0 => 'xmlsitemap_engines_test.module',
        ),
        'version' => '6.x-2.0-rc1',
        'hidden' => true,
        'project' => 'xmlsitemap',
        'datestamp' => '1324004145',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'xmlsitemap',
      'version' => '6.x-2.0-rc1',
    ),
    'xmlsitemap_engines' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/xmlsitemap/xmlsitemap_engines/xmlsitemap_engines.module',
      'name' => 'xmlsitemap_engines',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6202',
      'weight' => '2',
      'info' => 
      array (
        'name' => 'XML sitemap engines',
        'description' => 'Submit the sitemap to search engines.',
        'package' => 'XML sitemap',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'xmlsitemap',
        ),
        'files' => 
        array (
          0 => 'xmlsitemap_engines.module',
          1 => 'xmlsitemap_engines.admin.inc',
          2 => 'xmlsitemap_engines.install',
          3 => 'tests/xmlsitemap_engines.test',
        ),
        'recommends' => 
        array (
          0 => 'site_verify',
        ),
        'version' => '6.x-2.0-rc1',
        'project' => 'xmlsitemap',
        'datestamp' => '1324004145',
        'php' => '4.3.5',
      ),
      'project' => 'xmlsitemap',
      'version' => '6.x-2.0-rc1',
    ),
    'xmlsitemap_i18n' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/xmlsitemap/xmlsitemap_i18n/xmlsitemap_i18n.module',
      'name' => 'xmlsitemap_i18n',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'XML sitemap internationalization',
        'description' => 'Enables multilingual XML sitemaps.',
        'package' => 'XML sitemap',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'xmlsitemap',
          1 => 'i18n',
        ),
        'files' => 
        array (
          0 => 'xmlsitemap_i18n.module',
          1 => 'xmlsitemap_i18n.test',
        ),
        'version' => '6.x-2.0-rc1',
        'project' => 'xmlsitemap',
        'datestamp' => '1324004145',
        'php' => '4.3.5',
      ),
      'project' => 'xmlsitemap',
      'version' => '6.x-2.0-rc1',
    ),
    'xmlsitemap_menu' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/xmlsitemap/xmlsitemap_menu/xmlsitemap_menu.module',
      'name' => 'xmlsitemap_menu',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6201',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'XML sitemap menu',
        'description' => 'Adds menu item links to the sitemap.',
        'package' => 'XML sitemap',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'xmlsitemap',
          1 => 'menu',
        ),
        'files' => 
        array (
          0 => 'xmlsitemap_menu.module',
          1 => 'xmlsitemap_menu.install',
          2 => 'xmlsitemap_menu.test',
        ),
        'version' => '6.x-2.0-rc1',
        'project' => 'xmlsitemap',
        'datestamp' => '1324004145',
        'php' => '4.3.5',
      ),
      'project' => 'xmlsitemap',
      'version' => '6.x-2.0-rc1',
    ),
    'xmlsitemap_modal' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/xmlsitemap/xmlsitemap_modal/xmlsitemap_modal.module',
      'name' => 'xmlsitemap_modal',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'XML sitemap modal UI',
        'description' => 'Provides an AJAX modal UI for common XML sitemap tasks.',
        'package' => 'XML sitemap',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'xmlsitemap',
          1 => 'ctools',
        ),
        'files' => 
        array (
          0 => 'xmlsitemap_modal.module',
        ),
        'version' => '6.x-2.0-rc1',
        'project' => 'xmlsitemap',
        'datestamp' => '1324004145',
        'php' => '4.3.5',
      ),
      'project' => 'xmlsitemap',
      'version' => '6.x-2.0-rc1',
    ),
    'xmlsitemap_node' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/xmlsitemap/xmlsitemap_node/xmlsitemap_node.module',
      'name' => 'xmlsitemap_node',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'XML sitemap node',
        'description' => 'Adds content links to the sitemap.',
        'package' => 'XML sitemap',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'xmlsitemap',
        ),
        'files' => 
        array (
          0 => 'xmlsitemap_node.module',
          1 => 'xmlsitemap_node.install',
          2 => 'xmlsitemap_node.test',
        ),
        'version' => '6.x-2.0-rc1',
        'project' => 'xmlsitemap',
        'datestamp' => '1324004145',
        'php' => '4.3.5',
      ),
      'project' => 'xmlsitemap',
      'version' => '6.x-2.0-rc1',
    ),
    'xmlsitemap_taxonomy' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/xmlsitemap/xmlsitemap_taxonomy/xmlsitemap_taxonomy.module',
      'name' => 'xmlsitemap_taxonomy',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'XML sitemap taxonomy',
        'description' => 'Add taxonomy term links to the sitemap.',
        'package' => 'XML sitemap',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'xmlsitemap',
          1 => 'taxonomy',
        ),
        'files' => 
        array (
          0 => 'xmlsitemap_taxonomy.module',
          1 => 'xmlsitemap_taxonomy.install',
          2 => 'xmlsitemap_taxonomy.test',
        ),
        'version' => '6.x-2.0-rc1',
        'project' => 'xmlsitemap',
        'datestamp' => '1324004145',
        'php' => '4.3.5',
      ),
      'project' => 'xmlsitemap',
      'version' => '6.x-2.0-rc1',
    ),
    'xmlsitemap_user' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/modules/xmlsitemap/xmlsitemap_user/xmlsitemap_user.module',
      'name' => 'xmlsitemap_user',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'XML sitemap user',
        'description' => 'Adds user profile links to the sitemap.',
        'package' => 'XML sitemap',
        'dependencies' => 
        array (
          0 => 'xmlsitemap',
        ),
        'core' => '6.x',
        'files' => 
        array (
          0 => 'xmlsitemap_user.module',
          1 => 'xmlsitemap_user.install',
          2 => 'xmlsitemap_user.test',
        ),
        'version' => '6.x-2.0-rc1',
        'project' => 'xmlsitemap',
        'datestamp' => '1324004145',
        'php' => '4.3.5',
      ),
      'project' => 'xmlsitemap',
      'version' => '6.x-2.0-rc1',
    ),
  ),
  'themes' => 
  array (
    'fusion_starter_lite' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/themes/fusion/fusion_starter_lite/fusion_starter_lite.info',
      'name' => 'fusion_starter_lite',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Fusion Starter Lite',
        'description' => 'Fusion Starter Lite sub-theme. Requires <a href="http://drupal.org/project/fusion">Fusion Core</a> and the <a href="http://drupal.org/project/skinr">Skinr</a> module to enable easy point-and-click theming.',
        'base theme' => 'fusion_core',
        'core' => '6.x',
        'engine' => 'phptemplate',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'css/fusion-starter-lite-style.css',
          ),
        ),
        'regions' => 
        array (
          'sidebar_first' => 'sidebar first',
          'sidebar_last' => 'sidebar last',
          'header' => 'header',
          'content' => 'content',
          'footer' => 'footer',
        ),
        'settings' => 
        array (
          'theme_grid' => 'grid12-960',
          'theme_grid_options' => 
          array (
            0 => 'grid12-960',
            1 => 'grid12-fluid',
          ),
          'fluid_grid_width' => 'fluid-100',
          'theme_font_size' => 'font-size-12',
          'sidebar_layout' => 'sidebars-split',
          'sidebar_first_width' => '2',
          'sidebar_last_width' => '2',
        ),
        'skinr' => 
        array (
          'grid12-width' => 
          array (
            'title' => 'Width (12 column grid)',
            'type' => 'select',
            'features' => 
            array (
              0 => 'block',
            ),
            'options' => 
            array (
              1 => 
              array (
                'label' => '1 unit wide (80px/8.33%)',
                'class' => 'grid12-1',
              ),
              2 => 
              array (
                'label' => '2 units wide (160px/16.67%)',
                'class' => 'grid12-2',
              ),
              3 => 
              array (
                'label' => '3 units wide (240px/25%)',
                'class' => 'grid12-3',
              ),
              4 => 
              array (
                'label' => '4 units wide (320px/33.33%)',
                'class' => 'grid12-4',
              ),
              5 => 
              array (
                'label' => '5 units wide (400px/41.67%)',
                'class' => 'grid12-5',
              ),
              6 => 
              array (
                'label' => '6 units wide (480px/50%)',
                'class' => 'grid12-6',
              ),
              7 => 
              array (
                'label' => '7 units wide (560px/58.33%)',
                'class' => 'grid12-7',
              ),
              8 => 
              array (
                'label' => '8 units wide (640px/66.67%)',
                'class' => 'grid12-8',
              ),
              9 => 
              array (
                'label' => '9 units wide (720px/75%)',
                'class' => 'grid12-9',
              ),
              10 => 
              array (
                'label' => '10 units wide (800px/83.33%)',
                'class' => 'grid12-10',
              ),
              11 => 
              array (
                'label' => '11 units wide (880px/91.67%)',
                'class' => 'grid12-11',
              ),
              12 => 
              array (
                'label' => '12 units wide (960px/100%)',
                'class' => 'grid12-12',
              ),
            ),
          ),
          'grid-width' => 
          array (
            'description' => 'Change the width of this block. Fluid grid % widths are relative to the parent region\'s width. Default widths: sidebar blocks default to the sidebar width; in other regions width is divided equally among all blocks.',
          ),
          'fusion-alignment' => 
          array (
            'title' => 'Block position',
            'type' => 'select',
            'description' => 'Change the position of this block (default is to float to the left)',
            'features' => 
            array (
              0 => 'block',
            ),
            'options' => 
            array (
              1 => 
              array (
                'label' => 'Float block to the right',
                'class' => 'fusion-right',
              ),
              2 => 
              array (
                'label' => 'Position block in the center',
                'class' => 'fusion-center',
              ),
              3 => 
              array (
                'label' => 'Clear floats (block drops to a new line)',
                'class' => 'fusion-clear',
              ),
            ),
          ),
        ),
        'version' => '6.x-1.13',
        'project' => 'fusion',
        'datestamp' => '1332949846',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'fusion',
      'version' => '6.x-1.13',
    ),
    'cube' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/themes/rubik/cube/cube.info',
      'name' => 'cube',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Cube',
        'description' => 'Spaces-aware front-end theme based on Rubik.',
        'base theme' => 'rubik',
        'core' => '6.x',
        'engine' => 'phptemplate',
        'stylesheets' => 
        array (
          'screen' => 
          array (
            0 => 'style.css',
          ),
        ),
        'regions' => 
        array (
          'header' => 'Header',
          'content' => 'Content',
          'left' => 'Left',
          'right' => 'Right',
        ),
        'designkit' => 
        array (
          'color' => 
          array (
            'background' => '#0088cc',
          ),
          'logo' => 
          array (
            'logo' => 'imagecache_scale:200x50',
            'print' => 'imagecache_scale:600x150',
          ),
        ),
        'layouts' => 
        array (
          'default' => 
          array (
            'name' => 'Default',
            'description' => 'Simple one column page.',
            'template' => 'page',
          ),
          'sidebar' => 
          array (
            'name' => 'Sidebar',
            'description' => 'Main content with sidebar.',
            'stylesheet' => 'layout-sidebar.css',
            'template' => 'layout-sidebar',
            'regions' => 
            array (
              0 => 'content',
              1 => 'right',
            ),
          ),
          'split' => 
          array (
            'name' => 'Split',
            'description' => '50/50 split.',
            'stylesheet' => 'layout-split.css',
            'template' => 'layout-sidebar',
            'regions' => 
            array (
              0 => 'content',
              1 => 'right',
            ),
          ),
          'columns' => 
          array (
            'name' => 'Columns',
            'description' => 'Three column layout.',
            'stylesheet' => 'layout-columns.css',
            'template' => 'layout-columns',
            'regions' => 
            array (
              0 => 'header',
              1 => 'content',
              2 => 'left',
              3 => 'right',
            ),
          ),
          'offset' => 
          array (
            'name' => 'Offset sidebars',
            'description' => 'Main content with two offset sidebars.',
            'stylesheet' => 'layout-offset.css',
            'template' => 'layout-offset',
            'regions' => 
            array (
              0 => 'header',
              1 => 'content',
              2 => 'left',
              3 => 'right',
            ),
          ),
        ),
        'version' => '6.x-3.0-beta3',
        'project' => 'rubik',
        'datestamp' => '1329952845',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'rubik',
      'version' => '6.x-3.0-beta3',
    ),
    'bluemarine' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/themes/bluemarine/bluemarine.info',
      'name' => 'bluemarine',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Bluemarine',
        'description' => 'Table-based multi-column theme with a marine and ash color scheme.',
        'version' => '6.26',
        'core' => '6.x',
        'engine' => 'phptemplate',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => '6.26',
    ),
    'chameleon' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/themes/chameleon/chameleon.info',
      'name' => 'chameleon',
      'type' => 'theme',
      'owner' => 'themes/chameleon/chameleon.theme',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Chameleon',
        'description' => 'Minimalist tabled theme with light colors.',
        'regions' => 
        array (
          'left' => 'Left sidebar',
          'right' => 'Right sidebar',
        ),
        'features' => 
        array (
          0 => 'logo',
          1 => 'favicon',
          2 => 'name',
          3 => 'slogan',
        ),
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'style.css',
            1 => 'common.css',
          ),
        ),
        'version' => '6.26',
        'core' => '6.x',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => '6.26',
    ),
    'marvin' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/themes/chameleon/marvin/marvin.info',
      'name' => 'marvin',
      'type' => 'theme',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Marvin',
        'description' => 'Boxy tabled theme in all grays.',
        'regions' => 
        array (
          'left' => 'Left sidebar',
          'right' => 'Right sidebar',
        ),
        'version' => '6.26',
        'core' => '6.x',
        'base theme' => 'chameleon',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => '6.26',
    ),
    'garland' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/themes/garland/garland.info',
      'name' => 'garland',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Garland',
        'description' => 'Tableless, recolorable, multi-column, fluid width theme (default).',
        'version' => '6.26',
        'core' => '6.x',
        'engine' => 'phptemplate',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'style.css',
          ),
          'print' => 
          array (
            0 => 'print.css',
          ),
        ),
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => '6.26',
    ),
    'minnelli' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/themes/garland/minnelli/minnelli.info',
      'name' => 'minnelli',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Minnelli',
        'description' => 'Tableless, recolorable, multi-column, fixed width theme.',
        'version' => '6.26',
        'core' => '6.x',
        'base theme' => 'garland',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'minnelli.css',
          ),
        ),
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => '6.26',
    ),
    'pushbutton' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/themes/pushbutton/pushbutton.info',
      'name' => 'pushbutton',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Pushbutton',
        'description' => 'Tabled, multi-column theme in blue and orange tones.',
        'version' => '6.26',
        'core' => '6.x',
        'engine' => 'phptemplate',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => '6.26',
    ),
    'fusion_core' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/themes/fusion/fusion_core/fusion_core.info',
      'name' => 'fusion_core',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Fusion Core',
        'description' => '<a href="http://drupal.org/project/fusion">Fusion Core</a> is the grid-enabled base theme for powerful sub-themes.  With the <a href="http://drupal.org/project/skinr">Skinr</a> module, it enables easy point-and-click theming. By <a href="http://www.topnotchthemes.com">TopNotchThemes</a>',
        'core' => '6.x',
        'engine' => 'phptemplate',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'css/style.css',
            1 => 'css/typography.css',
            2 => 'css/superfish.css',
            3 => 'css/superfish-navbar.css',
            4 => 'css/superfish-vertical.css',
          ),
        ),
        'scripts' => 
        array (
          0 => 'js/jquery.bgiframe.min.js',
          1 => 'js/hoverIntent.js',
          2 => 'js/supposition.js',
          3 => 'js/supersubs.js',
          4 => 'js/superfish.js',
          5 => 'js/script.js',
        ),
        'regions' => 
        array (
          'sidebar_first' => 'sidebar first',
          'sidebar_last' => 'sidebar last',
          'header_top' => 'header top',
          'header' => 'header',
          'preface_top' => 'preface top',
          'preface_bottom' => 'preface bottom',
          'content_top' => 'content top',
          'content' => 'content',
          'content_bottom' => 'content bottom',
          'postscript_top' => 'postscript top',
          'postscript_bottom' => 'postscript bottom',
          'footer' => 'footer',
          'node_top' => 'node top',
          'node_bottom' => 'node bottom',
        ),
        'features' => 
        array (
          0 => 'logo',
          1 => 'name',
          2 => 'slogan',
          3 => 'node_user_picture',
          4 => 'comment_user_picture',
          5 => 'search',
          6 => 'favicon',
          7 => 'primary_links',
          8 => 'secondary_links',
        ),
        'settings' => 
        array (
          'theme_grid' => 'grid16-960',
          'theme_grid_options' => 
          array (
            0 => 'grid16-960',
            1 => 'grid16-fluid',
            2 => 'grid12-960',
            3 => 'grid12-fluid',
          ),
          'fluid_grid_width' => 'fluid-100',
          'theme_font_size' => 'font-size-13',
          'sidebar_layout' => 'sidebars-split',
          'sidebar_first_width' => '3',
          'sidebar_last_width' => '3',
        ),
        'skinr' => 
        array (
          'grid16-width' => 
          array (
            'title' => 'Width (16 column grid)',
            'type' => 'select',
            'features' => 
            array (
              0 => 'block',
            ),
            'options' => 
            array (
              1 => 
              array (
                'label' => '1 unit wide (60px/6.25%)',
                'class' => 'grid16-1',
              ),
              2 => 
              array (
                'label' => '2 units wide (120px/12.5%)',
                'class' => 'grid16-2',
              ),
              3 => 
              array (
                'label' => '3 units wide (180px/18.75%)',
                'class' => 'grid16-3',
              ),
              4 => 
              array (
                'label' => '4 units wide (240px/25%)',
                'class' => 'grid16-4',
              ),
              5 => 
              array (
                'label' => '5 units wide (300px/31.25%)',
                'class' => 'grid16-5',
              ),
              6 => 
              array (
                'label' => '6 units wide (360px/37.5%)',
                'class' => 'grid16-6',
              ),
              7 => 
              array (
                'label' => '7 units wide (420px/43.75%)',
                'class' => 'grid16-7',
              ),
              8 => 
              array (
                'label' => '8 units wide (480px/50%)',
                'class' => 'grid16-8',
              ),
              9 => 
              array (
                'label' => '9 units wide (540px/56.25%)',
                'class' => 'grid16-9',
              ),
              10 => 
              array (
                'label' => '10 units wide (600px/62.5%)',
                'class' => 'grid16-10',
              ),
              11 => 
              array (
                'label' => '11 units wide (660px/68.75%)',
                'class' => 'grid16-11',
              ),
              12 => 
              array (
                'label' => '12 units wide (720px/75%)',
                'class' => 'grid16-12',
              ),
              13 => 
              array (
                'label' => '13 units wide (780px/81.25%)',
                'class' => 'grid16-13',
              ),
              14 => 
              array (
                'label' => '14 units wide (840px/87.5%)',
                'class' => 'grid16-14',
              ),
              15 => 
              array (
                'label' => '15 units wide (900px/93.75%)',
                'class' => 'grid16-15',
              ),
              16 => 
              array (
                'label' => '16 units wide (960px/100%)',
                'class' => 'grid16-16',
              ),
            ),
          ),
          'grid12-width' => 
          array (
            'title' => 'Width (12 column grid)',
            'type' => 'select',
            'features' => 
            array (
              0 => 'block',
            ),
            'options' => 
            array (
              1 => 
              array (
                'label' => '1 unit wide (80px/8.33%)',
                'class' => 'grid12-1',
              ),
              2 => 
              array (
                'label' => '2 units wide (160px/16.67%)',
                'class' => 'grid12-2',
              ),
              3 => 
              array (
                'label' => '3 units wide (240px/25%)',
                'class' => 'grid12-3',
              ),
              4 => 
              array (
                'label' => '4 units wide (320px/33.33%)',
                'class' => 'grid12-4',
              ),
              5 => 
              array (
                'label' => '5 units wide (400px/41.67%)',
                'class' => 'grid12-5',
              ),
              6 => 
              array (
                'label' => '6 units wide (480px/50%)',
                'class' => 'grid12-6',
              ),
              7 => 
              array (
                'label' => '7 units wide (560px/58.33%)',
                'class' => 'grid12-7',
              ),
              8 => 
              array (
                'label' => '8 units wide (640px/66.67%)',
                'class' => 'grid12-8',
              ),
              9 => 
              array (
                'label' => '9 units wide (720px/75%)',
                'class' => 'grid12-9',
              ),
              10 => 
              array (
                'label' => '10 units wide (800px/83.33%)',
                'class' => 'grid12-10',
              ),
              11 => 
              array (
                'label' => '11 units wide (880px/91.67%)',
                'class' => 'grid12-11',
              ),
              12 => 
              array (
                'label' => '12 units wide (960px/100%)',
                'class' => 'grid12-12',
              ),
            ),
          ),
          'grid-width' => 
          array (
            'description' => 'Change the width of this block. Fluid grid % widths are relative to the parent region\'s width. Default widths: sidebar blocks default to the sidebar width; in other regions width is divided equally among all blocks.',
          ),
          'fusion-alignment' => 
          array (
            'title' => 'Block position',
            'type' => 'select',
            'description' => 'Change the position of this block (default is to float to the left)',
            'features' => 
            array (
              0 => 'block',
            ),
            'options' => 
            array (
              1 => 
              array (
                'label' => 'Float block to the right',
                'class' => 'fusion-right',
              ),
              2 => 
              array (
                'label' => 'Position block in the center',
                'class' => 'fusion-center',
              ),
              3 => 
              array (
                'label' => 'Clear floats (block drops to a new line)',
                'class' => 'fusion-clear',
              ),
            ),
          ),
          'fusion-content-alignment' => 
          array (
            'title' => 'Content alignment',
            'type' => 'select',
            'description' => 'Default is left aligned content',
            'options' => 
            array (
              1 => 
              array (
                'label' => 'Center align content within its container',
                'class' => 'fusion-center-content',
              ),
              2 => 
              array (
                'label' => 'Right align content within its container',
                'class' => 'fusion-right-content',
              ),
            ),
          ),
          'fusion-general-styles' => 
          array (
            'title' => 'General styles',
            'type' => 'checkboxes',
            'description' => 'These are some generally useful options for blocks',
            'features' => 
            array (
              0 => 'block',
              1 => 'panels_display',
              2 => 'panels_pane',
              3 => 'panels_panel',
            ),
            'options' => 
            array (
              1 => 
              array (
                'label' => '<span class="preview-text">Text: large, bold callout style <span class="preview-icon" id="fusion-general-styles-fusion-callout"></span></span>',
                'class' => 'fusion-callout',
              ),
              2 => 
              array (
                'label' => '<span class="preview-text">Links: bold all links <span class="preview-icon" id="fusion-general-styles-bold-links"></span></span>',
                'class' => 'fusion-bold-links',
              ),
              3 => 
              array (
                'label' => '<span class="preview-text">Padding: add 30px extra padding inside block <span class="preview-icon" id="fusion-general-styles-fusion-padding"></span></span>',
                'class' => 'fusion-padding',
              ),
              4 => 
              array (
                'label' => '<span class="preview-text">Border: add 1px border and 10px padding <span class="preview-icon" id="fusion-general-styles-fusion-border"></span></span>',
                'class' => 'fusion-border',
              ),
            ),
          ),
          'fusion-equal-heights' => 
          array (
            'title' => 'Equal heights',
            'type' => 'checkboxes',
            'description' => 'Make blocks in a region the same height',
            'features' => 
            array (
              0 => 'block',
              1 => 'panels_display',
              2 => 'panels_pane',
              3 => 'panels_panel',
            ),
            'scripts' => 
            array (
              0 => 'js/jquery.equalheights.js',
            ),
            'options' => 
            array (
              1 => 
              array (
                'label' => '<span class="preview-text">Equal heights: equalize the heights of blocks with this style in the same region <span class="preview-icon" id="fusion-general-styles-equal-heights"></span></span>',
                'class' => 'equal-heights',
              ),
            ),
          ),
          'fusion-multicol' => 
          array (
            'title' => 'List columns',
            'type' => 'select',
            'description' => 'Put items in lists (menus, list views, etc.) in multiple columns',
            'features' => 
            array (
              0 => 'block',
              1 => 'panels_display',
              2 => 'panels_pane',
              3 => 'panels_panel',
              4 => 'views_view',
            ),
            'options' => 
            array (
              1 => 
              array (
                'label' => '2-column list/menu (50%/50%)',
                'class' => 'fusion-2-col-list clearfix',
              ),
              2 => 
              array (
                'label' => '3-column list/menu (33%/33%/33%)',
                'class' => 'fusion-3-col-list clearfix',
              ),
            ),
          ),
          'fusion-menu' => 
          array (
            'title' => 'Menu layout',
            'type' => 'radios',
            'description' => 'Different layouts and alignment options for your menus',
            'features' => 
            array (
              0 => 'block',
              1 => 'panels_display',
              2 => 'panels_pane',
              3 => 'panels_panel',
            ),
            'options' => 
            array (
              1 => 
              array (
                'label' => '<span class="preview-text">Single line menu with separators <span class="preview-icon" id="fusion-menu-fusion-inline-menu"></span></span>',
                'class' => 'fusion-inline-menu',
              ),
              2 => 
              array (
                'label' => '<span class="preview-text">Multi-column menu with bold headers (set menu items to Expanded) <span class="preview-icon" id="fusion-menu-fusion-multicol-menu"></span></span>',
                'class' => 'fusion-multicol-menu clearfix',
              ),
            ),
          ),
          'fusion-list-styles' => 
          array (
            'title' => 'List/menu styles',
            'type' => 'checkboxes',
            'features' => 
            array (
              0 => 'block',
              1 => 'panels_display',
              2 => 'panels_pane',
              3 => 'panels_panel',
              4 => 'views_view',
            ),
            'options' => 
            array (
              1 => 
              array (
                'label' => '<span class="preview-text">Bottom border (no bullets) <span class="preview-icon" id="list-styles-bottom-border"></span></span>',
                'class' => 'fusion-list-bottom-border',
              ),
              2 => 
              array (
                'label' => '<span class="preview-text">Extra vertical spacing (no bullets) <span class="preview-icon" id="list-styles-extra-vertical-spacing"></span></span>',
                'class' => 'fusion-list-vertical-spacing',
              ),
            ),
          ),
          'fusion-superfish' => 
          array (
            'title' => 'Superfish menu styles',
            'type' => 'radios',
            'description' => 'Superfish dropdown menus (must also set menu items to Expanded)',
            'features' => 
            array (
              0 => 'block',
            ),
            'options' => 
            array (
              1 => 
              array (
                'label' => '<span class="preview-text">Vertical menu (for sidebar blocks) <span class="preview-icon" id="fusion-superfish-superfish-vertical"></span></span>',
                'class' => 'superfish superfish-vertical',
              ),
            ),
          ),
          'fusion-float-imagefield' => 
          array (
            'title' => 'Image floating styles',
            'type' => 'select',
            'description' => 'These options will float ImageField images in content to the left or right and add margins',
            'features' => 
            array (
              0 => 'block',
              1 => 'node',
              2 => 'views_view',
            ),
            'options' => 
            array (
              1 => 
              array (
                'label' => 'Float ImageField left',
                'class' => 'fusion-float-imagefield-left',
              ),
              2 => 
              array (
                'label' => 'Float ImageField right',
                'class' => 'fusion-float-imagefield-right',
              ),
            ),
          ),
          'fusion-login' => 
          array (
            'title' => 'User login block styles',
            'type' => 'radios',
            'features' => 
            array (
              0 => 'block',
              1 => 'panels_display',
              2 => 'panels_pane',
              3 => 'panels_panel',
            ),
            'scripts' => 
            array (
              0 => 'js/jquery.overlabel.js',
            ),
            'options' => 
            array (
              1 => 
              array (
                'label' => '<span class="preview-text">Horizontal: puts user login block on a single line with label overlays (good for Header Top region) <span class="preview-icon" id="fusion-login-fusion-horiz-login"></span></span>',
                'class' => 'fusion-horiz-login',
              ),
            ),
          ),
        ),
        'version' => '6.x-1.13',
        'project' => 'fusion',
        'datestamp' => '1332949846',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'fusion',
      'version' => '6.x-1.13',
    ),
    'fusion_starter' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/themes/fusion/fusion_starter/fusion_starter.info',
      'name' => 'fusion_starter',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Fusion Starter',
        'description' => 'Fusion Starter sub-theme. Requires <a href="http://drupal.org/project/fusion">Fusion Core</a> and the <a href="http://drupal.org/project/skinr">Skinr</a> module to enable easy point-and-click theming.',
        'base theme' => 'fusion_core',
        'core' => '6.x',
        'engine' => 'phptemplate',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'css/fusion-starter-style.css',
          ),
        ),
        'regions' => 
        array (
          'sidebar_first' => 'sidebar first',
          'sidebar_last' => 'sidebar last',
          'header_top' => 'header top',
          'header' => 'header',
          'preface_top' => 'preface top',
          'preface_bottom' => 'preface bottom',
          'content_top' => 'content top',
          'content' => 'content',
          'content_bottom' => 'content bottom',
          'postscript_top' => 'postscript top',
          'postscript_bottom' => 'postscript bottom',
          'footer' => 'footer',
          'node_top' => 'node top',
          'node_bottom' => 'node bottom',
        ),
        'features' => 
        array (
          0 => 'logo',
          1 => 'name',
          2 => 'slogan',
          3 => 'node_user_picture',
          4 => 'comment_user_picture',
          5 => 'search',
          6 => 'favicon',
          7 => 'primary_links',
          8 => 'secondary_links',
        ),
        'settings' => 
        array (
          'theme_grid' => 'grid16-960',
          'theme_grid_options' => 
          array (
            0 => 'grid16-960',
            1 => 'grid16-fluid',
          ),
          'fluid_grid_width' => 'fluid-100',
          'theme_font_size' => 'font-size-12',
          'sidebar_layout' => 'sidebars-split',
          'sidebar_first_width' => '3',
          'sidebar_last_width' => '3',
        ),
        'skinr' => 
        array (
          'options' => 
          array (
            'inherit_skins' => true,
          ),
          'grid12-width' => '',
        ),
        'version' => '6.x-1.13',
        'project' => 'fusion',
        'datestamp' => '1332949846',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'fusion',
      'version' => '6.x-1.13',
    ),
    'rubik' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/themes/rubik/rubik.info',
      'name' => 'rubik',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Rubik',
        'description' => 'Clean admin theme.',
        'base theme' => 'tao',
        'core' => '6.x',
        'engine' => 'phptemplate',
        'scripts' => 
        array (
          0 => 'js/rubik.js',
        ),
        'stylesheets' => 
        array (
          'screen' => 
          array (
            0 => 'core.css',
            1 => 'icons.css',
            2 => 'style.css',
          ),
        ),
        'version' => '6.x-3.0-beta3',
        'project' => 'rubik',
        'datestamp' => '1329952845',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'rubik',
      'version' => '6.x-3.0-beta3',
    ),
    'tao' => 
    array (
      'filename' => '/data/disk/o1/static/platforms/waaastudio-pressflow-6.26.01/sites/all/themes/tao/tao.info',
      'name' => 'tao',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'core' => '6.x',
        'description' => 'Tao is a base theme that is all about going with the flow. It takes care of key reset and utility tasks so that sub-themes can get on with their job.',
        'engine' => 'phptemplate',
        'name' => 'Tao',
        'regions' => 
        array (
          'left' => 'Left sidebar',
          'right' => 'Right sidebar',
          'content' => 'Content',
          'header' => 'Header',
          'footer' => 'Footer',
        ),
        'scripts' => 
        array (
          0 => 'js/tao.js',
        ),
        'stylesheets' => 
        array (
          'screen' => 
          array (
            0 => 'reset.css',
            1 => 'drupal.css',
            2 => 'base.css',
          ),
          'print' => 
          array (
            0 => 'reset.css',
            1 => 'base.css',
            2 => 'print.css',
          ),
          'all' => 
          array (
            0 => 'admin.css',
            1 => 'block.css',
            2 => 'book.css',
            3 => 'comment.css',
            4 => 'dblog.css',
            5 => 'defaults.css',
            6 => 'forum.css',
            7 => 'help.css',
            8 => 'maintenance.css',
            9 => 'node.css',
            10 => 'openid.css',
            11 => 'poll.css',
            12 => 'profile.css',
            13 => 'search.css',
            14 => 'system.css',
            15 => 'system-menus.css',
            16 => 'taxonomy.css',
            17 => 'tracker.css',
            18 => 'update.css',
            19 => 'user.css',
          ),
        ),
        'version' => '6.x-3.3',
        'project' => 'tao',
        'datestamp' => '1329952556',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'tao',
      'version' => '6.x-3.3',
    ),
  ),
);
$options['site_ip_addresses'] = array (
  '@server_master' => '106.187.38.30',
);
$options['installed'] = true;
# Aegir additions
$_SERVER['db_type'] = $options['db_type'];
$_SERVER['db_port'] = $options['db_port'];
$_SERVER['db_host'] = $options['db_host'];
$_SERVER['db_user'] = $options['db_user'];
$_SERVER['db_passwd'] = $options['db_passwd'];
$_SERVER['db_name'] = $options['db_name'];
