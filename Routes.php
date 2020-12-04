<?php
    $user = $_GET['user'];
    $screen = $_GET['screen'];
    
    // Candidates
    if ($user === 'candidates' && $screen === 'login') {
        $table = 'candidates';
        include 'pages/Login.php';

    } else if ($user === 'candidates' && $screen === 'register') {
        $table = 'candidates';
        include 'pages/Register.php';

    } else if ($user === 'candidates' && $screen === 'panel') {
        $table = 'candidates';
        include 'pages/Panel.php';

    } else if ($user === 'candidates' && $screen === 'inbox') {
        $table = 'candidates';
        include 'pages/Inbox.php';
    
    // Company
    } else if ($user === 'companies' && $screen === 'login') {
        $table = 'companies';
        include 'pages/Login.php';

    } else if ($user === 'companies' && $screen === 'register') {
        $table = 'companies';
        include 'pages/Register.php';

    } else if ($user === 'companies' && $screen === 'panel') {
        $table = 'companies';
        include 'pages/Panel.php';
        
    } else if ($user === 'companies' && $screen === 'inbox') {
        $table = 'companies';
        include 'pages/Inbox.php';
    }
?>