<?php
$action = isset($_GET['url']) ? $_GET['url'] : '';

switch( $action ) {

    case '':
        homeIndex(); 
        ?><link rel="stylesheet" href="../../assets/home.css"><?php
        break;

    case 'signin':
        signinIndex();
        ?><link rel="stylesheet" href="../../assets/Signin.css"><?php
        break;

    case 'signup':
        signupIndex();
        ?><link rel="stylesheet" href="../../assets/Signup.css"><?php
        break;

    case 'logout':
        disconnect();
        break;
        
    case 'HomeIG':
        HomeIGIndex();
        ?><link rel="stylesheet" href="../../assets/home IG.css"><?php
        break;

    case 'buildings':
        buildingsIndex();
        ?><link rel="stylesheet" href="../../assets/BUILdings.css"><?php
        break;

    case 'market':
        marketIndex();
        ?><link rel="stylesheet" href="../../assets/MArket.css"><?php
        break;
        
    case 'army':
        armyIndex();
        ?><link rel="stylesheet" href="../../assets/ARMY.css"><?php
        break;

    case 'fight':
        fightIndex();
        ?><link rel="stylesheet" href="../../assets/fight.css"><?php
        break;

    case 'buy':
        buyIndex();
        ?><link rel="stylesheet" href="../../assets/BUY.css"><?php
        break;

    case 'sell':
        sellIndex();
        ?><link rel="stylesheet" href="../../assets/SEll.css"><?php
        break;
        
    default:
        error404Index();
        ?><link rel="stylesheet" href="../../assets/home IG.css"><?php
        break;

    case 'défaite':
        défaiteIndex();
        ?><link rel="stylesheet" href="../../assets/fight.css"><?php
        break;

    case 'victoire':
        victoireIndex();
        ?><link rel="stylesheet" href="../../assets/fight.css"><?php
        break;
        
}