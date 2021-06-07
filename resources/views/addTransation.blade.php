<form action="{{route('transation.store')}}" method="POST">
    @csrf
    <div class="mb-3">
      <label class="form-label">Descrição da transação:</label>
      <input type="text" name="descricao" class="form-control">
    </div>
    <div class="mb-3">
        <select name="categoria">
            <option value="crédito">crédito</option>
            <option value="débito">débito</option>
            <option value="estorno">estorno</option>
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label">valor:</label>
        <input type="number" name="valor" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label" > usuario:{{$user->name}}</label>
        <input hidden type="number"  name="user_id" value="{{$user->id}}" class="form-control" readonly>
    </div>

    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </form>