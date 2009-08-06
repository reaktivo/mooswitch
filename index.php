<?
	$version = '0.6';
	$last_update = '2008.04.03';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	
	<title>mooSwitch <?=$version?></title>
	
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<link rel="stylesheet" type="text/css" href="css/mooswitch.css"/>
	<script src="http://www.google-analytics.com/urchin.js" type="text/javascript"></script>
	<script type="text/javascript">_uacct = "UA-1116368-1";urchinTracker();</script>

	<script type="text/javascript" src="js/mootools.js"></script>
	<script type="text/javascript" src="js/mooswitch.js"></script>
	<script type="text/javascript">
		window.addEvent('domready', function(){
			new mooSwitch('example', {
				label_position: "<?=isset($_POST['lbl_pos']) ? $_POST['lbl_pos'] : 'outside'?>",
				hide_labels: <?=isset($_POST['lbl_show']) ? $_POST['lbl_show'] : 'false'?>,
				hide_radios: <?=isset($_POST['rb_show']) ? $_POST['rb_show'] : 'true'?>,
				drag_opacity: <?=isset($_POST['drag_opacity']) ? $_POST['drag_opacity'] : 1?>
			});
			
			new mooSwitch('lbl_show', {label_position:'outside'});
			new mooSwitch('rb_show', {label_position:'outside'});
			new mooSwitch('lbl_pos', {label_position:'outside'});
			new mooSwitch('drag_opacity', {label_position:'outside'});
		});
	</script>
	
	
</head>

<body>
	<div id="container" class="clearfix">
		<div class="header">
			<h1>mooSwitch <?=$version?></h1>
			<h2>By Marcel Miranda</h2>
		</div>
		<script type="text/javascript"><!--
		google_ad_client = "pub-7117529783860110";
		/* 728x15, created 3/31/08 */
		google_ad_slot = "0458071123";
		google_ad_width = 728;
		google_ad_height = 15;
		//-->
		</script>
		<script type="text/javascript"
		src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
		</script>
		<div class="box rcol">
			<h1>Try It</h1>
	
			<form action="<?=$_SERVER['PHP_SELF'] ?>" method="post">
				<div id="switchbox_example">
					<h3>Example</h3>
					<label for="sw1_2">No</label> <input id="sw1_2" type="radio" name="example" value="0"<?=$_POST['example']==0 ? ' checked="checked"':''?>/>
					<label for="sw1_1">Yes</label> <input id="sw1_1" type="radio" name="example" value="1"<?=$_POST['example']==1 ? ' checked="checked"':''?>/>
				</div>
				
				<h3>Hide Labels</h3>
				<label for="sw2_1">No</label> <input id="sw2_1" type="radio" name="lbl_show" value="false" <?=$_POST['lbl_show']=='false' ? 'checked="checked"':''?>/>
				<label for="sw2_2">Yes</label> <input id="sw2_2" type="radio" name="lbl_show" value="true" <?=$_POST['lbl_show']=='true' ? 'checked="checked"':''?>/>
				
				<h3>Labels Position</h3>
				<label for="sw4_1">Out</label> <input id="sw4_1" type="radio" name="lbl_pos" value="outside"<?=$_POST['lbl_pos']=='outside' ? ' checked="checked"':''?>/>
				<label for="sw4_2">In</label> <input id="sw4_2" type="radio" name="lbl_pos" value="inside"<?=$_POST['lbl_pos']=='inside' ? ' checked="checked"':''?>/>
				
				<h3>Drag Opacity</h3>
				<label for="sw5_1">1</label> <input id="sw5_1" type="radio" name="drag_opacity" value="1"<?=$_POST['drag_opacity']=='1' ? ' checked="checked"':''?>/>
				<label for="sw5_2">0.6</label> <input id="sw5_2" type="radio" name="drag_opacity" value="0.6"<?=$_POST['drag_opacity']=='0.6' ? ' checked="checked"':''?>/>
				
				<h3>Hide Radiobuttons</h3>
				<label for="sw3_1">Yes</label> <input id="sw3_1" type="radio" name="rb_show" value="true"<?=$_POST['rb_show']=='true' ? ' checked="checked"':''?>/>
				<label for="sw3_2">No</label> <input id="sw3_2" type="radio" name="rb_show" value="false"<?=$_POST['rb_show']=='false' ? ' checked="checked"':''?>/>
				
				<input type="submit" value="Submit" />
			</form>
		
	
			<?
				if($_POST){
					?>
					<div class="postdata">
						<h1>Posted Data</h1>
						<pre><?print_r($_POST)?></pre>
					</div>
					<?
				}

			?>
		</div>
		<div class="box rcol ad">
			<h1>Help Out</h1>
			<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
			<input type="hidden" name="cmd" value="_s-xclick">
			<input type="image" src="http://reaktivo.com/files/donate.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
			<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
			<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----">
			</form>
		</div>
		<div class="box">
			<h1>Description</h1>
			<p><strong>MooSwitch</strong> is a iPhone / Time Machine style switch or toggle button for <a href="http://mootools.net/download/tags/1-2b2">MooTools 1.2b</a>, which you initiate this way:</p>
			<pre>var mySwitch = new mooSwitch('radioset');</pre>
			<p>Where <strong>radioset</strong> is a the name of a pair of input&#x27;s with their corresponding label&#x27;s. </p>
			<p>There are three ways of toggleing, you can drag the handle to a side, click the label, or if the labels are placed outside, clicking the scroll area (the handle background).
			MooSwitch takes care of hiding the Radio inputs and their labels tags if they have.</p>
		</div>
		<div class="box">
			<h1>License</h1>
			<p>MooSwitch is released under the same license as <a href="http://mootools.net/">MooTools</a>, the Open Source <a href="http://www.opensource.org/licenses/mit-license.php">MIT license</a>, which gives you the possibility to use it and modify it in every circumstance.</p>
		</div>
		<div class="box">
			<h1>Browser Compatibility</h1>
			<p>MooSwitch has been tested successfully in Safari 3, Firefox 2 and 3b. But it probably works on other browser too.</p>
		</div>
		<div class="box">
			<h1>Download</h1>
			<ul>
				<li><a href="mooswitch.js">mooswitch-0.5.zip</a></li>
			</ul>
		</div>
		
		<div class="footer">Copyright ©2008 <a href="http://www.reaktivo.com">Marcel Miranda</a></div>
		
	
		
		
	</div>
		<script type="text/javascript"><!--
		google_ad_client = "pub-7117529783860110";
		/* 728x90, created 3/31/08 */
		google_ad_slot = "7025152351";
		google_ad_width = 728;
		google_ad_height = 90;
		//-->
		</script>
		<script type="text/javascript"
		src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
		</script>
	
</body>
</html>
