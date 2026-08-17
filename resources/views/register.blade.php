<link rel="stylesheet" href="https://jsdelivr.net">

<link rel="stylesheet" href="https://jsdelivr.net">

<div class="container mt-5" style="max-width: 500px;">
    <form action="{{ route('register.store') }}" method="POST">
        @csrf
        
       
        <div class="mb-3">
            <label class="form-label fw-semibold" for="name">Name:</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
            @error('name')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

       
        <div class="mb-3">
            <label class="form-label fw-semibold" for="email">Email address:</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
            @error('email')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label fw-semibold" for="password">Password:</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
            @error('password')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

       
        <div class="mb-3">
            <label class="form-label fw-semibold" for="password_confirmation">Confirm Password:</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
        </div>

        
        <div class="mb-3">
            <label class="form-label fw-semibold">Select Role</label>
            <div class="input-group">
                <span class="input-group-text">
                    <i class="bi bi-person-badge-fill"></i>
                </span>
                <select name="role" class="form-select @error('role') is-invalid @enderror">
                    <option value="">Select your role</option>
                    
                    <!-- Admin: value matches database -->
                    <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>
                        Admin
                    </option>

                    <!-- Student: value matches database (student) and old() matches (student) -->
                    <option value="student" {{ old('role') == 'student' ? 'selected' : '' }}>
                        Student 
                    </option>

                    <!-- Teacher: value matches database (teacher) and old() matches (teacher) -->
                    <option value="teacher" {{ old('role') == 'teacher' ? 'selected' : '' }}>
                        Teacher
                    </option>
                </select>
            </div>
            @error('role')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

    
        <div class="form-check mb-3">
            <input type="checkbox" class="form-check-input" id="remember" name="remember" value="1">
            <label class="form-check-label" for="remember">Remember me</label>
        </div>

        <div class="d-grid">
            <button type="submit" class="btn text-white btn-lg" style="background-color: red;">Register</button>
        </div>
    </form>
</div>

<script src="https://jsdelivr.net"></script>
