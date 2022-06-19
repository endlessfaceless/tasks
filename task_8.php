<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>
            Подготовительные задания к курсу
        </title>
        <meta name="description" content="Chartist.html">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
        <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
        <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
        <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
        <link rel="stylesheet" media="screen, print" href="css/statistics/chartist/chartist.css">
        <link rel="stylesheet" media="screen, print" href="css/miscellaneous/lightgallery/lightgallery.bundle.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-regular.css">
    </head>
    <body class="mod-bg-1 mod-nav-link ">
        <main id="js-page-content" role="main" class="page-content">
            <div class="col-md-6">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <?php

                    $employeeList = [
                        [
                            'imagePath' => 'img/demo/authors/sunny.png',
                            'name' => 'Sunny A.',
                            'technology' => '(UI/UX Expert)',
                            'position' => 'Lead Author',
                            'twitterLink' => 'https://twitter.com/@myplaneticket',
                            'twitterId' => '@myplaneticket',
                            'wrapboostrapLink' => 'https://wrapbootstrap.com/user/myorange',
                            'tooltip' => 'Contact Sunny',
                            'is_banned' => false
                        ],
                        [
                            'imagePath' => 'img/demo/authors/josh.png',
                            'name' => 'Jos K.',
                            'technology' => '(ASP.NET Developer)',
                            'position' => 'Partner &amp; Contributor',
                            'twitterLink' => 'https://twitter.com/@atlantez',
                            'twitterId' => '@atlantez',
                            'wrapboostrapLink' => 'https://wrapbootstrap.com/user/Walapa',
                            'tooltip' => 'Contact Jos',
                            'is_banned' => false
                        ],
                        [
                            'imagePath' => 'img/demo/authors/jovanni.png',
                            'name' => 'Jovanni Lo',
                            'technology' => '(PHP Developer)',
                            'position' => 'Partner &amp; Contributor',
                            'twitterLink' => 'https://twitter.com/@lodev09',
                            'twitterId' => '@lodev09',
                            'wrapboostrapLink' => 'https://wrapbootstrap.com/user/lodev09',
                            'tooltip' => 'Contact Jovanni',
                            'is_banned' => true
                        ],
                        [
                            'imagePath' => 'img/demo/authors/roberto.png',
                            'name' => 'Roberto R.',
                            'technology' => '(Rails Developer)',
                            'position' => 'Partner &amp; Contributor',
                            'twitterLink' => 'https://twitter.com/@sildur',
                            'twitterId' => '@sildur',
                            'wrapboostrapLink' => 'https://wrapbootstrap.com/user/sildur',
                            'tooltip' => 'Contact Roberto',
                            'is_banned' => true
                        ]
                    ];

                    ?>
                    <div class="panel-container show">
                        <div class="panel-content">
                           <div class="d-flex flex-wrap demo demo-h-spacing mt-3 mb-3">
                           <?php foreach($employeeList as $employee): ?>
                               <?php if(!$employee['is_banned']): ?>
                                   <div class="rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
                                       <img src="<?= $employee['imagePath']; ?>" alt="<?= $employee['name']; ?>" class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">
                                       <div class="ml-2 mr-3">
                                           <h5 class="m-0">
                                               <?= $employee['name']; ?> <?= $employee['technology']; ?>
                                               <small class="m-0 fw-300">
                                                   <?= $employee['position']; ?>
                                               </small>
                                           </h5>
                                           <a href="<?= $employee['twitterLink']; ?>" class="text-info fs-sm" target="_blank"><?= $employee['twitterId']; ?></a> -
                                           <a href="<?= $employee['wrapboostrapLink']; ?>" class="text-info fs-sm" target="_blank" title="<?= $employee['tooltip']; ?>"><i class="fal fa-envelope"></i></a>
                                       </div>
                                   </div>
                               <?php else: ?>
                                   <div class="banned rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
                                       <img src="<?= $employee['imagePath']; ?>" alt="<?= $employee['name']; ?>" class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">
                                       <div class="ml-2 mr-3">
                                           <h5 class="m-0">
                                               <?= $employee['name']; ?> <?= $employee['technology']; ?>
                                               <small class="m-0 fw-300">
                                                   <?= $employee['position']; ?>
                                               </small>
                                           </h5>
                                           <a href="<?= $employee['twitterLink']; ?>" class="text-info fs-sm" target="_blank"><?= $employee['twitterId']; ?></a> -
                                           <a href="<?= $employee['wrapboostrapLink']; ?>" class="text-info fs-sm" target="_blank" title="<?= $employee['tooltip']; ?>"><i class="fal fa-envelope"></i></a>
                                       </div>
                                   </div>
                               <?php endif; ?>
                               <?php endforeach; ?>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        

        <script src="js/vendors.bundle.js"></script>
        <script src="js/app.bundle.js"></script>
        <script>
            // default list filter
            initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
            // custom response message
            initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
        </script>
    </body>
</html>
