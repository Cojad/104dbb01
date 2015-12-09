<?php include("config.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>查詢</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Chivo:400,900" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />

</head>
<body>
<div id="wrapper">
	<div id="header-wrapper">
		<div id="header" class="container">
			<div id="logo">
				<h1>小說查詢</h1>
				<p>可以登入，儲存你喜歡的小說且評價他喔！</p>
			</div>
		</div>
	</div>
	<div id="menu-wrapper">
		<div id="menu" class="container">
			<ul>
				<li><a href="index.html">首頁</a></li>
				<li class="current_page_item"><a href="search.html">查詢</a></li>
				<li><a href="menu.html">目錄</a></li>
				<li><a href="about.html">關於我們</a></li>
				<li><a href="talk.html">留言板</a></li>
				<li><a href="login.html">登入/註冊</a></li>
				<li><a href="people.html">會員</a></li>
			</ul>
		</div>
		<!-- end #menu --> 
	</div>
	<div id="banner"></div>
	<div id="page" class="container">
		<div id="content">
			<div class="title">
				<h2>查詢</h2>
			</div>
			<form method="post" action="search.php">查詢語：
                <input type="text" name="key" size="27"  placeholder="請輸入..." >
                <select name="search">
                    <option value="books">書名</option>
                    <option value="publisher">出版社</option>
                    <option value="auther">作者</option>
                </select>
                <input type="submit" name="submit" value="搜尋">
            </form>
            <?php if(!empty($_POST["key"])) { 
  $key = $_POST["key"];
  $sql = "select * from  where name like '%$key%'";
  $result = $link->query($sql);
  $i=1;
  while ( $row = $result->fetch_row() ) {
?>

<table class="result">
  <tr>
    <td class="title" colspan="2"><?php echo $i++ . ". " .$row[1]; ?></td>
  </tr>
  <tr>
    <td>書名</td>
    <td><?php echo $row[2] ?></td>
  </tr>
  <tr>
    <td>作者</td>
    <td><?php echo $row[3] ?></td>
  </tr>
  <tr>
    <td>出版社</td>
    <td><?php echo $row[4] ?></td>
  </tr>
  <tr>
    <td>NCSCL</td>
    <td><?php echo $row[5] ?></td>
  </tr>
  <tr>
    <td>ISBN</td>
    <td><?php echo $row[6] ?></td>
  </tr>
</table>
<br>
<?php 
  } 

} 
?>
</table>
		</div>
		<div id="sidebar">
			<div class="box2">
				<div class="title">
					<h2>選單</h2>
				</div>
				<ul class="style2">
					<h4><li><a href="book.html">我的書櫃</a></li></h4>
					<h4><li><a href="fild.html">會員資料</a></li></h4>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
				</ul>
			</div>
		</div>
	</div>
</div>

<div id="footer-wrapper">
	<div id="footer" class="container">
		<div id="box2">
			<div class="title">
				<h2>相關連結</h2>
			</div>
			<ul class="style1">
				<li><a href="http://www.books.com.tw/">博客來</a></li>
				<li><a href="http://www.kingstone.com.tw/">金石堂</a></li>
				<li><a href="#"></a></li>
				<li><a href="#"></a></li>
				<li><a href="#"></a></li>
				<li><a href="#"></a></li>
			</ul>
		</div>
		<div id="box3">
			<div class="title">
				<h2></h2>
			</div>
			<p></p>
			<ul class="contact">
				<li><a href="#"></a></li>
				<li><a href="#"></a></li>
				<li><a href="#"></a></li>
				<li><a href="#"></a></li>
				<li><a href="#"></a></li>
			</ul>
			 </div>
		</div>
	</div>
</div>
<div id="copyright" class="container">
	<p>&copy; 淡江大學資料庫概論第一組</p>
    <p> © 2015 TKU DILS </p>
</div>
</body>
</html>
