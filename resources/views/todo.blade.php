<!-- adding single to-do ✅ -->

@extends('layouts.app')
@section('content')

<div class="panel-body">
    @include('common.errors')
</div>

<!-- displays to-do & description -->
<div class="panel panel-default mt-3">
    <div class="panel-body">
        <a href="{{url('todo')}}">
           <h3 class="mb-4">
              ⬅ {{ trans('todo.back') }}
           </h3>
        </a>
        @if ((!empty($todo->name)) && !empty($todo->description))
            <table class="table table-striped todo-table">
                <thead>
                    <th>{{ trans('todo.add-name') }}</th>
                    <th>{{ trans('todo.add-desc') }}</th>
                </thead>
                <tr>
                    <!-- name -->
                    <td class="table-text">
                        <div>{{ $todo->name }}</div>
                    </td>
                    <!-- description -->
                    <td class="table-text">
                        <div>{{ $todo->description }}</div>
                    </td>
                </tr>
            </table>
        @endif
    </div>
</div>

@endsection