<textarea class="form-control simplemde" name="{{ $row->field }}" id="markdown{{ $row->field }}">@if(isset($dataTypeContent->{$row->field})){{ old($row->field, $dataTypeContent->{$row->field}) }}@else{{ old($row->field) }}@endif</textarea>