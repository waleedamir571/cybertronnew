<?php
require '../function/functions.php';
require '../config/dbc.php';

if (isset($_POST['type'])) {
    $_POST['page'] = $_SERVER['HTTP_REFERER'];
    date_default_timezone_set("Asia/Karachi");
    
    switch ($_POST['type']) {
        case 'contactForm':
            $result = contactForm($_POST, $connection);
            if (isset($result['success']) && $result['success'] === true) {
                // On success, go to thank-you
                header('Location: /thank-you');
                exit;
            } else {
                // On failure, go back to the referring page with error message
                $redirectTo = isset($_POST['page']) ? $_POST['page'] : '/';
                $errorMsg = isset($result['message']) ? $result['message'] : 'Failed to submit. Please try again.';
                header('Location: ' . $redirectTo . '?error=' . urlencode($errorMsg));
                exit;
            }
            break;
            
        case 'addJobPosition':
            $result = addJobPosition($_POST, $_FILES, $connection);
            if ($result['success']) {
                header('Location: ../../admin/dashboard.php?success=' . urlencode($result['message']));
            } else {
                header('Location: ../../admin/dashboard.php?error=' . urlencode($result['message']));
            }
            exit;
            break;
            
        case 'updateJobPosition':
            $result = updateJobPosition($_POST['position_id'], $_POST, $_FILES, $connection);
            if ($result['success']) {
                header('Location: ../../admin/dashboard.php?success=' . urlencode($result['message']));
            } else {
                header('Location: ../../admin/dashboard.php?error=' . urlencode($result['message']));
            }
            exit;
            break;
            
        case 'deleteJobPosition':
            $result = deleteJobPosition($_POST['position_id'], $connection);
            if ($result['success']) {
                header('Location: ../../admin/dashboard.php?success=' . urlencode($result['message']));
            } else {
                header('Location: ../../admin/dashboard.php?error=' . urlencode($result['message']));
            }
            exit;
            break;
    }
    
    if (!isset($_POST['no_redirect'])) {
        header('Location: /thank-you');
    }
}
?>