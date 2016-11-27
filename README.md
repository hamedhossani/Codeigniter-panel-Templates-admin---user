# Codeigniter-Panel-Templates-admin-user
Template Admin And User Panel mounted on Codeigniter


##How it Work.

copy files into root of Codeigniter folder.

Do the following steps.

1. open file config.php in editor and change it.(application/config/config.php)

    ```
    $config['base_url'] = 'http://localhost:8085/MyFolderInsteadHostDirectory/';
   ```
2. Go to the end of the file and add the following.  
 ```
   function __autoload($class) {
   
      if (substr($class,0,3) !== 'CI_') { 
      
               if (file_exists($file = APPPATH . 'core/' . $class .'.php')) {
                 include $file;
           }        
      }    
    }
  ```
  >Autoload Custom Controllers

  #files in folders:
  ```
  application
    -->controllers
        -->Home.php
        -->Home_Admin.php
        -->Home_User.php
    -->core
        -->MY_Controller.php
        -->Admin_Controller.php
        -->User_Controller.php
    -->views
          -->Home
              -->home.php                
          -->Home_Admin
              -->home.php
          -->Home_User
              -->home.php
          -->layout
              -->admin
                  -->footer.php
                  -->front.php
                  -->header.php
                  -->left.php
              -->user
                  -->footer.php
                  -->front.php
                  -->header.php
                  -->left.php
  assets
    -->css
    -->font-awesome
    -->js
  ```
  ![Alt text](https://github.com/hamedhossani/Codeigniter-panel-Templates-admin---user/blob/master/screen-shot.PNG?raw=true "Optional Title")
