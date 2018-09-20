@extends('layouts.app')

@section('content')

    <h1>タスク新規作成ページ</h1>

<div class="row">
        <div class="col-lg-offset-3 col-lg-6 col-md-offset-2 col-sm-8 col-xs-12">
            {!! Form::model($tasklist, ['route' => 'tasklists.store']) !!}

                <div class="form-group">
                    {!! Form::label('status', 'ステータス:') !!}
                    {!! Form::text('status', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('content', 'メッセージ:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>


@endsection