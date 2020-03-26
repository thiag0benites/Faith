window.onload = function()
{
    // links descrição de serviços
    var img_jardinagem = document.getElementById('jardinagem');
    var img_limpeza = document.getElementById('limpeza');
    var img_portaria = document.getElementById('portaria');
    var img_recepcao = document.getElementById('recepcao');
    var img_seguranca = document.getElementById('seguranca');
    var img_zeladoria = document.getElementById('zeladoria');

    // Descrição dos serviços
    var div_detalhes = document.getElementById('detalhes');

    // Efeitos descrição de serviços
    img_jardinagem.onclick = function()
    {
        div_detalhes.style.display = 'block';
        div_detalhes.style.backgroundImage = "url('app/img/bkg_jardinagem.png')";
        div_detalhes.style.backgroundAttachment = 'fixed';
        div_detalhes.style.backgroundRepeat = 'no-repeat';
        div_detalhes.style.backgroundSize = 'cover';

        div_detalhes.innerHTML = '<h2 class="text-center">Jardinagem</h2>' + 
                                 '<p class="lead text-center">Limpeza e manutenção de jardins ' + 
                                 'também são serviços prestados sob a orientação de técnicos, nossos ' + 
                                 'jardineiros realizam serviços de poda, adubação, irrigação, etc.</p>';
    }

    img_limpeza.onclick = function()
    {
        div_detalhes.style.display = 'block';
        div_detalhes.style.backgroundImage = "url('app/img/bkg_limpeza.png')";
        div_detalhes.style.backgroundAttachment = 'fixed';
        div_detalhes.style.backgroundRepeat = 'no-repeat';
        div_detalhes.style.backgroundSize = 'cover';

        div_detalhes.innerHTML = '<h2 class="text-center">Limpeza e Conservação</h2>' + 
                                 '<p class="lead text-center">Colocamos á disposição de nossos ' +
                                 'clientes, profissionais devidamente orientados a prestarem serviço de ' +
                                 'limpeza e conservação auxiliadas por indumentárias que os auxiliam na ' +
                                 'realização de suas tarefas.</p>';
    }

    img_portaria.onclick = function()
    {
        div_detalhes.style.display = 'block';
        div_detalhes.style.backgroundImage = "url('app/img/bkg_portaria.png')";
        div_detalhes.style.backgroundAttachment = 'fixed';
        div_detalhes.style.backgroundRepeat = 'no-repeat';
        div_detalhes.style.backgroundSize = 'cover';

        div_detalhes.innerHTML = '<h2 class="text-center">Portaria e Controle de Acesso</h2>' + 
                                 '<p class="lead text-center">Buscando atender as ' +
                                 'necessidades requeridas por nossos clientes em potencial, avaliamos os ' +
                                 'nossos candidatos em forma de entrevista e investigação profissional e ' +
                                 'social. Ademais, fornecemos treinamento específico, ou seja, o ' +
                                 'profissional de portaria condominial tem orientação para atuar em ' +
                                 'condomínios comerciais e/ou residenciais, o profissional voltado para ' +
                                 'portaria industrial tem orientação a atuar nesta área. Nossos ' +
                                 'colaboradores são orientados a seguir à risca, as normas e procedimentos ' +
                                 'elaborados por nossa equipe técnica em conjunto com o cliente, visando ' +
                                 'o bom funcionamento e a segurança patrimonial.</p>';
    }

    img_recepcao.onclick = function()
    {
        div_detalhes.style.display = 'block';
        div_detalhes.style.backgroundImage = "url('app/img/bkg_recepcao.png')";
        div_detalhes.style.backgroundAttachment = 'fixed';
        div_detalhes.style.backgroundRepeat = 'no-repeat';
        div_detalhes.style.backgroundSize = 'cover';

        div_detalhes.innerHTML = '<h2 class="text-center">Recepção</h2>' + 
                                 '<p class="lead text-center">O cartão postal dos estabelecimentos comerciais e ' +
                                 'residenciais, sem dúvida, é a recepção. Pensando nisso, colocamos ' +
                                 'profissionais experientes e comunicativos, atentando também, para as ' +
                                 'normas e procedimentos elaborados junto aos clientes..</p>';
    }

    img_seguranca.onclick = function()
    {
        div_detalhes.style.display = 'block';
        div_detalhes.style.backgroundImage = "url('app/img/bkg_seguranca.png')";
        div_detalhes.style.backgroundAttachment = 'fixed';
        div_detalhes.style.backgroundRepeat = 'no-repeat';
        div_detalhes.style.backgroundSize = 'cover';

        div_detalhes.innerHTML = '<h2 class="text-center">Apoio Operacional</h2>' + 
                                 '<p class="lead text-center">Nossa equipe de supervisores realiza ' +
                                 'diariamente, rondas nos postos de serviço vistoriando postura, produtividade ' +
                                 'e qualidade dos colaboradores, visando à satisfação dos nossos clientes.</p>';
    }

    img_zeladoria.onclick = function()
    {
        div_detalhes.style.display = 'block';
        div_detalhes.style.backgroundImage = "url('app/img/bkg_zeladoria.png')";
        div_detalhes.style.backgroundAttachment = 'fixed';
        div_detalhes.style.backgroundRepeat = 'no-repeat';
        div_detalhes.style.backgroundSize = 'cover';

        div_detalhes.innerHTML = '<h2 class="text-center">Zeladoria</h2>' + 
                                 '<p class="lead text-center">Distribuição de serviços, atendimento de reclamações, ' +
                                 'inspeção e manutenção de alguns equipamentos e áreas de circulação, ' +
                                 'entre outras atribuições são tarefas diárias do zelador e, isso requer ' +
                                 'habilidade e conhecimento. Para isso, treinamos e capacitamos nossos ' +
                                 'profissionais para atuarem com dedicação e afinco.</p>';
    }
}