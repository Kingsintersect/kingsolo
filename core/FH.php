<?php
namespace Core;
use Core\Seession;
use Core\H;

class FH
{
    // Input tags
    public static function inputBlock($type, $label, $name, $value='', $inputAttrs=[], $divAttrs=[]) {
        $divString = self::stringifyAttrs($divAttrs);
        $inputString = self::stringifyAttrs($inputAttrs);
        $html = '<div' . $divString . '>';
        $html  .= '<label for="'.$name.'"><strong>'.$label.'</strong></label>';
        $html .= '<input type="'.$type.'" id="'.$name.'" name="'.$name.'" value="'.$value.'"'.$inputString.'/>';
        $html .= '</div>';
        return $html;
    }

    // Input tags
    public static function leftInputGroupBlock($type, $name, $value='', $inputAttrs=[], $divAttrs=[]) {
        $divString = self::stringifyAttrs($divAttrs);
        $inputString = self::stringifyAttrs($inputAttrs);
        $html = '<div' . $divString . '>';
        $html .= '<div class="input-group-prepend"><span class="input-group-text">@</span></div>';
        $html .= '<input type="'.$type.'" id="'.$name.'" name="'.$name.'" value="'.$value.'"'.$inputString.'/>';
        $html .= '</div>';
        return $html;
    }

    // Input tags
    public static function rightInputGroupBlock($type, $name, $value='', $inputAttrs=[], $divAttrs=[]) {
        $divString = self::stringifyAttrs($divAttrs);
        $inputString = self::stringifyAttrs($inputAttrs);
        $html = '<div' . $divString . '>';
        $html .= '<input type="'.$type.'" id="'.$name.'" name="'.$name.'" value="'.$value.'"'.$inputString.'/>';
        $html .= '<div class="input-group-prepend"><span class="input-group-text">@</span></div>';
        $html .= '</div>';
        return $html;
    }

    // Input tags
    public static function fileInputBlock($type, $label, $name, $value='', $inputAttrs=[], $divAttrs=[]) {
        $divString = self::stringifyAttrs($divAttrs);
        $inputString = self::stringifyAttrs($inputAttrs);
        $html = '<div' . $divString . '>';
        $html  .= '<label for="'.$name.'">'.$label.'</label>';
        $html .= '<input type="'.$type.'" id="'.$name.'" name="'.$name.'" value="'.$value.'"'.$inputString.'/>';
        $html .= '</div>';
        return $html;
    }

    // select tags
    public static function selectBlock($label, $name, $inputAttrs=[], $divAttrs=[], $optAttrs=[]) {
        $divString = self::stringifyAttrs($divAttrs);
        $inputString = self::stringifyAttrs($inputAttrs);
        $option = self::buildOption($optAttrs);
        $html = '<div' . $divString . '>';
        $html  .= '<label for="'.$name.'">'.$label.'</label>';
        $html .= '<select id="'.$name.'" name="'.$name.'" '.$inputString.'>'.$option.'</select>';
        $html .= '</div>';
        return $html;
    }

    // Textarea tags
    public static function textareaBlock($label, $name, $value='', $inputAttrs=[], $divAttrs=[]) {
        $divString = self::stringifyAttrs($divAttrs);
        $inputString = self::stringifyAttrs($inputAttrs);
        $html = '<div' . $divString . '>';
        $html  .= '<label for="'.$name.'"><strong>'.$label.'</strong></label>';
        $html .= '<textarea id="'.$name.'" name="'.$name.'" '.$inputString.'>'.$value.'</textarea>';
        $html .= '</div>';
        return $html;
    }

    // submit tags
    public static function submitTag($buttonText, $inputAttrs=[]) {
        $inputString = self::stringifyAttrs($inputAttrs);
        $html = '<input type="submit" value="'.$buttonText.'"'.$inputString.' />';
        return $html;
    }

    // submit block tags
    public static function submitBlock($buttonText, $inputAttrs=[], $divAttrs=[]) {
        $divString = self::stringifyAttrs($divAttrs);
        $inputString = self::stringifyAttrs($inputAttrs);
        $html = '<div'.$divString.'>';
        $html .= '<input type="submit" value="'.$buttonText.'"'.$inputString.' />';
        $html .= '</div>';
        return $html;
    }

    // checkbox
    public static function checkboxBlock($label, $name, $checked=false, $inputAttrs=[], $divAttrs=[]){
        $divString = self::stringifyAttrs($divAttrs);
        $inputString = self::stringifyAttrs($inputAttrs);
        $checkString = ($checked)? ' checked="checked"' : '';
        $html = '<div'.$divString.'>';
        $html .= '<label for="'.$name.'">'.$label.' <input type="checkbox" id="'.$name.'" name="'.$name.'" value="on"'.$checkString.$inputString.'></label>';
        $html .= '</div>';
        return $html;
    }

