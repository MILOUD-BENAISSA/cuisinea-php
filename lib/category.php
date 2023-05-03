<?php

function getCategories(PDO $pdo, int $limit = null)
{
    $sql = 'SELECT * FROM categories';

    $query = $pdo->prepare($sql);

    $query->execute();
    return $query->fetchAll();
}
