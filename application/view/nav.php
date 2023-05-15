<nav class="navbar navbar_coca_cola navbar-expand-sm">
	<div class="container">
		<div class="logo">
			<a class="navbar-brand" href="home">
				<h1>1</h1>
				<h1>oca</h1>
				<h2>Cola</h2>
				<h3>Journey</h3>
				<p>Refreshing the world, one story at a time</p>
			</a>
		</div>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ms-auto">
				<li class="nav-item">
					<a class="nav-link" href="home">Home</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">About</a>
					<div class="dropdown-menu dropdown-menu-end">
						<a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#contactModal" href="#contactModal">Contact</a>
						<a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#originalityModal" href="#originalityModal">Statement of Originality</a>
						<a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#referencesModal" href="#originalityModal">References</a>
					</div>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Drinks</a>
					<div class="dropdown-menu dropdown-menu-end">
						<a class="dropdown-item" href="drinks?d=coca_cola">Coca Cola</a>
						<a class="dropdown-item" href="drinks?d=sprite">Sprite</a>
						<a class="dropdown-item" href="drinks?d=dr_pepper">Dr Pepper</a>
					</div>
				</li>
				<li class="nav-item">
					<a href="#" onclick="switchTheme()" id="dark-theme-button"><i class="fa-solid fa-moon fa-lg theme-button"></i></a>
					<a href="#" onclick="switchTheme()" id="light-theme-button"><i class="fa-solid fa-sun fa-lg theme-button"></i></a>
				</li>
			</ul>
		</div>
	</div>
</nav>

<div class="modal fade" id="contactModal" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Contact</h4>
				<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
			</div>
			<div class="modal-body">
				<p>Dillon Pike</p>
				<p>dp396@sussex.ac.uk</p>
			</div>
		    <div class="modal-footer">
				<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
		    </div>
		</div>
	</div>
</div>

<div class="modal fade" id="originalityModal" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Statement of Originality</h4>
				<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
			</div>
			<div class="modal-body">
				<p>This assignment is submitted as part requirement for the degree of Computing for Digital Media at the University of Sussex. It is the product of my own labour except where indicated in the accompanying codebase. This assignment may be freely copied and distributed provided the source is acknowledged. I hereby give permission for a copy of this assignment to be loaned out to students in future years.</p>
			</div>
		    <div class="modal-footer">
				<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
		    </div>
		</div>
	</div>
</div>

<div class="modal fade" id="referencesModal" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">References</h4>
				<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
			</div>
			<div class="modal-body">
				<p>x3dom modules: <a href="https://www.x3dom.org/nodes/">https://www.x3dom.org/nodes/</a></p>
				<p>Bootstrap modules: <a href="https://getbootstrap.com/docs/5.3/getting-started/download/">https://getbootstrap.com/docs/5.3/getting-started/download/</a></p>
				<p>jQuery module: <a href="https://releases.jquery.com/jquery/">https://releases.jquery.com/jquery/</a></p>
				<p>Popper module: <a href="https://popper.js.org/">https://popper.js.org/</a></p>
				<p>Loki Cola font: <a href="https://www.dafont.com/loki-cola.font">https://www.dafont.com/loki-cola.font</a></p>
			</div>
		    <div class="modal-footer">
				<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
		    </div>
		</div>
	</div>
</div>