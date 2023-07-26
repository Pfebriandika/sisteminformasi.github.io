<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
 include_once APPPATH.'/third_party/spaces/spaces.php';
 
class Space {

    public $space;
 
    public function __construct()
    {
        $key = "DO00THZCPV38QTWLCRE6";
        $secret = "x3Nt4Gk6OpWL9zIFOoQmrisQ2OMiHxYpKEXUbOkB71k";
        $space_name = "filedata";
        $region = "sgp1";
        
        $this->space = new SpacesConnect($key, $secret, $space_name, $region); 
    }
}