<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Projeto 01</title>
    <meta name="description" content="Descrição do meu site!">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="palavras-chave, do, meu, site">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/main.min.css">
</head>

<body>
    <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <header>
        <div class="container flex justify-between align-center">
            <div class="logo">
                <a class="fw-300 text-white no-decoration uppercase" href="">
                    Logomarca
                </a>
            </div>
            <nav class="desktop">
                <ul class="flex">
                    <li>
                        <a class="fw-300 text-white no-decoration uppercase" href="">
                            Home
                        </a>
                    </li>
                    <li>
                        <a class="fw-300 text-white no-decoration uppercase" href="">
                            Sobre
                        </a>
                    </li>
                    <li>
                        <a class="fw-300 text-white no-decoration uppercase" href="">
                            Serviços
                        </a>
                    </li>
                    <li>
                        <a class="fw-300 text-white no-decoration uppercase" href="">
                            Contato
                        </a>
                    </li>
                </ul>
            </nav>
            <nav class="mobile">
                <ul>
                    <li>
                        <a href="">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Sobre
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Serviços
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Contato
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="banner-principal">
        <div class="overlay"></div>
        <div class="container flex justify-center align-center">
            <form class="flex column">
                <h2 class="title text-white text-center fw-300">Qual seu melhor e-mail?</h2>
                <input type="email" name="email" id="" required />
                <input type="submit" name="acao" value="Cadastrar!" />
            </form>
        </div>
    </section>

    <section class="descricao-autor">
        <div class="container">
            <div class="wrapper">
                <h2>Alan A. Sato</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc nec iaculis elit. Maecenas dolor nunc, tempor nec mi nec, sollicitudin lobortis felis. Sed sed lectus lacus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum a risus iaculis, fringilla tortor et, cursus nunc. Maecenas consectetur nisi lectus, et congue lectus blandit a. Nam ut quam ultricies, luctus dolor quis, semper justo. Nunc purus nunc, maximus non elit id, maximus pellentesque est. Praesent et nulla et risus porta porttitor. In commodo massa at quam placerat, eget egestas lacus malesuada. Maecenas lacinia lacus scelerisque gravida luctus. Etiam sed ultrices mauris, at congue libero. Nulla posuere tempus ante, a commodo augue eleifend sit amet. Pellentesque auctor ullamcorper condimentum.
                </p>
                <p>
                    Sed semper non mauris eget consectetur. Aliquam vitae efficitur mi. Etiam et bibendum massa. Etiam luctus leo leo, ut semper odio gravida in. Duis id dolor ex. Cras posuere, felis ac sagittis vehicula, lacus dolor vehicula lorem, in sollicitudin tortor est vel orci. Curabitur et tortor in neque fermentum bibendum ut quis ante. Vestibulum tincidunt nulla nulla, sed tempus enim cursus vitae. Phasellus cursus ante ante, sit amet euismod lacus vulputate vel. Maecenas enim mi, sodales finibus est non, faucibus imperdiet ipsum. Quisque imperdiet pulvinar vehicula. Vivamus ut purus accumsan, dictum erat vel, eleifend lectus. Suspendisse id viverra lectus. Maecenas pharetra nunc arcu.
                </p>
            </div>
            <img src="./assets/images/autor.jpg" alt="Alan A. Sato">
        </div>
    </section>

    <section class="especialidades">
        <div class="container">
            <h2 class="title">
                Minhas Especialidades
            </h2>
            <div class="wrapper">
                <div class="box">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="48" height="48" viewBox="0 0 48 48">
                        <path fill="#0277BD" d="M41,5H7l3,34l14,4l14-4L41,5L41,5z"></path>
                        <path fill="#039BE5" d="M24 8L24 39.9 35.2 36.7 37.7 8z"></path>
                        <path fill="#FFF" d="M33.1 13L24 13 24 17 28.9 17 28.6 21 24 21 24 25 28.4 25 28.1 29.5 24 30.9 24 35.1 31.9 32.5 32.6 21 32.6 21z"></path>
                        <path fill="#EEE" d="M24,13v4h-8.9l-0.3-4H24z M19.4,21l0.2,4H24v-4H19.4z M19.8,27h-4l0.3,5.5l7.9,2.6v-4.2l-4.1-1.4L19.8,27z"></path>
                    </svg>
                    <h3>CSS3</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut loareet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper susciput lobortis nisi ut
                    </p>
                </div>
                <div class="box">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="48" height="48" viewBox="0 0 48 48">
                        <path fill="#E65100" d="M41,5H7l3,34l14,4l14-4L41,5L41,5z"></path>
                        <path fill="#FF6D00" d="M24 8L24 39.9 35.2 36.7 37.7 8z"></path>
                        <path fill="#FFF" d="M24,25v-4h8.6l-0.7,11.5L24,35.1v-4.2l4.1-1.4l0.3-4.5H24z M32.9,17l0.3-4H24v4H32.9z"></path>
                        <path fill="#EEE" d="M24,30.9v4.2l-7.9-2.6L15.7,27h4l0.2,2.5L24,30.9z M19.1,17H24v-4h-9.1l0.7,12H24v-4h-4.6L19.1,17z"></path>
                    </svg>
                    <h3>HTML5</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut loareet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper susciput lobortis nisi ut
                    </p>
                </div>
                <div class="box">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="48" height="48" viewBox="0 0 48 48">
                        <path fill="#f7df1e" d="M6,42V6h36v36H6z"></path>
                        <path fill="#000001" d="M29.538,32.947c0.692,1.124,1.444,2.201,3.037,2.201c1.338,0,2.04-0.665,2.04-1.585 c0-1.101-0.726-1.492-2.198-2.133l-0.807-0.344c-2.329-0.988-3.878-2.226-3.878-4.841c0-2.41,1.845-4.244,4.728-4.244 c2.053,0,3.528,0.711,4.592,2.573l-2.514,1.607c-0.553-0.988-1.151-1.377-2.078-1.377c-0.946,0-1.545,0.597-1.545,1.377 c0,0.964,0.6,1.354,1.985,1.951l0.807,0.344C36.452,29.645,38,30.839,38,33.523C38,36.415,35.716,38,32.65,38 c-2.999,0-4.702-1.505-5.65-3.368L29.538,32.947z M17.952,33.029c0.506,0.906,1.275,1.603,2.381,1.603 c1.058,0,1.667-0.418,1.667-2.043V22h3.333v11.101c0,3.367-1.953,4.899-4.805,4.899c-2.577,0-4.437-1.746-5.195-3.368 L17.952,33.029z"></path>
                    </svg>
                    <h3>JavaScript</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut loareet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper susciput lobortis nisi ut
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="extras">
        <div class="container">
            <div class="wrapper-depoimentos">
                <h2 clas="title">Depoimentos dos nossos clientes</h2>
                <p>
                    Lorem ipsum dolor sit amet, consecetuer adipiscing elit, sed diam nonummy nibh
                    euismod tincidunt ut laoreet dolore magna aliguam erat volupat. Ut wisi enim ad
                    minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip
                    ex ea commodo consequat. Duis autem vel eum iriure dolor in he..
                </p>
                <h3>Lorem Ipsum</h3>
                <p>
                    Lorem ipsum dolor sit amet, consecetuer adipiscing elit, sed diam nonummy nibh
                    euismod tincidunt ut laoreet dolore magna aliguam erat volupat. Ut wisi enim ad
                    minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip
                    ex ea commodo consequat. Duis autem vel eum iriure dolor in he..
                </p>
                <h3>Lorem Ipsum</h3>
            </div>
            <div class="wrapper-servicos">
                <h2 class="title">Serviços</h2>
                <ul>
                    <li>
                        <p>
                            Lorem ipum dolor sit amet, consectetur adipiscing elit, sed diam
                            nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
                        </p>
                    </li>
                    <li>
                        <p>
                            Lorem ipum dolor sit amet, consectetur adipiscing elit, sed diam
                            nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
                        </p>
                    </li>
                    <li>
                        <p>
                            Lorem ipum dolor sit amet, consectetur adipiscing elit, sed diam
                            nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
                        </p>
                    </li>
                    <li>
                        <p>
                            Lorem ipum dolor sit amet, consectetur adipiscing elit, sed diam
                            nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
                        </p>
                    </li>
                    <li>
                        <p>
                            Lorem ipum dolor sit amet, consectetur adipiscing elit, sed diam
                            nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <footer>
        <div class="container open-sans-400">
            Todos os direitos reservados
        </div>
    </footer>
</body>

</html>