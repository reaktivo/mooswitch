<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	
	<title>MooSwitch</title>
	
	<link rel="stylesheet" type="text/css" href="css/reset.css"/>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<link rel="stylesheet" type="text/css" href="css/mooswitch.css"/>

</head>

<body>
	<div id="container" class="clearfix">
		<div class="header">
			<h1>MooSwitch</h1>
			<h2>By Marcel Miranda</h2>
		</div>
		<div class="box rcol">
			<h1>Try It</h1>
	
			<form action="<?=$_SERVER['PHP_SELF'] ?>" method="post">
				<div id="switchbox_example" class="ie_layout">
					<? $checked = (!!$_POST['example']) ?>
					<h3>Example</h3>
					<input id="example_checkbox" type="checkbox" name="example"<?= $checked ? ' checked="checked"':''?>/>
					<button id="submit_btn" type="submit" value="submit">Submit</button>
				</div>
			</form>
		</div>
		<div class="box">
			<h1>Description</h1>
			<p><strong>MooSwitch</strong> is a iPhone / Time Machine style switch or toggle button for <a href="http://mootools.net/">MooTools 1.2</a>, which you initiate this way:</p>
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
			                                                                                  
			<p><a href="http://github.com/reaktivo/mooswitch/tree/master">MooSwitch at GitHub</a></p>
			
		</div>
		
		<div class="box">
			<h1>Comments</h1>
			<div id="disqus_thread" style="padding-left: 15px;">
				<noscript><p><a href="http://reaktivo.disqus.com/?url=ref">View the discussion thread.</a></p></noscript>
			</div>
			<script type="text/javascript" src="http://disqus.com/forums/reaktivo/embed.js"></script>
		</div>
		 
		
		<div class="footer">Copyright ©2009 <a href="http://www.reaktivo.com">Marcel Miranda</a></div>
		
	
		
		
	</div>
	<script src="http://www.google-analytics.com/urchin.js" type="text/javascript"></script>
	<script type="text/javascript">_uacct = "UA-1116368-1";urchinTracker();</script>

	<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/mootools/1.2.3/mootools-yui-compressed.js"></script>-->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/mootools/1.2.3/mootools.js"></script>
	<script type="text/javascript" src="js/mootools-1.2.3.1-more.js"></script>
	<script type="text/javascript" src="js/mooswitch.js"></script>
	<script type="text/javascript">
		window.addEvent('domready', function(){
			new MooSwitch('example_checkbox');
		});
	</script>
</body>
</html>
