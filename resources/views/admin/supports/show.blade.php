<h1>Detalhes da dúvida {{$support->id}}</h1>
<ul>
    <li>Assunto : {{ $support->subject }}</li>
    <li>Status : {{ $support->status }}</li>
    <li>Descrição : {{ $support->body }}</li>
</ul>
<form method="post" action="{{ route('supports.destroy', $support->id) }}">
    @csrf()
    @method('DELETE')
    <button type="submit">Deletar</button>
</form>
