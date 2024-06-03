<?php
$users = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['signup'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $otp = rand(100000, 999999); 
    
    $users[$email] = ['password' => $password, 'otp' => $otp];
    
    sendOTP($email, $otp);
    
    echo json_encode(['message' => 'OTP sent to your email for signup verification']);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['Login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    if (isset($users[$email]) && $users[$email]['password'] === $password) {
        echo json_encode(['message' => 'Login successful']);
    } else {
        http_response_code(401);
        echo json_encode(['error' => 'Invalid credentials']);
    }
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['forgot_password'])) {
    $email = $_POST['email'];
    
    if (isset($users[$email])) {
        $otp = rand(100000, 999999); 
        
        $users[$email]['otp'] = $otp;
        
        sendOTP($email, $otp);
        
        echo json_encode(['message' => 'OTP sent to your email for password reset']);
    } else {
        http_response_code(404);
        echo json_encode(['error' => 'User not found']);
    }
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['reset_password'])) {
    $email = $_POST['email'];
    $otp = $_POST['otp'];
    $newPassword = $_POST['new_password'];
    
    if (isset($users[$email]) && $users[$email]['otp'] === $otp) {
        $users[$email]['password'] = $newPassword;
        
        echo json_encode(['message' => 'Password reset successful']);
    } else {
        http_response_code(401);
        echo json_encode(['error' => 'Invalid OTP']);
    }
    exit;
}

function sendOTP($email, $otp) {
    echo "Sending OTP $otp to $email";
}
?>
