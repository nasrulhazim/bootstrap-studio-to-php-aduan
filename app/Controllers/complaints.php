<?php 

use App\Models\Category;
use App\Models\Unit;

$categories = Category::all(['kategori','idkat'])->toArray();
$units = Unit::all(['unit','idunit'])->toArray();