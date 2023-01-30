<div class="container mt-3">
        <select multiple wire:model="select">
            <option value="name">Name</option>
            <option value="email">Email</option>
            <option value="email_verified_at">Email Verified</option>
            <option value="password">Password</option>
            <option value="remember_token">Remember Token</option>
            <option value="created_at">Created</option>
            <option value="updated_at">Updated</option>
        </select>
        @json($select)
</div>
