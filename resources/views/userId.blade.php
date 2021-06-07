<h1>Detalhes de Usuários</h1>
<p>nome:{{$user->name}}</p>
<p>cpf:{{$user->cpf}}</p>
<p>nascimento:{{date("d/m/Y", strtotime($user->birthday))}}</p>

<h1>Transacões de Usuários</h1>
<table class="table">
    <thead>
      <tr>
        <th scope="col">categoria</th>
        <th scope="col">valor</th>
        <th scope="col">descrição</th>
      </tr>
    </thead>
@foreach($transations as $transation){
    <tr>
        <td>{{$transation->categoria}}</td>
        <td>{{$transation->valor}}</td>
        <td>{{$transation->descricao}}</td>
        <td><form action="{{route('transation.destroy', ['transation'=> $transation->id])}}" method="POST">
            @csrf
            @method('delete')
            <input type="hidden" name="transation" value="{{$transation->id}}">
            <input type="submit" value="Remover">
            </form>
        </td>
    </tr>   
}
@endforeach
<td><a href="{{route('transation.formAdd', ['user'=> $user->id])}}">nova transação</a></td>
