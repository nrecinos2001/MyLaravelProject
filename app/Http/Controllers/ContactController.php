<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show_email(){
        return 'Escribenos a nuestro correo myuprogress@gmail.com o llamanos al 7182-7890.';
    }
    public function show_social_media(){
        return 'Facebook: My University Progress, Instagram: @myu_progress';
    }
}
