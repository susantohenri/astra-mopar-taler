<?php

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
});

class MoparTheme
{
    public static $this_cliente;
    public static $mis_autos;

    function __construct()
    {
        @session_start();
        if (isset($_POST['post_action'])) switch ($_POST['post_action']) {
            case 'login':
                self::login_process();
                break;
            case 'profile':
                self::update_profile_process();
                break;
        }
        if (isset($_GET['section'])) {
            if ('logout' === $_GET['section']) self::logout_process();
        }
    }

    public static function load_page()
    {
        if (!self::is_logged_in()) self::login_page();
        else if (isset($_GET['pdf'])) self::pdf_page();
        else if (isset($_GET['vid'])) self::history_page();
        else if (isset($_GET['section'])) switch ($_GET['section']) {
            case 'profile':
                self::profile_page();
                break;
        }
        else self::main_page();
    }

    static function login_page()
    {
        require get_theme_file_path('/portal-clientes/login-page.php');
    }

    static function load_sidebar()
    {
        self::$this_cliente = Mopar::getOneCliente($_SESSION['mopar_portal_clientes_uid']);
        $this_cliente = self::$this_cliente;
        self::$mis_autos = Mopar::getVehiculosByCliente($this_cliente->id);
        $mis_autos = self::$mis_autos;
        require get_theme_file_path('/portal-clientes/sidebar.php');
    }

    static function main_page()
    {
        self::load_sidebar();
        $mis_autos = self::$mis_autos;
        require get_theme_file_path('/portal-clientes/main.php');
    }

    static function history_page()
    {
        self::load_sidebar();
        global $wpdb;
        $historial = $wpdb->get_results('SELECT * FROM ot WHERE vehiculo_id = ' . $_GET['vid'] . ' AND estado != 3 AND cliente_id = ' . $_SESSION['mopar_portal_clientes_uid'] . ' ORDER BY regdate DESC ');
        require get_theme_file_path('/portal-clientes/history-page.php');
    }

    static function profile_page()
    {
        self::load_sidebar();
        $this_cliente = self::$this_cliente;
        require get_theme_file_path('/portal-clientes/profile-page.php');
    }

    static function pdf_page()
    {

        require get_theme_file_path('/portal-clientes/pdf.php');
    }

    static function is_logged_in()
    {
        if (!isset($_SESSION['mopar_portal_clientes_logged'])) return false;
        else if (false === $_SESSION['mopar_portal_clientes_logged']) return false;
        else return true;
    }

    public static function login_process()
    {
        global $wpdb;
        $valid_user = $wpdb->get_row($wpdb->prepare("SELECT * FROM clientes WHERE email = %s AND secret = md5(%s)", $_POST['user_email'], $_POST['user_pass']));

        if ($valid_user) {
            $_SESSION['mopar_portal_clientes_logged'] = true;
            $_SESSION['mopar_portal_clientes_email'] = $valid_user->email;
            $_SESSION['mopar_portal_clientes_uid'] = $valid_user->id;
            $_SESSION['mopar_portal_clientes_nombre'] = $valid_user->nombres . " " . $valid_user->apellidoPaterno . " " . $valid_user->apellidoMaterno;
            header('Location: ' . get_bloginfo('wpurl') . '/clientes/');
            exit();
        }
    }

    public static function logout_process()
    {
        $_SESSION['mopar_portal_clientes_logged'] = false;
        $_SESSION['mopar_portal_clientes_email'] = "";
        $_SESSION['mopar_portal_clientes_uid'] = "";
        $_SESSION['mopar_portal_clientes_nombre'] = "";
        header('Location: ' . get_bloginfo('wpurl') . '/clientes/');
        exit();
    }

    public static function update_profile_process()
    {
        $array_edit = [
            'nombres' => $_POST['nombres'],
            'apellidoPaterno' => $_POST['apellidoPaterno'],
            'apellidoMaterno' => $_POST['apellidoMaterno'],
            'telefono' => $_POST['telefono']
        ];

        if ($_POST['pass'] != "**********") {
            $array_edit['secret'] = md5($_POST['pass']);
            $array_edit['nuevo'] = 0;
        }

        global $wpdb;
        $wpdb->update('clientes', $array_edit, ['id' => $_SESSION['mopar_portal_clientes_uid']]);

        header('Location: ' . get_bloginfo('wpurl') . '/clientes/?page=profile&stat=1');
        exit();
    }
}
