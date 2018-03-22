@extends ('layout')

@section('title', 'Отчет о печати')

@section('content')
    <h1>Полный отчет</h1>
    <form action="/report" method="POST">
            {{csrf_field()}}
            <div class="input-group mb-1">
                <div class="input-group-prepend">
                    <span class="input-group-text"> Дата &nbsp; <i class="far fa-calendar-alt"> </i> </span>
                </div>
                <input type="date" class="form-control" name="report_date">
            </div>
            <div class="input-group mb-1">
                <div class="input-group-prepend">
                    <span class="input-group-text">Сгрупировать по: &nbsp; <i class="fas fa-filter"></i></span>
                </div>
                <select class="custom-select" name="group" id="group">
                    <option value="contragent">Контрагенту</option>
                    <option value="complex">Комплексу</option>
                    <option value="ticket_type">Типу билета</option>
                </select>
            </div>

        <button class="btn btn-outline-primary btn-lg btn-block" type="submit"> Сформировать отчет</button>
    </form>

    <div class="table-responsive">
        <table class="table table-sm table-hover table-bordered">
            <thead>
            <tr>
                <th scope="col">Дата</th>
                <th scope="col">Тип билета</th>
                <th scope="col">Номинал</th>
                <th scope="col">Количество</th>
                <th scope="col">№ первого билета</th>
                <th scope="col">№ последнего билета</th>
                <th scope="col">Комплекс</th>
                <th scope="col">Контрагент</th>
                <th scope="col">Акционные</th>
            </tr>
            </thead>
            <tbody>
            @foreach($report as $row)
                <tr>
                    <th scope="row">{{$row->create_at}}</th>
                    <td>{{$row->ticket_type}}</td>
                    <td>{{$row->denomination}}</td>
                    <td>{{$row->quantity}}</td>
                    <td>{{$row->first_ticket_num}}</td>
                    <td>{{$row->last_ticket_num}}</td>
                    <td>{{$row->complex}}</td>
                    <td>{{$row->username}}</td>
                    <td>{!! $row->promotional ? '<i class="fas fa-check-circle"></i>': '' !!}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    @if(count($report) == 0)
        <h1>На этот день нет данных</h1>
    @endif
@endsection