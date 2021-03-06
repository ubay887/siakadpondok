<!-- Id Kelas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ID_KELAS', 'Kelas | Tahun Ajaran | Angkatan:') !!}
    {!! Form::select('ID_KELAS', $kelas, null, ['class' => 'form-control form-select2', 'placeholder' => 'Pilih Kelas', 'required']) !!}
</div>

<!-- Id Mata Pelajaran Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ID_MATA_PELAJARAN', 'Mata Pelajaran:') !!}
    {!! Form::select('ID_MATA_PELAJARAN', $mapel, null, ['class' => 'form-control form-select2', 'placeholder' => 'Pilih Mapel', 'required']) !!}
</div>

<!-- Nip Guru Field -->
<div class="form-group col-sm-6">
    {!! Form::label('NIP_GURU', 'Nip Guru:') !!}
    {!! Form::select('NIP_GURU', $guru, null, ['class' => 'form-control form-select2', 'placeholder' => 'Pilih Guru', 'required']) !!}
</div>

<!-- Id Semester Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ID_TAHUN_AJARAN', 'Tahun Ajaran:') !!}
    {!! Form::select('ID_TAHUN_AJARAN', $tahun, null, ['class' => 'form-control form-select2', 'placeholder' => 'Pilih Tahun Ajaran', 'required']) !!}
</div>

<!-- Kkm Field -->
<div class="form-group col-sm-6">
    {!! Form::label('KKM', 'Kkm:') !!}
    {!! Form::number('KKM', isset($pengampu) ? $pengampu->KKM : 60, ['class' => 'form-control']) !!}
</div>

<!-- Kkm Field -->
<div class="form-group col-sm-6">
    {!! Form::label('STATUS_KKM', 'Status Kkm:') !!}
    {!! Form::select('STATUS_KKM', [0 => 'Non Wajib', 1 => 'Wajib'], null, ['class' => 'form-control']) !!}
</div>

<!-- Hari Field -->
<div class="form-group col-sm-6">
    {!! Form::label('HARI', 'Hari:') !!}
    {!! Form::text('HARI', null, ['class' => 'form-control']) !!}
</div>

<!-- Jam Field -->
<div class="form-group col-sm-6">
    {!! Form::label('JAM', 'Jam:') !!}
    {!! Form::text('JAM', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('pengampus.index') !!}" class="btn btn-default">Cancel</a>
</div>
