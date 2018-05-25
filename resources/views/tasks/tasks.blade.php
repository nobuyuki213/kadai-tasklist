<table class="table">
    @foreach($tasks as $task)
        <?php $user = $task->name; ?>
        <tr class="row">
            <td class="col">
                <div class="row">
                    <div class="col-md-10">
                        {!! nl2br(e($task->content)) !!}
                    </div>
                    <div class="col-md-2 text-right">
                        {!! Html::decode(link_to_route('tasks.edit', '<i class="far fa-edit"></i>', ['id' => $task->id], ['class' => 'd-inline-block mr-3'])) !!}
                            
                        {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete', 'class' => 'form-group mb-0 d-inline-block']) !!}
                              {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'style' => 'border: none; background: rgba(255, 255, 255, 0);']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </td>
        </tr>
    @endforeach
</table>
{!! $tasks->render("pagination::bootstrap-4") !!}