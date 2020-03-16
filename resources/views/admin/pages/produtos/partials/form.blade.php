@csrf
<div class="form-group">
    <input type="text" class="form-control" name="name" placeholder="Nome:" value="{{ $produto->name ?? old('name') }}">
</div>
<div class="form-group">
    <input type="text" class="form-control" name="description" placeholder="Descrição:" value="{{ $produto->description ??  old('description') }}">
</div>
<div class="form-group">
    <input type="text" class="form-control" name="price" placeholder="Preço:" value="{{ $produto->price ??  old('price') }}">
</div>
<div class="form-group">
    <input type="file" name="image">
</div>
<div class="form-group">
    <button type="submit" class="btn btn-primary">Salvar</button>
</div>