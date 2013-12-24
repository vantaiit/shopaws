<?php
class Vantai
{
    public function mybugview($ob)
    {
        echo '<pre>';
        print_r(is_object($ob)?get_object_vars($ob):$ob);
        echo('</pre>');
    }
}
?>
