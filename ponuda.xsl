<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
  <xsl:output method="html" encoding="UTF-8" indent="yes"/>

  <xsl:template match="/">
    <html lang="hr">
      <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title>Boks Pro | Ponuda</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
        <link rel="stylesheet" href="style.css"/>
      </head>
      <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
          <div class="container">
            <a class="navbar-brand fw-bold" href="index.php">🥊 Boks Pro</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="index.php">Početna</a></li>
                <li class="nav-item"><a class="nav-link active" href="ponuda.php">Ponuda</a></li>
                <li class="nav-item"><a class="nav-link" href="kontakt.php">Kontakt</a></li>
                <li class="nav-item"><a class="nav-link text-danger" href="logout.php">Odjava</a></li>
              </ul>
            </div>
          </div>
        </nav>

        <header class="page-header text-white text-center">
          <div class="container">
            <h1 class="fw-bold">Ponuda boksačke opreme</h1>
          </div>
        </header>

        <main class="container py-5">
          <div class="row g-4">
            <xsl:for-each select="oprema/proizvod">
              <div class="col-md-4">
                <div class="card h-100 shadow-sm product-card">
                  <img class="card-img-top" alt="Slika proizvoda">
                    <xsl:attribute name="src"><xsl:value-of select="slika"/></xsl:attribute>
                  </img>
                  <div class="card-body d-flex flex-column">
                    <span class="badge bg-danger align-self-start mb-2"><xsl:value-of select="kategorija"/></span>
                    <h5 class="card-title"><xsl:value-of select="naziv"/></h5>
                    <p class="card-text"><xsl:value-of select="opis"/></p>
                    <p class="fs-5 fw-bold mt-auto">
                      <xsl:value-of select="cijena"/> <xsl:value-of select="cijena/@valuta"/>
                    </p>
                    <a href="kontakt.php" class="btn btn-outline-danger">Pošalji upit</a>
                  </div>
                </div>
              </div>
            </xsl:for-each>
          </div>
        </main>

        <footer class="bg-dark text-white text-center py-4">
          <p class="mb-0">© Mate Babić</p>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
      </body>
    </html>
  </xsl:template>
</xsl:stylesheet>
