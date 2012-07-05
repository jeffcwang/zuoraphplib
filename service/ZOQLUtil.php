<?php
/*
 * Created on Jun 20, 2012
 *
 */
class ZOQLUtil {

    public static function createORFilter($terms, $columnName) {

        //add quotes
        foreach ($terms as &$term) {
            $term = "'$term'";
        }
        
        $str = implode(" OR $columnName= " , $terms);
        return " $columnName = $str ";
    }
    
}
?>
