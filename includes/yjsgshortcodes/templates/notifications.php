<?php
require 'framework.php';
?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="<?php echo $base_link	.'plugins/system/yjsg/' ?>assets/bootstrap3/css/bootstrap.min.css" />
<link rel="stylesheet" href="<?php echo $base_link	.'plugins/system/yjsg/' ?>elements/css/yjsgfa.css" />
<script type="text/javascript" src="<?php echo $base_link	.'plugins/system/yjsg/' ?>assets/src/libraries/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $base_link	.'plugins/system/yjsg/' ?>assets/bootstrap3/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo $base_link	.'plugins/system/yjsg/' ?>elements/src/yjsgfa.js"></script>
<script type="text/javascript" src="notifications.js"></script>
</head>
<body>
	<div class="container">
		<h2> Notifications shortcode </h2>
		<form role="form">
		<div class="form-inline">
			<div class="form-group">
				<label for="color" data-toggle="tooltip" data-placement="top" title="Select color">Color</label>
				<select class="form-control" id="color" name="color">
					<option value="red" selected>Red</option>
					<option value="green">Green</option>
					<option value="blue">Blue</option>
					<option value="yellow">Yellow</option>
					<option value="gray">Gray</option>
					<option value="dark">Dark</option>
					<option value="clear">Clear</option>
				</select>
			</div>

			<div class="form-group">
				<label for="borderstyle" data-toggle="tooltip" data-placement="top" title="Select border style">Border style</label>
				<select class="form-control" id="borderstyle" name="borderstyle">
				    <option value="default" selected>Default</option>
					<option value="bordernone">None</option>
					<option value="dashedb">Dashed</option>
					<option value="dottedb">Dotted</option>
					<option value="doubleb">Double</option>
				</select>
			</div>
			<div class="form-group">
				<label for="radius" data-toggle="tooltip" data-placement="top" title="Select border radius">Border radius</label>
				<select class="form-control" id="radius" name="radius">
					<option value="0" selected>None</option>
					<option value="radiusb2">2px</option>
					<option value="radiusb3">3px</option>
					<option value="radiusb4">4px</option>
					<option value="radiusb5">5px</option>
					<option value="radiusb6">6px</option>
					<option value="radiusb7">7px</option>
					<option value="radiusb8">8px</option>
					<option value="radiusb9">9px</option>
					<option value="radiusb10">10px</option>
				</select>
			</div>
			<div class="form-group">
				<label for="closebutton" data-toggle="tooltip" data-placement="top" title="Add close button?">Close button</label>
				<select class="form-control" id="closebutton" name="closebutton">
					<option value="no" selected>No</option>
					<option value="yes">Yes</option>
				</select>
			</div>
			</div>
