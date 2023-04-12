<table class="table table-striped table-hover border">
    <thead class="tableColorCus">
        <tr class="dashboardTextCus">
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">E-mail</th>
            <th scope="col">Azioni</th>
        </tr>
    </thead>
    <tbody>
        @foreach($roleRequests as $user)
        <tr class="dashboardTextCus">
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>
                {{-- <button class="btn btn-info text-white">Attiva {{$role}}</button> --}}

                @switch($role)
                    @case('amministratore')
                    <a href="{{route('admin.setAdmin', compact('user'))}}" class="btn buttonTableCus">Attiva {{$role}}</a>
                    @break
                    @case('revisore')
                    <a href="{{route('admin.setRevisor', compact('user'))}}" class="btn buttonTableCus">Attiva {{$role}}</a>
                    @break
                    @case('redattore')
                    <a href="{{route('admin.setWriter', compact('user'))}}" class="btn buttonTableCus">Attiva {{$role}}</a>
                    @break
                @endswitch
            </td>
        </tr>
        @endforeach
    </tbody>
</table>     