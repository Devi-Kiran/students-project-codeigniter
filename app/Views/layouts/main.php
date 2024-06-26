<?php session();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= esc($title) ?? 'CodeIgniter 4 Layout' ?>
    </title>
    <style>
        .remove-border {
            border: 0px !important;
        }
        .side-nav-btn {
            border: 0px !important;
            outline: 0px !important;
            background: #2878b5 !important;
            color: white !important;
            border-radius: 0px !important;
            margin-bottom: 0px !important;
        }
        .side-nav-btn:hover {
            border: 0px !important;
            outline: 0px !important;
        }
        .side-nav-link {
            border: 0px;
            background: #00669A !important;
            border-radius: 0px !important;
            color: white !important;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
    <header style="padding-left: 210px;" class="mb-4 fixed-top">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container mx-0">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="/ametecs-students-project/public/dashboard">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <?php if(session()->get('role')): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="/ametecs-students-project/public/dashboard/add-student">Add Student</a>
                            </li>
                        <?php endif; ?>
                        <li class="nav-item">
                            <a class="nav-link" href="/ametecs-students-project/public/dashboard/logout">Logout</a>
                        </li>
                    </ul>
                </div>
                <span class="d-none d-lg-inline-block"><?= session()->get('email');?> <?= session()->get('role') ? '(Admin)' : '';?></span>
            </div>
        </nav>
    </header>
    <section style="margin-top: 70px;">
        <?= $this->include("widgets/side_navbar")?>
        <div style="padding-left: 210px;">
            <div class="px-4">
                <?= $this->renderSection('content')?>
            </div>
        <div>
    </section>
</body>
</html>