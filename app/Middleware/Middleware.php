<?php

namespace YanuarEkaPutera\Belajar\PHP\MVC\Middleware;

interface Middleware
{
    function before(): void;
}