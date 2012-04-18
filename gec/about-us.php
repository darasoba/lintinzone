<?php
	session_start();
	ob_start();
	// Check the request, index.php?lang=vi
	if (isset($_REQUEST['lang']))
	{
		if ($_REQUEST['lang'] === 'vi')
			$_SESSION['lang'] = 'vi';
		else
			$_SESSION['lang'] = 'en';
	}
	
	// If no explicit request is made
	if (!isset($_SESSION['lang']))
	{
		// Detect the browser language to decide which language should be displayed.
		$browserLang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
		if ($browserLang !== 'vi')
		{
			$url = "en/about-us.php?lang=en";
			header("Location: $url");
			ob_end_flush();
		}
	}
	// If user directly requests to see this page in Vietnamese
	elseif ($_SESSION['lang'] === 'en')
	{
		$url = "en/about-us.php?lang=en";
		header("Location: $url");
		ob_end_flush();
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>LintinZone - Nhóm chúng tôi</title>
		<meta name="author" content="LintinZone team" />
		<meta name="description" content="LintinZone là một cộng đồng những cá nhân cùng tham gia và giúp đỡ nhau trong việc vận chuyển các sản phẩm giữa hai địa điểm trên toàn thế giới. Dựa vào những mối liên hệ của bạn cùng sự hỗ trợ của cộng đồng LintinZone, bạn có thể tìm được giải pháp chuyển hàng ít tốn kém nhất (thậm chí là miễn phí, nếu may mắn :-) và nhanh nhất." />
		<meta name="keywords" content="lintinzone, giao hàng giá rẻ, giao hàng trên toàn thế giới, giao hàng toàn cầu, cộng đồng giao hàng trên toàn thế giới, cộng đồng giao hàng toàn cầu, cộng đồng giao hàng Việt Nam, mạng xã hội giao hàng Việt Nam, mạng xã hội giao hàng trên toàn thế giới, mạng xã hội giao hàng toàn cầu, cộng đồng giao hàng tin tưởng, mạng xã hội giao hàng tin tưởng" />
		<meta http-equiv="Content-Language" content="vi" />
		<link rel="shortcut icon" href="public/images/lintinzone-favicon.png" type="image/x-icon" />
		<link rel="icon" href="public/images/lintinzone-favicon.png" type="image/x-icon" />
		<script type="text/javascript" src="public/scripts/mootools/mootools-core-1.4.0-full-compat-yc.js"></script>
		<link href="public/css/layout.css" media="screen" rel="stylesheet" type="text/css" />
		<!-- Google Analysis -->
		<meta itemprop="name" content="LintinZone">
		<meta itemprop="description" content="LintinZone là một cộng đồng những cá nhân cùng tham gia và giúp đỡ nhau trong việc vận chuyển các sản phẩm giữa hai địa điểm trên toàn thế giới. Dựa vào những mối liên hệ của bạn cùng sự hỗ trợ của cộng đồng LintinZone, bạn có thể tìm được giải pháp chuyển hàng ít tốn kém nhất (thậm chí là miễn phí, nếu may mắn :-) và nhanh nhất.">
		<meta itemprop="image" content="http://lintinzone.com/public/images/lintinzone-logo.png">
		<!-- Facebook Insights -->
		<meta property="fb:admins" content="100001301010590" />
	</head>
	<body>
		<div class="hidden">
			<h2>LintinZone - mạng xã hội chuyển hàng đầu tiên trên thế giới</h2>
			<p>
				LintinZone là một cộng đồng những cá nhân cùng tham gia và giúp đỡ nhau trong việc vận chuyển các sản phẩm giữa hai địa điểm trên toàn thế giới. Dựa vào những mối liên hệ của bạn cùng sự hỗ trợ của cộng đồng LintinZone, bạn có thể tìm được giải pháp chuyển hàng ít tốn kém nhất (thậm chí là miễn phí, nếu may mắn :-) và nhanh nhất.
			</p>
			<h3>
				lintinzone, giao hàng giá rẻ, giao hàng trên toàn thế giới, giao hàng toàn cầu, cộng đồng giao hàng trên toàn thế giới, cộng đồng giao hàng toàn cầu, cộng đồng giao hàng Việt Nam, mạng xã hội giao hàng Việt Nam, mạng xã hội giao hàng trên toàn thế giới, mạng xã hội giao hàng toàn cầu, cộng đồng giao hàng tin tưởng, mạng xã hội giao hàng tin tưởng
			</h3>
		</div>
		<div class="header">
			<?php include 'include/header.inc'; ?>
		</div>
		<div class="announcement">
			<?php include 'include/messages.inc'; ?>
			<?php include 'include/comming-soon.inc'; ?>
		</div>
		<div class="menu">
			<?php include 'include/menu.inc'; ?>
		</div>
		<div class="content">
			<h3>Nhóm chúng tôi</h3>
			<p>
				&nbsp;&nbsp;&nbsp;&nbsp;Nhóm chúng tôi gồm những thành viên trẻ, đầy nhiệt huyết và có khát khao lớn muốn làm giàu cho đất nước!
				Cùng chung tay xây dựng LintinZone, chúng tôi muốn sản phẩm của mình đạt được những mục tiêu sau:
			</p>
			<ol>
				<li>
					Kết nối những người có nhu cầu mua hàng hay cần chuyển hàng ở xa với những người có khả năng chuyển những món hàng đó.
				</li>
				<li>
					Giúp cho các thành viên của LintinZone mua hàng với giả rẻ hơn và nhanh hơn các phương pháp truyền thống.
				</li>
				<li>
					Giúp các bạn trẻ có thêm một khoản tiền để trang trải cho chi phí học tập hay theo đuổi niềm đam mê du lịch.
				</li>
				<li>
					Giúp mọi người xây dựng các mối quan hệ vững chắc hơn.
				</li>
				<li>
					Tạo nên một cộng đồng hoạt động dựa trên sự tin tưởng lẫn nhau. Hạn chế các rủi ro trong giao dịch.
				</li>
			</ol>
		</div>
		<div class="footer">
			<?php include 'include/footer.inc'; ?>
		</div>
	</body>
</html>
