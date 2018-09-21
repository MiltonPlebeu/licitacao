@extends('layouts.master') 
<p>
	<a href="/licitacaos/create">Cadastrar nova licitação</a>

</p>
<ul>
	@foreach($licitacaos as $licitacao)
		<li>
			{{$licitacao->tipo}}
			{{$licitacao->objeto}}
			{{$licitacao->numlicitacao}}
			{{$licitacao->dataabertura}}
			{{$licitacao->status}}
			{{$licitacao->documentos}}
			<br>
				<a href="/licitacaos/{{ $licitacao->id }}/edit"> Editar </a>
			<br>
			<form method="POST" action="/licitacaos/{{ $licitacao->id }}">
    			{{ csrf_field() }} 
    			{{ method_field('delete') }}
    			<button type="submit">Apagar</button>
			</form>

		</li>						
	@endforeach
</ul>
