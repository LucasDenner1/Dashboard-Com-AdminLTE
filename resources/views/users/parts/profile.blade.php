<div class="card">
    <form action="{{ route('users.updateProfile', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
    <div class="card-header">
        Perfil
    </div>
    <div class="card-body">
        <div class="mb-3">
            <label lass="form-label">Tipo de Pessoa</label>
            <select name="type" class="form-control @error('type') is-invalid @enderror">
                @foreach(['PF','PJ'] as $type)
                <option value="{{ $type }}" 
                @selected(old('type')=== $type || $user?->profile?->type === $type)
                >{{ $type }}</option>
                @endforeach
            </select>
          </div>
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Endereço</label>
              <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" id="exampleInputEmail1" value="{{ old('address') ?? $user?->profile?->address}}" aria-describedby="emailHelp">
              @error('address')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
              @enderror
            </div>
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Editar</button>
    </div>
    </form>
</div>


