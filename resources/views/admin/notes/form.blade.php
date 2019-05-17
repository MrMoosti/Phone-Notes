<div class="form-group{{ $errors->has('created_by') ? ' has-error' : ''}}">
    {!! Form::label('created_by', 'Created By: ', ['class' => 'control-label']) !!}
    {!! Form::select('created_by[]', $colleagues, isset($created_by) ? $created_by : [], ['class' => 'form-control', 'multiple' => false]) !!}
</div>
<div class="form-group{{ $errors->has('created_for') ? ' has-error' : ''}}">
    {!! Form::label('created_for', 'Created For: ', ['class' => 'control-label']) !!}
    {!! Form::select('created_for[]', $colleagues, isset($created_by) ? $created_by : [], ['class' => 'form-control', 'multiple' => false]) !!}
</div>
<div class="form-group{{ $errors->has('customer_id') ? ' has-error' : ''}}">
    {!! Form::label('customer_id', 'Customer: ', ['class' => 'control-label']) !!}
    {!! Form::select('customer_id[]', $customers, isset($customer_id) ? $customer_id : [], ['class' => 'form-control', 'multiple' => false]) !!}
</div>
<div class="form-group{{ $errors->has('company_id') ? ' has-error' : ''}}">
    {!! Form::label('company_id', 'Company: ', ['class' => 'control-label']) !!}
    {!! Form::select('company_id[]', $companies, isset($company_id) ? $company_id : [], ['class' => 'form-control', 'multiple' => false]) !!}
</div>
<div class="form-group{{ $errors->has('subject') ? ' has-error' : ''}}">
    {!! Form::label('subject', 'Subject: ', ['class' => 'control-label']) !!}
    {!! Form::text('subject', null, ['class' => 'form-control', 'required' => 'required']) !!}
    {!! $errors->first('subject', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('phonenumber') ? ' has-error' : ''}}">
    {!! Form::label('phonenumber', 'Phonenumber: ', ['class' => 'control-label']) !!}
    {!! Form::text('phonenumber', null, ['class' => 'form-control', 'required' => 'required']) !!}
    {!! $errors->first('phonenumber', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('message') ? ' has-error' : ''}}">
    {!! Form::label('message', 'Message: ', ['class' => 'control-label']) !!}
    {!! Form::text('message', null, ['class' => 'form-control', 'required' => 'required']) !!}
    {!! $errors->first('message', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('status_id') ? ' has-error' : ''}}">
    {!! Form::label('status_id', 'Status: ', ['class' => 'control-label']) !!}
    {!! Form::select('status_id[]', $statusses, isset($status_id) ? $status_id : [], ['class' => 'form-control', 'multiple' => false]) !!}
</div>

<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
