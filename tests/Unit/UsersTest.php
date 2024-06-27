<?php

use App\Models\User;
use function Pest\Laravel\{actingAs};
use function Pest\Livewire\livewire;
 
it('authenticated user can access the dashboard', function () {
    $user = User::factory()->create();
 
    actingAs($user)->get('/')
        ->assertStatus(200);
});
