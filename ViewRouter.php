<?php

class ViewRouter {

    private static $config = [
        "base_path" => "/",
        "views_path" => "views",
        "default_view" => "default",
        "not_found_view" => "404",
    ];

    private static $currentPath = null;

    /**
     * Set the configuration of the router
     * @param $key
     * @param $value
     * @return bool
     */
    public static function config($key, $value){

        // Check if a config option is available
        if(self::$config[$key]){

            self::$config[$key] = $value;
            return true;

        }

        return false;

    }

    /**
     * Function to use the router
     * The views will be rendered in the HTML at the positon where this function is called.
     */
    public static function run(){

        // Parse current URL
        $path = $_SERVER["REQUEST_URI"];
        $path = substr($path, strlen(self::$config["base_path"]));

        // Set current path property
        self::$currentPath = $path;

        // Get view. If path is empty, get default view
        if($path == ""){

            $view = self::view(self::$config["default_view"]);

        }else{
            $view = self::view($path);
        }

        // Check if view exist. If not, return not found view
        if($view == false) {
            self::view(self::$config["not_found_view"]);
        }

    }

    /**
     * Returns a view as string
     * @param string $view Path or name to the view
     * @return bool|mixed The view if found or false if the view does not exist
     */
    public static function view($view){

        // Check if view exist
        if(file_exists(self::$config["views_path"]."/".$view.".php")){

            include self::$config["views_path"]."/".$view.".php";
            return true;

        }else{

            return false;

        }

    }

    /**
     * Returns the absolute path
     * @return string The absolute root path of the webpage
     */
    public static function getFullBasePath(){

        return $_SERVER["REQUEST_SCHEME"]."://".$_SERVER["HTTP_HOST"].self::$config["base_path"];

    }

    /**
     * Returns the current path on the page
     * @return string The current active path
     */
    public static function getCurrentPath(){
        return self::$currentPath;
    }

}