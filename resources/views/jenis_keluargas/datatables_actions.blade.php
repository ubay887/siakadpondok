{!! Form::open(['route' => ['jenisKeluargas.destroy', $ID_JENIS_KELUARGA], 'method' => 'delete']) !!}
<div class='btn-group'>
    <a href="{{ route('jenisKeluargas.show', $ID_JENIS_KELUARGA) }}" class='btn btn-default btn-xs'>
        <i class="glyphicon glyphicon-eye-open"></i>
    </a>
    <a href="{{ route('jenisKeluargas.edit', $ID_JENIS_KELUARGA) }}" class='btn btn-default btn-xs'>
        <i class="glyphicon glyphicon-edit"></i>
    </a>
    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-danger btn-xs',
        'onclick' => "return confirm('Are you sure?')"
    ]) !!}
</div>
{!! Form::close() !!}