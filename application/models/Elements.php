<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Elements extends CI_Model
{
    public static $elements = [
        "search-engine" => TRUE,
        "service-counter" => TRUE,
    ];
    function __construct()
    {
        parent::__construct();
    }
    function loadElement($name)
    {
        if (isset(Elements::$elements[$name])) {
            if (Elements::$elements[$name]) {
                echo "
                    <form action='get'>
                        <input class='form-control' placeholder='What are you looking for?' type='text' name='' id=''>
                        <select name='' id='' class='form-control'>
                            <option value=''>Choose Category</option>
                        </select>
                        <input type='submit' value='Search'>
                    </form>
                    ";
            }
        } else {
            echo "
            <div class='element-error p-3 bg-light'>
                <p>
                    Error: Element Not Prosent in the Library. Please check the 'Elements'
                </p>
            </div>
            ";
        }
    }
}
