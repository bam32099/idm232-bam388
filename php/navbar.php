<html>
 <head>
 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="homepage.css">
 </head>
 <body>

<nav role="navigation">
		<div id="menuToggle">

			<input type="checkbox" />

			<span></span>
			<span></span>
			<span></span>
			<ul id="menu">
				<a href="index.html"><li>Home</li></a>
				<a href="help.html"><li>Help</li></a>
				<a href="zeroresults.html"><li>Info</li></a>

			</ul>
		</div>
	</nav>
	 
	<div class="wrap">
		<div class="search">
			 <input type="text" class="searchTerm" placeholder="Search...">
			 <button type="submit" class="searchButton" onclick="window.location.href = 'filter.html';">
				 <i class="fa fa-search"></i>
			</button>
		</div>
 </div>