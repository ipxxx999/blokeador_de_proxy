<?php
/************************************************************************/
/* PHP Creation et Conception site web Montreal                         */
/* ===========================                                          */
/*   Por favor Respete los créditos de autor.                           */
/*   Escrito por Ing. Inoel Garcia - http://www.copyright.com           */
/*   Web Developer - PHP, programación                                  */
/*   Website Presentación de Servicios                                  */
/*   Inoel Garcia                                                       */
/************************************************************************/
?>
        <link href='https://www.miapk.gurutv.xyz/micuenta1/ico/lock.png' rel='icon' sizes='72x72' type='image/png'/>
        <link rel="shortcut icon" href="https://www.miapk.gurutv.xyz/micuenta1/ico/lock.png" type="image/x-icon" />


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//es" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">
<head>
        <meta http-equiv="Content-Type"  content="text/html; charset=iso-8859-1"/>

        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1"/> 
        <meta http-equiv="Content-Type" content="text/php; charset=ISO-8859-1"/>

        <!-- mobile settings -->
        <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0"/>
        <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1,IE=11,IE=EmulateIE11,IE=10,IE=EmulateIE10,IE=9,IE=EmulateIE9,IE=8,IE=EmulateIE8,IE=7,IE=EmulateIE7,IE=5'>


     


 


    <!----------------------------->
    <!-- aqui comienza tu Pagina -->
    <!----------------------------->

    <center> 

Aqui Pones tu Pagina


