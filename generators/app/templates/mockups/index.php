<?php require '_includes/site-header.php'; ?>

	<div class="container" style="padding-top:30px;padding-bottom:30px;">

		<!-- Style and component development guides -->
		<h1><%= appName %></h1>

	<% if (addStyleGuide) { %>
		<h2>Style Guide</h2>
		<ul>
			<li><a href="/mockups/styleguide.php">Style Guide</a></li>
		</ul>
	<% } %>

		<!-- Be sure to include project references -->
		<h2>Reference</h2>
		<ul>
			<li><a href="#">Site Map</a></li>
			<li><a href="#">Annotated PDF</a></li>
		</ul>

		<!-- Template and page mockups -->
		<h2>Mockups</h2>
		<ul>
			<li><a href="/mockups/default.php">Default Page</a></li>
			<li><a href="/mockups/home.php">Home Page</a></li>
		</ul>

	</div>

<?php require '_includes/site-footer.php'; ?>