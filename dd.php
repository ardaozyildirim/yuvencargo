<?php

function dd($data) {
    echo '<pre>';
    print_r($data); // Alternatif olarak var_dump($data) kullanılabilir.
    echo '</pre>';
    die(); // Çalışmayı sonlandırır
}

// Örnek kullanım
$data = ['name' => 'John', 'age' => 30];
dd($data);
