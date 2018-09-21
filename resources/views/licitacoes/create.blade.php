@extends('layouts.master')
<form method="POST" action="/licitacaos">
	{{ csrf_field() }} 
    Tipo: <input name="tipo">
    Objeto: <textarea name="objeto"> </textarea>
    Num. Licitação: <textarea name="numlicitacao"> </textarea>
    Data Abertura: <textarea name="dataabertura"> </textarea>
    Status: <textarea name="status"> </textarea>
    Documentos: <textarea name="documentos"> </textarea>
    <button type="submit"> Salvar </button>
</form>

