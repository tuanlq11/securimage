<?php

namespace tuanlq11\securimage;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

require_once __DIR__ . "/lib/securimage/securimage.php";

class SecurImageController extends Controller
{

    public function getCaptcha(Request $request)
    {
        $captcha = new \Securimage();
        $captcha->image_width = 150;
        $captcha->image_height = 50;
        $captcha->show();
    }

}