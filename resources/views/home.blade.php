@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Дашборд - регистрация на курс</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="col-md-12 table">
                        <table class="table">
                            <tbody>
                            <tr>
                                <th>
                                    #
                                </th>
                                <th>
                                    Имя
                                </th>
                                <th>
                                    Телефон
                                </th>
                                <th>
                                    E-mail
                                </th>
                                <th>
                                    Курс
                                </th>
                                <th>
                                    Действия
                                </th>
                            </tr>
                            @foreach($formusers as $formuser)
                                <tr>
                                    <td>{{ $formuser->id}}</td>
                                    <td>{{ $formuser->name }}</td>
                                    <td>{{ $formuser->phone }}</td>
                                    <td>{{ $formuser->email }}</td>
                                    <td>{{ $formuser->course }}</td>
                                    <td> 
                                        <form action="{{ route('formuser.destroy', $formuser) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input class="btn btn-danger" type="submit" value="Удалить">
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
