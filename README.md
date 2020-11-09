#File Download is Simple

To install the library, run the following command:

``` sh
composer require devphp-pmro/download
```

To use the library, simply require the composer to autoload, invoke the class and call the method:

``` sh

<?php

require __DIR__. '/vendor-dir/autoload.php';

use Source\Helpers\Download;

$download = new Download();

$homeDirectory = source directory of the file
$file = file name in directory
last parameter = final file name with extension

$homeDirectory = $_SERVER['DOCUMENT_ROOT']."/download/files/";
$file = "finalFile.pdf";
$download->downloadFile($homeDirectory,$file,"teste");

```

### Developers
* [Leonardo] - Developer of this library!
* [devphp] - Official website: <https://devphp-pmro.github.io/>

License
----
MIT

