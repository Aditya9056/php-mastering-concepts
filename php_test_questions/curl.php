<?php

// Create a new cURL resource
$curl = curl_init();

if (!$curl) {
    die("Couldn't initialize a cURL handle");
}

// Set the file URL to fetch through cURL
curl_setopt($curl, CURLOPT_URL, "https://makersbyte.com");

// Set a different user agent string (Googlebot)
curl_setopt($curl, CURLOPT_USERAGENT, 'Googlebot/2.1 (+http://www.google.com/bot.html)');


// Follow redirects, if any
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);

// Fail the cURL if response code = 400
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

// Wait for 10 sec to connect, 0 for indefinitely
curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 10);

// Execute cURL command for maximum of 10 sec
curl_setopt($curl, CURLOPT_TIMEOUT, 10);


// custom stuff
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'HEAD');
curl_setopt($curl, CURLOPT_NOBODY, true);

// trying to send data in header
$A = 'ZAXGHGN';
$INPUT = '<?xml version="1.0" encoding="utf-8"?><a><b>test data</b></a>'; // is this a valid XML???

$headers = array(
"Content-type: text/xml",
"Content-length: " . strlen($INPUT),
"A: " . $A,
// like this if you want to have this value in the header ... but to put the xml inside the header info...
"Connection: close"
);
curl_setopt($curl, CURLOPT_POSTFIELDS, $INPUT); // send xml data using POST
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

// Do not check for ssl certificates
// curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
// curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$html = curl_exec($curl);

if (curl_errno($curl)) {
echo 'cURL error: ' . curl_error($curl);
} else {
// curl executed successfully
print_r(curl_getinfo($curl));
}

curl_close($curl);
