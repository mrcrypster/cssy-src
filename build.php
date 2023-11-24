<?php

header('Content-type: text/css');
header('Expires: ' . gmdate('D, d M Y H:i:s \G\M\T', time() + 60));

$less = '';
foreach ( glob(__DIR__ . '/src/*.less') as $f ) {
  $less .= "\n" . file_get_contents($f);
}

if ( md5_file('/tmp/less-cssy.less') != md5($less) ) {
  file_put_contents('/tmp/less-cssy.less', $less);
  exec('lessc -s /tmp/less-cssy.less /tmp/less-cssy.css');
}

readfile('/tmp/less-cssy.css');
file_put_contents(__DIR__ . '/build.css', file_get_contents('/tmp/less-cssy.css'));