<?php

/**
 * BlueSpice MediaWiki
 * Description: Checks the compatibility of your server setup to instal BlueSpice MediaWiki
 * Authors: Marc Reymann, Benedikt Hofmann
 *
 * Copyright (C) 2017 Hallo Welt! GmbH, All rights reserved.
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 *
 * For further information visit http://bluespice.com
 *
 */

// MediaWiki version
$cfgMWversion = "1.27";

// PHP version
$cfgPHPversion['min'] = '5.5.9';
$cfgPHPversion['opt'] = '7.0';

// PHP extensions to check
$cfgRequiredExtensions[] = [ "curl",           "<span class=\"warn\">WARNING!</span> This extension is needed if you want to use curl in the extended search." ];
$cfgRequiredExtensions[] = [ "gd",             "<span class=\"fail\">FAILED!</span>" ];
$cfgRequiredExtensions[] = [ "intl",           "<span class=\"warn\">WARNING!</span> This extension is needed if you want to use internationalization." ];
$cfgRequiredExtensions[] = [ "json",           "<span class=\"fail\">FAILED!</span>" ];
$cfgRequiredExtensions[] = [ "ldap",           "<span class=\"warn\">WARNING!</span> This extension is needed if you want to connect to an ldap directory." ];
$cfgRequiredExtensions[] = [ "mbstring",       "<span class=\"fail\">FAILED!</span>" ];
$cfgRequiredExtensions[] = [ "mysqli",         "<span class=\"fail\">FAILED!</span>" ];
$cfgRequiredExtensions[] = [ "pcre",           "<span class=\"fail\">FAILED!</span>" ];
$cfgRequiredExtensions[] = [ "tidy",           "<span class=\"warn\">WARNING!</span> This extension is needed if you want to use the universal export module." ];
$cfgRequiredExtensions[] = [ "xsl",            "<span class=\"fail\">FAILED!</span>" ];
$cfgRequiredExtensions[] = [ "zip",            "<span class=\"warn\">WARNING!</span> This extension is needed if you want to use ZIP compression." ];
$cfgRequiredExtensions[] = [ "Zend OPcache",   "<span class=\"warn\">WARNING!</span> This extension is needed if you want to use a fast bytecode cache." ];

// PHP ini values#
$cfgINIoptions[] = [ "date.timezone",       "!=", "Off",  "<span class=\"warn\">WARNING!</span> You should set this to your local timezone." ];
$cfgINIoptions[] = [ "memory_limit",        ">=", "128M", "<span class=\"warn\">WARNING!</span> You should increase this value to 128M or higher." ];
$cfgINIoptions[] = [ "max_execution_time",  ">=", "120",  "<span class=\"warn\">WARNING!</span> You should increase this value to 120 or higher." ];
$cfgINIoptions[] = [ "post_max_size",       ">=", "32M",  "<span class=\"warn\">WARNING!</span> You should increase this value to 32M or higher." ];
$cfgINIoptions[] = [ "upload_max_filesize", ">=", "32M",  "<span class=\"warn\">WARNING!</span> You should increase this value to 32M or higher." ];
$cfgINIoptions[] = [ "memory_limit",        ">=", "256M", "<span class=\"warn\">WARNING!</span> You should increase this value to 256M or higher." ];
$cfgINIoptions[] = [ "register_globals",    "==", "0",    "<span class=\"fail\">FAILED!</span> Disable this option for security reasons." ];

// Writable folders
$cfgWritableFolders[] = [ "/cache",                                 "<span class=\"fail\">FAILED!</span>" ];
$cfgWritableFolders[] = [ "/images",                                "<span class=\"fail\">FAILED!</span>" ];
$cfgWritableFolders[] = [ "/extensions/BlueSpiceFoundation/config", "<span class=\"fail\">FAILED!</span>" ];
$cfgWritableFolders[] = [ "/extensions/BlueSpiceFoundation/data",   "<span class=\"fail\">FAILED!</span>" ];
$cfgWritableFolders[] = [ "/extensions/Widgets/compiled_templates", "<span class=\"warn\">WARNING!</span> This folder is only needed for BlueSpice pro" ];

// Files to check
$cfgFilesToCheck[] = [ "/extensions/BlueSpiceExtensions/BlueSpiceExtensions.local.php", "<span class=\"warn\">WARNING!</span> BlueSpice will load it's default extensions." ];

?>
<!DOCTYPE html>

