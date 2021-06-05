<form action="{{route('users.store')}}" method="POST">
    @csrf
    <div class="mb-3">
      <label class="form-label">Nome do Usuario:</label>
      <input type="text" name="name" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">CPF:</label>
        <input type="text" name="cpf" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Nascimento:</label>
        <input type="date" name="birthday" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">email:</label>
        <input type="email" name="email" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </form>