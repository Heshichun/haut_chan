<?php

/*
*  Instance Configuration
*  ----------------------
*  Edit this file and not config.php for imageboard configuration.
*
*  You can copy values from config.php (defaults) and paste them here.
*/


	$config['db']['server'] = 'localhost';
	$config['db']['database'] = 'VIDB';
	$config['db']['prefix'] = '';
	$config['db']['user'] = 'VIU';
	$config['db']['password'] = 'lsof04Mt';


	$config['cookies']['mod'] = 'mod';
	$config['cookies']['salt'] = 'N2JkYTRkMjAxNDRmMDc2MGZkZmU0Y2';

	$config['flood_time'] = 10;
	$config['flood_time_ip'] = 120;
	$config['flood_time_same'] = 30;
	$config['max_body'] = 1800;
	$config['reply_limit'] = 250;
	$config['max_links'] = 20;
	$config['max_filesize'] = 10485760;
	$config['thumb_width'] = 255;
	$config['thumb_height'] = 255;
	$config['max_width'] = 10000;
	$config['max_height'] = 10000;
	$config['threads_per_page'] = 10;
	$config['max_pages'] = 10;
	$config['threads_preview'] = 5;
	$config['root'] = '/';
	$config['secure_trip_salt'] = 'MmRkNjQ3N2JmNDliZTVhMzE1ZjQ4Mz';

	$config['bsd_md5'] = '1';

	
	$config['stylesheets']['Yotsuba B'] = ''; // Default; there is no additional/custom stylesheet for this.
	$config['stylesheets']['Yotsuba'] = 'yotsuba.css';
	$config['stylesheets']['Futaba'] = 'futaba.css';
	$config['stylesheets']['Dark'] = 'dark.css';

	
	$config['default_stylesheet'] = array('Futaba', $config['stylesheets']['Futaba']);
	$config['stylesheets_board'] = true;
	
	$config['boards'] = array(
	array('综合','吐槽','学院综合','二手','游戏'),
	// 	array('c', 'd', 'e', 'f', 'g'),
	// 	array('h', 'i', 'j'),
	// 	array('k', array('l', 'm')),
	// 	array('status' => 'http://status.example.org/')
	);
	
	$config['page_nav_top'] = true;
	$config['debug'] = false;
	$config['allow_delete'] = false;

	$config['force_body'] = true;
	$config['force_body_op'] = true;
	$config['force_image_op'] = false;

	$config['error']['toomanyimages'] = _('Images are disabled on this board.');