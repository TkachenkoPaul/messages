@extends('layouts.layout')
@section('content')
    <!-- Content Header (Page header) -->
{{--    <div class="content-header">--}}
{{--        <div class="container-fluid">--}}
{{--            <div class="row mb-2">--}}
{{--                <div class="col-sm-6">--}}
{{--                    <h1 class="m-0">Заявки</h1>--}}
{{--                </div><!-- /.col -->--}}
{{--                <div class="col-sm-6">--}}
{{--                    <ol class="breadcrumb float-sm-right">--}}
{{--                        <li class="breadcrumb-item"><a href="#">Главная</a></li>--}}
{{--                        <li class="breadcrumb-item active">Создать</li>--}}
{{--                    </ol>--}}
{{--                </div><!-- /.col -->--}}
{{--            </div><!-- /.row -->--}}
{{--        </div><!-- /.container-fluid -->--}}
{{--    </div>--}}
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content mt-3">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            @if (session('message_created'))
                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-success">
                            {{ session('message_created') }}
                        </div>
                    </div>
                </div>
            @endif
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-gradient-primary">
                        <div class="inner">
                            <h3>{{ $data['all'] }}</h3>

                            <p>Всего заявок</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-tasks"></i>
                        </div>
                        <a href="#" class="small-box-footer">Просмотр <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{ $data['opened'] }}</h3>

                            <p>Открыто</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-tools"></i>
                        </div>
                        <a href="#" class="small-box-footer">Просмотр <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{ $data['closed'] }}</h3>

                            <p>Закрыто</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-check"></i>
                        </div>
                        <a href="#" class="small-box-footer">Просмотр <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>{{ $data['waiting'] }}</h3>

                            <p>Ожидают</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-comment-dots"></i>
                        </div>
                        <a href="#" class="small-box-footer">Просмотр <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
            <!-- Main row -->
            <div class="row">
                <section class="col-lg-12 connectedSortable">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-comments"></i>
                                Заявки
                            </h3>
                            <div class="card-tools">
                                <ul class="nav nav-pills ml-auto">
                                    <li class="nav-item">
                                        <a href="{{ route('messages.create') }}" class="btn btn-primary" >Добавить</a>
                                    </li>
                                </ul>
                            </div>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered yajra-datatable">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>ФИО</th>
                                    <th>Адрес</th>
                                    <th>Дом/Квартира</th>
                                    <th>Примечание</th>
                                    <th>Телефон</th>
                                    <th>Ответственный</th>
                                    <th>Статус</th>
                                    <th>Закрыта</th>
                                    <th>Создана</th>
                                    <th>Изменена</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div><!-- /.card-body -->
                    </div>
                </section>
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@stop
