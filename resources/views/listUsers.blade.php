                    <h1>Lista de Usuários</h1>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">CPF</th>
                            <th scope="col">Aniversário</th>
                          </tr>
                        </thead>
                    @foreach ( $users as $user )
                    
                        <tbody>
                          <tr>
                            <th scope="row">{{$user->id}}</th>
                            <td>{{$user->name}}</td>
                            <td>{{$user->cpf}}</td>
                            <td>{{$user->birthday}}</td>
                            <td><a href="{{route('users.idUser', ['user'=> $user->id])}}">Ver usuario</a></td>
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
