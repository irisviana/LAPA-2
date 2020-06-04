@if ($errors->any())
    <p class="error">Campos com * são obrigatórios!</p>
@endif
<div class="input-field">
    <label for="email">Email do laboratório*</label>
    <input class="{{ $errors->has('email') ? 'error' : '' }}" type="text" name="email" value="{{ isset($registro->email) ? $registro->email : old('email') }}" placeholder="Digite aqui o email da organização">
    @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="input-field">
    <label for="texto">Descrição - Quem Somos*</label>
    <textarea id="summernote" type="text" name="texto" placeholder="Escreve aqui uma breve descrição sobre o laboratório">{{ isset($registro->texto) ? $registro->texto : old('texto') }}</textarea>
    @error('texto')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="input-field">
    <label for="telefone">Telefone para contato do laboratório</label>
    <input class="{{ $errors->has('telefone') ? 'error' : '' }} telefone" type="text" name="telefone" value="{{ isset($registro->telefone) ? $registro->telefone : old('telefone') }}" placeholder="Digite aqui o telefone da organização">
    @error('telefone')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<h3>Redes sociais</h3>
<div class="input-field">
    <label for="instagram">Instagram</label>
    <input type="text" name="instagram" value="{{ isset($registro->instagram) ? $registro->instagram : old('instagram') }}" placeholder="Digite aqui o instagram da organização">
    @error('instagran')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="input-field">
    <label for="twitter">Twitter</label>
    <input type="text" name="twitter" value="{{ isset($registro->twitter) ? $registro->twitter : old('twitter') }}" placeholder="Digite aqui o twitter da organização">
    @error('twitter')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="input-field">
    <label for="facebook">Facebook</label>
    <input type="text" name="facebook" value="{{ isset($registro->facebook) ? $registro->facebook : old('facebook') }}" placeholder="Digite aqui o facebook da organização">
    @error('facebook')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>