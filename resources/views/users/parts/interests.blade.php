<div class="card">
    <form action="{{ route('users.updateInterests', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
    <div class="card-header">
        <h5 class="fw-bold text-primary mb-0">Interesses do Usuário</h5>
    </div>
    <div class="card-body">
        @foreach (['Anime','Series','Doramas'] as $item )
        <div class="form-check">
            <input
            class="form-check-input @error("interests") is-invalid @enderror"
            type="checkbox"
            value="{{ $item }}"
            name="interests[][name]"
            @checked(in_array($item, $user->interests->pluck('name')->toArray()))>
            <label class="form-check-label">
                {{ $item }}
            </label>
            @if($loop->last)
                @error('interests')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            @endif
        </div>
            @endforeach

    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Editar</button>
    </div>
    </form>
</div>


