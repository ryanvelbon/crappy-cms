<header id="navbar">
	<a href="{{ route('home') }}" class="logo">CSS Nav</a>
	<input class="menu-btn" type="checkbox" id="menu-btn" />
	<label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
	<ul class="menu">
		<li><a href="#work">Our Work</a></li>
		<li><a href="#about">About</a></li>
		<li><a href="#careers">Careers</a></li>
		<li><a href="{{ route('contact') }}">Contact</a></li>
	</ul>
</header>