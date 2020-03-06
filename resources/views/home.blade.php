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
		  <!-- DataTales Example -->
		  <div class="card shadow mb-4">
			<div class="card-header py-3">
			  <h6 class="m-0 font-weight-bold text-primary">Lista dos Candidatos Cadastrados</h6>
			</div>
			<div class="card-body">
			  <div class="table-responsive">
				<table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
				  <thead>
					<tr>
					  <th>#</th>
					  <th>Nome</th>
					  <th>E-mail</th>
					  <th>Telefone</th>
					  <th>Inglês</th>
					  <th>Pretensão</th>
					  <th>Cadastro</th>
					</tr>
				  </thead>
				  <tfoot>
					<tr>
					  <th>#</th>
					  <th>Nome</th>
					  <th>E-mail</th>
					  <th>Telefone</th>
					  <th>Inglês</th>
					  <th>Pretensão</th>
					  <th>Cadastro</th>
					</tr>
				  </tfoot>
				  <tbody>
					<?php $i = 1; ?>
					@foreach ($candidates as $candidate)
						<tr data-href="/show/{{ $candidate->id }}">
						  <td>{{ $i }}</td>
						  <td>{{ $candidate->name }}</td>
						  <td>{{ $candidate->email }}</td>
						  <td>{{ $candidate->phone_number }}</td>
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
						  <td>{{ "R$ ".number_format($candidate->wage_cents/100, 2, ',', '.') }}</td>
						  <td>{{ date('d/m/Y H:i:s', strtotime($candidate->created_at)) }}</td>
						</tr>
						<?php $i++; ?>
					@endforeach
				  </tbody>
				</table>
			  </div>
			</div>
		  </div>
		</div>
	</div>
</div>
@endsection