# Codeigniter-Panel-Templates-admin-user
*Template Admin And User Panel* mounted on *Codeigniter*


How it Work.

copy files into root of Codeigniter folder.

Do the following steps.
+1. open file config.php in editor and change it.(application/config/config.php)
  $config['base_url'] = 'http://localhost:8085/MyFolderInsteadHostDirectory/';
+2. Go to the end of the file and add the following.

----
/*
| Autoload Custom Controllers
|
*/
function __autoload($class) {
    if (substr($class,0,3) !== 'CI_') {
        if (file_exists($file = APPPATH . 'core/' . $class .'.php')) {
            include $file;
        }
    }
}
----


