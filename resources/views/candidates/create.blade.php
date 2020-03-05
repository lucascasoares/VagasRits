@extends('layouts.default')
 
@section('content')

@if ($errors->any())
	<div class="alert alert-danger" style="padding-bottom:0px;">
		<ul style="list-style-type:none; padding-left:0px;">
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif

	<form action="/candidates/store" method="POST" enctype="multipart/form-data">
		@csrf
		
		<h5 class="topics" id="init">Informações pessoais</h5>
		
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-5 mx-auto">
				<div class="form-group">
					<small id="label" for="input">NOME COMPLETO</small>
					<input type="text" class="form-control input-lg" name="name" id="name" required>
					<div class="invalid-feedback">
						Digite um nome válido.
					</div>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-5 mx-auto">
				<div class="form-group">
					<small id="label" for="input">E-MAIL</small>
					<input type="email" class="form-control input-lg" name="email" id="email" placeholder="e-mail@mail.com.br" required>
					<div class="invalid-feedback">
						Digite um e-mail válido.
					</div>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-5 mx-auto">
				<div class="form-group">
					<small id="label" for="input">TELEFONE (COM DDD)</small>
					<input type="text" class="form-control input-lg" name="phone_number" id="phone_number" placeholder="(00) 00000-0000" required>
					<div class="invalid-feedback">
						Digite um telefone válido.
					</div>
				</div>
			</div>
		</div>
		
		<h5 class="topics">Carta de apresentação</h5>

		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-5 mx-auto">
				<div class="form-group">
					<small id="label" for="input">CONTE SUA MOTIVAÇÃO (OPCIONAL)</small>
					<textarea class="form-control input-lg" name="motivation" id="motivation" placeholder="Faça um breve resumo sobre você" rows="4"></textarea>
				</div>
			</div>
		</div>
		
		<h5 class="topics">Últimas perguntas</h5>
		
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-5 mx-auto">
				<div class="form-group">
					<small id="label" for="input">URL DO SEU LINKEDIN</small>
					<input type="text" class="form-control input-lg" name="linkedin_url" id="linkedin_url" placeholder="https://www.linkedin.com/xxxxxxxxxxx" required>
					<div class="invalid-feedback">
						Digite uma url válida.
					</div>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-5 mx-auto">
				<div class="form-group">
					<small id="label" for="input">URL DO SEU GITHUB</small>
					<input type="text" class="form-control input-lg" name="github_url" id="github_url" placeholder="https://www.github.com/xxxxxxxxxxx" required>
					<div class="invalid-feedback">
						Digite uma url válida.
					</div>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-5 mx-auto">
				<div class="form-group">
					<small id="label" for="input">QUAL SEU NÍVEL DE INGLÊS?</small>
					<select class="custom-select d-block w-100 form-control input-lg" name="english_level" id="english_level" required>
						<option value="">Escolha</option>
						<option value="zero">Zero</option>
						<option value="basic">Básico</option>
						<option value="intermediate">Intermediário</option>
						<option value="advanced">Avançado</option>
					</select>
					<div class="invalid-feedback">
						Selecione um nível de inglês válido.
					</div>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-5 mx-auto">
				<div class="form-group">
					<small id="label" for="input">PRETENSÃO SALARIAL</small>
					<input type="text" class="form-control input-lg" name="wage_pretension" id="wage_pretension" required>
				</div>
			</div>
		</div>
		
		<h5 class="topics">Anexe seu currículo em PDF ou DOC</h5>

		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-5 mx-auto">
				<div class="form-group input-icons" style="text-align:center; padding-bottom:35px;">
					<input type="file" id="resume" name="resume" class="resume" style="display:none;">
					<i class="fa fa-paperclip icon"></i><input type="text" name="file" id="file" class="file sel input-field" value="Escolha o arquivo" readonly="readonly" style="outline: none;">
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-5 mx-auto">
				<button class="btn btn-primary btn-lg btn-block btn-rits" type="submit">Enviar</button>
			</div>
		</div>
		
	</form>
@stop