<?php get_header(); ?>

<header>
    <div class="container">
        <div class="inner">
            <h1 class="animated fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
                Conheça a
                <span class="d-inline d-sm-none"><br></span>
                Subatomic.
            </h1>
            <h2 class="animated fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                Desenvolvendo o futuro.
                <span class="d-inline d-sm-none"><br></span>
                Pixel por pixel.
            </h2>
        </div>
    </div>
</header>
<section id="sobre">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <img src="<?php echo get_template_directory_uri(); ?>/img/about.png" alt="" class="fit-img" />
            </div>
            <div class="col-lg-4">
                <h3 class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="0s">Quem somos?</h3>
                <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                    <p>A Subatomic é uma empresa 100% digital, especializada em desenvolvimento web.</p>
                    <p>Nossos serviços vão desde o desenvolvimento de websites até aplicações e sistemas para os mais diversos fins.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="servicos" class="text-center">
    <div class="container" >
        <h3 class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="0s">Serviços</h3>
        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
            <p>Conheça abaixo nosso portifólio de serviços!</p>
        </div>
        <div class="row servicos">
            <div class="col-md-4 wow wow-mobile fadeInDown servico" data-wow-duration="1s" data-wow-delay="1.0s" data-wow-mobile-delay="0.0s">
                <img src="<?php echo get_template_directory_uri(); ?>/img/service-rwd.png" alt="Websites e Landing Pages Responsivas" class="fit-img" />
                <h4>Websites e Landing Pages Responsivas</h4>
                <p>Desenvolvimento e otimização de sites para se adequarem aos mais diversos tipos e formatos de telas.</p>
                <p>Permite que seus clientes possam acessar seu conteúdo e entrar em contato em qualquer lugar, seja do celular, tablet ou laptop.</p>
            </div>
            <div class="col-md-4 wow wow-mobile fadeInDown servico" data-wow-duration="1s" data-wow-delay="1.5s" data-wow-mobile-delay="0.0s">
                <img src="<?php echo get_template_directory_uri(); ?>/img/service-seo.png" alt="Otimizações voltadas a Performance e SEO" class="fit-img" />
                <h4>Otimizações voltadas a Performance e SEO</h4>
                <p>Analisamos e buscamos formas de otimizar seu site já pronto, com objetivo de melhorar seu posicionamento nos motores de busca ou fazê-lo carregar mais rápido, consumindo menos recursos.</p>
            </div>
            <div class="col-md-4 wow wow-mobile fadeInDown servico" data-wow-duration="1s" data-wow-delay="2.0s" data-wow-mobile-delay="0.0s">
                <img src="<?php echo get_template_directory_uri(); ?>/img/service-app.png" alt="Serviço" class="fit-img" />
                <h4>Desenvolvimento de Aplicações Web</h4>
                <p>Desenvolvemos aplicações web sob demanda, personalizadas para atender especificamente a sua necessidade e a de seus clientes.</p>
                <p>Também criamos sistemas para coleta e processamento de informações, além de criar integrações entre outros sistemas.</p>
            </div>
        </div>
    </div>
</section>
<section id="contato">
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-1 text-right">
                <h3 class="wow fadeInDown">Contato</h3>
                <div class="wow fadeInUp">
                    <p>Se interessou pelo nosso trabalho? Vamos marcar um Skype e conversar!</p>
                    <p>Preencha o formulário ao lado e entraremos em contato pela forma que você preferir!</p>
                </div>
            </div>
            <div class="col-md-4 offset-md-2">
                <div class="wow fadeInRight">
                    <?php echo str_replace(array('<br>', '<br />'), '', do_shortcode('[contact-form-7 id="6" title="One-Page"]')); ?>
<?php /*
                    <form>
                        <div class="form-control-group">
                            <label>
                                Nome:
                                <input class="form-control" type="text" placeholder="Meu Nome" />
                            </label>
                        </div>
                        <div class="form-control-group">
                            <label>
                                E-mail:
                                <input class="form-control" type="email" placeholder="eu@minha-empresa.com.br" />
                            </label>
                        </div>
                        <div class="form-control-group">
                            <label>
                                Telefone:
                                <input class="form-control" type="tel" placeholder="+55 19 98765-4321" />
                            </label>
                        </div>
                        <div class="form-control-group">
                            <label>
                                Forma de contato preferida:
                                <select class="form-control">
                                    <option value="E-mail">E-mail</option>
                                    <option value="WhatsApp">WhatsApp</option>
                                    <option value="Telefone">Telefone</option>
                                </select>
                            </label>
                        </div>
                        <div class="form-control-group">
                            <label>
                                Assunto:
                                <input class="form-control" type="text" placeholder="" />
                            </label>
                        </div>
                        <div class="form-control-group">
                            <label>
                                Mensagem:
                                <textarea class="form-control" placeholder="Olá..."></textarea>
                            </label>
                        </div>
                        <div class="form-control-group">
                            <input class="btn btn-primary" type="submit" value="Enviar!" />
                        </div>
                    </form>
*/ ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>