@extends('layouts.default')
 
@section('content')
  <div class="text-center">
	  <div class="nav-scroller py-1 mb-2">
		<nav class="nav d-flex justify-content-between">
		  <a class="p-2 text-muted" href="#">A RITS</a>
		  <a class="p-2 text-muted" href="#">NOSSOS VALORES</a>
		  <a class="p-2 text-muted" href="#">VAGAS ABERTAS</a>
		</nav>
	  </div>
	  <p class="lead">Natal/RN - BRASIL</p>
	  <h2>Desenvolvedor PHP</h2>
  </div>

  <div class="row">
    <div class="col-md-5">
	<form action="/candidates/store" method="POST" enctype="multipart/form-data">
		@csrf
		<h5 class="mb-3">Informações pessoais</h5>
		
		<div class="row">
          <div class="col-md-12">
            <label for="name">NOME COMPLETO</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="" value="" required>
            <div class="invalid-feedback">
              Digite um nome válido.
            </div>
          </div>
        </div>
		
		<div class="row">
			<div class="col-md-12">
			  <label for="email">E-MAIL</label>
			  <input type="email" class="form-control" name="email" id="email" placeholder="you@example.com" required>
			  <div class="invalid-feedback">
				Digite um e-mail válido.
			  </div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-12">
			  <label for="phone_number">TELEFONE (COM DDD)</label>
			  <input type="text" class="form-control" name="phone_number" id="phone_number" placeholder="(00) 00000-0000" required>
			  <div class="invalid-feedback">
				Digite um telefone válido.
			  </div>
			</div>
		</div>
		
		<h5 class="mb-3">Carta de apresentação</h5>
	
		<div class="row">
			<div class="col-md-12">
			  <div class="form-group">
				<label for="motivation">CONTE SUA MOTIVAÇÃO (OPCIONAL)</label>
				<textarea class="form-control" name="motivation" id="motivation" placeholder="Faça um breve resumo sobre você" rows="4"></textarea>
			  </div>			  
			</div>
		</div>
		
		<h5 class="mb-3">Últimas perguntas</h5>
		
		<div class="row">
			<div class="col-md-12">
			  <label for="linkedin_url">URL DO SEU LINKEDIN</label>
			  <input type="linkedin_url" class="form-control" name="linkedin_url" id="linkedin_url" placeholder="www.linkedin.com/xxxxxxxxxxx" required>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-12">
			  <label for="github_url">URL DO SEU GITHUB</label>
			  <input type="github_url" class="form-control" name="github_url" id="github_url" placeholder="www.github.com/xxxxxxxxxxx" required>
			</div>
		</div>
		
        <div class="row">
          <div class="col-md-12">
            <label for="english_level">QUAL SEU NÍVEL DE INGLÊS?</label>
            <select class="custom-select d-block w-100" name="english_level" id="english_level" required>
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

		<div class="row">
			<div class="col-md-12">
			  <label for="username">Pretensão salarial</label>
			  <div class="input-group">
				<div class="input-group-prepend">
				  <span class="input-group-text">R$</span>
				</div>
				<input type="text" class="form-control" name="wage_pretension" id="wage_pretension" required>
				<div class="invalid-feedback" style="width: 100%;">
				  Digite uma presensão salarial.
				</div>
			  </div>
			</div>
		</div>
		
		<h5 class="mb-3">Anexe seu currículo em PDF ou em DOC</h5>

		  <div class="form-group">
			<label for="resume">Escolha o arquivo</label>
			<input type="file" class="form-control-file" name="resume" id="resume">
		  </div>

        <button class="btn btn-primary btn-lg btn-block" type="submit">Enviar</button>
      </form>
    </div>
  </div>
@stop