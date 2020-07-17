<?php include "inc/html-top.php";?>

	<body>
		<header>
			<h1>Web Developers of Tomorrow, Pursuing Web Development</h1>
			<form action = "/">
				<label for="fname">username:</label>
				<input type="text" id="fname" name="fname" value=""><br>
				<label for="lname">password:</label>
				<input type="text" id="lname" name="lname" value=""><br>
				<input type="submit" value="Login">
			</form> 
		</header>

		<section>
			<h2>Your adventure awaits</h2>
			<h3>Front end web development 2020</h3>
		</section>

		<section>
			<ul>
				<li>Learn about aspiring web developers inside and outside of CS</li>
				<li>Discover CS courses to take to reach your programming dreams</li>
			</ul>
		</section>

		<button onclick = "window.location.href='list.php'">
			Start Learning
		</button>

	</body>
</html>