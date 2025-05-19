<?php
// Custom error handler function
function customErrorHandler($errno, $errstr, $errfile, $errline) {
    echo "<b>Error:</b> [$errno] $errstr - Error on line $errline in file $errfile<br>";
    // Optionally log the error to a file
    error_log("Error: [$errno] $errstr in $errfile on line $errline", 3, "errors.log");
}

// Set the custom error handler
set_error_handler("customErrorHandler");

// Trigger an error (this will invoke the custom error handler)
echo($undefinedVariable); // Notice: undefined variable

// Exception handling with try-catch
try {
    // Custom exception handling example
    if (!file_exists("php.ini")) {
        throw new Exception("File not found.");
    }
} catch (Exception $e) {
    echo "Caught exception: " . $e->getMessage() . "<br>";
    // Log exception details
    error_log($e->getMessage(), 3, "errors.log");
}

// Trigger a fatal error (for demonstration only)
function testDivision($divisor) {
    if ($divisor == 0) {
        // Manually trigger an error (warning)
        trigger_error("Cannot divide by zero", E_USER_WARNING);
    } else {
        return 10 / $divisor;
    }
}

echo testDivision(0);

// Restore the default PHP error handler
restore_error_handler();

// Error reporting level (displays all errors)
error_repo