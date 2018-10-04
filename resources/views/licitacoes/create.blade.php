@extends('layouts.master')

@section('content')
<table class="table">
	<thead>
		<tbody>
			<form method="POST" action="/licitacaos">
	{{ csrf_field() }} 
				<tr>
					<td><label for="tipo">Escolha o tipo</label>
					 <select name="tipo" id="tipo">
						<option value="Convite">Convite</option>
						<option value="Tomada de preço">Tomada de preço</option>
						<option value="Pregão Presencial">Pregão presencial</option>
						<option value="Pregão Eletrônico">Pregão eletrônico</option>
					</select>
				</td>

					<td>Objeto:<input type="text" name="objeto"></td>
					<td>Num. Licitação: <input type="text" name="numlicitacao"></td>
					<td>Data Abertura: <textarea name="dataabertura"> </textarea></td>
					<td>Status: <textarea name="status"> </textarea></td>
					<td>Documentos: <textarea name="documentos"> </textarea></td>
					<td><button type="submit"> Salvar </button></td>
				</tr>

			</form>
		</tbody>
	</thead>
</table>
@endsection

