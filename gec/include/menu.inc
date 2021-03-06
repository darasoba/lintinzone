﻿<?php
	$index = false;
	$about = false;
	$contact = false;
	$work = false;
	$faq = false;
	if (strpos($_SERVER['REQUEST_URI'], 'index.php') != false
		|| $_SERVER['REQUEST_URI'] === '/'
		|| empty($_SERVER['REQUEST_URI']))
		$index = true;
	elseif (strpos($_SERVER['REQUEST_URI'], 'about-us.php') != false)
		$about = true;
	elseif (strpos($_SERVER['REQUEST_URI'], 'contact.php') != false)
		$contact = true;
	elseif (strpos($_SERVER['REQUEST_URI'], 'how-it-works.php') != false)
		$work = true;
	elseif (strpos($_SERVER['REQUEST_URI'], 'faq.php') != false)
		$faq = true;
?>
<ul id="main-nav">
	<li id="main-nav-index" <?php echo ($index === true) ? 'class="current-page"' : ''; ?>>
		<a name="home" href="index.php" title="Trang chủ">Trang chủ</a>
	</li>
	<li id="main-nav-how-it-work" <?php echo ($work === true) ? 'class="current-page"' : ''; ?>>
		<a name="howitwork" href="how-it-works.php" title="Cách thức hoạt động">Cách thức hoạt động</a>
	</li>
	<li id="main-nav-faq" <?php echo ($faq === true) ? 'class="current-page"' : ''; ?>>
		<a name="faq" href="faq.php" title="Những câu hỏi về dự án">FAQ</a>
	</li>
	<li id="main-nav-about-us" <?php echo ($about === true) ? 'class="current-page"' : ''; ?>>
		<a name="about" href="about-us.php" title="Nhóm phát triển">Nhóm chúng tôi</a>
	</li>
	<li id="main-nav-contact" <?php echo ($contact === true) ? 'class="current-page"' : ''; ?>>
		<a name="contact" href="contact.php" title="Liên hệ với chúng tôi">Liên hệ</a>
	</li>
</ul>

<ul id="lang-nav">	
	<li>
		<a href="?lang=vi">Tiếng Việt</a>	
	</li>
	<li>
		<a href="?lang=en">English</a>
	</li>
</ul>

<script type="text/javascript">
	var overtextHandle = function()
	{
		$$('.overtext').each(function(overtext){
			var preControl = overtext.getPrevious();
			overtext.addEvent('click', function(event){
				event.stop();
				overtext.setStyle('display', 'none');
				preControl.focus();
			});
			preControl.addEvent('focus', function(event){
				overtext.setStyle('display', 'none');
				preControl.focus();
			});
			preControl.addEvent('blur', function(event){
				if (preControl.get('html') == ''
					&& preControl.get('value') == '')
					overtext.setStyle('display', 'block');
			});
		});
	};
	window.addEvent('domready', function(){
		overtextHandle();
	});
</script>
