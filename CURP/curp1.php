<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Constancia CURP</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Fuente institucional -->
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&display=swap" rel="stylesheet">

  <style>
    body {
      background: #f4f4f4;
      font-family: 'Merriweather', serif;
    }
    .certificate {
      border: 12px solid #3b7a50;
      padding: 18px;
      background: #fff;
      position: relative;
      overflow: hidden;
    }
    .certificate::before {
      content: "";
      position: absolute;
      inset: 14px;
      border: 6px solid rgba(59,122,80,0.18);
      pointer-events: none;
    }
    .cert-title {
      font-weight: 700;
      font-size: 1.6rem;
      letter-spacing: 1px;
    }
    .cert-sub {
      font-weight: 400;
      color: #555;
      font-size: 1rem;
    }
    .watermark {
      position: absolute;
      left: 50%;
      top: 50%;
      transform: translate(-50%, -50%);
      opacity: 0.06;
      width: 60%;
      pointer-events: none;
      user-select: none;
    }
    .left-col { width: 22%; min-width: 160px; }
    .center-col { width: 56%; padding: 0 18px; }
    .right-col { width: 22%; min-width: 160px; text-align: right; }
    .doc-field {
      background: transparent;
      border: none;
      border-bottom: 2px dashed rgba(0,0,0,0.2);
      padding: 6px 8px;
      font-size: 1rem;
      width: 100%;
    }
    .doc-field:focus {
      outline: none;
      border-bottom-color: #3b7a50;
    }
    .field-label {
      font-weight: 700;
      margin-bottom: 4px;
      display: inline-block;
    }
    .footer-row .col {
      text-align: center;
      font-size: 0.95rem;
    }
    .tramite {
      font-size: 0.9rem;
      color: #444;
      text-align: center;
      margin-top: 15px;
      font-weight: bold;
    }
    @media (max-width: 760px) {
      .left-col, .right-col, .center-col { width: 100%; min-width: auto; }
      .row-cols-responsive { flex-direction: column; }
      .watermark { width: 80%; }
      .right-col { text-align: left; margin-top: 12px; }
    }
  </style>
</head>
<body class="py-4">

  <div class="container">
    <div class="certificate mx-auto shadow-sm" style="max-width:1100px;">
      <!-- Marca de agua -->
      <img src="https://upload.wikimedia.org/wikipedia/commons/f/f5/Coat_of_arms_of_Mexico.svg"
           alt="marca de agua" class="watermark">

      <!-- Cabecera -->
      <div class="text-center mb-3">
        <h2 class="cert-title">ESTADOS UNIDOS MEXICANOS</h2>
        <div class="cert-sub">CONSTANCIA DE LA CLAVE ÚNICA<br/>DE REGISTRO DE POBLACIÓN</div>
      </div>

      <!-- Contenido -->
      <div class="d-flex row-cols-responsive">
        <!-- Col izquierda -->
        <div class="left-col pe-3 text-center">
          <img src="https://upload.wikimedia.org/wikipedia/commons/f/fc/Flag_of_Mexico.svg"
               alt="bandera" style="width:120px; display:block; margin:0 auto 10px;">
          <div style="font-size:1.2rem; color:#777; font-style:italic;">Soy México</div>
        </div>

        <!-- Col centro -->
        <div class="center-col">
          <div class="mb-3">
            <label class="field-label">Clave CURP:</label>
            <input class="doc-field" id="clave" value="OECA040417HMCRLLA2" />
          </div>

          <div class="mb-3">
            <label class="field-label">Nombre:</label>
            <input class="doc-field" id="nombre" value="ALVARO ORTEGA CELESTINO" />
          </div>

          <div class="row footer-row mt-3">
            <div class="col">
              <label class="field-label">Entidad de registro:</label><br>
              <input class="doc-field text-center" id="entidad" value="MÉXICO" />
            </div>
          </div>
        </div>

        <!-- Col derecha -->
        <div class="right-col ps-3 text-center">
          <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=OECA040417HMCRLLA2"
               alt="QR" class="img-fluid mb-2" style="max-width:150px;">
          <small class="text-muted">CURP Certificada</small>
        </div>
      </div>

      <!-- Pie -->
      <div class="tramite">TRÁMITE GRATUITO</div>

      <!-- Botones -->
      <div class="mt-4 d-flex justify-content-end gap-2">
        <button class="btn btn-outline-secondary" id="clearBtn" type="button">Limpiar</button>
        <button class="btn btn-success" id="printBtn" type="button">Imprimir</button>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    // Botón imprimir
    document.getElementById('printBtn').addEventListener('click', function(){
      const btns = document.querySelectorAll('.btn');
      btns.forEach(b => b.style.display = 'none');
      window.print();
      btns.forEach(b => b.style.display = '');
    });

    // Botón limpiar
    document.getElementById('clearBtn').addEventListener('click', function(){
      ['clave','nombre','entidad'].forEach(id => {
        document.getElementById(id).value = '';
      });
    });
  </script>
</body>
</html>