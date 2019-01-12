<?php

class MapasModel
{
    public static function loadXmlSAG()
    {
        if (self::isAvatarFolderWritable() AND self::validateRARFile()) {
            move_uploaded_file($_FILES['rar_file']['tmp_name'], Config::get('PATH_AVATARS') . "tmp/tmp.rar");
            
            if (self::isRar(Config::get('PATH_AVATARS') . "tmp/tmp.rar")) {
                exec("unrar e -r ". Config::get('PATH_AVATARS') . "tmp/tmp.rar ". Config::get('PATH_AVATARS') . "tmp");
                //exec("rm ". Config::get('PATH_AVATARS') . "tmp/tmp.rar");
                $archivosXML = scandir(Config::get('PATH_AVATARS') . "tmp", 1);

                $contadorArchivos = 0;
                foreach ($archivosXML as $valor) {
                    if ($valor != "." && $valor != ".."){
                        $ext = substr($valor, -3); 
                        if ($ext == "kmz"){
                            ob_start();
                            passthru('unzip -p "'.  Config::get('PATH_AVATARS') . 'tmp/'. $valor . '"');
                            $xml_data = ob_get_clean();
                            header("Content-type: text/xml");
                            echo $xml_data;
                            $contadorArchivos++;
                        }
                    }
                }

                if ($contadorArchivos > 0){

                }
                else{
                    Session::add('feedback_negative', "No hay kml en el paquete rar");
                }
            } else {
                Session::add('feedback_negative', Text::get('FEEDBACK_AVATAR_FOLDER_DOES_NOT_EXIST_OR_NOT_WRITABLE'));
            }
        }
    }

    public static function isAvatarFolderWritable()
    {
        if (is_dir(Config::get('PATH_AVATARS')) AND is_writable(Config::get('PATH_AVATARS'))) {
            return true;
        }

        Session::add('feedback_negative', Text::get('FEEDBACK_AVATAR_FOLDER_DOES_NOT_EXIST_OR_NOT_WRITABLE'));
        return false;
    }

    public static function validateRARFile()
    {
        if (!isset($_FILES['rar_file'])) {
            Session::add('feedback_negative', Text::get('FEEDBACK_AVATAR_IMAGE_UPLOAD_FAILED'));
            return false;
        }

        // if input file too big (>5MB)
        if ($_FILES['rar_file']['size'] > 5000000) {
            Session::add('feedback_negative', Text::get('FEEDBACK_AVATAR_UPLOAD_TOO_BIG'));
            return false;
        }

        return true;
    }
    
    public static function isRar($file) {
        // get the first 7 bytes
        $bytes = file_get_contents($file, FALSE, NULL, 0, 7);
        $ext = strtolower(substr($file, - 4));
    
        // RAR magic number: Rar!\x1A\x07\x00
        // http://en.wikipedia.org/wiki/RAR
        if ($ext == '.rar' and bin2hex($bytes) == '526172211a0700') {
            return true;
        }
    
        return false;
    }
}