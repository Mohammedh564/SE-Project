<?php

interface PlateformUser
{
    public function register(array $userData): bool;
    public function updateProfile(array $newData): bool;
    public function login(string $userName, string $password): bool;
    public function logout(): bool;
}
