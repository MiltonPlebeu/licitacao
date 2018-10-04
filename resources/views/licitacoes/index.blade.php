@extends('layouts.master') 

@section('content')
<p>
	<a href="/licitacaos/create">Cadastrar nova licitação</a>

</p>
<ul>
	<table class="table">
		<thead>
			<tr style="background-color: #e3f2fd;" >
	<td style="font-weight: bold;" >Tipo</td>
	<td style="font-weight: bold; ">Objeto</td>
	<td style="font-weight: bold; ">Licitação</td>
	<td style="font-weight: bold; ">Data abertura</td>
	<td style="font-weight: bold; ">Status</td>
	<td style="font-weight: bold; ">Documentos</td>
	<td></td>
	<td></td>	
</tr>
		</thead>
		<tbody>
			@foreach($licitacaos as $licitacao)
		<tr>
				<td>{{$licitacao->tipo}}</td>
				<td>{{$licitacao->objeto}}</td>
				<td>{{$licitacao->numlicitacao}}</td>
				<td>{{$licitacao->dataabertura}}</td>
				<td>{{$licitacao->status}}</td>
				<td>{{$licitacao->documentos}}</td>
				<td><a href="/licitacaos/{{ $licitacao->id }}/edit">Editar</a></td>
				
				<td>
						<form method="POST" action="/licitacaos/{{ $licitacao->id }}">
			    			{{ csrf_field() }} 
			    			{{ method_field('delete') }}
			    			<button type="submit">Apagar</button>
						</form>
				</td>


		</tr>						
			@endforeach
			
		</tbody>
	</table>


	
</ul>
@endsection
