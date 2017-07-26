<?php

if ($this->_error->get('code') == '404') {

header("HTTP/1.0 404 Not Found");

header('Location: index.php?option=com_content&view=article&id=70');

exit;} ?>