<html lang="en">

	<head>
		<title>BlueSpice MediaWiki - Install-Check</title>
		<style>
			body {
				background: #f6f6f6 url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACYAAAKnCAMAAADdkM/IAAAAM1BMVEXb29vt7e329vbm5ubg4ODo6Oj09PTv7+/c3Nzr6+vh4eHy8vLl5eXe3t7q6urj4+Px8fFIJv4IAAAK2UlEQVR42u2b25qsKAyFrVIQxQPv/7SjogayAli9qf76Yrya7v0XZCVhAXZNIz2v9/G08W87jqkd0v3LhL9sewEb2GfH/o2YZZBptuEBm0w4jlL9e8d0k3uM3ZAde49ZbjqwY9bsozcMMzRDGnfMLusYztoNQn6aif2u1UIaX6GkcRzVJguxNlLeH3Fiflgi5rd/uib/DB4bCtgqDWewLidmw39SONwWv+p2PtDVC1g/x6KUFipphjDQvrd7BA6wzsSl9M/2y2yjaY9Nhfwsp2726TWRxiVuK8VreShYlBqD37m3gL1m0rduDeS2DwIWRz9cMfDYJlhiUiJHYYnhQjQm3RnZ1nBvbMhpAazfOmjYBI/rPcGyCUfsZUK3m6dNlTCpCrPF83PP8IoW9Ik5WCqGheCfmQ2m5DS+2PJc5TTykvKq+ND6vp/CBpIwNft6GbJoxGxHaV4ui37z2PTMC9kI3jJFH5v1hek4bwsuMK8qrgLf0m7sHdYUFB2YXvYls5jbj0VMXYPs9LhYIT9RF5irhREbmHJ5V97HKjfawjfXa7g4vWe20PjiYrW4OfknLH2/KUJMH5HM7eQbadJvCXPz7dZ7W/r8QGzOhE195Qc2/xkdAzfOdkHrpS2MqsDyqCndUU3BWcio1DXF9lkJs9uSca6Z3LL6PV7C+tHHczeQiFEHhRyXsFNFR1v9gsNE6ji9C8/rNVxUrCsGnDUsPSki7OyguXVnI9m3iA2GBRBi9z8NaKl4CHK92OoLn3MUF5jPG1Xh2PSxb3mtFn4UQE7YncbbyalDtl9I2OAXoNJHvx02iJPqlXzmfVs0SFjDFXJjLCFxn02ExellW5+9sbhYLmX4YelhmavAye3ZSNsMInY5fXtVErEoFd3FYWzOSKXkSvWc9IxQuUp0BquCSRwFoprieeSiwg4RrhnHv3fnIfu26B6PcboD/4FJ14NCznA/m+DKQs1Ng1l5gfn0UrEShr8VKyq9SvjUNs3VSNsPImYHtWwrazobQ8bc7eTzrRxjG4zQaFzpFrroVDxvx4yYyLgK9+C0Ev3DajoktrqwQw7hiOll3NS0NDBi+xX3ErUEA8P1tZd0W75etREjHRvWGsnOoCnhfHxjVCxf+mR+HFk0YreT342Uwl7nOvWDegxjm0gfYUxpfAwmjOUtzutwY7wKbZRWwqKaYqiEUYckMD1M47rcDZTArludymFaOApwCVfr84aEhKyi9fL0OrkzeLFU4qzNSj+KmO0dNVIKU/N5Fj8fxHq26kkQVxp4iE04/nJ+Dj11ZSeEOWlAVFO0QeKiDulTaaR+S2G9Uuql9yP7/eCkrvOyQ+Uo4SUph4RoI0mC9E7wVgAt+ooBZ+WlTxzJw0ZKYf4odacHselI0PVq5GIgtuGUjiuCzYlnTjIqShA6FX9xctQ0YfhhTalImB/qkDRme5+/jPdet7p5CDGUMLB6N8LxL7ZiwiC9Y3hCvzFWrLThU+nxJO8x9iSw3enHsbUFbDDsUgexJZwclepOsl7ImxI7A6pgUodoqimNjRh1SBqz1EBpbJj9kT2JrWGrdFe+QUIf7X0dnNBIuk1Yb0fFQn8LuLj0Yyo/9w//iLl9nb7pUifGZu8zOSlHpdYIuwnmbZSOAlAFJx4FoKYqjVGHIMafDDbsJ65tshRmfHXhKEASKCEdWbFclQ7u9fdD6T2LNcolp2L5H2XhVPocRk8G63ejjzGMDc/koDTh5Jg3G7cdYVQFtkPOhIU1hf3WihaNwp9j6OSJSZ1hliFLMGgtmJApdPakRffSUQCLNYmHRCj9yDF8EKN1msOGMyiKifLDld5/bmAbA+UtPu200XCsCrNw1uY1RRskLLk7qX/G2KS0nOlDKIFednWRckxIlzADSi9ufeeDxZqlrQ5LHx8S4fkHbKKjPV3qMLZedHKutI0Pl3M0XheXzgl346gK0i0YLTqH0fPvmNsnIwwl0DnYvAiTEuLM3ZwJi0ZjJ4yKhTFI3ouKvoLpwX/L5HwSsZ0SqYFkpfj2gOUteRTAKsziUYBqitYiaa6Abcs5g03Ba775FXMzT8iLO7RPCEuvNuBTUrEWOu/HWHLb+T0MY+u3VzRD5OSolDyErEXK24pHgagKWKUhbdFTdo8n4Z9jg4wkTjPDHF7qQMISfbCLufWODA5FGYt+z3AUiIt1/pQ/RH8JY7Ghk8tKtb+JO8JY3rhjE4ZVUGSWKVPFUBFD4RUwYdLdHKiBEhKOBIV/h5IT0uJbAUyvlXodizU9Wjnv8VvYHdv2flzzhQhK++OYtzC/4HnrIQSxCrO8wJrUfqL+HBZLIHOgrMoJ8Wkd6TskLL2ZPQyLZbKbN4XwJWyV/p3HRkpf+8tS3psL78aBOTTL29V49LGcRS/5UBtwgxpYaVKUkHZyTIie7vdmhFF6wdg5Jp9olyxGwn8RE2JTc3CpSypd48taIm90vc1YtG6CZZ5+huzmTcIfYk8nRQmuh4E1JMR18d+h5PRqwyKVi5XYEJvUtvObWCm2lFLbjlP/JofGvFHRJ/oOiVgFG3ydNPO05c2bhJexzyZFCfL7J0f3CbzUUUJuir0NYem9g2VXlkSx7pXzm1ghNlRKL0sHjmHe1tiR8q4xFjBzFSmLkfAq2D3ppxJeXbBXJROiYntLpNeW75XHdxrzpxbYF6qMVo4NlaKTp/Kmx/jKkqjCKDZxk9hvlyxGB9oq2D1pFQlXQrjV6LRF04u4gc6c+aulyVIuf4im/Hw02tPYdCjx+i9USr+Yjy+bFyzamtxm0rD9pMtitDvVwbKTfiiBEpJ1ckyvilZvk6+5qmP4dbFybKgUHSmZt1f8fjdVhe7s4gJ2bU51sPKkZQmQkKKTC7eYThewa5t4ZvjN72JnbJWU8ry57dvmL+bkaX9b8tjqnZdvTgnhD7GHkz6UIFsNJoR+7uhykum37vy71AcHWsS4adQZLRvbp0oxb3b7vzFFDP+k0t5Yfr+1Jew0oErYOWklCZAQN9LlJBnpeVvuS9hyno6fnXsrjZaL7XOl9NBfxx5gg3Raa+RL9VDCer/AKmHnpJUkpBJSePT2htaVse7wgixGwn8XO2P7gVLXZ/uNLjGzy2J0EstitDvVwvyktSSICfnUuJKUuc/75QPtL2M+tlpK0d/m7Q5TxuZjOylifnOqhflJa0l4mBC8nQzVnNy/BCu9hLnyU2u0I7ZqSn+WXt2Oqy1j7X7gz2LkQNWwY9JqEjAh1j3Bpv2qU8Rs7g1hE+9OqtZoPrZqSn/WSG5aX1mM1oTLYpSfWpiftJqEH+ZNd9t3T8qY2ned38aO2Kop/SFmVf7tCq2JoYSdwqthx6TVJFTOG5c0TrqMuf0WX8b6fYFVG+2IrZ7SH/rbK/Pqr4l3p3rYPmk9CZXzxu86q3uATeEfm5vsJl9vtD22ekp/ik37dlvG9kNiPWyftJ6Er2IPbXDebg8l7MxPvdH+gkU/dfJmzGOUn3rYNmlFCSJW7WWCy7ypb6JNTNUbbYutptKvYu2qsxjlpx62T1pRwnexV9MWMb8oKo5WV8JXMa3Kr4V9fipi26QVJfwFbGuMioa/jVYxti9jDw+0Y1MT+wOn6MrY0GYxyk/N0epK+DLW9DWxurH9BUzZIubzU3O0uhL+AmZcTaxubN/FtH2E9armaHUl/AXMDTWxurF9GXPPsLHqaHUl/AVMP8Ns1Un/x/7H6PkPF+/WHoNrHWkAAAAASUVORK5CYII=') repeat-x fixed;
				text-align: center;
			}
			#content {
				background: #ffffff;
				border: 1px solid #000000;
				box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.75);
				margin: 20px auto;
				padding: 0 0 20px 0;
				text-align: left;
				width: 900px;
				-moz-box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.75);
				-webkit-box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.75);
			}
			#header {
				background: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAKkAAAA5CAYAAABNswtsAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6QjU4NzgxRkE2MkZGMTFFN0ExQjFFQ0Q5RkUzRTgzMUEiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6QjU4NzgxRkI2MkZGMTFFN0ExQjFFQ0Q5RkUzRTgzMUEiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpCNTg3ODFGODYyRkYxMUU3QTFCMUVDRDlGRTNFODMxQSIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpCNTg3ODFGOTYyRkYxMUU3QTFCMUVDRDlGRTNFODMxQSIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PoGPs2YAAB6bSURBVHja7F0JvFZF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') no-repeat right top;
				border-bottom: 1px solid #000000;
				height: 62px;
				margin: 5px 10px;
			}
			#header h1 {
				display: table-cell;
				font: 16px 'Verdana', 'Helvetica', 'Arial', sans-serif;
				font-weight: bold;
				height: 60px;
				margin: 0;
				padding: 0;
				vertical-align: bottom;
			}
			#notMW {
				border: 2px solid red;
				color: red;
				font: 14px 'Verdana', 'Helvetica', 'Arial', sans-serif;
				font-weight: bold;
				margin: 20px auto 0 auto;
				padding: 20px;
				text-align: center;
				width: 700px;
			}
			.section {
				margin: 20px 10px 5px 10px;
			}
			.section h2 {
				font: 14px 'Verdana', 'Helvetica', 'Arial', sans-serif;
				font-weight: bold;
				margin: 0;
			}
			.section p {
				font: 12px 'Verdana', 'Helvetica', 'Arial', sans-serif;
				line-height: 18px;
				margin: 10px 0 0 25px;
			}
			.section .infobox {
				margin: 20px 0 0 50px;
			}
			.section .infobox a {
				border: 1px solid #000000;
				color: #000000;
				padding: 3px 6px;
				text-decoration: none;
			}
			.section .infobox a:hover {
				box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.75);
				-moz-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.75);
				-webkit-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.75);
			}
			.section .ok, .section .warn, .section .fail {
				font-weight: bold;
			}
			.section .ok {
				color: green;
			}
			.section .warn {
				color: #ffa500;
			}
			.section .fail {
				color: red;
			}
		</style>
	</head>

	<body>
		<div id="content">
			<div id="header"><h1>BlueSpice MediaWiki &ndash; Install-Check</h1></div>

			<?php echo checkMediaWikiHomeDir( $cfgMWversion );?>

			<div class="section">
				<h2>Checking PHP version</h2>
				<p><?php echo checkPHPversion( phpversion() ); ?></p>
			</div>

			<div class="section">
				<h2>PHP configuration file</h2>
				<p>The used php.ini file is <b><?php echo php_ini_loaded_file();?></b></p>
			</div>

			<div class="section">
				<h2>Checking PHP extensions</h2>
				<p><?php echo checkExtensions( $cfgRequiredExtensions );?></p>
			</div>

			<div class="section">
				<h2>Checking PHP file upload</h2>
				<p><?php echo checkFileUpload();?></p>
			</div>

			<div class="section">
				<h2>Checking PHP session save path</h2>
				<p><?php echo checkSessionSavePath();?></p>
			</div>

			<div class="section">
				<h2>Checking PHP ini values</h2>
				<p><?php echo checkINIvalues( $cfgINIoptions );?></p>
			</div>

			<div class="section">
				<h2>Checking write access</h2>
				<p><?php echo checkWritePerm( $cfgWritableFolders );?></p>
				<p class="infobox"><a href="https://en.help.bluespice.com/wiki/Setup:Installation_Manual/Security_Settings/File_System_Permissions" target="_blank"><b>&#9432;</b>&nbsp;&nbsp;&nbsp;For more information refer to the related article in the BlueSpice Helpdesk</a></p>
			</div>

			<div class="section">
				<h2>Checking files</h2>
				<p><?php echo checkFiles( $cfgFilesToCheck );?></p>
				<p class="infobox"><a href="https://en.help.bluespice.com/wiki/Setup:Installation_Manual/Advanced/Activation_and_deactivation_of_BlueSpice-extensions" target="_blank"><b>&#9432;</b>&nbsp;&nbsp;&nbsp;For more information refer to the related article in the BlueSpice Helpdesk</a></p>
			</div>

			<div class="section">
				<h2>Checking SMTP connection</h2>
				<p><?php echo checkMail();?></p>
			</div>

			<div class="section">
				<h2>Checking compatibility to Single Sign On</h2>
				<p><?php echo checkSSO();?></p>
			</div>

		</div>
	</body>

