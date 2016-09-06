<?php 

use App\Models\Category;
use App\Controllers\ComplaintController;

$categories = Category::all(['kategori','idkat'])->toArray();