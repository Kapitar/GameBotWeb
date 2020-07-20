@extends('layouts.layout')

@section('title')
    GameBot - Рейтинг
@endsection

@section('content')
	
	<h5>Топ-10 игроков по монетам</h5>

	<table class="table table-hover">
	  <thead>
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Игрок</th>
	      <th scope="col">Баланс</th>
	      <th scope="col">КСИ Палки</th>
	      <th scope="col">КСИ Матрица</th>
	      <th scope="col">VIP</th>
	      <th scope="col">Защита в 19 веку</th>
	      <th scope="col">Жертва</th>
	    </tr>
	  </thead>
	  <tbody>
	  	@for ($i = 0; $i < 10; $i++)
	    <tr>
	      <th scope="row">{{$i + 1}}</th>
	      <td><a href="{{ route('profile', $usersVkInfo[$i]['response'][0]['id']) }}">{{ $usersVkInfo[$i]['response'][0]['first_name'] }} {{ $usersVkInfo[$i]['response'][0]['last_name'] }}</a></td>
	      <td>{{ $balances[$i] }}</td>
	      <td>{{ $usersInfo[$i]->palki_kf }}</td>
	      <td>{{ $usersInfo[$i]->ksi_matrica }}</td>
	      <td>
	      	@if ($usersInfo[$i]->vip == 1)
				+
			@else
				-
	      	@endif
	      </td>
	      @if ($user->vip == 1)
	      	<td>{{ $usersInfo[$i]->prey_id }}</td>
	      	<td>{{ $usersInfo[$i]->protection }}</td>
	      @endif
	    </tr>
	    @endfor
	  </tbody>
	</table>
	@if ($user->vip == 0)
	<h5>Чтобы просмотреть все данные о игроках, купите <a href="https://vk.com/gbot.public?w=app6887721_-195951895">VIP-статус</a></h5>
	@endif
@endsection