</html>
<?php

// Functions ======================================================================================================================

function checkMediaWikiHomeDir( $mwVersion ) {

	if ( !file_exists( __DIR__ . "/cache" ) ||
             !file_exists( __DIR__ . "/images" ) ||
             !file_exists( __DIR__ . "/extensions" ) ||
             !file_exists( __DIR__ . "/RELEASE-NOTES-" . $mwVersion ) ) {
		return "<div id=\"notMW\">It looks like you are using this installation check outside of a MediaWiki {$mwVersion} installation.<br />Probably some checks will fail.</div>\n";
	}

	return false;

}

function checkPHPversion( $phpversion ) {

	global $cfgPHPversion;

	$sResult = "PHP version is {$phpversion} ..... ";

	if ( version_compare( $phpversion, $cfgPHPversion['min'], '<') ) {
		$sResult .= "<span class=\"fail\">FAILED!</span> This version is not compatible with BlueSpice. Please upgrade to version >= {$cfgPHPversion['min']}.";
	}
	elseif ( version_compare( $phpversion, $cfgPHPversion['opt'], '<') ) {
		$sResult .= "<span class=\"warn\">WARNING!</span> You should upgrade to version >= {$cfgPHPversion['opt']} for best performance.";
	}
	else {
		$sResult .= "<span class=\"ok\">OK</span>";
	}

	return $sResult;

}

