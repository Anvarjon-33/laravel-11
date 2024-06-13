<?php

function precho(mixed $data): void
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}
