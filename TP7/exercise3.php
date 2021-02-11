<?php
    $names = array(
        'ID1' => array(
            'First Name' => "Jim",
            'Last Name' => "Yang",
            'Phone' => "514-444-4444"
        ),
        'ID2' => array(
            'First Name' => "Abhijj",
            'Last Name' => "Sachin",
            'Phone' => "514-000-0000"
        ),
        'ID3' => array(
            'First Name' => "Alix",
            'Last Name' => "Louis",
            'Phone' => "514-222-2222"
        )

    );
    echo "<pre>";
    foreach ($names as $primarykey => $components)
        foreach ($components as $attributes => $value)
            echo "$primarykey:\t$attributes\t($value)<br>";

    echo "</pre>";
?>