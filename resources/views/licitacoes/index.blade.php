<p>
	<a href="licitacaos/create">Cadastrar nova licitação</a>

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
		</li>
	@endforeach
</ul>
