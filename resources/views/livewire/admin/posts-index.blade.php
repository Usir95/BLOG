<div class="card">
    <div class="card-header">
        <input wire:model="search" type="text" class="form-control" placeholder="Buscar">
    </div>

    @if ($posts->count())
        
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Nombre</td>
                    <td colspan="2"></td>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->name}}</td>
                    <td with="10px">
                        <a class="btn btn-primary btn-sm" href="{{route('admin.posts.edit', $post)}}">Editar</a>
                    </td>
                    <td with="10px">
                        <form action="{{route('admin.posts.destroy', $post)}}" method="POST">
                        @csrf
                        @method('DELETE')
                            <button class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>                                    
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer">
        {{ $posts->links() }}
    </div>
    @else
        <div class="card-body">
            <h3><strong>No existen registros</strong></h3>
        </div>
    @endif
</div>
