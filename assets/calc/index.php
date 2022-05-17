<html>
    <head>
        <link type="text/css" media="all" href="elromco/elromco.css" rel="stylesheet" />
        <link type="text/css" media="all" href="elromco/company/company.css" rel="stylesheet" />

        <style>
            .move-calc-wrapper.elromco-mobile { display:none;}
            @media(max-width:1100px) {
                .move-calc-wrapper.elromco-mobile { display:block;}
                .move-calc-wrapper.elromco-desktop { display:none;}
            }
        </style>

    </head>
    <body ng-app="movecalc" ng-controller="movecalController" ng-cloak>

        <div class="move-calc-wrapper">
            <move-Calculator></move-Calculator>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="elromco/app.import.js"></script>
        <script src="elromco/company/app.module.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyAEn8Lz2l1l93nhoetShU_1pVN44pdtoFk&language=en"></script>
    </body>
</html>