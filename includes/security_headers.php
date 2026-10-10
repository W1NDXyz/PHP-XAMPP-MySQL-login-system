
<?php

// Prevent browsers from interpreting files as a different MIME type.
header("X-Content-Type-Options: nosniff");

// Prevent other websites from embedding your pages in frames.
header("X-Frame-Options: SAMEORIGIN");

// Control how much referrer information is shared.
header("Referrer-Policy: strict-origin-when-cross-origin");

// Disable browser features that this application does not need.
header("Permissions-Policy: camera=(), microphone=(), geolocation=()");
