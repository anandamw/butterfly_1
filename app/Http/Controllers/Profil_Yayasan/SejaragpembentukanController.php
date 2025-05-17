<?php

namespace App\Http\Controllers\Profil_Yayasan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SejaragpembentukanController extends Controller
{
    public function sejarah()
    {
        return view('page.profil_yayasan.sejarahpembentukan');
    }
}
