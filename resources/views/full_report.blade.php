@extends ('layout')

@section('title', 'Отчет о печати')

@section('content')
    <form action="/report" method="POST">
            {{csrf_field()}}
            <label for="report_date" class="col-sm-1 col-form-label">Дата:</label>
            <input type="date" name="report_date" id="report_date" placeholder="Дата">
            <label for="report_filter" class="col-sm-1 col-form-label">Групировка:</label>
            <select name="group" id="group">
                <option value="contragent">Контрагент</option>
                <option value="complex">Комплекс</option>
                <option value="ticket_type">Тип билета</option>
            </select>
        <br>
        <button class="btn btn-primary" type="submit"> Сформировать отчет</button>
    </form>

    <table class="table table-sm table-hover">
        <thead>
        <tr>
            <th scope="col">Дата</th>
            <th scope="col">Тип билета</th>
            <th scope="col">Номинал</th>
            <th scope="col">Количество</th>
            <th scope="col">Комплекс</th>
            <th scope="col">Контрагент</th>
            <th scope="col">№ первого билета</th>
            <th scope="col">№ последнего билета</th>
        </tr>
        </thead>
        <tbody>
        @foreach($report as $row)
            <tr>
                <th scope="row">{{$row->create_at}}</th>
                <td>{{$row->ticket_type}}</td>
                <td>{{$row->denomination}}</td>
                <td>{{$row->quantity}}</td>
                <td>{{$row->complex}}</td>
                <td>{{$row->username}}</td>
                <td>{{$row->first_ticket_num}}</td>
                <td>{{$row->last_ticket_num}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @if(count($report) == 0)
        <h1>На этот день нет данных</h1>
    @endif
@endsection