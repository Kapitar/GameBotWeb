@section('sidebar')

<div class="wrapper d-flex align-items-stretch">
	<nav id="sidebar">
		<div class="custom-menu">
			<button type="button" id="sidebarCollapse" class="btn btn-primary">
				<i class="fa fa-bars"></i>
				<span class="sr-only">Toggle Menu</span>
			</button>
		</div>
		<div class="p-4 pt-5">
			<h1><a href=" {{ route('index') }} " class="logo ml-4"><img src="/public/images/gamebotlogo.png" alt="" width="150px" height="150px"></a></h1>
			<ul class="list-unstyled components mb-5">
				<li class="active">
					<a href="https://vk.com/@gbot.public"><i class="far fa-newspaper"></i> Статьи</a>
				</li>
				<li>
					<a href="{{ route('rating') }}"><i class="far fa-chart-bar"></i> Рейтинг</a>
				</li>
				<li>
					<a href="https://vk.com/write-196359080"><i class="far fa-flag"></i> Помощь</a>
				</li>
				<li>
					<a href="https://vk.com/write-195951895"><i class='far fa-comment'></i> Чат с ботом</a>
				</li>
				@if (session('userData'))
					<li>
						<a href="{{ route('logout') }}"><i class="fas fa-sign-out-alt"></i> Выход</a>
					</li>
				@endif
			</ul>

			<div class="footer">
				<p>
					Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This site is made by <a href="https://vk.com/kapitar" class="">Artem Kim</a> <i class="icon-heart" aria-hidden="true"></i>
				</p>
				<p>
					<a href="https://github.com/Kapitar/GameBotWeb">
						<i class="fab fa-github"></i> GitHub
					</a>
				</p>
				<p>
					<a href="https://vk.com/gbot.public">
						<i class="fab fa-vk"></i> VK
					</a>
				</p>
			</div>

		</div>
	</nav>

	<!-- Page Content  -->
	<div id="content" class="p-md-5 pt-5">
		@include('includes.messages')
		@yield('content')
	</div>
</div>
