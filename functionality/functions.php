<?php

    function getPostVariable($name)
    {
        $return = '';
        if (isset( $_POST[$name])) {
            $return = $_POST[$name];
        }
        return($return);
    }
