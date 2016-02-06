<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="/css/common.css">
    <link rel="stylesheet" href="/css/customer.css">
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Alternar Navegação</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">LigaLiga Video Chat</a>
        </div>
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Inicie Video Chat ou Ligue Grátis</h1>
        <p><button class="btn btn-primary btn-lg service-request-btn" data-toggle="modal" data-target="#service-request-modal">Chamada de Vídeo</button></p>
      </div>
    </div>

      <hr>

      <footer>
        <p>&copy; LigaLiga.com 2016</p>
      </footer>
    </div> <!-- /container -->

    <!-- Service Request Modal -->
    <div class="modal fade" id="service-request-modal" tabindex="-1" role="dialog" aria-labelledby="service-request-modal-label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Fechar</span></button>
                    <h4 class="modal-title" id="service-request-modal-label">Chamada de Vídeo</h4>
                </div>
                <div class="modal-body">
                    <form role="form" class="request-form">
                        <div class="form-group">
                            <label for="customer-name" class="control-label">Seu nome:</label>
                            <input type="text" class="form-control customer-name" name="customer_name" required="required">
                        </div>
                        <div class="form-group">
                            <label for="problem-text" class="control-label">Diga o assunto ou sua dúvida:</label>
                            <textarea class="form-control problem-text" name="problem_text" required="required"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Desligar</button>
                    <button type="button" class="btn btn-primary request-submit">Chamada de Vídeo</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Service Panel -->
    <div id="service-panel" class="video-holder">
        <div class="subscriber"></div>
        <div class="publisher"></div>
        <div class="bottom-bar">
            <button type="button" class="btn btn-danger close-button">Desligar</button>
        </div>
        <div class="waiting">
            <p class="hardware-access">Por favor permita acesso à sua câmera e microfone.</p>
            <p class="representative">Aguarde por um agente...</p>
        </div>
    </div>

    <script src="//cdnjs.cloudflare.com/ajax/libs/lodash.js/2.4.1/lodash.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="//static.opentok.com/webrtc/v2.2/js/opentok.min.js"></script>
    <script src="/js/vendor/setImmediate.js"></script>
    <script src="/js/vendor/eventemitter2.js"></script>
    <script src="/js/utils.js"></script>
    <script src="/js/customer.js"></script>
</body>
</html>
