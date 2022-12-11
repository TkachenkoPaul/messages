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
{{--                @foreach($data['status'] as $status)--}}
{{--                    <div class="col-lg-3 col-6">--}}
{{--                        <!-- small box -->--}}
{{--                        <div class="small-box bg-danger">--}}
{{--                            <div class="inner">--}}
{{--                                <h3>{{ $status->messages_count }}</h3>--}}

{{--                                <p>{{ $status->name }}</p>--}}
{{--                            </div>--}}
{{--                            <div class="icon">--}}
{{--                                <i class="fas fa-comment-dots"></i>--}}
{{--                            </div>--}}
{{--                            <a href="{{ $status->type_id }}" class="small-box-footer">Просмотр <i class="fas fa-arrow-circle-right"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                @endforeach--}}
                @foreach($data['status'] as $status)
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="info-box elevation-3">
                            <span class="info-box-icon bg-gradient-primary"><i class="far fa-envelope"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">{{ $status->name }}</span>
                                <span class="info-box-number">{{ $status->messages_count }}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                @endforeach

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
