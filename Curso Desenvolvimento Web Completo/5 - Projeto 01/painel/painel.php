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
            <button class="menu" title="Menu">
                <svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" fill="#fff">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path fill="#fff" d="M19.2991685,16.6083218 C19.6856193,16.6083218 19.9988997,16.9198596 19.9988997,17.3041609 C19.9988997,17.6884622 19.6856193,18 19.2991685,18 L0.703295369,18 C0.316844509,18 0.00356418865,17.6884622 0.00356418865,17.3041609 C0.00356418865,16.9198596 0.316844509,16.6083218 0.703295369,16.6083218 L19.2991685,16.6083218 Z M15.9807574,6.49203255 C16.2524994,6.22029048 16.6943126,6.22152264 16.9675746,6.49478466 L16.9675746,6.49478466 L19.7949155,9.32212559 C20.0681775,9.59538762 20.0694097,10.0372007 19.7976676,10.3089428 L19.7976676,10.3089428 L16.9860531,13.1205574 C16.714311,13.3922994 16.2724979,13.3910673 15.9992359,13.1178052 C15.7259738,12.8445432 15.7247417,12.4027301 15.9964837,12.130988 L15.9964837,12.130988 L18.3160657,9.81140603 L15.9835095,7.47884976 C15.7102475,7.20558773 15.7090153,6.76377462 15.9807574,6.49203255 Z M14.8173201,9.13100315 C15.2037709,9.13100315 15.5170512,9.44254093 15.5170512,9.82684226 C15.5170512,10.2111436 15.2037709,10.5226814 14.8173201,10.5226814 L0.699731181,10.5226814 C0.313280321,10.5226814 0,10.2111436 0,9.82684226 C0,9.44254093 0.313280321,9.13100315 0.699731181,9.13100315 L14.8173201,9.13100315 Z M19.2991685,2 C19.6856193,2 19.9988997,2.31153778 19.9988997,2.6958391 C19.9988997,3.08014043 19.6856193,3.3916782 19.2991685,3.3916782 L0.703295369,3.3916782 C0.316844509,3.3916782 0.00356418865,3.08014043 0.00356418865,2.6958391 C0.00356418865,2.31153778 0.316844509,2 0.703295369,2 L19.2991685,2 Z"></path>
                    </g>
                </svg>
            </button>
            <div class="logout">
                <a class="flex align-center justify-center no-decoration text-white" href="<?php echo INCLUDE_PATH_PAINEL; ?>?logout" title="Sair">
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
                <div class="profile">
                    <?php if ($_SESSION['image'] == '') : ?>
                        <div class="avatar flex align-center justify-center">
                            <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path d="M8 7C9.65685 7 11 5.65685 11 4C11 2.34315 9.65685 1 8 1C6.34315 1 5 2.34315 5 4C5 5.65685 6.34315 7 8 7Z" fill="#fff"></path>
                                    <path d="M14 12C14 10.3431 12.6569 9 11 9H5C3.34315 9 2 10.3431 2 12V15H14V12Z" fill="#fff"></path>
                                </g>
                            </svg>
                        </div>
                    <?php else : ?>
                        <div class="image flex align-center justify-center">
                            <img src="<?php echo INCLUDE_PATH_PAINEL; ?>uploads/<?php echo $_SESSION['image']; ?>" alt="<?php echo $_SESSION['name']; ?>" title="<?php echo $_SESSION['name']; ?>">
                        </div>
                    <?php endif; ?>
                    <div class="name text-white text-center fw-700">
                        <?php echo $_SESSION['name']; ?>
                    </div>
                    <div class="position text-white text-center fw-300">
                        <?php echo positionPick($_SESSION['position']); ?>
                    </div>
                </div>
                <nav>
                    <div class="title text-white fw-700">
                        Cadastro
                    </div>
                    <ul class="flex column">
                        <li>
                            <a class="no-decoration text-white flex align-center" href="" title="Cadastrar Depoimento">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path d="M11 12H3"></path>
                                        <path d="M16 6H3"></path>
                                        <path d="M16 18H3"></path>
                                        <path d="M18 9v6" stroke="#0f0"></path>
                                        <path d="M21 12h-6" stroke="#0f0"></path>
                                    </g>
                                </svg>
                                <p>
                                    Cadastrar Depoimento
                                </p>
                            </a>
                        </li>
                        <li>
                            <a class="no-decoration text-white flex align-center" href="" title="Cadastrar Serviço">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path d="M11 12H3"></path>
                                        <path d="M16 6H3"></path>
                                        <path d="M16 18H3"></path>
                                        <path d="M18 9v6" stroke="#0f0"></path>
                                        <path d="M21 12h-6" stroke="#0f0"></path>
                                    </g>
                                </svg>
                                <p>
                                    Cadastrar Serviço
                                </p>
                            </a>
                        </li>
                        <li>
                            <a class="no-decoration text-white flex align-center" href="" title="Cadastrar Imagem">
                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path d="M14.2647 15.9377L12.5473 14.2346C11.758 13.4519 11.3633 13.0605 10.9089 12.9137C10.5092 12.7845 10.079 12.7845 9.67922 12.9137C9.22485 13.0605 8.83017 13.4519 8.04082 14.2346L4.04193 18.2622M14.2647 15.9377L14.606 15.5991C15.412 14.7999 15.8149 14.4003 16.2773 14.2545C16.6839 14.1262 17.1208 14.1312 17.5244 14.2688C17.9832 14.4253 18.3769 14.834 19.1642 15.6515L20 16.5001M14.2647 15.9377L18.22 19.9628M18.22 19.9628C17.8703 20 17.4213 20 16.8 20H7.2C6.07989 20 5.51984 20 5.09202 19.782C4.7157 19.5903 4.40973 19.2843 4.21799 18.908C4.12583 18.7271 4.07264 18.5226 4.04193 18.2622M18.22 19.9628C18.5007 19.9329 18.7175 19.8791 18.908 19.782C19.2843 19.5903 19.5903 19.2843 19.782 18.908C20 18.4802 20 17.9201 20 16.8V13M11 4H7.2C6.07989 4 5.51984 4 5.09202 4.21799C4.7157 4.40973 4.40973 4.71569 4.21799 5.09202C4 5.51984 4 6.0799 4 7.2V16.8C4 17.4466 4 17.9066 4.04193 18.2622M18 9V6M18 6V3M18 6H21M18 6H15" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </g>
                                </svg>
                                <p>
                                    Cadastar Imagem
                                </p>
                            </a>
                        </li>
                    </ul>
                    <div class="title text-white fw-700">
                        Gestão
                    </div>
                    <ul class="flex column">
                        <li>
                            <a class="no-decoration text-white flex align-center" href="" title="Listar Depoimentos">
                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path d="M14 16L16.1 18.5L20 13.5" stroke="#0f0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M10 14H3" stroke="#fff" stroke-width="1.5" stroke-linecap="round"></path>
                                        <path d="M10 18H3" stroke="#fff" stroke-width="1.5" stroke-linecap="round"></path>
                                        <path d="M3 6L13.5 6M20 6L17.75 6" stroke="#fff" stroke-width="1.5" stroke-linecap="round"></path>
                                        <path d="M20 10L9.5 10M3 10H5.25" stroke="#fff" stroke-width="1.5" stroke-linecap="round"></path>
                                    </g>
                                </svg>
                                <p>
                                    Listar Depoimentos
                                </p>
                            </a>
                        </li>
                        <li>
                            <a class="no-decoration text-white flex align-center" href="" title="Listar Serviços">
                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path d="M14 16L16.1 18.5L20 13.5" stroke="#0f0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M10 14H3" stroke="#fff" stroke-width="1.5" stroke-linecap="round"></path>
                                        <path d="M10 18H3" stroke="#fff" stroke-width="1.5" stroke-linecap="round"></path>
                                        <path d="M3 6L13.5 6M20 6L17.75 6" stroke="#fff" stroke-width="1.5" stroke-linecap="round"></path>
                                        <path d="M20 10L9.5 10M3 10H5.25" stroke="#fff" stroke-width="1.5" stroke-linecap="round"></path>
                                    </g>
                                </svg>
                                <p>
                                    Listar Serviços
                                </p>
                            </a>
                        </li>
                        <li>
                            <a class="no-decoration text-white flex align-center" href="" title="Listar Imagem">
                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path d="M14.2647 15.9377L12.5473 14.2346C11.758 13.4519 11.3633 13.0605 10.9089 12.9137C10.5092 12.7845 10.079 12.7845 9.67922 12.9137C9.22485 13.0605 8.83017 13.4519 8.04082 14.2346L4.04193 18.2622M14.2647 15.9377L14.606 15.5991C15.412 14.7999 15.8149 14.4003 16.2773 14.2545C16.6839 14.1262 17.1208 14.1312 17.5244 14.2688C17.9832 14.4253 18.3769 14.834 19.1642 15.6515L20 16.5001M14.2647 15.9377L18.22 19.9628M11 4H7.2C6.07989 4 5.51984 4 5.09202 4.21799C4.7157 4.40973 4.40973 4.71569 4.21799 5.09202C4 5.51984 4 6.0799 4 7.2V16.8C4 17.4466 4 17.9066 4.04193 18.2622M4.04193 18.2622C4.07264 18.5226 4.12583 18.7271 4.21799 18.908C4.40973 19.2843 4.7157 19.5903 5.09202 19.782C5.51984 20 6.07989 20 7.2 20H16.8C17.9201 20 18.4802 20 18.908 19.782C19.2843 19.5903 19.5903 19.2843 19.782 18.908C20 18.4802 20 17.9201 20 16.8V13M15 5.28571L16.8 7L21 3" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </g>
                                </svg>
                                <p>
                                    Listar Imagem
                                </p>
                            </a>
                        </li>
                    </ul>
                    <div class="title text-white fw-700">
                        Administração
                    </div>
                    <ul class="flex column">
                        <li>
                            <a class="no-decoration text-white flex align-center" href="" title="Editar Usuário">
                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path d="M8.5 21H4C4 17.134 7.13401 14 11 14C11.1681 14 11.3348 14.0059 11.5 14.0176M15 7C15 9.20914 13.2091 11 11 11C8.79086 11 7 9.20914 7 7C7 4.79086 8.79086 3 11 3C13.2091 3 15 4.79086 15 7ZM12.5898 21L14.6148 20.595C14.7914 20.5597 14.8797 20.542 14.962 20.5097C15.0351 20.4811 15.1045 20.4439 15.1689 20.399C15.2414 20.3484 15.3051 20.2848 15.4324 20.1574L19.5898 16C20.1421 15.4477 20.1421 14.5523 19.5898 14C19.0376 13.4477 18.1421 13.4477 17.5898 14L13.4324 18.1574C13.3051 18.2848 13.2414 18.3484 13.1908 18.421C13.1459 18.4853 13.1088 18.5548 13.0801 18.6279C13.0478 18.7102 13.0302 18.7985 12.9948 18.975L12.5898 21Z" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </g>
                                </svg>
                                <p>
                                    Editar Usuário
                                </p>
                            </a>
                        </li>
                        <li>
                            <a class="no-decoration text-white flex align-center" href="" title="Adicionar Usuário">
                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path d="M20 18L17 18M17 18L14 18M17 18V15M17 18V21M11 21H4C4 17.134 7.13401 14 11 14C11.695 14 12.3663 14.1013 13 14.2899M15 7C15 9.20914 13.2091 11 11 11C8.79086 11 7 9.20914 7 7C7 4.79086 8.79086 3 11 3C13.2091 3 15 4.79086 15 7Z" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </g>
                                </svg>
                                <p>
                                    Adicionar Usuário
                                </p>
                            </a>
                        </li>
                    </ul>
                    <div class="title text-white fw-700">
                        Geral
                    </div>
                    <ul class="flex column">
                        <li>
                            <a class="no-decoration text-white flex align-center" href="" title="Editar">
                                <svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" fill="none">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path fill="#fff" fill-rule="evenodd" d="M15.747 2.97a.864.864 0 011.177 1.265l-7.904 7.37-1.516.194.653-1.785 7.59-7.044zm2.639-1.366a2.864 2.864 0 00-4-.1L6.62 8.71a1 1 0 00-.26.39l-1.3 3.556a1 1 0 001.067 1.335l3.467-.445a1 1 0 00.555-.26l8.139-7.59a2.864 2.864 0 00.098-4.093zM3.1 3.007c0-.001 0-.003.002-.005A.013.013 0 013.106 3H8a1 1 0 100-2H3.108a2.009 2.009 0 00-2 2.19C1.256 4.814 1.5 7.848 1.5 10c0 2.153-.245 5.187-.391 6.81A2.009 2.009 0 003.108 19H17c1.103 0 2-.892 2-1.999V12a1 1 0 10-2 0v5H3.106l-.003-.002a.012.012 0 01-.002-.005v-.004c.146-1.62.399-4.735.399-6.989 0-2.254-.253-5.37-.4-6.99v-.003zM17 17c-.001 0 0 0 0 0zm0 0z"></path>
                                    </g>
                                </svg>
                                <p>
                                    Editar
                                </p>
                            </a>
                        </li>
                    </ul>
                    <!-- <div class="title text-white fw-700">
                        Editar Seções
                    </div>
                    <ul class="flex column">
                        <li>
                            <a class="no-decoration text-white flex align-center" href="" title="Header">
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
                            <a class="no-decoration text-white flex align-center" href="" title="Banner">
                                <svg viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" fill="#ffffff" stroke="#ffffff">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
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
                            <a class="no-decoration text-white flex align-center" href="" title="Sobre">
                                <svg viewBox="0 0 512 512" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
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
                            <a class="no-decoration text-white flex align-center" href="" title="Especialidades">
                                <svg viewBox="0 0 512 512" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
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
                            <a class="no-decoration text-white flex align-center" href="" title="Depoimentos">
                                <svg viewBox="0 0 512 512" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
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
                            <a class="no-decoration text-white flex align-center" href="" title="Serviços">
                                <svg viewBox="0 0 512 512" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
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
                            <a class="no-decoration text-white flex align-center" href="" title="Footer">
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
                    </ul> -->
                </nav>
            </aside>

            <main>
                <div class="box">
                    <div class="title flex align-center">
                        <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8 0L0 6V8H1V15H4V10H7V15H15V8H16V6L14 4.5V1H11V2.25L8 0ZM9 10H12V13H9V10Z" fill="#000000"></path>
                            </g>
                        </svg>
                        <h2>
                            Painel de Controle
                        </h2>
                    </div>
                    
                </div>
            </main>
        </div>
    </section>

    <script src="<?php echo INCLUDE_PATH; ?>assets/libs/jquery-3.7.1.min.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>assets/js/main.js"></script>
</body>

</html>