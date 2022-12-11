@extends('layouts.layout')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Статистика</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- Main content -->
    <section class="content mt-3">
        <div class="container-fluid">
            <!-- Main row -->
            <div class="row">
                @foreach($users as $user)
                    <section class="col-lg-12 connectedSortable">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fas fa-comments"></i>
                                    {{ $user->name }}
                                </h3>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-3 col-6">
                                        <!-- small box -->
                                        <div class="small-box bg-gradient-primary">
                                            <div class="inner">
                                                <h3>{{ $user->opened_count }}</h3>

                                                <p>Открыто</p>
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
                                                <h3>{{ $user->done_count }}</h3>

                                                <p>Выполнено</p>
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
                                                <h3>{{ $user->closed_count }}</h3>

                                                <p>Не выполнена и закрыта</p>
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
                                                <h3>{{ $user->edit_count }}</h3>

                                                <p>Правка</p>
                                            </div>
                                            <div class="icon">
                                                <i class="fas fa-comment-dots"></i>
                                            </div>
                                            <a href="#" class="small-box-footer">Просмотр <i class="fas fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                    <!-- ./col -->
                                </div>
                            </div><!-- /.card-body -->
                        </div>
                    </section>
                @endforeach

            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@stop
