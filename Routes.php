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
    }  else if ($user === 'candidates' && $screen === 'vacancy') {
        $table = 'candidates';
        include 'pages/Vacancy.php';
    } else if ($user === 'candidates' && $screen === 'yourVacancy') {
        $table = 'candidates';
        include 'pages/YourVacancy.php';
    } else if ($user === 'candidates' && $screen === 'listVacancy') {
        $table = 'candidates';
        include 'pages/ListVacancy.php';

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
    } else if ($user === 'companies' && $screen === 'vacancy') {
        $table = 'companies';
        include 'pages/Vacancy.php';
    } else if ($user === 'companies' && $screen === 'createVacancy') {
        $table = 'companies';
        include 'pages/CreateVacancy.php';
    }
?>