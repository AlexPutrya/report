<nav class="navbar-expand-lg navbar navbar-dark bg-primary" style="background-color: #0000F0;">
    <a class="navbar-brand" href="">Менеджер отчетов</a>
    <div class="collapse navbar-collapse">
        <div class="navbar-nav">
            <a class=" nav-item nav-link {{Request::path() == 'report' ? 'active' : ''}}" href="{{route('full_report')}}"><i class="fas fa-file-alt"></i> Полный отчет</a>
            <a class=" nav-item nav-link {{Request::path() == '/' ? 'active' : ''}}" href="{{route('new_print_report')}}"><i class="fas fa-plus-circle"></i> Создать отчет</a>
        </div>
    </div>
</nav>