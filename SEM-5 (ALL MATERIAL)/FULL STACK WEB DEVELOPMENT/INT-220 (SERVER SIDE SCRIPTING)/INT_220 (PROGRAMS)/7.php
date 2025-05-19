<?php
function division($n)
{
    try
    {
        if($n<=0)
        {
            throw new Exeption("Enter the valid number");
        }
        $div=2/$n;
        echo "<br>" . $div;
    }
    catch (Exception $e)
    {
        echo $e->getFile();
    }
        Finally
        {
            echo "<br> Finally";
        }  
}
division(2);
division(0);
division(4);
?>