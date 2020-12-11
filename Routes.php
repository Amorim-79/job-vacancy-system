<?php
    date_default_timezone_set('America/Sao_Paulo');

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
        include 'SecurityCandidate.php';

    } else if ($user === 'candidates' && $screen === 'inbox') {
        $table = 'candidates';
        include 'pages/Inbox.php';
        include 'SecurityCandidate.php';
    }  else if ($user === 'candidates' && $screen === 'vacancy') {
        $table = 'candidates';
        include 'pages/Vacancy.php';
        include 'SecurityCandidate.php';
    } else if ($user === 'candidates' && $screen === 'yourVacancy') {
        $table = 'candidates';
        include 'pages/YourVacancy.php';
        include 'SecurityCandidate.php';
    } else if ($user === 'candidates' && $screen === 'listVacancy') {
        $table = 'candidates';
        include 'pages/ListVacancy.php';
        include 'SecurityCandidate.php';

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
        include 'SecurityCompany.php';
        
    } else if ($user === 'companies' && $screen === 'inbox') {
        $table = 'companies';
        include 'pages/Inbox.php';
        include 'SecurityCompany.php';
    } else if ($user === 'companies' && $screen === 'vacancy') {
        $table = 'companies';
        include 'pages/Vacancy.php';
        include 'SecurityCompany.php';
    } else if ($user === 'companies' && $screen === 'createVacancy') {
        $table = 'companies';
        include 'pages/CreateVacancy.php';
        include 'SecurityCompany.php';
    }
?>