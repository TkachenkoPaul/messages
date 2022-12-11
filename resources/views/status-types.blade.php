@extends('layouts.layout')
@section('content')
    <!-- Main content -->
    <section class="content mt-3">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-gradient-primary">
                        <div class="inner">
                            <h3>11</h3>

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
                            <h3>11</h3>

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
                            <h3>11</h3>

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
                            <h3>11</h3>

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
                                Статусы заявок
                            </h3>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered yajra-datatable-status">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Имя</th>
                                    <th>Статус id</th>
                                    <th>Админ</th>
                                    <th>Добавил</th>
                                    <th>Изменил</th>
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
