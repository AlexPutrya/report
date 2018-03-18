<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Создание отчета о печати </title>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <h1>Отчет от печати</h1>
                <form action="/" method="POST">
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
                    <select name="contragnet">
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
            </div>
        </div>
    </body>
</html>
