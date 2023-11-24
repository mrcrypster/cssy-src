<html>
  <head>
    <title>CSSy / styles showcase</title>
    <link rel="stylesheet" href="/build.php?<?=microtime(1)?>">
    
    <style>
      pre.c { background: #444; color: #FFDC00cc; padding: 20px; font-size: 11px; line-height: 150%; margin: 0; }
    </style>
  </head>
  <body>
    <?php foreach ( explode("\n\n", file_get_contents(__DIR__ . '/showcase.html')) as $section ) { ?>
      <?=$section?>
      <pre class="c"><?=htmlspecialchars($section)?></pre>
    <?php } ?>
  </body>
</html>