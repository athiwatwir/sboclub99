<?php
namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;

/**
 * UploadVideo component
 */
class UploadVideoComponent extends Component
{

    /**
     * Default configuration.
     *
     * @var array
     */
    public $IMG_PATH = 'files/vdo/upload/';
    public $UPLOAD_PATH = WWW_ROOT;

    protected $_defaultConfig = [];

    public function upload($file = null, $prefix = '', $subfix = '') {

        if (is_null($file)) {
            return null;
        }
        if ($file['name'] === '') {
            return null;
        }


        $uploadfile = $file['tmp_name'];
        $ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension
        if ($prefix != '') {
            $prefix = $prefix . "_";
        }
        $setNewFileName = $prefix . time() . "_" . rand(000000, 999999) . $subfix;

        //only process if the extension is valid
      
            //do the actual uploading of the file. First arg is the tmp name, second arg is 
            //where we are putting it
            $imageFileName = $setNewFileName . '.' . $ext;
            $imgpath = $this->IMG_PATH.$imageFileName;
            $fullpath = $this->UPLOAD_PATH.$imgpath;

            move_uploaded_file($uploadfile, $fullpath);
            
            
            return ['path'=>$imgpath,'fullpath'=>$fullpath ];
     

        return null;
    }
}
