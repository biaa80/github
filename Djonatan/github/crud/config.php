<?php

/**nome do banco de dados */
define('DB_NAME', 'senac_crud');

/**usuário do banco de dados MySQL */
define('DB_USER', 'root');

/**senha do banco de dados MySQL*/
define('DB_PASSWORD', '');

/**nome do host do MySQL */
define('DB_HOST', 'localhost');

/**caminho absoluto para a pasta do sistema */
if (!defined('ABSPATH'))
    define('ABSPATH', dirname(__FILE__) . '/');

/**caminho no sever para o sistema */
if (!defined('BASEURL'))
    define('BASEURL', '/crud/');

/**caminho do arquivo da banco de dados */
if (!defined('DBAPI'))
    define('DBAPI', ABSPATH . 'inc/datebase.php');

/**remove todas as mensagens armazenadas em uma sessão */
function clears_messages() {
    if (isset($_SESSION['MESSAGES'])) {
        unset($_SESSION['messages']);
    }
}