<?php namespace Tirien;

/**
 * APPLICATION ALERT HANDLING CLASS
 * More info at: https://github.com/MladenJanjetovic/php-alerts
 */

class Alert {

    private static $session_started = false;

    private static function checkSession()
    {
        if( !self::$session_started || session_id() == '' ) {
            session_start();
            self::$session_started = true;
        }
    }

    static function show()
    {
        self::checkSession();

        if ( !empty($_SESSION["alerts"]) )
        {
            ksort($_SESSION["alerts"]);

            $alert_type = '';
            $i = 0;

            foreach ($_SESSION["alerts"] as $key => $alert_group)
            {
                $i++;

                if($alert_type != $key){

                    $alert_type = $key;

                    if( $i != 1 ){
                        echo '</div>';
                    }

                    echo '<div class="alert alert-'.$alert_type.'">';

                }

                foreach ($alert_group as $alert) {
                    echo $alert . "<br>";
                }

                if( $i == count($_SESSION["alerts"]) ){
                    echo '</div>';
                }
            }

            self::clear();
        }
    }

    static function set($type, $alert)
    {
        self::checkSession();

        if (is_array($alert))
        {
            foreach ($alert as $message) {
                $_SESSION["alerts"][$type][] = $message;
            }
        }
        else{
            $_SESSION["alerts"][$type][] = $alert;
        }
    }

    static function get()
    {
        self::checkSession();
        return empty($_SESSION["alerts"]) ? array() : $_SESSION["alerts"];
    }

    static function clear()
    {
        self::checkSession();
        unset($_SESSION["alerts"]);
    }

}
