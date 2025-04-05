<?php

use App\Models\AboutUS;
use Illuminate\Support\Facades\Http;


function about_us()
{
    $aboutSection = AboutUS::firstOrCreate(
        [],  // Conditions to find the record
        ['phone' => '01015891836']   // Attributes to create if not found
    );
    return $aboutSection;
}
