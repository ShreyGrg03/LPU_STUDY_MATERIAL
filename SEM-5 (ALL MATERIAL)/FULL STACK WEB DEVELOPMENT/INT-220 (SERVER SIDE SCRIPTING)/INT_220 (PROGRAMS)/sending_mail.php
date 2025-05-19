<?php
$check=mail("lalit.verma270196@outlook.com","testing mail","this is test mail",
"From:lalit.verma2713@gmail.com");
if($check)
{
    echo "email sent";
}
else
{
echo "email not sent";
}
?>