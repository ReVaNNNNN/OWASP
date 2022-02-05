<?php

$invoiceId = $_GET['id'] ?? null;

// var_dump($invoiceId); exit;

if (31 == $invoiceId) {
    echo "<h1> FAKTURA NR: $invoiceId </h1>";
    echo "<h3> Kontrahent: Andrzej Ptaszek $invoiceId </h3>";
    echo "<h4> * Jabłka: 1kg </h4>";
    echo "<h4> * Maliny: 2kg </h4>";
    die();
}

if (34 == $invoiceId) {
    echo "<h1> FAKTURA NR: $invoiceId </h1>";
    echo "<h3> Kontrahent: Jan Wężyk $invoiceId </h3>";
    echo "<h4> * Gwoździe: 1kg </h4>";
    echo "<h4> * Gips: 2kg </h4>";
    die();
}

header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found", true, 404);
echo "<h1>404: Strona nie istnieje </h1>";
die();