function checkExtensions( $requiredExtensions ) {

	$sReturn = '';

	foreach ( $requiredExtensions as $value ) {

		list( $extension, $helptext ) = $value;

		$sReturn .= "\nChecking: {$extension} ..... ";

		if( extension_loaded( $extension ) ) {
			$sReturn .= "<span class=\"ok\">OK</span><br/>";
		}
		else {
			$sReturn .= "{$helptext}<br/>";
		}
	}

	return $sReturn . "\n";

}

function checkFileUpload() {

	$sReturn = '';

	$fileUploads = ini_get( "file_uploads" );
	$uploadTmpDir = ini_get( "upload_tmp_dir" );

	if ( $fileUploads != "1" ) {
		$sReturn .= "<span class=\"warn\">WARNING!</span> ..... File upload is not enabled. To enable please change the file_uploads option in your php.ini.";
	}
	elseif ( empty( $uploadTmpDir ) ) {
		$sReturn .= "<span class=\"warn\">WARNING!</span> ..... File upload is enabled but upload_tmp_dir is not set. Make sure your system's temp dir is writable by the web server.";
	}
	else {
		if ( checkWritePerm( $uploadTmpDir ) == true ) {
			$sReturn .= "<span class=\"ok\">OK</span> ..... File upload is enabled and the upload_tmp_dir ({$uploadTmpDir}) is writable.";
		}
		else {
			$sReturn .= "<span class=\"fail\">FAILED!</span> ..... File upload is enabled but the upload_tmp_dir ({$uploadTmpDir}) is not writable.";
		}
	}

	return $sReturn;

}

