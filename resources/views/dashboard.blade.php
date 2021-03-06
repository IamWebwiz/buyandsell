@extends('templates.master')

@section('title')
Dashboard
@endsection

@section('body')

@include('user.navbar')

<section class="container">
	<ol class="breadcrumb">
		<li><a href="{{ route('dashboard') }}">Home</a></li>
		<li class="active">Your Dashboard</li>
	</ol>
	<h1 class="thin">Your Dashboard</h1>
	<hr>
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="text-center">
						<a href="{{ route('profile') }}" class="btn btn-primary btn-md submitbtn"><i class="fa fa-user"></i> View my profile</a>
						<a href="{{ route('postnewad') }}" class="btn btn-success btn-md submitbtn"><i class="fa fa-plus"></i> Post new Advert</a>
						<a href="{{ route('postedads') }}" class="btn btn-info btn-md submitbtn"><i class="fa fa-book"></i> View posted ads</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection
