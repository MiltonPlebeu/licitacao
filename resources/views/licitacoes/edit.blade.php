<form method="POST" action="/licitacaos/{{ $licitacao->id  }}">
    {{ csrf_field() }}
    {{ method_field('patch') }}

    Tipo: <input name="tipo" value="{{ $licitacao->tipo }}">
    Objeto: <textarea name="objeto">{{ $licitacao->objeto }}</textarea>
    Num. Licitação: <textarea name="numlicitacao">{{ $licitacao->numlicitacao }}</textarea>
    Data Abertura: <textarea name="dataabertura">{{ $licitacao->dataabertura }}</textarea>
    Status: <textarea name="status">{{ $licitacao->status }} </textarea>
    Documentos: <textarea name="documentos">{{ $licitacao->documentos }} </textarea>

    <button type="submit"> Salvar </button>
</form>

