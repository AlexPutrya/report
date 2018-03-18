@extends ('layout')

@section('title', 'Новый отчет о печати')

@section('content')
    <h1>Отчет от печати</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('new_print_report')}}" method="POST">
        {{ csrf_field() }}
        <label for="">Дата:</label>
        <input id="date" type="date" name="created_date"><br>
        Вид билета:
        <select name="ticket_type">
            <option value="детский">детский</option>
            <option value="взрослый">взрослый</option>
            <option value="мультилифт">мультилифт</option>
        </select> <br>
        Номинал:
        <select name="denomination">
            <option value="1">1</option>
            <option value="3">3</option>
            <option value="5">5</option>
            <option value="10">10</option>
            <option value="20">20</option>
            <option value="50">50</option>
            <option value="100">100</option>
        </select> <br>
        Количество:
        <input type="number" name="quantity"> <br>
        Комплекс:
        <select name="complex">
            <option value="Драгобрат">Драгобрат</option>
            <option value="Сорочин Яр">Сорочин Яр</option>
        </select> <br>
        Контрагент:
        <select name="contragent">
            @foreach ($contragents as $contragent)
                <option value="{{$contragent->id}}">{{$contragent->name}}</option>
            @endforeach
        </select> <br>
        Номер первого билета:
        <input type="text" name="first_ticket_num"> <br>
        Номер последнего билета:
        <input type="text" name="last_ticket_num"> <br>
        <button type="submit">Создать </button>
    </form>
@endsection