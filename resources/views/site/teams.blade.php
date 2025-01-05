<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bouton Fixe sans Background</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Bouton centré et au-dessus */
    .fixed-whatsapp-btn {
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      z-index: 1050; /* Au-dessus de tout */
      border: 2px solid #25D366; /* Couleur verte de WhatsApp */
      color: #25D366; /* Texte et icône verts */
      padding: 0.5rem 1rem;
      border-radius: 50px;
      font-size: 1rem;
      display: flex;
      align-items: center;
      gap: 0.5rem;
      background: transparent; /* Pas de background */
    }
    .fixed-whatsapp-btn:hover {
      background-color: #25D366; /* Ajout d'un fond au survol */
      color: #fff; /* Texte et icône en blanc au survol */
    }
  </style>
</head>
<body class="bg-light">

  <!-- Contenu existant -->
  <div class="container py-5">
    <h1 class="text-center">Page avec un bouton WhatsApp</h1>
    <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae ligula nec metus aliquet facilisis.</p>
  </div>

  
  <!-- Bootstrap JS (optionnel si non utilisé dans la page) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