<center> 
<?php if (isset($_SESSION['uid'])){
        // El usuario ha iniciado sesión.   
        //Aquí está el contenido que se muestra cuando el usuario inicia sesión.
 
 ?> 

<?php
// blokeador de proxy scrip 
function detectProxy() {
    $sockport = false;
  
       $proxyports=array(80,8080,8443,6588,8000,3128,3127,3124,1080,553,554);
   for ($i = 0; $i <= count($proxyports); $i++) {
   if(@fsockopen($ipaddress,$proxyports[$i],$errstr,$errno,0.5)){
   $sockport=true;
   }
   }
  
   if(
       isset($_SERVER['HTTP_VIA'])
       || isset($_SERVER['HTTP_X_FORWARDED_FOR'])
       || isset($_SERVER['HTTP_FORWARDED_FOR'])
       || isset($_SERVER['HTTP_X_FORWARDED'])
       || isset($_SERVER['HTTP_FORWARDED'])
       || isset($_SERVER['HTTP_CLIENT_IP'])
       || isset($_SERVER['HTTP_FORWARDED_FOR_IP'])
       || isset($_SERVER['VIA'])
       || isset($_SERVER['X_FORWARDED_FOR'])
       || isset($_SERVER['FORWARDED_FOR'])
       || isset($_SERVER['X_FORWARDED'])
       || isset($_SERVER['FORWARDED'])
       || isset($_SERVER['CLIENT_IP'])
       || isset($_SERVER['FORWARDED_FOR_IP'])
       || isset($_SERVER['HTTP_PROXY_CONNECTION'])
       || $sockport === true
   ) {
       echo 'Estás utilizando proxy';
   }else{
       echo 'No Estás utilizando proxy';
    }
   }
  
   function get_ip()
   {
   global $REMOTE_ADDR;
   global $HTTP_X_FORWARDED_FOR, $HTTP_X_FORWARDED, $HTTP_FORWARDED_FOR, $HTTP_FORWARDED;
   global $HTTP_VIA, $HTTP_X_COMING_FROM, $HTTP_COMING_FROM;
   global $HTTP_SERVER_VARS, $HTTP_ENV_VARS;
   // Get some server/environment variables values
   if(empty($REMOTE_ADDR))
       {
       if(!empty($_SERVER)&&isset($_SERVER['REMOTE_ADDR']))
           {
           $REMOTE_ADDR = $_SERVER['REMOTE_ADDR'];
           }
       elseif(!empty($_ENV)&&isset($_ENV['REMOTE_ADDR']))
           {
           $REMOTE_ADDR = $_ENV['REMOTE_ADDR'];
           }
       elseif(!empty($HTTP_SERVER_VARS) && isset($HTTP_SERVER_VARS['REMOTE_ADDR']))
           {
           $REMOTE_ADDR = $HTTP_SERVER_VARS['REMOTE_ADDR'];
           }
       elseif(!empty($HTTP_ENV_VARS)&&isset($HTTP_ENV_VARS['REMOTE_ADDR']))
           {
           $REMOTE_ADDR = $HTTP_ENV_VARS['REMOTE_ADDR'];
           }
       elseif(@getenv('REMOTE_ADDR'))
           {
           $REMOTE_ADDR = getenv('REMOTE_ADDR');
           }
       } // end if
   if(empty($HTTP_X_FORWARDED_FOR))
       {
       if(!empty($_SERVER) && isset($_SERVER['HTTP_X_FORWARDED_FOR']))
           {
           $HTTP_X_FORWARDED_FOR = $_SERVER['HTTP_X_FORWARDED_FOR'];
           }
       elseif(!empty($_ENV) && isset($_ENV['HTTP_X_FORWARDED_FOR']))
           {
           $HTTP_X_FORWARDED_FOR = $_ENV['HTTP_X_FORWARDED_FOR'];
           }
       elseif(!empty($HTTP_SERVER_VARS) && isset($HTTP_SERVER_VARS['HTTP_X_FORWARDED_FOR']))
           {
           $HTTP_X_FORWARDED_FOR = $HTTP_SERVER_VARS['HTTP_X_FORWARDED_FOR'];
           }
       elseif(!empty($HTTP_ENV_VARS) && isset($HTTP_ENV_VARS['HTTP_X_FORWARDED_FOR']))
           {
           $HTTP_X_FORWARDED_FOR = $HTTP_ENV_VARS['HTTP_X_FORWARDED_FOR'];
           }
       elseif(@getenv('HTTP_X_FORWARDED_FOR'))
           {
           $HTTP_X_FORWARDED_FOR = getenv('HTTP_X_FORWARDED_FOR');
           }
       } // end if
   if(empty($HTTP_X_FORWARDED))
       {
       if(!empty($_SERVER) && isset($_SERVER['HTTP_X_FORWARDED']))
           {
           $HTTP_X_FORWARDED = $_SERVER['HTTP_X_FORWARDED'];
           }
       elseif(!empty($_ENV) && isset($_ENV['HTTP_X_FORWARDED']))
           {
           $HTTP_X_FORWARDED = $_ENV['HTTP_X_FORWARDED'];
           }
       elseif(!empty($HTTP_SERVER_VARS) && isset($HTTP_SERVER_VARS['HTTP_X_FORWARDED']))
           {
           $HTTP_X_FORWARDED = $HTTP_SERVER_VARS['HTTP_X_FORWARDED'];
           }
       elseif(!empty($HTTP_ENV_VARS) && isset($HTTP_ENV_VARS['HTTP_X_FORWARDED']))
           {
           $HTTP_X_FORWARDED = $HTTP_ENV_VARS['HTTP_X_FORWARDED'];
           }
       elseif(@getenv('HTTP_X_FORWARDED'))
           {
           $HTTP_X_FORWARDED = getenv('HTTP_X_FORWARDED');
           }
       } // end if
   if(empty($HTTP_FORWARDED_FOR))
       {
       if(!empty($_SERVER) && isset($_SERVER['HTTP_FORWARDED_FOR']))
           {
           $HTTP_FORWARDED_FOR = $_SERVER['HTTP_FORWARDED_FOR'];
           }
       elseif(!empty($_ENV) && isset($_ENV['HTTP_FORWARDED_FOR']))
           {
           $HTTP_FORWARDED_FOR = $_ENV['HTTP_FORWARDED_FOR'];
           }
       elseif(!empty($HTTP_SERVER_VARS) && isset($HTTP_SERVER_VARS['HTTP_FORWARDED_FOR']))
           {
           $HTTP_FORWARDED_FOR = $HTTP_SERVER_VARS['HTTP_FORWARDED_FOR'];
           }
       elseif(!empty($HTTP_ENV_VARS) && isset($HTTP_ENV_VARS['HTTP_FORWARDED_FOR']))
           {
           $HTTP_FORWARDED_FOR = $HTTP_ENV_VARS['HTTP_FORWARDED_FOR'];
           }
       elseif(@getenv('HTTP_FORWARDED_FOR'))
           {
           $HTTP_FORWARDED_FOR = getenv('HTTP_FORWARDED_FOR');
           }
       } // end if
   if(empty($HTTP_FORWARDED))
       {
       if(!empty($_SERVER) && isset($_SERVER['HTTP_FORWARDED']))
           {
           $HTTP_FORWARDED = $_SERVER['HTTP_FORWARDED'];
           }
       elseif(!empty($_ENV) && isset($_ENV['HTTP_FORWARDED']))
           {
           $HTTP_FORWARDED = $_ENV['HTTP_FORWARDED'];
           }
       elseif(!empty($HTTP_SERVER_VARS) && isset($HTTP_SERVER_VARS['HTTP_FORWARDED']))
           {
           $HTTP_FORWARDED = $HTTP_SERVER_VARS['HTTP_FORWARDED'];
           }
       elseif(!empty($HTTP_ENV_VARS) && isset($HTTP_ENV_VARS['HTTP_FORWARDED']))
           {
           $HTTP_FORWARDED = $HTTP_ENV_VARS['HTTP_FORWARDED'];
           }
       elseif(@getenv('HTTP_FORWARDED'))
           {
           $HTTP_FORWARDED = getenv('HTTP_FORWARDED');
           }
       } // end if
   if(empty($HTTP_VIA))
       {
       if(!empty($_SERVER) && isset($_SERVER['HTTP_VIA']))
           {
           $HTTP_VIA = $_SERVER['HTTP_VIA'];
           }
       elseif(!empty($_ENV) && isset($_ENV['HTTP_VIA']))
           {
           $HTTP_VIA = $_ENV['HTTP_VIA'];
           }
       elseif(!empty($HTTP_SERVER_VARS) && isset($HTTP_SERVER_VARS['HTTP_VIA']))
           {
           $HTTP_VIA = $HTTP_SERVER_VARS['HTTP_VIA'];
           }
       elseif(!empty($HTTP_ENV_VARS) && isset($HTTP_ENV_VARS['HTTP_VIA']))
           {
           $HTTP_VIA = $HTTP_ENV_VARS['HTTP_VIA'];
           }
       elseif(@getenv('HTTP_VIA'))
           {
           $HTTP_VIA = getenv('HTTP_VIA');
           }
       } // end if
   if(empty($HTTP_X_COMING_FROM))
       {
       if(!empty($_SERVER) && isset($_SERVER['HTTP_X_COMING_FROM']))
           {
           $HTTP_X_COMING_FROM = $_SERVER['HTTP_X_COMING_FROM'];
           }
       elseif(!empty($_ENV) && isset($_ENV['HTTP_X_COMING_FROM']))
           {
           $HTTP_X_COMING_FROM = $_ENV['HTTP_X_COMING_FROM'];
           }
       elseif(!empty($HTTP_SERVER_VARS) && isset($HTTP_SERVER_VARS['HTTP_X_COMING_FROM']))
           {
           $HTTP_X_COMING_FROM = $HTTP_SERVER_VARS['HTTP_X_COMING_FROM'];
           }
       elseif(!empty($HTTP_ENV_VARS) && isset($HTTP_ENV_VARS['HTTP_X_COMING_FROM']))
           {
           $HTTP_X_COMING_FROM = $HTTP_ENV_VARS['HTTP_X_COMING_FROM'];
           }
       elseif(@getenv('HTTP_X_COMING_FROM'))
           {
           $HTTP_X_COMING_FROM = getenv('HTTP_X_COMING_FROM');
           }
       } // end if
   if(empty($HTTP_COMING_FROM))
       {
       if(!empty($_SERVER) && isset($_SERVER['HTTP_COMING_FROM']))
           {
           $HTTP_COMING_FROM = $_SERVER['HTTP_COMING_FROM'];
           }
       elseif(!empty($_ENV) && isset($_ENV['HTTP_COMING_FROM']))
           {
           $HTTP_COMING_FROM = $_ENV['HTTP_COMING_FROM'];
           }
       elseif(!empty($HTTP_COMING_FROM) && isset($HTTP_SERVER_VARS['HTTP_COMING_FROM']))
           {
           $HTTP_COMING_FROM = $HTTP_SERVER_VARS['HTTP_COMING_FROM'];
           }
       elseif(!empty($HTTP_ENV_VARS) && isset($HTTP_ENV_VARS['HTTP_COMING_FROM']))
           {
           $HTTP_COMING_FROM = $HTTP_ENV_VARS['HTTP_COMING_FROM'];
           }
       elseif(@getenv('HTTP_COMING_FROM'))
           {
           $HTTP_COMING_FROM = getenv('HTTP_COMING_FROM');
           }
       } // end if
   // Gets the default ip sent by the user
   if(!empty($REMOTE_ADDR))
       {
       $direct_ip = $REMOTE_ADDR;
       }
   // Gets the proxy ip sent by the user
   $proxy_ip='';
   if(!empty($HTTP_X_FORWARDED_FOR))$proxy_ip = $HTTP_X_FORWARDED_FOR;
   elseif(!empty($HTTP_X_FORWARDED))$proxy_ip = $HTTP_X_FORWARDED;
   elseif(!empty($HTTP_FORWARDED_FOR))$proxy_ip = $HTTP_FORWARDED_FOR;
   elseif(!empty($HTTP_FORWARDED))$proxy_ip = $HTTP_FORWARDED;
   elseif(!empty($HTTP_VIA))$proxy_ip = $HTTP_VIA;
   elseif(!empty($HTTP_X_COMING_FROM))$proxy_ip = $HTTP_X_COMING_FROM;
   elseif(!empty($HTTP_COMING_FROM))$proxy_ip = $HTTP_COMING_FROM;
   // Returns the true IP if it has been found, else FALSE
   if (empty($proxy_ip))
       {
       // True IP without proxy
       return $direct_ip;
       }
   else
       {
       $is_ip = ereg('^([0-9]{1,3}\.){3,3}[0-9]{1,3}', $proxy_ip, $regs);
       if($is_ip && (count($regs) > 0))
           {
           // True IP behind a proxy
           return $regs[0];
           }
       else
           {
           // Can't define IP: there is a proxy but we don't have
           // information about the true IP
           return FALSE;
           }
       } // end if... else...
   }

    return $_SERVER['REMOTE_ADDR'];
}

?>


<?php if(@fsockopen($_SERVER['REMOTE_ADDR'], 80, $errstr, $errno, 1))
die("Acceso no permitido para usuarios proxy."); 
// blokeador de proxy scrip fin
?>


          <!---------------->
          <!-- Fin Pagina -->
          <!---------------->

<script>
    // disable right click
    document.addEventListener('contextmenu', event => event.preventDefault());
 
    document.onkeydown = function (e) {
 
        // disable F12 key
        if(e.keyCode == 123) {
            return false;
        }
 
        // disable I key
        if(e.ctrlKey && e.shiftKey && e.keyCode == 73){
            return false;
        }
 
        // disable J key
        if(e.ctrlKey && e.shiftKey && e.keyCode == 74) {
            return false;
        }
 
        // disable U key
        if(e.ctrlKey && e.keyCode == 85) {
            return false;
        }
    }
 
</script>
 
</body>
</html>