    // custom checkbox
    public static function CUcheckboxBlock($label, $name, $checked=false, $inputAttrs=[], $divAttrs=[], $labelAttrs=[]){
        $divString = self::stringifyAttrs($divAttrs);
        $inputString = self::stringifyAttrs($inputAttrs);
        $labelString = self::stringifyAttrs($labelAttrs);
        $checkString = ($checked)? ' checked="checked"' : '';
        $html = '<div'.$divString.'>';
        $html .= '<input type="checkbox" id="'.$name.'" name="'.$name.'" value="on"'.$checkString.$inputString.'>';
        $html .= '<label '.$labelString.' for="'.$name.'">'.$label.'</label>';
        $html .= '</div>';
        return $html;
    }
    // custom checkbox
    public static function CUradioButtonBlock($label, $id, $name, $checked=false, $inputAttrs=[], $divAttrs=[], $labelAttrs=[]){
        $divString = self::stringifyAttrs($divAttrs);
        $inputString = self::stringifyAttrs($inputAttrs);
        $labelString = self::stringifyAttrs($labelAttrs);
        $checkString = ($checked)? ' checked="checked"' : '';
        $html = '<div'.$divString.'>';
        $html .= '<input type="radio" id="'.$id.'" name="'.$name.'" value="on"'.$checkString.$inputString.'>';
        $html .= '<label '.$labelString.' for="'.$id.'">'.$label.'</label>';
        $html .= '</div>';
        return $html;
    }

    // Radio Button
    public static function radioButtonBlock($label, $name, $checked=false, $inputAttrs=[], $divAttrs=[]){
        $divString = self::stringifyAttrs($divAttrs);
        $inputString = self::stringifyAttrs($inputAttrs);
        $checkString = ($checked)? ' checked="checked"' : '';
        $html = '<div'.$divString.'>';
        $html .= '<label class="form-check-label"><input type="radio" id="'.$name.'" name="'.$name.'" value="on"'.$checkString.$inputString.'>'.$label.' </label>';
        $html .= '</div>';
        return $html;
    }


    // form elements

    public static function buildOption($attrs) {
        $string = '<option value="">Choose Below</option>';
        foreach ($attrs as $key => $val) {
            $string .= '<option value="'. $key .'">'. $val .'</option>';
        }
        return $string;
    }

    public static function stringifyAttrs($attrs) {
        $string = '';
        foreach ($attrs as $key => $val) {
            $string .= ' ' . $key . '="' . $val . '"';
        }
        return $string;
    }

    public static function generateToken(){
        $token = base64_encode(openssl_random_pseudo_bytes(32));
        Session ::set('csrf_token', $token);
        return $token;
    }

    public static function checkToken($token) {
        return (Session::exists('csrf_token') && Session::get('csrf_token') == $token);
    }

    public static function csrfInput(){
        return '<input type="hidden" name="csrf_token" id="csrf_token" value="'.self::generateToken().'" />';
    }
        
    public static function sanitize($dirty){
        return htmlentities($dirty, ENT_QUOTES, 'UTF-8');
    }
        
    public static function posted_values($post) {
        $clean_ary = [];
        foreach ($post as $key => $value) {
            $clean_ary[$key] = self::sanitize($value);
        }
        return $clean_ary;
    }

    public static function displayErrors($errors){
        $hasErrors = (!empty($errors))? ' has-errors' : '';
        $html = '<div class="form-errors form-group col-md-12"><ul class="'.$hasErrors.'">';
        foreach ($errors as $field => $error ) {
            $html .= '<li class="text-danger">'.$error.'</.li>';
            $html .= '<script>jQuery("document").ready(function(){jQuery("#'.$field.'").parent().closest("div").addClass("has-error");});</script>';
        }
        $html .= '</ul></div>';
        return $html;
    }

}

// <!-- <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
//             <div class="row">
//               <div class="col-12">
//                 <div class="form-group">
//                     <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" placeholder="Enter Message"></textarea>
//                 </div>
//               </div>
//               <div class="col-sm-6">
//                 <div class="form-group">
//                   <input class="form-control" name="name" id="name" type="text" placeholder="Enter your name">
//                 </div>
//               </div>
//               <div class="col-sm-6">
//                 <div class="form-group">
//                   <input class="form-control" name="email" id="email" type="email" placeholder="Enter email address">
//                 </div>
//               </div>
//               <div class="col-12">
//                 <div class="form-group">
//                   <input class="form-control" name="subject" id="subject" type="text" placeholder="Enter Subject">
//                 </div>
//               </div>
//             </div>
//             <div class="form-group mt-lg-3">
//               <button type="submit" class="primary_btn button-contactForm">Send Message</button>
//             </div>
//           </form> -->