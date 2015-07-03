<?php
namespace tuanlq11\securimage;

require_once __DIR__ . "/lib/securimage/securimage.php";

use Securimage;

class SecurImageAutoLoad {

    public function getCaptchaHtml() {
        $html = sprintf(<<<EOF
        <img src='%s' onclick='this.src="%s?" + Math.random(); return false;' style='cursor:pointer'>
EOF
, route('tuanlq11.securimage'), route('tuanlq11.securimage'));

        return $html;
    }

    public function validator($value) {
        $captcha = new Securimage();
        return $captcha->check($value);
    }

}