{!! Form::open(['route' => ['pelanggaranMurids.destroy', $ID_PELANGGARAN_MURID], 'method' => 'delete']) !!}
<div class='btn-group' style="width: 100px">
    {{-- <a href="{{ route('pelanggaranMurids.show', $ID_PELANGGARAN_MURID) }}" class='btn btn-default btn-xs'>
        <i class="glyphicon glyphicon-eye-open"></i>
    </a> --}}
    @can('pelanggaran-murid-edit')
    <a href="{{ route('pelanggaranMurids.edit', $ID_PELANGGARAN_MURID) }}" class='btn btn-warning btn-xs'>
        <i class="glyphicon glyphicon-edit"></i>
    </a>
    @endcan
    @can('pelanggaran-murid-delete')
    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-danger btn-xs',
        'onclick' => "return confirm('Are you sure?')"
    ]) !!}
    @endcan
</div>
{!! Form::close() !!}
