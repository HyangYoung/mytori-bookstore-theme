<?php

require 'filter-init.php';
require 'filter-custom.php';

echo apply_filters('the_content', '0123456789');
echo PHP_EOL;