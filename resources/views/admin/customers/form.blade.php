<div class="form-group{{ $errors->has('first_name') ? ' has-error' : ''}}">
    {!! Form::label('first_name', 'First Name: ', ['class' => 'control-label']) !!}
    {!! Form::text('first_name', null, ['class' => 'form-control', 'required' => 'required']) !!}
    {!! $errors->first('first_name', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group{{ $errors->has('last_name') ? ' has-error' : ''}}">
    {!! Form::label('last_name', 'Last Name: ', ['class' => 'control-label']) !!}
    {!! Form::text('last_name', null, ['class' => 'form-control', 'required' => 'required']) !!}
    {!! $errors->first('last_name', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group{{ $errors->has('company_id') ? ' has-error' : ''}}">
    {!! Form::label('company_id', 'Company: ', ['class' => 'control-label']) !!}
    {!! Form::select('company_id', $companies, isset($company_id) ? $company_id : [], ['class' => 'form-control', 'multiple' => false]) !!}
</div>

<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
