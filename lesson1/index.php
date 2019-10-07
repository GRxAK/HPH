<?php
// $a = 5;
// $b = '05';
// var_dump($a == $b);         // $b приводит строку в число 5
// var_dump((int)'012345');     // переводит строку в одно целое число
// var_dump((float)123.0 === (int)123.0); // разные типы данных при строгом сравнение дают лож
// var_dump((int)0 === (int)'hello, world'); // если в строке при переводе в число первый символ не цифра, то строка будет равняться нулю

// Перемена мест значений
// $a = 1;
// $b = 2;
// $a = $a + $b; // a = 3
// $b = $a - $b; // b = 1
// $a = $a - $b; // a = 2


const TITLE = 'Lesson 1';
$head = 'The Modernist';
$today = getdate();
$day = $today[mday];
$month = $today[month];
$year = $today[year];
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="styles/styles.css">
	<title><?=TITLE?></title>
</head>

<body>
	<div class="conteyner">
		<header>
			<div class="logo">
				<!-- Задание с h1 -->
				<h1><?=$head?></h1>
				<p>Free PSD Website Template</p>
			</div>
			<nav>
				<a href="#">hoMe</a>
				<a href="#">STYLE DEMO</a>
				<a href="#">FULL WIDTH</a>
				<a href="#">DROPDOWN</a>
				<a href="#">PORTFOLIO</a>
				<a href="#">GALLERY</a>
			</nav>
		</header>
		<main>
			<article>
				<!-- Задание с выводом текущей даты -->
				<h2><?=$day?> <?=$month?> <?=$year?></h2>
				<p>Nullamlacus dui ipsum conseque loborttis non euisque morbi penas dapibulum orna. Urnaultrices quis curabitur phasellentesque congue magnis vestibulum quismodo nulla et feugiat adipiscinia pellentum leo.</p>
				<img src="#" alt="slider_1">
				<a href="#">Read More Here »</a>
			</article>
			<div class="service">
				<figure>
					<img src="#" alt="service">
					<h3>SERVICE TITLE</h3>
					<p>Vestassapede et donec ut est libe ros sus et eget sed eget quisq ueta habitur augue</p>
				</figure>
				<figure>
					<img src="#" alt="service">
					<h3>SERVICE TITLE</h3>
					<p>Vestassapede et donec ut est libe ros sus et eget sed eget quisq ueta habitur augue</p>
				</figure>
				<figure>
					<img src="#" alt="service">
					<h3>SERVICE TITLE</h3>
					<p>Vestassapede et donec ut est libe ros sus et eget sed eget quisq ueta habitur augue</p>
				</figure>
				<figure>
					<img src="#" alt="service">
					<h3>SERVICE TITLE</h3>
					<p>Vestassapede et donec ut est libe ros sus et eget sed eget quisq ueta habitur augue</p>
				</figure>
			</div>
			<div class="work">
				<div class="latest">
					<h3>LATEST WORK</h3>
				</div>
				<figure>
					<img src="#" alt="work">
					<h4>LOREM IPSUM DOLOR</h4>
				</figure>
				<figure>
					<img src="#" alt="work">
					<h4>LOREM IPSUM DOLOR</h4>
				</figure>
				<figure>
					<img src="#" alt="work">
					<h4>LOREM IPSUM DOLOR</h4>
				</figure>
				<figure>
					<img src="#" alt="work">
					<h4>LOREM IPSUM DOLOR</h4>
				</figure>
				<figure>
					<img src="#" alt="work">
					<h4>LOREM IPSUM DOLOR</h4>
				</figure>
				<figure>
					<img src="#" alt="work">
					<h4>LOREM IPSUM DOLOR</h4>
				</figure>
			</div>
		</main>
		<footer>
			<div class="upFooter">
				<figure>
					<h4>From The Blog</h4>
					<h5>Post Title</h5>
					<p>Admin, <a href="#">domainname.com</a></p>
					<p>Friday, 6th April 2000</p>
					<p>Vestibulumaccumsan egestibulum eu justo convallis augue estas aenean elit intesque sed. Facilispede estibulum nulla orna nisl velit elit ac aliquat non tincidunt. Namjusto cras urna urnaretra lor urna neque sed quis orci nulla.</p>
					<a href="#">Read More »</a>
				</figure>
				<figure>
					<h4>Quick Links</h4>
					<ul>
						<li><a href="#">» Lorem ipsum dolor sit</a></li>
						<li><a href="#">» Amet consectetur</a></li>
						<li><a href="#">» Praesent vel sem id</a></li>
						<li><a href="#">» Curabitur hendrerit est</a></li>
						<li><a href="#">» Aliquam eget erat nec sapien</a></li>
						<li><a href="#">» Cras id augue nunc</a></li>
						<li><a href="#">» Sed a nulla urna</a></li>
					</ul>
				</figure>
				<figure>
					<h4>Latest Tweets</h4>
					<p><a href="#">@namehere</a> Justoid nonummy laoreet phasellent penatoque in antesque pellus elis eget tincidunt. Nequatdui laorem justo a non tellus laoremut vitae doloreet 1 day ago</p>
					<p><a href="#">@namehere</a> Justoid nonummy laoreet phasellent penatoque in antesque pellus elis eget tincidunt. Nequatdui laorem justo a non tellus laoremut vitae doloreet 1 day ago</p>
				</figure>
				<form action="#">
					<h4>Contact Us</h4>
					<input type="text" placeholder="Full Name">
					<input type="text" placeholder="Email Address">
					<input type="text" placeholder="Subject">
					<textarea name="#" id="#" cols="30" rows="10" placeholder="Message"></textarea>
					<input type="submit" value="SUBMIT" >
				</form>
			</div>
			<div class="downFooter">
			<p>Copyright &copy;&nbsp;2013 Domain Name&nbsp;&mdash; All Rights Reserved</p>
			<p>Template by OS Templates</p>
			</div>
		</footer>
	</div>
</body>

</html>
