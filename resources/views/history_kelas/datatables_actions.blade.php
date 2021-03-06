{!! Form::open(['route' => ['historyKelas.destroy', $ID_HISTORY_KELAS], 'method' => 'delete']) !!}
<div class='btn-group' style="width: 100px">
    <a href="{{ route('historyKelas.show', $ID_HISTORY_KELAS) }}" class='btn btn-default btn-xs'>
        <i class="glyphicon glyphicon-eye-open"></i>
    </a>
    @can('history-kelas-edit')
    <a href="{{ route('historyKelas.edit', $ID_HISTORY_KELAS) }}" class='btn btn-warning btn-xs'>
        <i class="glyphicon glyphicon-edit"></i>
    </a>
    @endcan
    {{-- {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-danger btn-xs',
        'onclick' => "return confirm('Are you sure?')"
    ]) !!} --}}
</div>
{!! Form::close() !!}
