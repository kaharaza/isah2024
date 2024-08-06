<?php
require_once('../../config/connectdb.php');

return [
    'authenURL' => 'https://oauth.cmu.ac.th/v1/Authorize.aspx',
    'clientID' => 'cUTW4YpQZPaWRs9rzsm45UxUWsd9JmByd3M0UU3d',
    // 'redirectURI' => 'http://localhost/isahcmu/backoffice/src/signin.php',
    'redirectURI' => 'https://isah2024.vet.cmu.ac.th/isahcmu/backoffice/src/signin.php',
    'scope' => 'cmuitaccount.basicinfo',
    'state' => 'xyz',
];






