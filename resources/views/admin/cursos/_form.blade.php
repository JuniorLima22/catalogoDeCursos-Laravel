<div class="input-field">
    <input type="text" name="titulo" id="titulo" value="{{isset($registro->titulo) ? $registro->titulo : ''}}">
    <label for="titulo">Título</label>
</div>

<div class="input-field">
    <input type="text" name="descricao" id="descricao" value="{{isset($registro->descricao) ? $registro->descricao : ''}}">
    <label for="descricao">Descrição</label>
</div>

<div class="input-field">
    <input type="text" name="valor" id="valor" value="{{isset($registro->valor) ? $registro->valor : ''}}">
    <label for="valor">Valor</label>
</div>

<div class="input-field file-field">
    <div class="btn blue">
        <span>Imagem</span>
        <input type="file" name="imagem">
    </div>
    <div class="file-path-wrapper">
        <input type="text" class="file-path validate">
    </div>
</div>

@if (isset($registro->imagem))
<div class="input-field">
    <img width="150" src="{{asset($registro->imagem)}}" alt="{{$registro->titulo}}">
</div>
@endif

<div>
    <p>
        <input type="checkbox" name="publicado" id="publicado" {{ isset($registro->publicado) && $registro->publicado == 'sim' ? 'checked' : '' }} value="true">
        <label for="publicado">Publicado?</label>
        <br><br>
    </p>
</div>
