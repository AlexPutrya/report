@extends ('layout')

@section('title', 'Новый отчет о печати')

@section('content')
    <h1>Создание нового отчета о печати</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    {{ $error }}
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('new_print_report')}}" method="POST" id="new_report">
        {{ csrf_field() }}

        <div class="input-group mb-1">
            <div class="input-group-prepend">
                <span class="input-group-text"> Дата создания &nbsp; <i class="far fa-calendar-alt"> </i> </span>
            </div>
            <input type="date" class="form-control" name="created_date">
        </div>

        <div class="input-group mb-1">
            <div class="input-group-prepend">
                <span class="input-group-text">Вид билета: &nbsp; <i class="fas fa-ticket-alt"></i></span>
            </div>
            <select name="ticket_type" class="custom-select">
                <option value="детский">детский</option>
                <option value="взрослый">взрослый</option>
                <option value="мультилифт">мультилифт</option>
            </select>
        </div>

        <div class="input-group mb-1">
            <div class="input-group-prepend">
                <span class="input-group-text">Номинал:</span>
            </div>
            <select  class="custom-select" name="denomination">
                <option value="1">1</option>
                <option value="3">3</option>
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="20">20</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select>
        </div>

        <div class="input-group mb-1">
            <div class="input-group-prepend">
                <span class="input-group-text">Количество:</span>
            </div>
            <input class="form-control" type="number" name="quantity" min="0">
        </div>

        <div class="input-group mb-1">
            <div class="input-group-prepend">
                <span class="input-group-text">Комплекс: &nbsp; <i class="far fa-building"></i></span>
            </div>
            <select class="custom-select" name="complex">
                <option value="Драгобрат">Драгобрат</option>
                <option value="Сорочин Яр">Сорочин Яр</option>
            </select>
        </div>

        <div class="input-group mb-1">
            <div class="input-group-prepend">
                <span class="input-group-text">Контрагент: &nbsp; <i class="far fa-user"></i></span>
            </div>
            <select class="custom-select" name="contragent">
                @foreach ($contragents as $contragent)
                    <option value="{{$contragent->id}}">{{$contragent->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="input-group mb-1">
            <div class="input-group-prepend">
                <span class="input-group-text">Номер первого билета: &nbsp; <i class="fas fa-sort-numeric-up"></i></span>
            </div>
            <input class="form-control" type="text" name="first_ticket_num">
        </div>

        <div class="input-group mb-1">
            <div class="input-group-prepend">
                <span class="input-group-text">Номер последнего билета: &nbsp; <i class="fas fa-sort-numeric-up"></i> </span>
            </div>
            <input class="form-control" type="text" name="last_ticket_num">
        </div>

        <button class="btn btn-outline-primary btn-lg btn-block" type="submit">Создать </button>
    </form>
@endsection