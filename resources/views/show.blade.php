@extends('layouts.dashboard')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Candidatos</h1>
	</div>

	<!-- Content Row -->
	<div class="row">
		<div class="col-md-12">
			@if (session('status'))
			<div class="card border-left-primary shadow h-100 py-2">
				<div class="card-body">
					<div class="alert alert-success" role="alert">
						{{ session('status') }}
					</div>
				</div>
			</div>
			@endif
			
		  <!-- Basic Card Example -->
		  <div class="card shadow mb-4">
			<div class="card-header py-3">
			  <h6 class="m-0 font-weight-bold text-primary">Dados do candidato</h6>
			</div>
			<div class="card-body">
			<table class="table">
			  <tbody>
				<tr>
				  <td><strong>Nome</strong></td>
				  <td>{{ $candidate->name }}</td>
				</tr>
				<tr>
				  <td><strong>E-mail</strong></td>
				  <td>{{ $candidate->email }}</td>
				</tr>
				<tr>
				  <td><strong>Telefone</strong></td>
				  <td>{{ $candidate->phone_number }}</td>
				</tr>
				<tr>
				  <td><strong>Motivação</strong></td>
				  <td>{{ $candidate->motivation }}</td>
				</tr>
				<tr>
				  <td><strong>Linkedin</strong></td>
				  <td><a href="{{ $candidate->linkedin_url }}">{{ $candidate->linkedin_url }}</a></td>
				</tr>
				<tr>
				  <td><strong>GitHub</strong></td>
				  <td><a href="{{ $candidate->github_url }}">{{ $candidate->github_url }}</a></td>
				</tr>
				<tr>
				   <td><strong>Inglês</strong></td>
					@switch($candidate->english_level)
						@case("zero")
							<td>Zero</td>
							@break
						@case("basic")
							<td>Básico</td>
							@break
						@case("intermediate")
							<td>Intermediário</td>
							@break
						@case("advanced")
							<td>Avançado</td>
							@break
						@default
							<td>Erro</td>
					@endswitch
				</tr>
				<tr>
				  <td><strong>Pretensão</strong></td>
				  <td>{{ "R$ ".number_format($candidate->wage_cents/100, 2, ',', '.') }}</td>
				</tr>
				<tr>
				  <td><strong>Currículo</strong></td>
				  <td>Link</td>
				</tr>
				<tr>
				  <td><strong>Cadastro</strong></td>
				  <td>{{ date('d/m/Y H:i:s', strtotime($candidate->created_at)) }}</td>
				</tr>
			  </tbody>
			</table>
			</div>
		  </div>
		</div>
	</div>
</div>
@endsection