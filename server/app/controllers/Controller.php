<?php

namespace controllers;

class Controller
{
    protected function response($data): void
    {
        header('Content-Type: application/json');
        echo json_encode($data);
    }
}