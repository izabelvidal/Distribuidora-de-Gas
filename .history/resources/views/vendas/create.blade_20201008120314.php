@extends('layouts.app')

@section('content')


        <div class="form-group">
            <label>quantidade</label>
            <input type="number" class="form-control" aria-describedby="quantidade" placeholder="Quantidade" value="{{ old('quantidade') }}">
        </div>
        <div class="form-group">
            <label>produto</label>
            <input type="text" class="form-control" aria-describedby="produto" placeholder="produto" value="{{ old('nome') }}">
        </div>
        <div class="form-group">
            <label>marca</label>
            <input type="text" class="form-control" aria-describedby="marca" placeholder="Quantidade" value="{{ old('marca') }}">
        </div>
        <div class="col-auto my-1">
      <label class="mr-sm-2" for="inlineFormCustomSelect">forma de pagamento</label>
      <select class="custom-select mr-sm-2" name="forma_pagamento">
        <option selected>Forma de pagamento</option>
        <option value="1">Dinheiro</option>
        <option value="2">Credito</option>
        <option value="3">Debito</option>
      </select>
    </div> 
    
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    
@endsection
