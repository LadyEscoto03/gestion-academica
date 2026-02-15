<?php

test('registration screen can be rendered', function () {
    $response = $this->get(route('register'));

    $response->assertOk();
});

test('new users can register', function () {
    $response = $this->post(route('register.store'), [
        'identification'=>'504650475',
        'name' => 'John Doe',
        'surname'=>'Abadeer',
        'secondSurname'=>'Abadeer',
        'email' => 'test@example.com',
        'phoneNumber'=>'69473829',
        'password' => 'password',
        'password_confirmation' => 'password',
    ]);

    $response->assertSessionHasNoErrors()
        ->assertRedirect(route('dashboard', absolute: false));

    $this->assertAuthenticated();
});