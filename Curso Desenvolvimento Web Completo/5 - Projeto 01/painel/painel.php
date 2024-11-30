<?php
if (isset($_GET['logout'])) {
    Painel::logout();
}
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Painel de Controle</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>assets/css/main.min.css">
</head>

<body>
    <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <section class="painel">
        <header class="flex justify-between align-center">
            <a class="text-white no-decoration" href="<?php echo INCLUDE_PATH_PAINEL; ?>">LOGOMARCA</a>
            <div class="logout">
                <a class="flex align-center justify-center no-decoration text-white" href="<?php echo INCLUDE_PATH_PAINEL; ?>?logout">
                    <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path d="M21 12L13 12" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M18 15L20.913 12.087V12.087C20.961 12.039 20.961 11.961 20.913 11.913V11.913L18 9" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M16 5V4.5V4.5C16 3.67157 15.3284 3 14.5 3H5C3.89543 3 3 3.89543 3 5V19C3 20.1046 3.89543 21 5 21H14.5C15.3284 21 16 20.3284 16 19.5V19.5V19" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </g>
                    </svg>
                    Sair
                </a>
            </div>
        </header>

        <div class="wrapper flex">
            <aside>
                <div class="menu">
                    <svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" fill="#fff">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path fill="#fff" d="M19.2991685,16.6083218 C19.6856193,16.6083218 19.9988997,16.9198596 19.9988997,17.3041609 C19.9988997,17.6884622 19.6856193,18 19.2991685,18 L0.703295369,18 C0.316844509,18 0.00356418865,17.6884622 0.00356418865,17.3041609 C0.00356418865,16.9198596 0.316844509,16.6083218 0.703295369,16.6083218 L19.2991685,16.6083218 Z M15.9807574,6.49203255 C16.2524994,6.22029048 16.6943126,6.22152264 16.9675746,6.49478466 L16.9675746,6.49478466 L19.7949155,9.32212559 C20.0681775,9.59538762 20.0694097,10.0372007 19.7976676,10.3089428 L19.7976676,10.3089428 L16.9860531,13.1205574 C16.714311,13.3922994 16.2724979,13.3910673 15.9992359,13.1178052 C15.7259738,12.8445432 15.7247417,12.4027301 15.9964837,12.130988 L15.9964837,12.130988 L18.3160657,9.81140603 L15.9835095,7.47884976 C15.7102475,7.20558773 15.7090153,6.76377462 15.9807574,6.49203255 Z M14.8173201,9.13100315 C15.2037709,9.13100315 15.5170512,9.44254093 15.5170512,9.82684226 C15.5170512,10.2111436 15.2037709,10.5226814 14.8173201,10.5226814 L0.699731181,10.5226814 C0.313280321,10.5226814 0,10.2111436 0,9.82684226 C0,9.44254093 0.313280321,9.13100315 0.699731181,9.13100315 L14.8173201,9.13100315 Z M19.2991685,2 C19.6856193,2 19.9988997,2.31153778 19.9988997,2.6958391 C19.9988997,3.08014043 19.6856193,3.3916782 19.2991685,3.3916782 L0.703295369,3.3916782 C0.316844509,3.3916782 0.00356418865,3.08014043 0.00356418865,2.6958391 C0.00356418865,2.31153778 0.316844509,2 0.703295369,2 L19.2991685,2 Z"></path>
                        </g>
                    </svg>
                </div>
                <nav>
                    <ul class="flex column">
                        <li>
                            <a class="no-decoration text-white flex align-center" href="">
                                <svg fill="#fff" viewBox="0 0 1920 1920" xmlns="http://www.w3.org/2000/svg" stroke="#fff">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M213.333 0C95.5126 0 0 95.5126 0 213.333V1706.67C0 1824.49 95.5126 1920 213.333 1920H1706.67C1824.49 1920 1920 1824.49 1920 1706.67V213.333C1920 95.5126 1824.49 0 1706.67 0H213.333ZM266.667 746.667C237.211 746.667 213.333 722.788 213.333 693.333V373.333C213.333 343.878 237.211 320 266.667 320H1653.33C1682.79 320 1706.67 343.878 1706.67 373.333V693.333C1706.67 722.788 1682.79 746.667 1653.33 746.667H266.667Z"></path>
                                    </g>
                                </svg>
                                <p>Header</p>
                            </a>
                        </li>
                        <li>
                            <a class="no-decoration text-white flex align-center" href="">
                                <svg viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" fill="#ffffff" stroke="#ffffff">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <title>image-picture</title>
                                        <desc>Created with Sketch Beta.</desc>
                                        <defs> </defs>
                                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                                            <g id="Icon-Set-Filled" sketch:type="MSLayerGroup" transform="translate(-362.000000, -101.000000)" fill="#ffffff">
                                                <path d="M392,129 C392,130.104 391.104,131 390,131 L384.832,131 L377.464,123.535 L386,114.999 L392,120.999 L392,129 L392,129 Z M366,131 C364.896,131 364,130.104 364,129 L364,128.061 L371.945,120.945 L382.001,131 L366,131 L366,131 Z M370,105 C372.209,105 374,106.791 374,109 C374,111.209 372.209,113 370,113 C367.791,113 366,111.209 366,109 C366,106.791 367.791,105 370,105 L370,105 Z M390,101 L366,101 C363.791,101 362,102.791 362,105 L362,129 C362,131.209 363.791,133 366,133 L390,133 C392.209,133 394,131.209 394,129 L394,105 C394,102.791 392.209,101 390,101 L390,101 Z M370,111 C371.104,111 372,110.104 372,109 C372,107.896 371.104,107 370,107 C368.896,107 368,107.896 368,109 C368,110.104 368.896,111 370,111 L370,111 Z" id="image-picture" sketch:type="MSShapeGroup"> </path>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                                <p>Banner</p>
                            </a>
                        </li>
                        <li>
                            <a class="no-decoration text-white flex align-center" href="">
                                <svg viewBox="0 0 512 512" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <title>about-filled</title>
                                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g id="drop" fill="#fff" transform="translate(42.666667, 42.666667)">
                                                <path d="M213.333333,3.55271368e-14 C331.154987,3.55271368e-14 426.666667,95.51168 426.666667,213.333333 C426.666667,331.153707 331.154987,426.666667 213.333333,426.666667 C95.51296,426.666667 3.55271368e-14,331.153707 3.55271368e-14,213.333333 C3.55271368e-14,95.51168 95.51296,3.55271368e-14 213.333333,3.55271368e-14 Z M234.713387,192 L192.04672,192 L192.04672,320 L234.713387,320 L234.713387,192 Z M213.55008,101.333333 C197.99616,101.333333 186.713387,112.5536 186.713387,127.704107 C186.713387,143.46752 197.698773,154.666667 213.55008,154.666667 C228.785067,154.666667 240.04672,143.46752 240.04672,128 C240.04672,112.5536 228.785067,101.333333 213.55008,101.333333 Z" id="Shape"> </path>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                                <p>Sobre</p>
                            </a>
                        </li>
                        <li>
                            <a class="no-decoration text-white flex align-center" href="">
                                <svg viewBox="0 0 512 512" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <title>about-filled</title>
                                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g id="drop" fill="#fff" transform="translate(42.666667, 42.666667)">
                                                <path d="M213.333333,3.55271368e-14 C331.154987,3.55271368e-14 426.666667,95.51168 426.666667,213.333333 C426.666667,331.153707 331.154987,426.666667 213.333333,426.666667 C95.51296,426.666667 3.55271368e-14,331.153707 3.55271368e-14,213.333333 C3.55271368e-14,95.51168 95.51296,3.55271368e-14 213.333333,3.55271368e-14 Z M234.713387,192 L192.04672,192 L192.04672,320 L234.713387,320 L234.713387,192 Z M213.55008,101.333333 C197.99616,101.333333 186.713387,112.5536 186.713387,127.704107 C186.713387,143.46752 197.698773,154.666667 213.55008,154.666667 C228.785067,154.666667 240.04672,143.46752 240.04672,128 C240.04672,112.5536 228.785067,101.333333 213.55008,101.333333 Z" id="Shape"> </path>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                                <p>Especialidades</p>
                            </a>
                        </li>
                        <li>
                            <a class="no-decoration text-white flex align-center" href="">
                                <svg viewBox="0 0 512 512" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <title>about-filled</title>
                                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g id="drop" fill="#fff" transform="translate(42.666667, 42.666667)">
                                                <path d="M213.333333,3.55271368e-14 C331.154987,3.55271368e-14 426.666667,95.51168 426.666667,213.333333 C426.666667,331.153707 331.154987,426.666667 213.333333,426.666667 C95.51296,426.666667 3.55271368e-14,331.153707 3.55271368e-14,213.333333 C3.55271368e-14,95.51168 95.51296,3.55271368e-14 213.333333,3.55271368e-14 Z M234.713387,192 L192.04672,192 L192.04672,320 L234.713387,320 L234.713387,192 Z M213.55008,101.333333 C197.99616,101.333333 186.713387,112.5536 186.713387,127.704107 C186.713387,143.46752 197.698773,154.666667 213.55008,154.666667 C228.785067,154.666667 240.04672,143.46752 240.04672,128 C240.04672,112.5536 228.785067,101.333333 213.55008,101.333333 Z" id="Shape"> </path>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                                <p>Depoimentos</p>
                            </a>
                        </li>
                        <li>
                            <a class="no-decoration text-white flex align-center" href="">
                                <svg viewBox="0 0 512 512" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <title>about-filled</title>
                                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g id="drop" fill="#fff" transform="translate(42.666667, 42.666667)">
                                                <path d="M213.333333,3.55271368e-14 C331.154987,3.55271368e-14 426.666667,95.51168 426.666667,213.333333 C426.666667,331.153707 331.154987,426.666667 213.333333,426.666667 C95.51296,426.666667 3.55271368e-14,331.153707 3.55271368e-14,213.333333 C3.55271368e-14,95.51168 95.51296,3.55271368e-14 213.333333,3.55271368e-14 Z M234.713387,192 L192.04672,192 L192.04672,320 L234.713387,320 L234.713387,192 Z M213.55008,101.333333 C197.99616,101.333333 186.713387,112.5536 186.713387,127.704107 C186.713387,143.46752 197.698773,154.666667 213.55008,154.666667 C228.785067,154.666667 240.04672,143.46752 240.04672,128 C240.04672,112.5536 228.785067,101.333333 213.55008,101.333333 Z" id="Shape"> </path>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                                <p>Serviços</p>
                            </a>
                        </li>
                        <li>
                            <a class="no-decoration text-white flex align-center" href="">
                                <svg fill="#fff" viewBox="0 0 1920 1920" xmlns="http://www.w3.org/2000/svg" stroke="#fff">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M213.333 0C95.5126 0 0 95.5126 0 213.333V1706.67C0 1824.49 95.5126 1920 213.333 1920H1706.67C1824.49 1920 1920 1824.49 1920 1706.67V213.333C1920 95.5126 1824.49 0 1706.67 0H213.333ZM266.667 746.667C237.211 746.667 213.333 722.788 213.333 693.333V373.333C213.333 343.878 237.211 320 266.667 320H1653.33C1682.79 320 1706.67 343.878 1706.67 373.333V693.333C1706.67 722.788 1682.79 746.667 1653.33 746.667H266.667Z"></path>
                                    </g>
                                </svg>
                                <p>Footer</p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </aside>

            <main>
                TESTE
            </main>
        </div>
    </section>

    <script src="<?php echo INCLUDE_PATH; ?>assets/libs/jquery-3.7.1.min.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>assets/js/main.js"></script>
</body>

</html>