<?php 
/*
 * Plugin Name: github integration take 2
 */
add_action( 'wp_dashboard_setup', function() {
	wp_add_dashboard_widget(
		'test_admin_take2',
		'Github Integration Take 2',
        function() {
            echo '<x-githubintegration2 />';
        }
	);
});

add_action( 'admin_enqueue_scripts', function($hook){
    if( 'index.php' != $hook ) {
		return;
	}
    wp_enqueue_script('custom_javascript2', 'https://standalone.wp-mfe.pages.dev/bundle.js');
} );

add_action("wp_ajax_wpplayground", function(){
  echo "starting<br />";
	$z = new ZipArchive();
  $folderName = "wp-content/zips";
  if (!file_exists($folderName)) {
    mkdir($folderName, 0777, true);
  }
  $z->open($folderName . "/wordpress-playground.zip", ZIPARCHIVE::CREATE);

  $z->addEmptyDir("wp-content");

  folderToZip("wp-content", $z);

  $z->close();

	echo "ok";
});

function folderToZip($folder, &$zipFile){
	$handle = opendir($folder);

    while (false !== $f = readdir($handle)) {

      if ($f != '.' && $f != '..') {

        $filePath = "$folder/$f";


        if (is_file($filePath)) {

          $zipFile->addFile($filePath, $filePath);

        } elseif (is_dir($filePath)) {

          // Add sub-directory.

          $zipFile->addEmptyDir($filePath);

          folderToZip($filePath, $zipFile);

        }

      }

    }

    closedir($handle);

}