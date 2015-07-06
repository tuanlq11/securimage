<?php

namespace tuanlq11\securimage;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use \Config as Config;

require_once __DIR__ . "/lib/securimage/securimage.php";

class SecurImageController extends Controller
{

    public function getCaptcha(Request $request)
    {
        $config = Config::get('securimage');

        $captcha = new \Securimage();
        $captcha->code_length = $config['length'];
        $captcha->image_width = $config['width'];
        $captcha->image_height = $config['height'];
        $captcha->perturbation = $config['perturbation'];
        $captcha->case_sensitive = $config['case_sensitive'];
        $captcha->num_lines = $config['num_lines'];
        $captcha->charset = $config['charset'];
        $captcha->show();
    }

}