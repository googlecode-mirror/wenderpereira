<?
	function anti_sql_injection($str) {
    if (!is_numeric($str)) {
        $str = get_magic_quotes_gpc() ? stripslashes($str) : $str;
        $str = function_exists('mysql_real_escape_string') ? mysql_real_escape_string($str) : mysql_escape_string($str);
    }
    return $str;
	}
?>