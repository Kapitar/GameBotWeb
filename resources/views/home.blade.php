@extends('layouts.layout')

@section('title')
    {{ $user['first_name'] }} {{ $user['last_name'] }}
@endsection

@section('content')
	<section class="profile">
		<div class="moiContainer">
			<div class="profile__header">
				<div class="row">
					<div class="col-2">
						<img src="{{ $user['photo_big'] }}" alt="">
					</div>
					<div class="col-3">
						<div class="profileName">
							<a href="https://vk.com/id{{ $user['id'] }}">{{ $user['first_name'] }} {{ $user['last_name'] }}</a>
							<p>
								@if ($details->vip == 1)
									VIP
								@else
									Пользователь
								@endif
							</p>
						</div>
					</div>
					<div class="col-1">
						<div class="line"></div>
					</div>
					<div class="col-3">
						<div class="playstats">
							<h2>Сыграно игр в палки:</h2>
							<p>{{$details->game_number}}</p>
						</div>
					</div>
					<div class="col-3">
						<div class="playstats">
							<h2>Выиграно игр в палки:</h2>
							<p>{{$details->number_of_wins}}</p>
						</div>
					</div>
				</div>
				
			</div>
			<div class="profile__body">
				<div class="row">
					<div class="col-4">
						<div class="profile__section">
							<div class="balance">
								<div class="text-center">
									<h2>Доступно монет:</h2>
									<h1>{{ $details->balance }}</h1>
									<p>Вы можете потратить ваши монеты в чате <a href="">нашего бота</a></p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-8">
						<div class="profile__section">
							<div class="profile__stats">
								<div class="row">
									<div class="col-6">
										<div class="text-center">
											<h5>КСИ игры "Палки"</h5>
											<p>
												@if ($details->palki_kf == 0)
													Отсутствует
												@else
													{{ $details->palki_kf }}
												@endif
											</p>
											<div class="mt-5">
												<h5>КСИ игры "Матрица"</h5>
												<p>
													@if ($details->ksi_matrica == 0)
														Отсутствует
													@else
														{{ $details->ksi_matrica }}
													@endif
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection