<?php

// this file is called when user/attacker tries to look into "/application/views/" and simply gives back a 403 error.
// this is the most simply method to prevent people from looking into a folder when mod_rewrite is not activated.
exit(header('HTTP/1.0 403 Forbidden'));
