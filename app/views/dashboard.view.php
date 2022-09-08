<?php
\Templates\Page::displayHeader("Dashboard");
\Templates\Page::displayNavigation();



print_r($_SERVER['HTTP_HOST']);
print_r($_SERVER["REQUEST_URI"]);






\Templates\Page::displayFooter();