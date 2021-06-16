@extends('layouts.app')

@section('title') Tasks @endsection

@section('content')
<div class="card-body">


    <form action="{{route('task-control')}}" method="post" class="form-horizontal">
      @csrf
      <div class="row">
        <div class="form-group">
          <label for="Task" class="col-sm-3 control-label">Task</label>
          <div class="row">
            <div class="col-sm-6">
              <input type="text" name="name" class="form-control">
            </div>
            <div class="col-sm-6">
            <button type="submit" class="btn btn-success">Add task</button>
            </div>
          </div>
        </div>
      </div>
    </form>
</div>

@if(count($tasks) > 0)
  <div class="card">
    <div class="card-heading">
      Задачи
    </div>
    <div class="card-body">
      <table class="table table-striped task-table">
        <thead>
          <th>Task</th>
          <th>&nbsp</th>
        </thead>

        <tbody>
          @foreach($tasks as $task)
          <tr>
            <td class="table-text">
              <div>
                {{$task -> task}}
              </div>
            </td>
            <td>
              <form  action="{{route('task-delete', $task->id)}}" method="post">
                @csrf

                <button name="btn btn-danger">
                  Удалить
                </button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endif

@endsection
