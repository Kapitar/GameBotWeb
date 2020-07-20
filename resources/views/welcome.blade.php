@extends('layouts.layout')

@section('title')
    Главная страница
@endsection

@section('content')
<section class="landing" id="landing">
	<div class="moiContainer">
		<div class="header">
			<div class="header__logo">
				GameBot
			</div>
			<div class="header__body">
				Самые крутые игры в твоих диалогах
			</div>
			<a href="https://oauth.vk.com/authorize?client_id=7541898&display=page&redirect_uri=https://gamebot.site/auth&response_type=code"><button class="button vk"><i class="fab fa-vk"></i> Войти через ВКонтакте</button></a>
		</div>
	</div>
</section>
@endsection