<div class="yjsg-icons-container">
			<br/>
			<div class="form-inline">
			<div class="form-group">
				<label for="iconsize" data-toggle="tooltip" data-placement="top" title="Select icon size">Icon size</label>
				<select class="form-control" id="iconsize" name="iconsize">
				    <option value="" selected>Default</option>
					<option value=" fa-lg">Large</option>
				</select>
			</div>
			
			<div class="form-group">
				<label for="iconalign" data-toggle="tooltip" data-placement="top" title="Select icon alignment">Icon align</label>
				<select class="form-control" id="iconalign" name="iconalign">
				    <option value="" selected>Top</option>
					<option value="imid ">Middle</option>
					<option value="ibot ">Bottom</option>
				</select>
			</div>
			</div>
			
				<label for="icon" data-toggle="tooltip" data-placement="top" title="Just click on any icon. The class will be added automatically.">Icon</label>
				<input type="text" class="form-control yjsg-fa" id="icon" name="icon" placeholder="icon class" onClick="this.select()" />
				<br />
				<div class="yjsg-icons-holder" style="max-width:100%;max-height:120px;"><span data-faname="fa fa-glass" class="hasTip fa fa-glass" title=""></span><span data-faname="fa fa-music" class="hasTip fa fa-music" title=""></span><span data-faname="fa fa-search" class="hasTip fa fa-search" title=""></span><span data-faname="fa fa-envelope-o" class="hasTip fa fa-envelope-o" title=""></span><span data-faname="fa fa-heart" class="hasTip fa fa-heart" title=""></span><span data-faname="fa fa-star" class="hasTip fa fa-star" title=""></span><span data-faname="fa fa-star-o" class="hasTip fa fa-star-o" title=""></span><span data-faname="fa fa-user" class="hasTip fa fa-user" title=""></span><span data-faname="fa fa-film" class="hasTip fa fa-film" title=""></span><span data-faname="fa fa-th-large" class="hasTip fa fa-th-large" title=""></span><span data-faname="fa fa-th" class="hasTip fa fa-th" title=""></span><span data-faname="fa fa-th-list" class="hasTip fa fa-th-list" title=""></span><span data-faname="fa fa-check" class="hasTip fa fa-check" title=""></span><span data-faname="fa fa-times" class="hasTip fa fa-times" title=""></span><span data-faname="fa fa-search-plus" class="hasTip fa fa-search-plus" title=""></span><span data-faname="fa fa-search-minus" class="hasTip fa fa-search-minus" title=""></span><span data-faname="fa fa-power-off" class="hasTip fa fa-power-off" title=""></span><span data-faname="fa fa-signal" class="hasTip fa fa-signal" title=""></span><span data-faname="fa fa-cog" class="hasTip fa fa-cog" title=""></span><span data-faname="fa fa-trash-o" class="hasTip fa fa-trash-o" title=""></span><span data-faname="fa fa-home" class="hasTip fa fa-home" title=""></span><span data-faname="fa fa-file-o" class="hasTip fa fa-file-o" title=""></span><span data-faname="fa fa-clock-o" class="hasTip fa fa-clock-o" title=""></span><span data-faname="fa fa-road" class="hasTip fa fa-road" title=""></span><span data-faname="fa fa-download" class="hasTip fa fa-download" title=""></span><span data-faname="fa fa-arrow-circle-o-down" class="hasTip fa fa-arrow-circle-o-down" title=""></span><span data-faname="fa fa-arrow-circle-o-up" class="hasTip fa fa-arrow-circle-o-up" title=""></span><span data-faname="fa fa-inbox" class="hasTip fa fa-inbox" title=""></span><span data-faname="fa fa-play-circle-o" class="hasTip fa fa-play-circle-o" title=""></span><span data-faname="fa fa-repeat" class="hasTip fa fa-repeat" title=""></span><span data-faname="fa fa-refresh" class="hasTip fa fa-refresh" title=""></span><span data-faname="fa fa-list-alt" class="hasTip fa fa-list-alt" title=""></span><span data-faname="fa fa-lock" class="hasTip fa fa-lock" title=""></span><span data-faname="fa fa-flag" class="hasTip fa fa-flag" title=""></span><span data-faname="fa fa-headphones" class="hasTip fa fa-headphones" title=""></span><span data-faname="fa fa-volume-off" class="hasTip fa fa-volume-off" title=""></span><span data-faname="fa fa-volume-down" class="hasTip fa fa-volume-down" title=""></span><span data-faname="fa fa-volume-up" class="hasTip fa fa-volume-up" title=""></span><span data-faname="fa fa-qrcode" class="hasTip fa fa-qrcode" title=""></span><span data-faname="fa fa-barcode" class="hasTip fa fa-barcode" title=""></span><span data-faname="fa fa-tag" class="hasTip fa fa-tag" title=""></span><span data-faname="fa fa-tags" class="hasTip fa fa-tags" title=""></span><span data-faname="fa fa-book" class="hasTip fa fa-book" title=""></span><span data-faname="fa fa-bookmark" class="hasTip fa fa-bookmark" title=""></span><span data-faname="fa fa-print" class="hasTip fa fa-print" title=""></span><span data-faname="fa fa-camera" class="hasTip fa fa-camera" title=""></span><span data-faname="fa fa-font" class="hasTip fa fa-font" title=""></span><span data-faname="fa fa-bold" class="hasTip fa fa-bold" title=""></span><span data-faname="fa fa-italic" class="hasTip fa fa-italic" title=""></span><span data-faname="fa fa-text-height" class="hasTip fa fa-text-height" title=""></span><span data-faname="fa fa-text-width" class="hasTip fa fa-text-width" title=""></span><span data-faname="fa fa-align-left" class="hasTip fa fa-align-left" title=""></span><span data-faname="fa fa-align-center" class="hasTip fa fa-align-center" title=""></span><span data-faname="fa fa-align-right" class="hasTip fa fa-align-right" title=""></span><span data-faname="fa fa-align-justify" class="hasTip fa fa-align-justify" title=""></span><span data-faname="fa fa-list" class="hasTip fa fa-list" title=""></span><span data-faname="fa fa-outdent" class="hasTip fa fa-outdent" title=""></span><span data-faname="fa fa-indent" class="hasTip fa fa-indent" title=""></span><span data-faname="fa fa-video-camera" class="hasTip fa fa-video-camera" title=""></span><span data-faname="fa fa-picture-o" class="hasTip fa fa-picture-o" title=""></span><span data-faname="fa fa-pencil" class="hasTip fa fa-pencil" title=""></span><span data-faname="fa fa-map-marker" class="hasTip fa fa-map-marker" title=""></span><span data-faname="fa fa-adjust" class="hasTip fa fa-adjust" title=""></span><span data-faname="fa fa-tint" class="hasTip fa fa-tint" title=""></span><span data-faname="fa fa-pencil-square-o" class="hasTip fa fa-pencil-square-o" title=""></span><span data-faname="fa fa-share-square-o" class="hasTip fa fa-share-square-o" title=""></span><span data-faname="fa fa-check-square-o" class="hasTip fa fa-check-square-o" title=""></span><span data-faname="fa fa-arrows" class="hasTip fa fa-arrows" title=""></span><span data-faname="fa fa-step-backward" class="hasTip fa fa-step-backward" title=""></span><span data-faname="fa fa-fast-backward" class="hasTip fa fa-fast-backward" title=""></span><span data-faname="fa fa-backward" class="hasTip fa fa-backward" title=""></span><span data-faname="fa fa-play" class="hasTip fa fa-play" title=""></span><span data-faname="fa fa-pause" class="hasTip fa fa-pause" title=""></span><span data-faname="fa fa-stop" class="hasTip fa fa-stop" title=""></span><span data-faname="fa fa-forward" class="hasTip fa fa-forward" title=""></span><span data-faname="fa fa-fast-forward" class="hasTip fa fa-fast-forward" title=""></span><span data-faname="fa fa-step-forward" class="hasTip fa fa-step-forward" title=""></span><span data-faname="fa fa-eject" class="hasTip fa fa-eject" title=""></span><span data-faname="fa fa-chevron-left" class="hasTip fa fa-chevron-left" title=""></span><span data-faname="fa fa-chevron-right" class="hasTip fa fa-chevron-right" title=""></span><span data-faname="fa fa-plus-circle" class="hasTip fa fa-plus-circle" title=""></span><span data-faname="fa fa-minus-circle" class="hasTip fa fa-minus-circle" title=""></span><span data-faname="fa fa-times-circle" class="hasTip fa fa-times-circle" title=""></span><span data-faname="fa fa-check-circle" class="hasTip fa fa-check-circle" title=""></span><span data-faname="fa fa-question-circle" class="hasTip fa fa-question-circle" title=""></span><span data-faname="fa fa-info-circle" class="hasTip fa fa-info-circle" title=""></span><span data-faname="fa fa-crosshairs" class="hasTip fa fa-crosshairs" title=""></span><span data-faname="fa fa-times-circle-o" class="hasTip fa fa-times-circle-o" title=""></span><span data-faname="fa fa-check-circle-o" class="hasTip fa fa-check-circle-o" title=""></span><span data-faname="fa fa-ban" class="hasTip fa fa-ban" title=""></span><span data-faname="fa fa-arrow-left" class="hasTip fa fa-arrow-left" title=""></span><span data-faname="fa fa-arrow-right" class="hasTip fa fa-arrow-right" title=""></span><span data-faname="fa fa-arrow-up" class="hasTip fa fa-arrow-up" title=""></span><span data-faname="fa fa-arrow-down" class="hasTip fa fa-arrow-down" title=""></span><span data-faname="fa fa-share" class="hasTip fa fa-share" title=""></span><span data-faname="fa fa-expand" class="hasTip fa fa-expand" title=""></span><span data-faname="fa fa-compress" class="hasTip fa fa-compress" title=""></span><span data-faname="fa fa-plus" class="hasTip fa fa-plus" title=""></span><span data-faname="fa fa-minus" class="hasTip fa fa-minus" title=""></span><span data-faname="fa fa-asterisk" class="hasTip fa fa-asterisk" title=""></span><span data-faname="fa fa-exclamation-circle" class="hasTip fa fa-exclamation-circle" title=""></span><span data-faname="fa fa-gift" class="hasTip fa fa-gift" title=""></span><span data-faname="fa fa-leaf" class="hasTip fa fa-leaf" title=""></span><span data-faname="fa fa-fire" class="hasTip fa fa-fire" title=""></span><span data-faname="fa fa-eye" class="hasTip fa fa-eye" title=""></span><span data-faname="fa fa-eye-slash" class="hasTip fa fa-eye-slash" title=""></span><span data-faname="fa fa-exclamation-triangle" class="hasTip fa fa-exclamation-triangle" title=""></span><span data-faname="fa fa-plane" class="hasTip fa fa-plane" title=""></span><span data-faname="fa fa-calendar" class="hasTip fa fa-calendar" title=""></span><span data-faname="fa fa-random" class="hasTip fa fa-random" title=""></span><span data-faname="fa fa-comment" class="hasTip fa fa-comment" title=""></span><span data-faname="fa fa-magnet" class="hasTip fa fa-magnet" title=""></span><span data-faname="fa fa-chevron-up" class="hasTip fa fa-chevron-up" title=""></span><span data-faname="fa fa-chevron-down" class="hasTip fa fa-chevron-down" title=""></span><span data-faname="fa fa-retweet" class="hasTip fa fa-retweet" title=""></span><span data-faname="fa fa-shopping-cart" class="hasTip fa fa-shopping-cart" title=""></span><span data-faname="fa fa-folder" class="hasTip fa fa-folder" title=""></span><span data-faname="fa fa-folder-open" class="hasTip fa fa-folder-open" title=""></span><span data-faname="fa fa-arrows-v" class="hasTip fa fa-arrows-v" title=""></span><span data-faname="fa fa-arrows-h" class="hasTip fa fa-arrows-h" title=""></span><span data-faname="fa fa-bar-chart-o" class="hasTip fa fa-bar-chart-o" title=""></span><span data-faname="fa fa-twitter-square" class="hasTip fa fa-twitter-square" title=""></span><span data-faname="fa fa-facebook-square" class="hasTip fa fa-facebook-square" title=""></span><span data-faname="fa fa-camera-retro" class="hasTip fa fa-camera-retro" title=""></span><span data-faname="fa fa-key" class="hasTip fa fa-key" title=""></span><span data-faname="fa fa-cogs" class="hasTip fa fa-cogs" title=""></span><span data-faname="fa fa-comments" class="hasTip fa fa-comments" title=""></span><span data-faname="fa fa-thumbs-o-up" class="hasTip fa fa-thumbs-o-up" title=""></span><span data-faname="fa fa-thumbs-o-down" class="hasTip fa fa-thumbs-o-down" title=""></span><span data-faname="fa fa-star-half" class="hasTip fa fa-star-half" title=""></span><span data-faname="fa fa-heart-o" class="hasTip fa fa-heart-o" title=""></span><span data-faname="fa fa-sign-out" class="hasTip fa fa-sign-out" title=""></span><span data-faname="fa fa-linkedin-square" class="hasTip fa fa-linkedin-square" title=""></span><span data-faname="fa fa-thumb-tack" class="hasTip fa fa-thumb-tack" title=""></span><span data-faname="fa fa-external-link" class="hasTip fa fa-external-link" title=""></span><span data-faname="fa fa-sign-in" class="hasTip fa fa-sign-in" title=""></span><span data-faname="fa fa-trophy" class="hasTip fa fa-trophy" title=""></span><span data-faname="fa fa-github-square" class="hasTip fa fa-github-square" title=""></span><span data-faname="fa fa-upload" class="hasTip fa fa-upload" title=""></span><span data-faname="fa fa-lemon-o" class="hasTip fa fa-lemon-o" title=""></span><span data-faname="fa fa-phone" class="hasTip fa fa-phone" title=""></span><span data-faname="fa fa-square-o" class="hasTip fa fa-square-o" title=""></span><span data-faname="fa fa-bookmark-o" class="hasTip fa fa-bookmark-o" title=""></span><span data-faname="fa fa-phone-square" class="hasTip fa fa-phone-square" title=""></span><span data-faname="fa fa-twitter" class="hasTip fa fa-twitter" title=""></span><span data-faname="fa fa-facebook" class="hasTip fa fa-facebook" title=""></span><span data-faname="fa fa-github" class="hasTip fa fa-github" title=""></span><span data-faname="fa fa-unlock" class="hasTip fa fa-unlock" title=""></span><span data-faname="fa fa-credit-card" class="hasTip fa fa-credit-card" title=""></span><span data-faname="fa fa-rss" class="hasTip fa fa-rss" title=""></span><span data-faname="fa fa-hdd-o" class="hasTip fa fa-hdd-o" title=""></span><span data-faname="fa fa-bullhorn" class="hasTip fa fa-bullhorn" title=""></span><span data-faname="fa fa-bell" class="hasTip fa fa-bell" title=""></span><span data-faname="fa fa-certificate" class="hasTip fa fa-certificate" title=""></span><span data-faname="fa fa-hand-o-right" class="hasTip fa fa-hand-o-right" title=""></span><span data-faname="fa fa-hand-o-left" class="hasTip fa fa-hand-o-left" title=""></span><span data-faname="fa fa-hand-o-up" class="hasTip fa fa-hand-o-up" title=""></span><span data-faname="fa fa-hand-o-down" class="hasTip fa fa-hand-o-down" title=""></span><span data-faname="fa fa-arrow-circle-left" class="hasTip fa fa-arrow-circle-left" title=""></span><span data-faname="fa fa-arrow-circle-right" class="hasTip fa fa-arrow-circle-right" title=""></span><span data-faname="fa fa-arrow-circle-up" class="hasTip fa fa-arrow-circle-up" title=""></span><span data-faname="fa fa-arrow-circle-down" class="hasTip fa fa-arrow-circle-down" title=""></span><span data-faname="fa fa-globe" class="hasTip fa fa-globe" title=""></span><span data-faname="fa fa-wrench" class="hasTip fa fa-wrench" title=""></span><span data-faname="fa fa-tasks" class="hasTip fa fa-tasks" title=""></span><span data-faname="fa fa-filter" class="hasTip fa fa-filter" title=""></span><span data-faname="fa fa-briefcase" class="hasTip fa fa-briefcase" title=""></span><span data-faname="fa fa-arrows-alt" class="hasTip fa fa-arrows-alt" title=""></span><span data-faname="fa fa-users" class="hasTip fa fa-users" title=""></span><span data-faname="fa fa-link" class="hasTip fa fa-link" title=""></span><span data-faname="fa fa-cloud" class="hasTip fa fa-cloud" title=""></span><span data-faname="fa fa-flask" class="hasTip fa fa-flask" title=""></span><span data-faname="fa fa-scissors" class="hasTip fa fa-scissors" title=""></span><span data-faname="fa fa-files-o" class="hasTip fa fa-files-o" title=""></span><span data-faname="fa fa-paperclip" class="hasTip fa fa-paperclip" title=""></span><span data-faname="fa fa-floppy-o" class="hasTip fa fa-floppy-o" title=""></span><span data-faname="fa fa-square" class="hasTip fa fa-square" title=""></span><span data-faname="fa fa-bars" class="hasTip fa fa-bars" title=""></span><span data-faname="fa fa-list-ul" class="hasTip fa fa-list-ul" title=""></span><span data-faname="fa fa-list-ol" class="hasTip fa fa-list-ol" title=""></span><span data-faname="fa fa-strikethrough" class="hasTip fa fa-strikethrough" title=""></span><span data-faname="fa fa-underline" class="hasTip fa fa-underline" title=""></span><span data-faname="fa fa-table" class="hasTip fa fa-table" title=""></span><span data-faname="fa fa-magic" class="hasTip fa fa-magic" title=""></span><span data-faname="fa fa-truck" class="hasTip fa fa-truck" title=""></span><span data-faname="fa fa-pinterest" class="hasTip fa fa-pinterest" title=""></span><span data-faname="fa fa-pinterest-square" class="hasTip fa fa-pinterest-square" title=""></span><span data-faname="fa fa-google-plus-square" class="hasTip fa fa-google-plus-square" title=""></span><span data-faname="fa fa-google-plus" class="hasTip fa fa-google-plus" title=""></span><span data-faname="fa fa-money" class="hasTip fa fa-money" title=""></span><span data-faname="fa fa-caret-down" class="hasTip fa fa-caret-down" title=""></span><span data-faname="fa fa-caret-up" class="hasTip fa fa-caret-up" title=""></span><span data-faname="fa fa-caret-left" class="hasTip fa fa-caret-left" title=""></span><span data-faname="fa fa-caret-right" class="hasTip fa fa-caret-right" title=""></span><span data-faname="fa fa-columns" class="hasTip fa fa-columns" title=""></span><span data-faname="fa fa-sort" class="hasTip fa fa-sort" title=""></span><span data-faname="fa fa-sort-asc" class="hasTip fa fa-sort-asc" title=""></span><span data-faname="fa fa-sort-desc" class="hasTip fa fa-sort-desc" title=""></span><span data-faname="fa fa-envelope" class="hasTip fa fa-envelope" title=""></span><span data-faname="fa fa-linkedin" class="hasTip fa fa-linkedin" title=""></span><span data-faname="fa fa-undo" class="hasTip fa fa-undo" title=""></span><span data-faname="fa fa-gavel" class="hasTip fa fa-gavel" title=""></span><span data-faname="fa fa-tachometer" class="hasTip fa fa-tachometer" title=""></span><span data-faname="fa fa-comment-o" class="hasTip fa fa-comment-o" title=""></span><span data-faname="fa fa-comments-o" class="hasTip fa fa-comments-o" title=""></span><span data-faname="fa fa-bolt" class="hasTip fa fa-bolt" title=""></span><span data-faname="fa fa-sitemap" class="hasTip fa fa-sitemap" title=""></span><span data-faname="fa fa-umbrella" class="hasTip fa fa-umbrella" title=""></span><span data-faname="fa fa-clipboard" class="hasTip fa fa-clipboard" title=""></span><span data-faname="fa fa-lightbulb-o" class="hasTip fa fa-lightbulb-o" title=""></span><span data-faname="fa fa-exchange" class="hasTip fa fa-exchange" title=""></span><span data-faname="fa fa-cloud-download" class="hasTip fa fa-cloud-download" title=""></span><span data-faname="fa fa-cloud-upload" class="hasTip fa fa-cloud-upload" title=""></span><span data-faname="fa fa-user-md" class="hasTip fa fa-user-md" title=""></span><span data-faname="fa fa-stethoscope" class="hasTip fa fa-stethoscope" title=""></span><span data-faname="fa fa-suitcase" class="hasTip fa fa-suitcase" title=""></span><span data-faname="fa fa-bell-o" class="hasTip fa fa-bell-o" title=""></span><span data-faname="fa fa-coffee" class="hasTip fa fa-coffee" title=""></span><span data-faname="fa fa-cutlery" class="hasTip fa fa-cutlery" title=""></span><span data-faname="fa fa-file-text-o" class="hasTip fa fa-file-text-o" title=""></span><span data-faname="fa fa-building-o" class="hasTip fa fa-building-o" title=""></span><span data-faname="fa fa-hospital-o" class="hasTip fa fa-hospital-o" title=""></span><span data-faname="fa fa-ambulance" class="hasTip fa fa-ambulance" title=""></span><span data-faname="fa fa-medkit" class="hasTip fa fa-medkit" title=""></span><span data-faname="fa fa-fighter-jet" class="hasTip fa fa-fighter-jet" title=""></span><span data-faname="fa fa-beer" class="hasTip fa fa-beer" title=""></span><span data-faname="fa fa-h-square" class="hasTip fa fa-h-square" title=""></span><span data-faname="fa fa-plus-square" class="hasTip fa fa-plus-square" title=""></span><span data-faname="fa fa-angle-double-left" class="hasTip fa fa-angle-double-left" title=""></span><span data-faname="fa fa-angle-double-right" class="hasTip fa fa-angle-double-right" title=""></span><span data-faname="fa fa-angle-double-up" class="hasTip fa fa-angle-double-up" title=""></span><span data-faname="fa fa-angle-double-down" class="hasTip fa fa-angle-double-down" title=""></span><span data-faname="fa fa-angle-left" class="hasTip fa fa-angle-left" title=""></span><span data-faname="fa fa-angle-right" class="hasTip fa fa-angle-right" title=""></span><span data-faname="fa fa-angle-up" class="hasTip fa fa-angle-up" title=""></span><span data-faname="fa fa-angle-down" class="hasTip fa fa-angle-down" title=""></span><span data-faname="fa fa-desktop" class="hasTip fa fa-desktop" title=""></span><span data-faname="fa fa-laptop" class="hasTip fa fa-laptop" title=""></span><span data-faname="fa fa-tablet" class="hasTip fa fa-tablet" title=""></span><span data-faname="fa fa-mobile" class="hasTip fa fa-mobile" title=""></span><span data-faname="fa fa-circle-o" class="hasTip fa fa-circle-o" title=""></span><span data-faname="fa fa-quote-left" class="hasTip fa fa-quote-left" title=""></span><span data-faname="fa fa-quote-right" class="hasTip fa fa-quote-right" title=""></span><span data-faname="fa fa-spinner" class="hasTip fa fa-spinner" title=""></span><span data-faname="fa fa-circle" class="hasTip fa fa-circle" title=""></span><span data-faname="fa fa-reply" class="hasTip fa fa-reply" title=""></span><span data-faname="fa fa-github-alt" class="hasTip fa fa-github-alt" title=""></span><span data-faname="fa fa-folder-o" class="hasTip fa fa-folder-o" title=""></span><span data-faname="fa fa-folder-open-o" class="hasTip fa fa-folder-open-o" title=""></span><span data-faname="fa fa-smile-o" class="hasTip fa fa-smile-o" title=""></span><span data-faname="fa fa-frown-o" class="hasTip fa fa-frown-o" title=""></span><span data-faname="fa fa-meh-o" class="hasTip fa fa-meh-o" title=""></span><span data-faname="fa fa-gamepad" class="hasTip fa fa-gamepad" title=""></span><span data-faname="fa fa-keyboard-o" class="hasTip fa fa-keyboard-o" title=""></span><span data-faname="fa fa-flag-o" class="hasTip fa fa-flag-o" title=""></span><span data-faname="fa fa-flag-checkered" class="hasTip fa fa-flag-checkered" title=""></span><span data-faname="fa fa-terminal" class="hasTip fa fa-terminal" title=""></span><span data-faname="fa fa-code" class="hasTip fa fa-code" title=""></span><span data-faname="fa fa-reply-all" class="hasTip fa fa-reply-all" title=""></span><span data-faname="fa fa-mail-reply-all" class="hasTip fa fa-mail-reply-all" title=""></span><span data-faname="fa fa-star-half-o" class="hasTip fa fa-star-half-o" title=""></span><span data-faname="fa fa-location-arrow" class="hasTip fa fa-location-arrow" title=""></span><span data-faname="fa fa-crop" class="hasTip fa fa-crop" title=""></span><span data-faname="fa fa-code-fork" class="hasTip fa fa-code-fork" title=""></span><span data-faname="fa fa-chain-broken" class="hasTip fa fa-chain-broken" title=""></span><span data-faname="fa fa-question" class="hasTip fa fa-question" title=""></span><span data-faname="fa fa-info" class="hasTip fa fa-info" title=""></span><span data-faname="fa fa-exclamation" class="hasTip fa fa-exclamation" title=""></span><span data-faname="fa fa-superscript" class="hasTip fa fa-superscript" title=""></span><span data-faname="fa fa-subscript" class="hasTip fa fa-subscript" title=""></span><span data-faname="fa fa-eraser" class="hasTip fa fa-eraser" title=""></span><span data-faname="fa fa-puzzle-piece" class="hasTip fa fa-puzzle-piece" title=""></span><span data-faname="fa fa-microphone" class="hasTip fa fa-microphone" title=""></span><span data-faname="fa fa-microphone-slash" class="hasTip fa fa-microphone-slash" title=""></span><span data-faname="fa fa-shield" class="hasTip fa fa-shield" title=""></span><span data-faname="fa fa-calendar-o" class="hasTip fa fa-calendar-o" title=""></span><span data-faname="fa fa-fire-extinguisher" class="hasTip fa fa-fire-extinguisher" title=""></span><span data-faname="fa fa-rocket" class="hasTip fa fa-rocket" title=""></span><span data-faname="fa fa-maxcdn" class="hasTip fa fa-maxcdn" title=""></span><span data-faname="fa fa-chevron-circle-left" class="hasTip fa fa-chevron-circle-left" title=""></span><span data-faname="fa fa-chevron-circle-right" class="hasTip fa fa-chevron-circle-right" title=""></span><span data-faname="fa fa-chevron-circle-up" class="hasTip fa fa-chevron-circle-up" title=""></span><span data-faname="fa fa-chevron-circle-down" class="hasTip fa fa-chevron-circle-down" title=""></span><span data-faname="fa fa-html5" class="hasTip fa fa-html5" title=""></span><span data-faname="fa fa-css3" class="hasTip fa fa-css3" title=""></span><span data-faname="fa fa-anchor" class="hasTip fa fa-anchor" title=""></span><span data-faname="fa fa-unlock-alt" class="hasTip fa fa-unlock-alt" title=""></span><span data-faname="fa fa-bullseye" class="hasTip fa fa-bullseye" title=""></span><span data-faname="fa fa-ellipsis-h" class="hasTip fa fa-ellipsis-h" title=""></span><span data-faname="fa fa-ellipsis-v" class="hasTip fa fa-ellipsis-v" title=""></span><span data-faname="fa fa-rss-square" class="hasTip fa fa-rss-square" title=""></span><span data-faname="fa fa-play-circle" class="hasTip fa fa-play-circle" title=""></span><span data-faname="fa fa-ticket" class="hasTip fa fa-ticket" title=""></span><span data-faname="fa fa-minus-square" class="hasTip fa fa-minus-square" title=""></span><span data-faname="fa fa-minus-square-o" class="hasTip fa fa-minus-square-o" title=""></span><span data-faname="fa fa-level-up" class="hasTip fa fa-level-up" title=""></span><span data-faname="fa fa-level-down" class="hasTip fa fa-level-down" title=""></span><span data-faname="fa fa-check-square" class="hasTip fa fa-check-square" title=""></span><span data-faname="fa fa-pencil-square" class="hasTip fa fa-pencil-square" title=""></span><span data-faname="fa fa-external-link-square" class="hasTip fa fa-external-link-square" title=""></span><span data-faname="fa fa-share-square" class="hasTip fa fa-share-square" title=""></span><span data-faname="fa fa-compass" class="hasTip fa fa-compass" title=""></span><span data-faname="fa fa-caret-square-o-down" class="hasTip fa fa-caret-square-o-down" title=""></span><span data-faname="fa fa-caret-square-o-up" class="hasTip fa fa-caret-square-o-up" title=""></span><span data-faname="fa fa-caret-square-o-right" class="hasTip fa fa-caret-square-o-right" title=""></span><span data-faname="fa fa-eur" class="hasTip fa fa-eur" title=""></span><span data-faname="fa fa-gbp" class="hasTip fa fa-gbp" title=""></span><span data-faname="fa fa-usd" class="hasTip fa fa-usd" title=""></span><span data-faname="fa fa-inr" class="hasTip fa fa-inr" title=""></span><span data-faname="fa fa-jpy" class="hasTip fa fa-jpy" title=""></span><span data-faname="fa fa-rub" class="hasTip fa fa-rub" title=""></span><span data-faname="fa fa-krw" class="hasTip fa fa-krw" title=""></span><span data-faname="fa fa-btc" class="hasTip fa fa-btc" title=""></span><span data-faname="fa fa-file" class="hasTip fa fa-file" title=""></span><span data-faname="fa fa-file-text" class="hasTip fa fa-file-text" title=""></span><span data-faname="fa fa-sort-alpha-asc" class="hasTip fa fa-sort-alpha-asc" title=""></span><span data-faname="fa fa-sort-alpha-desc" class="hasTip fa fa-sort-alpha-desc" title=""></span><span data-faname="fa fa-sort-amount-asc" class="hasTip fa fa-sort-amount-asc" title=""></span><span data-faname="fa fa-sort-amount-desc" class="hasTip fa fa-sort-amount-desc" title=""></span><span data-faname="fa fa-sort-numeric-asc" class="hasTip fa fa-sort-numeric-asc" title=""></span><span data-faname="fa fa-sort-numeric-desc" class="hasTip fa fa-sort-numeric-desc" title=""></span><span data-faname="fa fa-thumbs-up" class="hasTip fa fa-thumbs-up" title=""></span><span data-faname="fa fa-thumbs-down" class="hasTip fa fa-thumbs-down" title=""></span><span data-faname="fa fa-youtube-square" class="hasTip fa fa-youtube-square" title=""></span><span data-faname="fa fa-youtube" class="hasTip fa fa-youtube" title=""></span><span data-faname="fa fa-xing" class="hasTip fa fa-xing" title=""></span><span data-faname="fa fa-xing-square" class="hasTip fa fa-xing-square" title=""></span><span data-faname="fa fa-youtube-play" class="hasTip fa fa-youtube-play" title=""></span><span data-faname="fa fa-dropbox" class="hasTip fa fa-dropbox" title=""></span><span data-faname="fa fa-stack-overflow" class="hasTip fa fa-stack-overflow" title=""></span><span data-faname="fa fa-instagram" class="hasTip fa fa-instagram" title=""></span><span data-faname="fa fa-flickr" class="hasTip fa fa-flickr" title=""></span><span data-faname="fa fa-adn" class="hasTip fa fa-adn" title=""></span><span data-faname="fa fa-bitbucket" class="hasTip fa fa-bitbucket" title=""></span><span data-faname="fa fa-bitbucket-square" class="hasTip fa fa-bitbucket-square" title=""></span><span data-faname="fa fa-tumblr" class="hasTip fa fa-tumblr" title=""></span><span data-faname="fa fa-tumblr-square" class="hasTip fa fa-tumblr-square" title=""></span><span data-faname="fa fa-long-arrow-down" class="hasTip fa fa-long-arrow-down" title=""></span><span data-faname="fa fa-long-arrow-up" class="hasTip fa fa-long-arrow-up" title=""></span><span data-faname="fa fa-long-arrow-left" class="hasTip fa fa-long-arrow-left" title=""></span><span data-faname="fa fa-long-arrow-right" class="hasTip fa fa-long-arrow-right" title=""></span><span data-faname="fa fa-apple" class="hasTip fa fa-apple" title=""></span><span data-faname="fa fa-windows" class="hasTip fa fa-windows" title=""></span><span data-faname="fa fa-android" class="hasTip fa fa-android" title=""></span><span data-faname="fa fa-linux" class="hasTip fa fa-linux" title=""></span><span data-faname="fa fa-dribbble" class="hasTip fa fa-dribbble" title=""></span><span data-faname="fa fa-skype" class="hasTip fa fa-skype" title=""></span><span data-faname="fa fa-foursquare" class="hasTip fa fa-foursquare" title=""></span><span data-faname="fa fa-trello" class="hasTip fa fa-trello" title=""></span><span data-faname="fa fa-female" class="hasTip fa fa-female" title=""></span><span data-faname="fa fa-male" class="hasTip fa fa-male" title=""></span><span data-faname="fa fa-gittip" class="hasTip fa fa-gittip" title=""></span><span data-faname="fa fa-sun-o" class="hasTip fa fa-sun-o" title=""></span><span data-faname="fa fa-moon-o" class="hasTip fa fa-moon-o" title=""></span><span data-faname="fa fa-archive" class="hasTip fa fa-archive" title=""></span><span data-faname="fa fa-bug" class="hasTip fa fa-bug" title=""></span><span data-faname="fa fa-vk" class="hasTip fa fa-vk" title=""></span><span data-faname="fa fa-weibo" class="hasTip fa fa-weibo" title=""></span><span data-faname="fa fa-renren" class="hasTip fa fa-renren" title=""></span><span data-faname="fa fa-pagelines" class="hasTip fa fa-pagelines" title=""></span><span data-faname="fa fa-stack-exchange" class="hasTip fa fa-stack-exchange" title=""></span><span data-faname="fa fa-arrow-circle-o-right" class="hasTip fa fa-arrow-circle-o-right" title=""></span><span data-faname="fa fa-arrow-circle-o-left" class="hasTip fa fa-arrow-circle-o-left" title=""></span><span data-faname="fa fa-caret-square-o-left" class="hasTip fa fa-caret-square-o-left" title=""></span><span data-faname="fa fa-dot-circle-o" class="hasTip fa fa-dot-circle-o" title=""></span><span data-faname="fa fa-wheelchair" class="hasTip fa fa-wheelchair" title=""></span><span data-faname="fa fa-vimeo-square" class="hasTip fa fa-vimeo-square" title=""></span><span data-faname="fa fa-try" class="hasTip fa fa-try" title=""></span><span data-faname="fa fa-plus-square-o" class="hasTip fa fa-plus-square-o" title=""></span></div>
			</div>
			
			
			
			<div class="form-group">
				<label for="title" data-toggle="tooltip" data-placement="top" title="Add title">Title</label>
				<input type="text" class="form-control" id="title" name="title" placeholder="Notification title" onClick="this.select()" />
			</div>
			<div class="form-group">
				<label for="content" data-toggle="tooltip" data-placement="top" title="Add content">Content</label>
				<textarea class="form-control" rows="3" id="content" name="content"></textarea>
			</div>
			<button type="submit" id="addshortcode" class="btn btn-primary">Insert shortcode</button>
		</form>
	</div>
</body>
</html>