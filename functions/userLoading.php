<?php
function loadUser (int $id): array
{

    if ($id === 1)
    {
        return ['name' =>  'john', 'surname'=> 'doe', 'civility' => 'M'];
    }
    return ['name'=> 'laure', 'surname'=> 'dupont', 'civility'=> 'Mme'];
}