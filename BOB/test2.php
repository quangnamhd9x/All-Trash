<?php
$msg = 'codegym';
for($x = -2; $x < strlen($msg) - 2; $x++)
{
    if(strlen($msg)== 3)
    {
        for ($i = 2; $i < 7; $i++)
        {
            echo $i;
        }
    }
    else
    {
        for ($i = strlen($msg);  $i > (strlen($msg) - 2); $i--)
        {
            echo $i;
        }
    }
}