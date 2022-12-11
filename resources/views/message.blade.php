@extends('layouts.layout')
@section('content')
    <div class="content-header">
    </div>

    <!-- Main content -->
    <section class="content ">
        <div class="container-fluid">
            @if (session('message'))
                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    </div>
                </div>
            @endif
            <!-- Main row -->
            <div class="row justify-content-md-center">
                <section class="col-lg-8 col-sm-12 col-md-8 align-content-lg-center">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">{{ $message->address }}</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-md-12 col-lg-7 order-2 order-md-1">
                                    <div class="row">
                                        <div class="col-12 col-sm-4">
                                            <div class="info-box bg-light">
                                                <div class="info-box-content">
                                                    <span class="info-box-text text-center text-muted">Создана</span>
                                                    <span class="info-box-number text-center text-muted mb-0">{{ $message->created_at }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="info-box bg-light">
                                                <div class="info-box-content">
                                                    <span class="info-box-text text-center text-muted">Изменена</span>
                                                    <span class="info-box-number text-center text-muted mb-0">{{ $message->updated_at }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="info-box bg-light">
                                                <div class="info-box-content">
                                                    <span class="info-box-text text-center text-muted">Закрыта</span>
                                                    <span class="info-box-number text-center text-muted mb-0">{{ $message->closed }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <h4>Комментарии</h4>
                                            <div class="post clearfix">
                                                <div class="user-block">
                                                    <img class="img-circle img-bordered-sm" src="{{ asset('dist/img/user-icon.png') }}" alt="user image">
                                                    <span class="username">
                                                        Имя Фамилия
                                                    </span>
                                                    <span class="description">2022-12-11 11:01:45</span>
                                                </div>
                                                <!-- /.user-block -->
                                                <p>
                                                   some text
                                                </p>

                                                <p>
                                                    <a href="#" class="link-black text-sm"><i class="fas fa-link mr-1"></i> Demo File 1 v2</a>
                                                </p>
                                                <p>
                                                    <a href="#" class="link-black text-sm"><i class="fas fa-link mr-1"></i> Demo File 1 v2</a>
                                                </p>
                                                <p>
                                                    <a href="#" class="link-black text-sm"><i class="fas fa-link mr-1"></i> Demo File 1 v2</a>
                                                </p>
                                                <p>
                                                    <a href="#" class="link-black text-sm"><i class="fas fa-link mr-1"></i> Demo File 1 v2</a>
                                                </p>
                                            </div>
                                            <form method="POST" action="#">
                                                <div class="form-group">
                                                    <label for="customFile">Custom File</label>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="customFile">
                                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputMessage">Комментарий</label>
                                                    <textarea id="inputMessage" class="form-control" rows="4"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary float-right">Отправить</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-12 col-lg-5 order-1 order-md-2">
                                    <form id="edit-message" method="POST" action="{{ route('messages.update',$message->id) }}">
                                        @csrf
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="fio" class="text-muted">ФИО заказчика</label>
                                                <input type="text" value="{{ $message->fio }}" class="form-control form-control-border border-width-2" id="fio" name="fio" placeholder="ФИО" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="address" class="text-muted">Адрес установки</label>
                                                <input type="text" value="{{ $message->address }}" class="form-control form-control-border border-width-2" id="address" name="address" placeholder="Адресс" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="house" class="text-muted">Дом/квартира</label>
                                                <input type="text" value="{{ $message->house }}" class="form-control form-control-border border-width-2" id="house" name="house" placeholder="Дом/квартира" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="phone" class="text-muted">Контактный номер</label>
                                                <input type="text" value="{{ $message->phone }}" class="form-control form-control-border border-width-2" id="phone" name="phone" placeholder="Номер телефона" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="type_id" class="text-muted">Примечание (тип)</label>
                                                <select class="custom-select form-control-border border-width-2" id="type_id" required name="type_id">
                                                    @if(isset($data['types']))
                                                        @foreach($data['types'] as $type)
                                                            <option {{ $message->type_id === $type->id ? 'selected' : '' }} value="{{ $type->id }}">{{ $type->name }}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="responsible" class="text-muted">Ответственный</label>
                                                <select class="custom-select form-control-border border-width-2" id="responsible" required name="responsible">
                                                    @if(isset($data['users']))
                                                        @foreach($data['users'] as $user)
                                                            <option {{ $message->responsible_id === $user->id ? 'selected' : '' }} value="{{ $user->id }}">{{ $user->name }}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="status" class="text-muted">Статус</label>
                                                <select class="custom-select form-control-border border-width-2" id="status" required name="status_id">
                                                    @if(isset($data['status']))
                                                        @foreach($data['status'] as $status)
                                                            <option {{ $message->status_id === $status->type_id  ? 'selected' : '' }} value="{{ $status->type_id }}">{{ $status->name }}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </div>

                                            @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif

                                        </div>
                                        <div class="card-footer bg-white">
                                            <ul class="mailbox-attachments d-flex align-items-stretch clearfix justify-content-md-center align-content-lg-center">
                                                <li>
                                                    <span class="mailbox-attachment-icon"><i class="far fa-file-pdf"></i></span>

                                                    <div class="mailbox-attachment-info">
                                                        <a href="#" class="mailbox-attachment-name"><i class="fas fa-paperclip"></i> Отчет по установке.pdf</a>
                                                        <span class="mailbox-attachment-size clearfix mt-1">
                          <span>1,245 KB</span>
                          <a href="#" class="btn btn-default btn-sm float-right"><i class="fas fa-cloud-download-alt"></i></a>
                        </span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </form>
                                    <div class="text-center mt-5 mb-3">
                                        <button class="btn btn-primary" form="edit-message">Изменить</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </section>
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@stop
