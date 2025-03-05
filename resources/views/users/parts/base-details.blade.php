<div class="card">
    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
    <div class="card-header">
        Dados Básicos
    </div>
    <div class="card-body">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="name" name="name" class="form-control @error('name') is-invalid @enderror" id="exampleInputEmail1" value="{{ old('name') ?? $user->name }}" aria-describedby="emailHelp">
              @error('name')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
              @enderror
          </div>
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email</label>
              <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" value="{{ old('email') ?? $user->email }}" aria-describedby="emailHelp">
              @error('email')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
              @enderror
            </div>

            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Password</label>
              <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
              @error('password')
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


