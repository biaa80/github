<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
 
/** O nome do banco de dados*/ 
define('DB_NAME', 'senac_crud'); 

/** Usuário do banco de dados MySQL */ 
define('DB_USER', 'root'); 

/** Senha do banco de dados MySQL */ 
define('DB_PASSWORD', ''); 

/** nome do host do MySQL */ 
define('DB_HOST', 'localhost'); 

/** caminho absoluto para a pasta do sistema **/ 
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/'); 

/** caminho no server para o sistema **/ 
if ( !defined('BASEURL') )
    define('BASEURL', '/Beatriz_2_PHP/Djonatan/github/crud/'); 

/** caminho do arquivo de banco de dados **/ 
if ( !defined('DBAPI') )
    define('DBAPI', ABSPATH . 'inc/database.php'); 

/** Remove todas as mensagens armazenadas em uma sessão **/ 
function clear_messages() {
    if (isset($_SESSION['messages'])) {
        unset($_SESSION['messages']);
        unset($_SESSION['type']);
    } 
}

/** caminhos dos templates de header e footer **/ 
define('HEADER_TEMPLATE', ABSPATH . 'inc/header.php'); 
define('FOOTER_TEMPLATE', ABSPATH . 'inc/footer.php'); 