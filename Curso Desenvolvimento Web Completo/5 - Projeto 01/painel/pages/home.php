<div class="box-painel">
    <div class="title flex align-center">
        <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M8 0L0 6V8H1V15H4V10H7V15H15V8H16V6L14 4.5V1H11V2.25L8 0ZM9 10H12V13H9V10Z" fill="#000000"></path>
            </g>
        </svg>
        <h2>
            Painel de Controle - <?php echo NOME_EMPRESA; ?>
        </h2>
    </div>
    <div class="wrapper-box flex justify-between">
        <div class="single bg-yellow">
            <h2 class="text-white fw-600">
                Usuários Online
            </h2>
            <p class="text-white">
                10
            </p>
        </div>
        <div class="single bg-orange">
            <h2 class="text-white fw-600">
                Total de Visitas
            </h2>
            <p class="text-white">
                100
            </p>
        </div>
        <div class="single bg-green">
            <h2 class="text-white fw-600">
                Visitas Hoje
            </h2>
            <p class="text-white">
                3
            </p>
        </div>
    </div>
</div>

<div class="box-painel">
    <div class="title flex align-center">
        <svg viewBox="0 0 192 192" xmlns="http://www.w3.org/2000/svg" fill="none">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
                <circle cx="96" cy="96" r="74" stroke="#000000" stroke-width="12"></circle>
                <ellipse cx="96" cy="96" stroke="#000000" stroke-width="12" rx="30" ry="74"></ellipse>
                <path stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="12" d="M28 72h136M28 120h136"></path>
            </g>
        </svg>
        <h2>
            Usuário Online
        </h2>
    </div>
    <div class="table">
        <div class="row grid">
            <div class="col">
                <span class="fw-700">IP</span>
            </div>
            <div class="col">
                <span class="fw-700">Última Ação</span>
            </div>
        </div>
        <?php for ($i = 0; $i < 10; $i++) : ?>
            <div class="row grid">
                <div class="col">
                    <span>199.199.199.199</span>
                </div>
                <div class="col">
                    <span>19/09/2011 19:00:00</span>
                </div>
            </div>
        <?php endfor; ?>
    </div>
</div>