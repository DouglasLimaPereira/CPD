@extends('layouts.app2')

@section('content')
<div>
    <div class="row justify-content-end">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body" style="height: 750px;">
                    <div class="card">
                        
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Data</th>
                                        <th scope="col">Entrada</th>
                                        <th scope="col">Entrada Almoço</th>
                                        <th scope="col">Saída Almoço</th>
                                        <th scope="col">Saída</th>
                                        <th><i class="fa fa-cogs fa-lg"></i> Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pontos as $ponto)
                                        <tr>
                                            <td>{{ date('d/m/Y', strtotime($ponto->created_at)) }}</td>
                                            <td>{{ $ponto->entrada }}</td>
                                            <td>{{ $ponto->entrada_almoco }}</td>
                                            <td>{{ $ponto->saida_almoco }}</td>
                                            <td>{{ $ponto->saida }}</td>
                                            <td>
                                            <div class="dropdown text-center">
                                                <button class="btn btn-secondary text-center" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-solid fa-ellipsis-vertical fa-lg"></i>
                                                </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="{{route('ponto.show', $ponto->id)}}"> <i class="fa-solid fa-eye"></i> Viualizar</a></li>
                                                        <li><a class="dropdown-item" href="{{route('ponto.edite', $ponto->id)}}"> <i class="fas fa-edit"></i> Editar</a></li>
                                                        <li><a class="dropdown-item text-danger" href="{{route('ponto.destroy', $ponto->id)}}"> <i class="fas fa-trash"></i> Deletar</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <nav class="mb-0">
                            <ul class="pagination justify-content-end ">
                              <li class="page-item"><a class="page-link text-secondary" href="{{$pontos->previousPageUrl()}}">Voltar</a></li>
                              @for ($i = 1; $i <= $pontos->lastPage() ; $i++)
                                <li class="page-item link-secondary {{($pontos->currentPage() == $i) ? 'active' : ''}}">
                                    <a class="page-link" href="{{$pontos->Url($i)}}">{{$i}}</a>
                                </li>
                              @endfor
                              <li class="page-item"><a class="page-link text-secondary" href="{{$pontos->nextPageUrl()}}">Avançar</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
