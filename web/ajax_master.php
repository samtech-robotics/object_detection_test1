<?php

$state=$_POST["state"];

$xx=exec("sudo python /home/narendras/code/doc/robot/my_robot_level_4/object_detection/master.py $state");

?>
