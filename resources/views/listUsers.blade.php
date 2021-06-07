                    <h1>Lista de Usuários</h1>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                          </tr>
                        </thead>
                    @foreach ( $users as $user )
                        <tbody>
                          <tr>
                            <th scope="row">{{$user->id}}</th>
                            <td>{{$user->name}}</td>
                            <td><a href="{{route('users.idUser', ['user'=> $user->id])}}">Detalhes do usuario</a></td>
                            <td><form action="{{route('user.destroy', ['user'=> $user->id])}}" method="POST">
                                @csrf
                                @method('delete')
                                <input type="hidden" name="user" value="{{$user->id}}">
                                <input type="submit" value="Remover">
                                </form>
                            </td>
                          </tr> 
                    @endforeach
                        </tbody>
                    </table>  
                    <a href="{{route('users.formAdd')}}">Cadastrar usuario</a>
                </div>
            </div>
        </div>
    </div>
</div>
