<?php

route('GET', '/', ['DefaultController', 'index']);
route('GET', '/location/{id}', ['DefaultController', 'one']);

