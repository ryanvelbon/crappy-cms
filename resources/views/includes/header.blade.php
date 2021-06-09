<header id="navbar">
	<a href="{{ route('home') }}" class="logo">Zokowi</a>
	<input class="menu-btn" type="checkbox" id="menu-btn" />
	<label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
	<ul class="menu">
		<li><a href="{{ route('about') }}">About Us</a></li>
		<li><a href="{{ route('services.index') }}">Services</a></li>
		<li><a href="{{ route('projects.index') }}">Portfolio</a></li>
		<li><a href="{{ route('contact') }}">Contact</a></li>
	</ul>
</header>