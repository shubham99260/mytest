<div class="form-group">
    <label for="">{{ $label }}</label>
    <input type="{{ $type }}" class="form-control" name="{{ $name }}" id="name" aria-describedby="helpId"
     placeholder="{{ $placeholder }}">
    <span class="text-danger">
          @error('{{ $name }}')
          {{ $message }}
          @enderror
    </span>
</div>