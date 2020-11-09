<?php


namespace Source\Helpers;

use Apfelbox\FileDownload\FileDownload;

class Download
{

    /**
     * @param $homeDirectory // diretorio de origem do arquivo
     * @param $file // nome do arquivo no diretorio
     * @param $finalFile // nome do arquivo final com extensão
     */

    function downloadFile($homeDirectory,$file,$finalFile){

        $extension = mb_strstr($homeDirectory.$file,".");

        var_dump(["extensao" => $extension,"Arquivo Final" => $finalFile.$extension]);

        $download = FileDownload::createFromFilePath($homeDirectory.$file);
        $download->sendDownload($finalFile.$extension);

    }
}