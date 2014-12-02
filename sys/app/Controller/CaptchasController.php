<?php
App::uses('AppController', 'Controller');
App::uses('Folder', 'Utility');
App::uses('File', 'Utility');
/**
 * Updates Controller
 *
 */
class CaptchasController extends AppController {

/**
 * Scaffold
 *
 * @var mixed
 */
 	public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session', 'RequestHandler');



    public function generateCode($characters) {
        /* list all possible characters, similar looking characters and vowels have been removed */
        $possible = strtoupper('23456789bcdfghjkmnpqrstvwxyz');
        $code = '';
        $i = 0;
        while ($i < $characters) {
            $code .= substr($possible, mt_rand(0, strlen($possible)-1), 1);
            $i++;
        }
        return $code;
    }

    public function index($width='120',$height='21',$characters='4') {
        $font = APP.'../../fonts/futuralt-heavy.ttf';
        $this->layout = 'ajax';

        $code = $this->generateCode($characters);


        /* font size will be 70% of the image height */
        $font_size = $height * 0.60;

        //$image = @imagecreate($width, $height) or die('Cannot initialize new GD image stream');
        $image = @imagecreatetruecolor($width, $height) or die('Cannot initialize new GD image stream');

        /* set the colours */
        //$background_color = imagecolorallocate($image, 255, 255, 255);
        $black = imagecolorallocate($image, 0, 0, 0);
        $background_color = imagecolorallocate($image, 255, 255, 255);
        $text_color = imagecolorallocate($image, 157, 222, 56);
        $noise_color = imagecolorallocate($image, 100, 120, 180);

        imagecolortransparent($image, $black);

        /* generate random dots in background */
        for( $i=0; $i<($width*$height)/3; $i++ ) {
            //imagefilledellipse($image, mt_rand(0,$width), mt_rand(0,$height), 1, 1, $noise_color);
        }

        /* generate random lines in background */
        for( $i=0; $i<($width*$height)/150; $i++ ) {
            //imageline($image, mt_rand(0,$width), mt_rand(0,$height), mt_rand(0,$width), mt_rand(0,$height), $noise_color);
        }

        /* create textbox and add text */
        $textbox = imagettfbbox($font_size, 0, $font, $code) or die('Error in imagettfbbox function');
        $x = ($width - $textbox[4])/2;
        //$y = ($height - $textbox[5])/2;
        $y = ($height - $textbox[5])/2;
        $y -= 1;

        $this->Session->write('security_code', $code);
        $this->response->type("image/png");
        $this->set('image', $image);
        $this->set('font_size', $font_size);
        $this->set('x', $x);
        $this->set('y', $y);
        $this->set('text_color', $text_color);
        $this->set('font', $font);
        $this->set('code', $code);
    }
}
