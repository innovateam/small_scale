<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MIS PORTAL : GHANA NATIONAL ASSOCIATION OF SMALL SCALE MINERS</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap and Font Awesome css-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <!-- Google fonts-->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Pacifico">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <!-- Theme stylesheet-->

    <style>
 
    .main {
      background-position: center center;
      background-size: cover;
      height: auto;
      left: 0;
      min-height: 100%;
      min-width: 100%;
      position: absolute;
      top: 0;
      width: auto;
    }
    @media (max-width: 991px) {
      .main {
        padding: 20px;
      }
    }
    .main .overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: #000;
      opacity: 0.3;
      filter: alpha(opacity=30);
      z-index: 1;
    }
    .main .container {
      position: relative;
      z-index: 2;
    }
    .main #video-background {
      position: fixed;
      top: 0px;
      left: 0px;
      min-width: 100%;
      min-height: 100%;
      width: auto;
      height: auto;
      z-index: 1;
      overflow: hidden;
      background-image: url('img/video-bg.jpg');
      background-position: center center;
      background-size: cover;
    }
    .main p.social {
      text-align: right;
      margin-top: 20px;
    }
    .main p.social a {
      margin: 0 10px 0 0;
      color: #fff;
      display: inline-block;
      width: 26px;
      height: 26px;
      border-radius: 13px;
      line-height: 26px;
      font-size: 15px;
      text-align: center;
      -webkit-transition: all 0.2s ease-out;
      -moz-transition: all 0.2s ease-out;
      transition: all 0.2s ease-out;
      vertical-align: bottom;
    }
    .main p.social a i {
      vertical-align: bottom;
      line-height: 26px;
    }
    .main p.social a.facebook {
      background-color: #4460ae;
    }
    .main p.social a.gplus {
      background-color: #c21f25;
    }
    .main p.social a.twitter {
      background-color: #3cf;
    }
    .main p.social a.instagram {
      background-color: #cd4378;
    }
    .main p.social a.email {
      background-color: #4a7f45;
    }
    @media (max-width: 991px) {
      .main p.social {
        text-align: center;
      }
    }
    .main .cursive {
      margin-top: 200px;
      font-family: 'Pacifico', cursive;
      font-size: 60px;
      text-shadow: 0 1px 2px rgba(0, 0, 0, 0.6);
      text-align: center;
      margin-bottom: 40px;
    }
    @media (max-width: 1199px) {
      .main .cursive {
        margin-top: 100px;
      }
    }
    .main .sub {
      font-weight: 300;
      text-align: center;
      text-shadow: 0 1px 2px rgba(0, 0, 0, 0.6);
    }
    .main .mailing-list {
      margin-top: 120px;
      text-align: center;
    }
    .main .mailing-list .mailing-list-heading {
      font-weight: 300;
      text-align: center;
      text-shadow: 0 1px 2px rgba(0, 0, 0, 0.6);
      font-size: 30px;
    }
    @media (min-width: 768px) {
      .main .mailing-list input {
        width: 200px;
      }
    }
    @media (min-width: 992px) {
      .main .mailing-list input {
        width: 300px;
      }
    }
    @media (min-width: 1600px) {
      .main .mailing-list {
        margin-top: 200px;
      }
    }
    .main .transparent {
      background: rgba(255, 255, 255, 0.3);
      border: solid 1px #fff;
      color: #fff;
      text-shadow: 0 1px 2px rgba(0, 0, 0, 0.6);
    }
    .main .footer {
      position: relative;
      bottom: 20px;
      right: 0px;
      width: 100%;
      z-index: 4;
      margin-top: 50px;
      color: #eee;
      text-shadow: 0 1px 2px rgba(0, 0, 0, 0.6);
    }
    .main .footer a {
      color: #fff;
    }
    .main .footer a:hover,
    .main .footer a:focus {
      text-decoration: underline;
    }
    .main .footer p.credit {
      text-align: right;
    }
    @media (max-width: 991px) {
      .main .footer {
        text-align: center;
      }
      .main .footer p.credit {
        text-align: center;
      }
    }
    @media (min-width: 992px) {
      .main .footer {
        position: fixed;
        bottom: 20px;
      }
    }
    #style-switch-button {
      position: fixed;
      top: 100px;
      left: 0px;
      border-radius: 0;
      z-index: 2;
    }
    #style-switch {
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box;
      width: 300px;
      padding: 20px;
      position: fixed;
      top: 140px;
      left: 0;
      background: #fff;
      border: solid 1px #eeeeee;
      z-index: 2;
    }
    #style-switch h4 {
      color: #555555;
    }
    @media (max-width: 991px) {
      #style-switch-button {
        display: none;
      }
      #style-switch {
        display: none;
      }
    }
    /* Original Boostrap template overwrite */
    /* nav */
    .nav {
      margin-bottom: 0;
      padding-left: 0;
      list-style: none;
    }
    .nav > li > a {
      padding: 10px 15px;
    }
    .nav > li > a:hover,
    .nav > li > a:focus {
      background-color: #eeeeee;
    }
    .nav > li.disabled > a {
      color: #999999;
    }
    .nav > li.disabled > a:hover,
    .nav > li.disabled > a:focus {
      color: #999999;
    }
    .nav .open > a,
    .nav .open > a:hover,
    .nav .open > a:focus {
      background-color: #eeeeee;
      border-color: #4fbfa8;
    }
    .nav-tabs {
      border-bottom: 1px solid #dddddd;
    }
    .nav-tabs > li > a {
      line-height: 1.42857143;
      border-radius: 4px 4px 0 0;
    }
    .nav-tabs > li > a:hover {
      border-color: #eeeeee #eeeeee #dddddd;
    }
    .nav-tabs > li.active > a,
    .nav-tabs > li.active > a:hover,
    .nav-tabs > li.active > a:focus {
      color: #555555;
      background-color: #ffffff;
      border: 1px solid #dddddd;
    }
    .nav-pills > li > a {
      border-radius: 0;
    }
    .nav-pills > li.active > a,
    .nav-pills > li.active > a:hover,
    .nav-pills > li.active > a:focus {
      color: #ffffff;
      background-color: #4fbfa8;
    }
    .nav-tabs-justified > li > a {
      border-radius: 4px;
    }
    .nav-tabs-justified > .active > a,
    .nav-tabs-justified > .active > a:hover,
    .nav-tabs-justified > .active > a:focus {
      border: 1px solid #dddddd;
    }
    @media (min-width: 768px) {
      .nav-tabs-justified > li > a {
        border-bottom: 1px solid #dddddd;
        border-radius: 4px 4px 0 0;
      }
      .nav-tabs-justified > .active > a,
      .nav-tabs-justified > .active > a:hover,
      .nav-tabs-justified > .active > a:focus {
        border-bottom-color: #ffffff;
      }
    }
    /* navbar */
    .navbar {
      font-family: 'Source Sans Pro', sans-serif;
      min-height: 80px;
      margin-bottom: 30px;
      border-bottom: 1px solid transparent;
    }
    @media (min-width: 768px) {
      .navbar {
        border-radius: 0;
      }
    }
    .navbar-collapse {
      max-height: 340px;
      overflow-x: visible;
      padding-right: 15px;
      padding-left: 15px;
    }
    .navbar-collapse.in {
      overflow-y: auto;
    }
    @media (min-width: 768px) and (max-width: 991px) {
      .navbar-collapse {
        font-size: 12px;
      }
    }
    @media (min-width: 768px) {
      .navbar-collapse {
        float: left;
        width: auto;
        border-top: 0;
        box-shadow: none;
      }
      .navbar-collapse.collapse {
        display: block !important;
        height: auto !important;
        padding-bottom: 0;
        overflow: visible !important;
      }
      .navbar-collapse.in {
        overflow-y: visible;
      }
      .navbar-collapse.right {
        float: right;
      }
      .navbar-fixed-top .navbar-collapse,
      .navbar-static-top .navbar-collapse,
      .navbar-fixed-bottom .navbar-collapse {
        padding-left: 0;
        padding-right: 0;
      }
    }
    .container > .navbar-header,
    .container-fluid > .navbar-header,
    .container > .navbar-collapse,
    .container-fluid > .navbar-collapse {
      margin-right: -15px;
      margin-left: -15px;
    }
    @media (min-width: 768px) {
      .container > .navbar-header,
      .container-fluid > .navbar-header,
      .container > .navbar-collapse,
      .container-fluid > .navbar-collapse {
        margin-right: 0;
        margin-left: 0;
      }
    }
    .navbar-brand {
      float: left;
      padding: 10px 15px;
      font-size: 18px;
      line-height: 20px;
      height: 80px;
    }
    .navbar-brand:hover,
    .navbar-brand:focus {
      text-decoration: none;
    }
    @media (min-width: 768px) {
      .navbar > .container .navbar-brand,
      .navbar > .container-fluid .navbar-brand {
        margin-left: -15px;
      }
    }
    .navbar-toggle {
      padding: 9px 10px !important;
      margin-right: 15px;
      border-radius: 4px;
    }
    .navbar-nav {
      margin: 15px -15px;
    }
    .navbar-nav > li > a {
      padding-top: 10px;
      padding-bottom: 10px;
      line-height: 20px;
    }
    @media (max-width: 767px) {
      .navbar-nav .open .dropdown-menu > li > a,
      .navbar-nav .open .dropdown-menu .dropdown-header {
        padding: 5px 15px 5px 25px;
      }
      .navbar-nav .open .dropdown-menu > li > a {
        line-height: 20px;
      }
      .navbar-nav .open .dropdown-menu > li > a:hover,
      .navbar-nav .open .dropdown-menu > li > a:focus {
        background-image: none;
      }
    }
    @media (min-width: 768px) {
      .navbar-nav {
        float: left;
        margin: 0;
      }
      .navbar-nav > li {
        float: left;
      }
      .navbar-nav > li > a {
        padding-top: 30px;
        padding-bottom: 30px;
      }
      .navbar-nav.navbar-right:last-child {
        margin-right: -15px;
      }
    }
    .navbar-form {
      margin-left: -15px;
      margin-right: -15px;
      padding: 10px 15px;
      border: none;
      margin-top: 23px;
      margin-bottom: 23px;
    }
    @media (max-width: 767px) {
      .navbar-form .form-group {
        margin-bottom: 5px;
      }
    }
    .navbar-btn {
      margin-top: 23px;
      margin-bottom: 23px;
    }
    .navbar-btn.btn-sm {
      margin-top: 25px;
      margin-bottom: 25px;
    }
    .navbar-btn.btn-xs {
      margin-top: 29px;
      margin-bottom: 29px;
    }
    .navbar-text {
      margin-top: 30px;
      margin-bottom: 30px;
    }
    @media (min-width: 768px) {
      .navbar-text {
        float: left;
        margin-left: 15px;
        margin-right: 15px;
      }
      .navbar-text.navbar-right:last-child {
        margin-right: 0;
      }
    }
    .navbar-default {
      background-color: #ffffff;
      border-bottom-color: #e6e6e6;
    }
    .navbar-default .navbar-brand {
      color: #777777;
    }
    .navbar-default .navbar-brand:hover,
    .navbar-default .navbar-brand:focus {
      color: #5e5e5e;
      background-color: transparent;
    }
    .navbar-default .navbar-text {
      color: #777777;
    }
    .navbar-default .navbar-nav > li > a {
      color: #777777;
    }
    .navbar-default .navbar-nav > li > a:hover,
    .navbar-default .navbar-nav > li > a:focus {
      color: #333333;
      background-color: transparent;
    }
    .navbar-default .navbar-nav > .active > a,
    .navbar-default .navbar-nav > .active > a:hover,
    .navbar-default .navbar-nav > .active > a:focus {
      color: #555555;
      background-color: transparent;
    }
    .navbar-default .navbar-nav > .disabled > a,
    .navbar-default .navbar-nav > .disabled > a:hover,
    .navbar-default .navbar-nav > .disabled > a:focus {
      color: #cccccc;
      background-color: transparent;
    }
    .navbar-default .navbar-toggle {
      border-color: #dddddd;
    }
    .navbar-default .navbar-toggle:hover,
    .navbar-default .navbar-toggle:focus {
      background-color: #4fbfa8;
    }
    .navbar-default .navbar-toggle .icon-bar {
      background-color: #888888;
    }
    .navbar-default .navbar-collapse {
      border-color: #e6e6e6;
    }
    .navbar-default .navbar-nav > .open > a,
    .navbar-default .navbar-nav > .open > a:hover,
    .navbar-default .navbar-nav > .open > a:focus {
      background-color: transparent;
      color: #555555;
    }
    @media (max-width: 767px) {
      .navbar-default .navbar-nav .open .dropdown-menu > li > a {
        color: #777777;
      }
      .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,
      .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
        color: #333333;
        background-color: transparent;
      }
      .navbar-default .navbar-nav .open .dropdown-menu > .active > a,
      .navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover,
      .navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus {
        color: #555555;
        background-color: transparent;
      }
      .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a,
      .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a:hover,
      .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a:focus {
        color: #cccccc;
        background-color: transparent;
      }
    }
    .navbar-default .navbar-link {
      color: #777777;
    }
    .navbar-default .navbar-link:hover {
      color: #333333;
    }
    /* scaffolding */
    body {
      font-family: 'Source Sans Pro', sans-serif;
      font-size: 14px;
      line-height: 1.42857143;
      color: #555555;
      background-color: #ffffff;
    }
    a {
      color: #4fbfa8;
      text-decoration: none;
    }
    a:hover,
    a:focus {
      color: #348e7b;
      text-decoration: underline;
    }
    a:focus {
      outline: thin dotted;
      outline: 5px auto -webkit-focus-ring-color;
      outline-offset: -2px;
    }
    .img-rounded {
      border-radius: 6px;
    }
    hr {
      margin-top: 20px;
      margin-bottom: 20px;
      border: 0;
      border-top: 1px solid #eeeeee;
    }
    /* breadcrumbs */
    .breadcrumb {
      padding: 8px 0;
      margin-bottom: 20px;
      background-color: #ffffff;
      border-radius: 0;
      text-align: right;
    }
    .breadcrumb > li + li:before {
      content: ">\00a0";
      color: #cccccc;
    }
    .breadcrumb > .active {
      color: #999999;
    }
    @media (max-width: 991px) {
      .breadcrumb {
        padding: 8px 0;
        text-align: center;
      }
    }
    /* buttons  */
    .btn {
      font-weight: normal;
      font-family: 'Source Sans Pro', sans-serif;
      text-transform: uppercase;
      padding: 6px 12px;
      font-size: 14px;
      line-height: 1.42857143;
      border-radius: 3px;
    }
    .btn-primary {
      color: #4fbfa8;
      background-color: #ffffff;
      border-color: #4fbfa8;
    }
    .btn-primary:hover,
    .btn-primary:focus,
    .btn-primary:active,
    .btn-primary.active,
    .open .dropdown-toggle.btn-primary {
      color: #4fbfa8;
      background-color: #ebebeb;
      border-color: #389985;
    }
    .btn-primary:active,
    .btn-primary.active,
    .open .dropdown-toggle.btn-primary {
      background-image: none;
    }
    .btn-primary.disabled,
    .btn-primary[disabled],
    fieldset[disabled] .btn-primary,
    .btn-primary.disabled:hover,
    .btn-primary[disabled]:hover,
    fieldset[disabled] .btn-primary:hover,
    .btn-primary.disabled:focus,
    .btn-primary[disabled]:focus,
    fieldset[disabled] .btn-primary:focus,
    .btn-primary.disabled:active,
    .btn-primary[disabled]:active,
    fieldset[disabled] .btn-primary:active,
    .btn-primary.disabled.active,
    .btn-primary[disabled].active,
    fieldset[disabled] .btn-primary.active {
      background-color: #ffffff;
      border-color: #4fbfa8;
    }
    .btn-primary .badge {
      color: #ffffff;
      background-color: #4fbfa8;
    }
    .btn-primary:hover,
    .btn-primary:focus,
    .btn-primary:active,
    .btn-primary.active {
      background: #4fbfa8;
      color: #ffffff;
    }
    .btn-lg {
      padding: 10px 16px;
      font-size: 18px;
      line-height: 1.33;
      border-radius: 4px;
    }
    .btn-sm {
      padding: 5px 10px;
      font-size: 12px;
      line-height: 1.5;
      border-radius: 3px;
    }
    .btn-xs {
      padding: 1px 5px;
      font-size: 12px;
      line-height: 1.5;
      border-radius: 3px;
    }
    /* dropdowns */
    .dropdown-menu > li > a {
      padding: 5px 20px;
    }
    /* labels */
    .label {
      font-family: 'Source Sans Pro', sans-serif;
      font-weight: normal;
      text-transform: uppercase;
    }
    /* forms.less */
    label {
      font-weight: normal;
    }
    .form-control {
      -webkit-box-shadow: none;
      box-shadow: none;
    }
    .form-control::-moz-placeholder {
      color: #fafafa;
      opacity: 1;
    }
    .form-control:-ms-input-placeholder {
      color: #fafafa;
    }
    .form-control::-webkit-input-placeholder {
      color: #fafafa;
      opacity: 1 !important;
    }
    .form-group {
      margin-bottom: 20px;
    }
    /* pager*/
    .pager {
      margin: 20px 0;
      border-top: solid 1px #eeeeee;
      padding-top: 20px;
      text-transform: uppercase;
      font-family: 'Source Sans Pro', sans-serif;
    }
    .pager li {
      display: inline;
    }
    .pager li > a,
    .pager li > span {
      background-color: #ffffff;
      border: 1px solid #4fbfa8;
      border-radius: 4px;
    }
    .pager li > a:hover,
    .pager li > a:focus {
      text-decoration: none;
      color: #fff;
      background-color: #4fbfa8;
    }
    .pager .disabled > a,
    .pager .disabled > a:hover,
    .pager .disabled > a:focus,
    .pager .disabled > span {
      color: #999999;
      background-color: #ffffff;
      border-color: #ddd;
    }
    /* pagination */
    .pagination {
      margin: 20px 0;
      font-family: 'Source Sans Pro', sans-serif;
      border-radius: 0;
    }
    .pagination > li > a,
    .pagination > li > span {
      padding: 6px 12px;
      line-height: 1.42857143;
      text-decoration: none;
      color: #4fbfa8;
      background-color: #ffffff;
      border: 1px solid #dddddd;
    }
    .pagination > li > a:hover,
    .pagination > li > span:hover,
    .pagination > li > a:focus,
    .pagination > li > span:focus {
      color: #4fbfa8;
      background-color: #bfe8df;
      border-color: #dddddd;
    }
    .pagination > .active > a,
    .pagination > .active > span,
    .pagination > .active > a:hover,
    .pagination > .active > span:hover,
    .pagination > .active > a:focus,
    .pagination > .active > span:focus {
      z-index: 2;
      color: #ffffff;
      background-color: #4fbfa8;
      border-color: #4fbfa8;
    }
    .pagination > .disabled > span,
    .pagination > .disabled > span:hover,
    .pagination > .disabled > span:focus,
    .pagination > .disabled > a,
    .pagination > .disabled > a:hover,
    .pagination > .disabled > a:focus {
      color: #999999;
      background-color: #ffffff;
      border-color: #dddddd;
    }
    /* responsive utilities */
    @media (max-width: 767px) {
      .text-center-xs {
        text-align: center !important;
      }
      .text-center-xs img {
        display: block;
        margin-left: auto;
        margin-right: auto;
      }
    }
    @media (min-width: 768px) and (max-width: 991px) {
      .text-center-sm {
        text-align: center !important;
      }
      .text-center-sm img {
        display: block;
        margin-left: auto;
        margin-right: auto;
      }
    }
    /* type */
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    .h1,
    .h2,
    .h3,
    .h4,
    .h5,
    .h6 {
      font-family: 'Source Sans Pro', sans-serif;
      font-weight: 700;
      line-height: 1.2;
      color: #ffffff;
    }
    h1,
    .h1,
    h2,
    .h2,
    h3,
    .h3 {
      margin-top: 20px;
      margin-bottom: 20px;
    }
    p {
      margin: 0 0 10px;
    }
    .lead {
      margin-bottom: 20px;
      font-size: 16px;
    }
    @media (min-width: 768px) {
      .lead {
        font-size: 21px;
      }
    }
    .text-small {
      font-size: 12px;
    }
    .text-large {
      font-size: 18px;
    }
    .text-italic {
      font-style: italic;
    }
    .text-primary {
      color: #4fbfa8;
    }
    a.text-primary:hover {
      color: #3aa18c;
    }
    .bg-primary {
      color: #fff;
      background-color: #4fbfa8;
    }
    a.bg-primary:hover {
      background-color: #3aa18c;
    }
    abbr[title],
    abbr[data-original-title] {
      border-bottom: 1px dotted #999999;
    }
    blockquote {
      padding: 10px 20px;
      margin: 0 0 20px;
      font-size: 14px;
      border-left: 5px solid #4fbfa8;
    }
    blockquote footer,
    blockquote small,
    blockquote .small {
      display: block;
      font-size: 80%;
      line-height: 1.42857143;
      color: #999999;
    }
    blockquote footer:before,
    blockquote small:before,
    blockquote .small:before {
      content: '\2014 \00A0';
    }
    .blockquote-reverse,
    blockquote.pull-right {
      border-right: 5px solid #4fbfa8;
    }
    address {
      margin-bottom: 20px;
      line-height: 1.42857143;
    }
    .panel {
      margin-bottom: 20px;
      background-color: #ffffff;
      border: 1px solid transparent;
      border-radius: 0;
      -webkit-box-shadow: 0 0 0;
      box-shadow: 0 0 0;
    }
    .panel-primary {
      border-color: #4fbfa8;
    }
    .panel-primary > .panel-heading {
      color: #ffffff;
      background-color: #4fbfa8;
      border-color: #4fbfa8;
    }
    .panel-primary > .panel-heading + .panel-collapse .panel-body {
      border-top-color: #4fbfa8;
    }
    .panel-primary > .panel-footer + .panel-collapse .panel-body {
      border-bottom-color: #4fbfa8;
    }
    .panel-primary .panel-title {
      font-weight: 300;
    }
    .panel-primary .panel-title a:hover {
      color: #fff;
      text-decoration: none;
    }
    a.badge:hover,
    a.badge:focus {
      color: #ffffff;
      text-decoration: none;
      cursor: pointer;
    }
    a.list-group-item.active > .badge,
    .nav-pills > .active > a > .badge {
      color: #4fbfa8;
      background-color: #ffffff;
    }
    .nav-pills > li > a > .badge {
      margin-left: 3px;
    }


    </style>

  </head>
  <body>
    <div style="background-image: url('img/rawafrica_gold.jpg')" class="main">
      <div class="overlay"></div>
      <div class="container">
        <p class="social"><a href="#" title="" class="facebook"><i class="fa fa-facebook"></i></a><a href="#" title="" class="twitter"><i class="fa fa-twitter"></i></a><a href="#" title="" class="gplus"><i class="fa fa-google-plus"></i></a><a href="#" title="" class="instagram"><i class="fa fa-instagram"></i></a></p>
        <h1 class="sub"><strong>GHANA NATIONAL ASSOCIATION OF</strong></h1>
        <h2 class="sub"><strong>SMALL SCALE MINERS </strong> </h2>
        <div class="mailing-list">
          <h3 class="mailing-list-heading">MIS PORTAL</h3>
          <div class="row">
            <a href="{{ url('/login') }}" class="btn btn-danger"> <i class="fa fa-sign-in" aria-hidden="true"></i> Login </a>          
          </div>
        </div>
      </div>
      <div class="footer">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <p>&copy;2016 INNOVA GHANA</p>
            </div>
            <div class="col-md-6">
              <p></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- JAVASCRIPT FILES -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="js/front.js"</script>

 
  </body>
</html>