function checkSessionSavePath() {

	$sReturn = '';

	$sessionSavePath = ini_get( "session.save_path" );

	if ( checkWritePerm( $sessionSavePath ) == true ) {
		$sReturn .= "<span class=\"ok\">OK</span> ..... session.save_path ({$sessionSavePath}) is writable.";
	}
	else {
		$sReturn .= "<span class=\"fail\">FAILED!</span> ..... session.save_path ({$sessionSavePath}) is not writable.";
	}

        return $sReturn;

}

function checkINIvalues( $iniOptions ) {

	$sReturn = '';

	foreach ( $iniOptions as $value ) {

		list( $iniOption, $checkOperator, $checkValue, $helptext ) = $value;

		$iniValue = ini_get( $iniOption );

		if ( empty( $iniValue ) ) {
			$iniValue = "0";
		}

		$sReturn .= "\nChecking: {$iniOption} ({$iniValue}) ";

		if ( $checkOperator == "==" ) {
			if ( $iniValue != $checkValue ) {
				$sReturn .= "..... {$helptext}<br/>";
				$iniOptionChecked[$iniOption] = true;
			}
		}
		elseif ( $checkOperator == "!=" ) {
			if ( $iniValue == $checkValue ) {
				$sReturn .= "..... {$helptext}<br/>";
				$iniOptionChecked[$iniOption] = true;
			}
		}
		elseif ( $checkOperator == ">=" ) {
			if ( $iniValue < $checkValue || in_array( [ '0', '1' ] ) ) {
				$sReturn .= "..... {$helptext}<br/>";
				$iniOptionChecked[$iniOption] = true;
			}
		}

		if ( $iniOptionChecked[$iniOption] != true ) {
			$sReturn .= "..... <span class=\"ok\">OK</span><br/>";
		}

	}

	return $sReturn . "\n";

}

