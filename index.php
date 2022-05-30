<!DOCTYPE html>
<html lang="pt_BR">https://AV1.tiagosemidei.repl.co
  <head>
    <!-- PAGE INFO -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mozart Churrascaria</title>

    <!-- Icones -->
    <link rel="stylesheet" href="assets/fonts/style.css" />

    <!-- Swiper -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />

    <!-- STYLES -->
    <link rel="stylesheet" href="style.css" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Poppins:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <header id="header">
      <nav class="container">
        <a class="logo" href="#">Mozart <span>Churrascaria</span></a>
        <!-- menu -->
        <div class="menu">
          <ul class="grid">
            <li><a class="title" href="#home">Início</a></li>
            <li><a class="title" href="#about">Sobre</a></li>
            <li><a class="title" href="#services">Serviços</a></li>
            <li><a class="title" href="#testimonials">Depoimentos</a></li>
            <li><a class="title" href="#contact">Contato</a></li>
            <li><a class="title" href="CadastroUsuario/index.php"> Cadastro de usuário</a></li>
            <li><a class="title" href="Login.php"> Login</a></li>
          </ul>
        </div>
        <!-- /menu -->
        <div class="toggle icon-menu"></div>
        <div class="toggle icon-close"></div>
      </nav>
    </header>

    <main>
      <!-- HOME -->
      <section class="section" id="home">
        <div class="container grid">
          <div class="image">
            <img
              src="https://i.imgur.com/puIleUo.jpeg"
              alt="Mozart fazendo churrasco"
            />
          </div>
          <div class="text">
            <h1>Espetinhos caseiros da casa</h1>
            <p>Os melhores espetinhos e jantinhas da zona norte.</p>
            <a class="button" href="./reservarumhorario.html"
              >Reservar um horário</a
            >
          </div>
        </div>
      </section>

      <div class="divider-1"></div>

      <!-- ABOUT -->
      <section class="section" id="about">
        <div class="container grid">
          <div class="image">
            <img src="https://i.imgur.com/Y80Q3t5.png" alt="4 churrasqueiros" />
          </div>
          <div class="text">
            <h2 class="title">Sobre nós</h2>
            <p>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit.
              Necessitatibus deleniti perferendis vel molestiae soluta, quaerat
              beatae dicta ducimus praesentium architecto harum dolorum
              distinctio illo earum assumenda itaque. Omnis, quam repellat.
            </p>
            <br />
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure
              illum ratione impedit quae eum quis adipisci asperiores, est
              doloribus distinctio excepturi minima eius dolore! Perferendis
              laborum illo aspernatur repellendus ipsum.
            </p>
            <br />
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed
              exercitationem, illum sapiente quasi hic iusto odio maiores esse
              quaerat quis necessitatibus at odit, dolores dicta, officia ab
              quos. Provident, quae.
            </p>
          </div>
        </div>
      </section>

      <div class="divider-2"></div>

      <!-- SERVICES -->
      <section class="section" id="services">
        <div class="container grid">
          <header>
            <h2 class="title">Serviços</h2>
            <p class="subtitle">
              Com mais de 10 anos no mercado, o
              <strong>Mozart Borges</strong> já conquistou clientes de inúmeros
              lugares com seus espetinhos exclusivos e molhos totalmente
              autorais.
            </p>
          </header>
          <div class="cards grid">
            <div class="card">
              <i class="icon-barbecue"></i>
              <h3 class="title">Churrasco & Costelas</h3>
              <p>
                Fazemos atendimentos exclusivos onde cobrimos seu evento, com
                churrasco dos mais variados tipos de carne e costelas feito no
                bafo, tanto bovina quanto suína.
              </p>
            </div>
            <div class="card">
              <i class="icon-883803"></i>
              <h3 class="title">Espetinhos & Jantinhas</h3>
              <p>
                Em frente ao posto 11, de segunda a sexta, estamos vendendo
                espetinhos dos mais variados tipos, alguns sendo criações do
                Chef. Contamos também com jantinhas com arroz, farofa, molho
                caseiro da casa, maionese e macarronese.
              </p>
            </div>
            <div class="card">
              <i class="icon-sauce"></i>
              <h3 class="title">Buffet completo</h3>
              <p>
                Também fazemos serviços de buffet para seu evento, com feijoada,
                bacalhau à portuguesa, salpicão, feijão tropeiro e muito mais.
              </p>
            </div>
          </div>
        </div>
      </section>

      <div class="divider-1"></div>

      <!-- TESTIMONIALS -->
      <section class="section" id="testimonials">
        <div class="container">
          <header>
            <h2 class="title">Depoimentos de quem já comeu aqui</h2>
          </header>
          <div class="testimonials swiper-container">
            <div class="swiper-wrapper">
              <div class="testimonial swiper-slide">
                <blockquote>
                  <p>
                    <span>&ldquo;</span>
                    Uma brincadeirinha de fim de semana, se profissionalizou e
                    hoje é esse incrível restaurante, um lugar onde o cliente
                    come do bom e do melhor e se sente em casa, parabéns a
                    vocês!
                  </p>
                  <cite>
                    <img
                      src="assets/fotos/10.jpeg"
                      alt="Foto de Wanessa Souza"
                    />
                    Vanessa Souza
                  </cite>
                </blockquote>
              </div>

              <div class="testimonial swiper-slide">
                <blockquote>
                  <p>
                    <span>&ldquo;</span>
                    Cara incrível que faz um churrasco na porta da casa dele.
                    Churrasco na brasa, costela bovina e suína no bafo,
                    incrivelmente aconchegante e com um toque de gastronomia de
                    alto nível!
                  </p>
                  <cite>
                    <img
                      src="assets/fotos/56.jpeg"
                      alt="Foto de Franciele Venega"
                    />
                    Gabriela Ribs
                  </cite>
                </blockquote>
              </div>

              <div class="testimonial swiper-slide">
                <blockquote>
                  <p>
                    <span>&ldquo;</span>
                    Um chefe com especialidade em todas as carnes,
                    profissionalismo e muita criatividade nos espetinhos.
                    Simplesmente o melhor e mais diferente espeto da região da
                    Leopoldina.
                  </p>
                  <cite>
                    <img
                      src="assets/fotos/26.jpeg"
                      alt="Fotos de Valeska Fabris"
                    />
                    Adriana Cavalcante
                  </cite>
                </blockquote>
              </div>
            </div>

            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </section>

      <div class="divider-2"></div>

      <!-- CONTACT -->
      <section class="section" id="contact">
        <div class="container grid">
          <div class="text">
            <h2 class="title">Entre em contato com a gente!</h2>
            <p>
              Entre em contato com o Mozart Churrasco, para fazer orçamento do
              seu churrasco, tirar dúvidas, ouvir suas críticas e sugestões.
            </p>
            <a
              href="https://api.whatsapp.com/send?phone=+5521964139419&text=Oi! Gostaria de agendar um horário"
              class="button"
              target="_blank"
              ><i class="icon-whatsapp"></i> Entrar em contato</a
            >
          </div>

          <div class="links">
            <ul class="grid">
              <li><i class="icon-phone"></i> 21 96413-9419</li>
              <li>
                <i class="icon-map-pin"></i>Na praça em frente ao Posto 11
              </li>
              <li><i class="icon-mail"></i> contato@mozartchurrascaria.com</li>
            </ul>
          </div>
        </div>
      </section>

      <div class="divider-1"></div>
    </main>

    <footer class="section">
      <div class="container grid">
        <div class="brand">
          <a class="logo logo-alt" href="#home"
            >Mozart<span>Churrasco</span>.</a
          >
          <p>©2021 Mozartchurrasco.</p>
          <p>Todos os direitos reservados.</p>
        </div>

        <div class="social grid">
          <a href="https://www.instagram.com/mozartborges/" target="_blank">
            <i class="icon-instagram"></i>
          </a>
          <a href="https://www.facebook.com/mozart.borges" target="_blank">
            <i class="icon-facebook"></i
          ></a>
          <a href="https://youtube.com" target="_blank"
            ><i class="icon-youtube"></i
          ></a>
        </div>
      </div>
    </footer>

    <a href="#home" class="back-to-top"><i class="icon-arrow-up"></i></a>

    <!-- swiper -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- scrollreveal -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- main.js -->
    <script src="main.js"></script>
  </body>
</html>
