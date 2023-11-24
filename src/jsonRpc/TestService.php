<?php

namespace linlic\jsonRpc;

class TestService implements TestServiceInterface
{
    public function add(int $a, int $b)
    {
        return $a + $b;
    }
}