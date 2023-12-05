{{$slot}}
<form action="{{ route('site.contato') }}" method="POST">
    @csrf
    <input name="nome" value="{{ old('nome') }}" type="text" placeholder="Nome" class="{{ $classe }}">
    @if($errors->has('nome'))
        <span style="color:red;"><strong>Nome é obrigatório!</strong></span>
    @endif
    <br>
    <input name="telefone" value="{{ old('telefone') }}" type="text" placeholder="Telefone" class="{{ $classe }}">
    @if($errors->has('telefone'))
    <span style="color:red;"><strong>Telefone é obrigatório!</strong></span>
    @endif
    <br>
    <input name="email" value="{{ old('email') }}" type="text" placeholder="E-mail" class="{{ $classe }}">
    @if($errors->has('email'))
    <span style="color:red;"><strong>E-mail é obrigatório!</strong></span>
    @endif
    <br>
    <select name="motivo_contato" class="{{ $classe }}">
        <option value="">Qual o motivo do contato?</option>
        @foreach($motivo_contatos as $key => $motivo_contato)
        <option value="{{ $motivo_contato->id }}" {{ old('motivo_contato') == $motivo_contato->id ? 'selected' : '' }}>
            {{ $motivo_contato->motivo_contato }}
        </option>
        @endforeach
    </select>
    @if($errors->has('motivo_contato'))
    <span style="color:red;"><strong>Motivo contato é obrigatório!</strong></span>
    @endif
    <br>
    <textarea name="mensagem" class="{{ $classe }}" placeholder="Preencha aqui a sua mensagem">
        @if(old('mensagem') != '')
            {{ old('nome') }}
        @endif
    </textarea>
    @if($errors->has('mensagem'))
    <span style="color:red;"><strong>Mensagem é obrigatório!</strong></span>
    @endif
    <br>
    <button type="submit" class="{{ $classe }}">ENVIAR</button>
</form>
