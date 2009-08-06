<?
	$version = '0.6';
	$last_update = '2008.04.03';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	
	<title>MooSwitch <?=$version?></title>
	
	<link rel="stylesheet" type="text/css" href="css/reset.css"/>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<link rel="stylesheet" type="text/css" href="css/mooswitch.css"/>
	<!--[if IE]><style>
	#paramswrapper {
		position:relative;
	}
	#params {
		position: absolute;
		top:0;
		left:0;
	}
	</style><![endif]-->

</head>

<body>
	<div id="container" class="clearfix">
		<div class="header">
			<h1>MooSwitch <?=$version?></h1>
			<h2>By Marcel Miranda</h2>
		</div>
		<div class="box rcol">
			<h1>Try It</h1>
	
			<form action="<?=$_SERVER['PHP_SELF'] ?>" method="post">
				<div id="switchbox_example" class="ie_layout">
					<h3>Example</h3>
					<label for="sw1_2">No</label> <input id="sw1_2" type="radio" name="example" value="0"<?=$_POST['example']==0 ? ' checked="checked"':''?>/>
					<label for="sw1_1">Yes</label> <input id="sw1_1" type="radio" name="example" value="1"<?=$_POST['example']==1 ? ' checked="checked"':''?>/>
				</div>
				<div id="paramswrapper" class="ie_layout">
					<div id="params" class="ie_layout">
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
					</div>
				</div>

				<h2 id="editparams">Edit Parameters</h2>
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
		<div class="box">
			<h1>Description</h1>
			<p><strong>MooSwitch</strong> is a iPhone / Time Machine style switch or toggle button for <a href="http://mootools.net/download/tags/1-2b2">MooTools 1.2b</a>, which you initiate this way:</p>
			<pre>var mySwitch = new MooSwitch('radioset');</pre>
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
				<li><a href="mooswitch-<?=$version?>.zip">mooswitch-<?=$version?>.zip</a></li>
			</ul>
		</div>
		<div class="box">
			<h1>Comments</h1>
			<div id="disqus_thread" style="padding-left: 15px;"></div><script type="text/javascript" src="http://disqus.com/forums/reaktivo/embed.js"></script><noscript><a href="http://reaktivo.disqus.com/?url=ref">View the discussion thread.</a></noscript>
		</div>
		
		
		<div class="footer">Copyright ©2008 <a href="http://www.reaktivo.com">Marcel Miranda</a></div>
		
	
		
		
	</div>
	<script src="http://www.google-analytics.com/urchin.js" type="text/javascript"></script>
	<script type="text/javascript">_uacct = "UA-1116368-1";urchinTracker();</script>

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/mootools/1.2.3/mootools-yui-compressed.js"></script>
	<script type="text/javascript" src="js/mooswitch.js"></script>
	<script type="text/javascript">
		window.addEvent('domready', function(){
			var params_visible = false;
			var show_str = 'Show Parameters';
			var hide_str = 'Hide Parameters';
			$('editparams').set('text', show_str);
			$('editparams').setStyle('cursor', 'pointer');
			$('params').store('wrapper', $('paramswrapper'));
			var paramsSlide = new Fx.Slide($('params'), {duration: 1000});
			paramsSlide.hide();
			$('editparams').addEvent('click', function() {
				if(params_visible) {
					params_visible = false;
					paramsSlide.slideOut();
					$('editparams').set('text', show_str);
				}else{
					params_visible = true;
					paramsSlide.slideIn();
					$('editparams').set('text', hide_str);
				}
			});
			/*MooSwitch*/
			new MooSwitch('example', {
				label_position: "<?=isset($_POST['lbl_pos']) ? $_POST['lbl_pos'] : 'outside'?>",
				hide_labels: <?=isset($_POST['lbl_show']) ? $_POST['lbl_show'] : 'false'?>,
				hide_radios: <?=isset($_POST['rb_show']) ? $_POST['rb_show'] : 'true'?>,
				drag_opacity: <?=isset($_POST['drag_opacity']) ? $_POST['drag_opacity'] : 1?>
			});
			
			new MooSwitch('lbl_show', {label_position:'outside'});
			new MooSwitch('rb_show', {label_position:'outside'});
			new MooSwitch('lbl_pos', {label_position:'outside'});
			new MooSwitch('drag_opacity', {label_position:'outside'});
			
			
		});
		
		$('paramswrapper').setStyle('height', '0px');
	</script>
</body>
</html>
