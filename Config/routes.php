<?php
Router::connect('/auth', array('controller' => 'Auth', 'action' => 'version', 'plugin' => 'Auth'));
Router::connect('/auth/start', array('controller' => 'Auth', 'action' => 'start', 'plugin' => 'Auth'));
Router::connect('/auth/getDataLauncher', array('controller' => 'Auth', 'action' => 'getDataLauncher', 'plugin' => 'Auth'));
Router::connect('/auth/getDataIngame', array('controller' => 'Auth', 'action' => 'getDataIngame', 'plugin' => 'Auth'));
Router::connect('/auth/v', array('controller' => 'Auth', 'action' => 'version', 'plugin' => 'Auth'));
Router::connect('/auth/version', array('controller' => 'Auth', 'action' => 'version', 'plugin' => 'Auth'));