function checkWritePerm( $checkFolders ) {

	if ( !is_array( $checkFolders ) ) {
		$checkFolders = array( [ $checkFolders, "" ] );
		$returnValue = "tf";
	}

	$sReturn = '';

	foreach ( $checkFolders as $value ) {

		list( $checkFolder, $helptext ) = $value;

		$sReturn .= "\nChecking: {$checkFolder} ..... ";

		if ( !isset( $returnValue ) ) {
			$folder = __DIR__ . $checkFolder;
		}
		else {
			$folder = $checkFolder;
		}

		$fopen = @fopen( "{$folder}/checkWritePerm.bs", "w" );

		if ( $fopen == true ) {
			fwrite( $fopen, "Checking write permissions" );
			fclose( $fopen );
		}

		if ( !file_exists( "{$folder}/checkWritePerm.bs" ) ) {
			if ( isset( $returnValue ) ) {
				$returnValue = false;
			}
			$sReturn .= "{$helptext}<br />";
		}
		else {
			if ( isset( $returnValue ) ) {
				$returnValue = true;
			}
			$sReturn .= "<span class=\"ok\">OK</span><br />";
			@unlink( "{$folder}/checkWritePerm.bs" );
		}

	}

	if ( isset( $returnValue ) ) {
		return $returnValue;
	}
	else {
		return $sReturn . "\n";
	}

}

function checkFiles( $checkFiles ) {

	$sReturn = '';

	foreach ( $checkFiles as $value ) {

		list( $checkFile, $helptext ) = $value;

		echo "\nChecking: {$checkFile} ..... ";

		$file = __DIR__ . $checkFile;

		if ( !file_exists( $file ) ) {
			$sReturn .= "{$helptext}<br />";
		}
		else {
			$sReturn .= "<span class=\"ok\">OK</span><br />";
		}

	}

	return $sReturn . "\n";

}

function checkMail() {

	$sReturn = '';

	$smtpHost = ini_get( "SMTP" );
	$smtpPort = ini_get( "smtp_port" );

	$smtpConnection = @fsockopen( "tcp://{$smtpHost}", $smtpPort, $errno, $errstr, 5 );

	if ( !$smtpConnection )	{
		$sReturn .= "<span class=\"warn\">WARNING!</span> Mail will not work. Error message: <i>{$errno}: {$errstr}</i>";
	}
	else {
		$sReturn .= "<span class=\"ok\">OK</span> ..... connection to SMTP server was successful.";
	}

	return $sReturn;

}

function checkSSO() {

	$sReturn = '';

	if ( isset( $_SERVER['REMOTE_USER'] ) ) {
		$sReturn .= "<span class=\"ok\">OK</span> ..... \$_SERVER['REMOTE_USER'] is set ({$_SERVER['REMOTE_USER']}), you can configure Single Sign On.";
	}
	else {
		$sReturn .= "<span class=\"warn\">WARNING!</span> \$_SERVER['REMOTE_USER'] is not set. If you want to use Single Sign On please configure the authentication type of your webserver.</span>";
	}

	return $sReturn;

}
