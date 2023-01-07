   <?php

include('../con/conexao.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>SUmmer:R v2.1</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">

    

    <!-- Bootstrap core CSS -->
<link href="/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<meta name="theme-color" content="#7952b3">


    <style>
    body {
  font-size: .875rem;
}

.feather {
  width: 16px;
  height: 16px;
  vertical-align: text-bottom;
}

/*
 * Sidebar
 */

.sidebar {
  position: fixed;
  top: 0;
  /* rtl:raw:
  right: 0;
  */
  bottom: 0;
  /* rtl:remove */
  left: 0;
  z-index: 100; /* Behind the navbar */
  padding: 48px 0 0; /* Height of navbar */
  box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
}

@media (max-width: 767.98px) {
  .sidebar {
    top: 5rem;
  }
}

.sidebar-sticky {
  position: relative;
  top: 0;
  height: calc(100vh - 48px);
  padding-top: .5rem;
  overflow-x: hidden;
  overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
}

.sidebar .nav-link {
  font-weight: 500;
  color: black;
}

.sidebar .nav-link .feather {
  margin-right: 4px;
  color: blue;
}

.sidebar .nav-link.active {
  color: blue;
}

.sidebar .nav-link:hover .feather,
.sidebar .nav-link.active .feather {
  color: inherit;
}

.sidebar-heading {
  font-size: .75rem;
  text-transform: uppercase;
}

/*
 * Navbar
 */

.navbar-brand {
  padding-top: .75rem;
  padding-bottom: .75rem;
  font-size: 1rem;
  background-color: blue;
  box-shadow: inset -1px 0 0 rgba(0, 0, 0, .25);
}

.navbar .navbar-toggler {
  top: .25rem;
  right: 1rem;
}

.navbar .form-control {
  padding: .75rem 1rem;
  border-width: 0;
  border-radius: 0;
}

.form-control-dark {
  color: #fff;
  background-color: blue;
  border-color: rgba(255, 255, 255, .1);
}

.form-control-dark:focus {
  border-color: transparent;
  box-shadow: 0 0 0 3px rgba(255, 255, 255, .25);
}
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">SUmmer:Rs</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-balloon-heart-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8.49 10.92C19.412 3.382 11.28-2.387 8 .986 4.719-2.387-3.413 3.382 7.51 10.92l-.234.468a.25.25 0 1 0 .448.224l.04-.08c.009.17.024.315.051.45.068.344.208.622.448 1.102l.013.028c.212.422.182.85.05 1.246-.135.402-.366.751-.534 1.003a.25.25 0 0 0 .416.278l.004-.007c.166-.248.431-.646.588-1.115.16-.479.212-1.051-.076-1.629-.258-.515-.365-.732-.419-1.004a2.376 2.376 0 0 1-.037-.289l.008.017a.25.25 0 1 0 .448-.224l-.235-.468ZM6.726 1.269c-1.167-.61-2.8-.142-3.454 1.135-.237.463-.36 1.08-.202 1.85.055.27.467.197.527-.071.285-1.256 1.177-2.462 2.989-2.528.234-.008.348-.278.14-.386Z"/>
</svg>
              SUmmer:R
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../conversation/">
              <svg
   xmlns:dc="http://purl.org/dc/elements/1.1/"
   xmlns:cc="http://creativecommons.org/ns#"
   xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
   xmlns:svg="http://www.w3.org/2000/svg"
   xmlns="http://www.w3.org/2000/svg"
   xmlns:xlink="http://www.w3.org/1999/xlink"
   xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
   xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
   width="24.33333mm"
   height="24.33333mm"
   viewBox="0 0 169.33333 169.33333"
   version="1.1"
   id="svg8"
   inkscape:version="1.0.2 (e86c870879, 2021-01-15)"
   sodipodi:docname="drawing.svg">
  <defs
     id="defs2" />
  <sodipodi:namedview
     id="base"
     pagecolor="#ffffff"
     bordercolor="#666666"
     borderopacity="1.0"
     inkscape:pageopacity="0.0"
     inkscape:pageshadow="2"
     inkscape:zoom="0.35"
     inkscape:cx="400"
     inkscape:cy="560"
     inkscape:document-units="mm"
     inkscape:current-layer="layer1"
     inkscape:document-rotation="0"
     showgrid="false"
     inkscape:window-width="1362"
     inkscape:window-height="704"
     inkscape:window-x="0"
     inkscape:window-y="0"
     inkscape:window-maximized="0" />
  <metadata
     id="metadata5">
    <rdf:RDF>
      <cc:Work
         rdf:about="">
        <dc:format>image/svg+xml</dc:format>
        <dc:type
           rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
        <dc:title></dc:title>
      </cc:Work>
    </rdf:RDF>
  </metadata>
  <g
     inkscape:label="Layer 1"
     inkscape:groupmode="layer"
     id="layer1">
    <image
       width="169.33333"
       height="169.33333"
       preserveAspectRatio="none"
       xlink:href="data:image/png;base64,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
8m/h0yo9EaMLwLPC8yHzyv7E7VQWlbPTWaUDtT9yZvJn/v/KHpoT+1ecl3PWyr1WHNlu+dT1Kp9W
2R/uWPkj5RQ9/8xGyNz9f6oDz6uSf5crW6Eaq+BG9H7FeQVIq1xMl363/Fv5tM5P0oejjGgP9DWe
3bW/jhme9lQHp/a/Fepv4BqUd698U2YXrvvcwdOflH8rn9bpKbO3zjsZF7TszEYB5RaztDs6eA37
69jJx/fiKS+IT1POC3my61X6k/Jv4dMy3s5lA8opVmUzJ3eulOeRZ0dnmY4970r+rl6DwWAwGAwG
g8EKxL6I+ZyCdSBrmFUsqksTc9sd/uce2JE1gG4eWeauLPcG52JYd3sMfwXiH6y/d9Ym3fr1mfsZ
M65R15SB+E6s8FFldtcfCY9dB6ivxre69q9nY0iv+sue5xnuab2d94p77pf0zEGmM57p9El/8ziG
x2iz8nfyymTM0nXXd8vI9LiDVRxJ9+RX53GUg/A4re7V1+dJoz4HnSuXo/FA5eyUD3CZ9BxRxZ/h
88hHY/5al6r8nfJcxqrM6vqOvMQbVcYTrOzfnbcEXczS+S/4Ou3/6MrPM2TnO8mrOmdCOchSnY3I
9O98R1d+lZfu13cZqzKr6zvyZno8QcePkd+KZ+zsX+l/52wR+fqnyxd50P2Oz9L+nsXis/I9r52z
hFWZ1fUdeTM9niAb/5Vb9DZf7fu52v8zXVX9X8vu7O8c9Kr/a95d/6/mf13/17KrMqvrO/Leav+A
ji0+huGfdHzp+CuXaTX+q9xu/4Ce4avOn2e6Ws1ZfDz1MU55xax8RTf+a/qqzOr6jrz3sD/1rtb/
ei9rm9zXPuQ8ms//PY3OkX1On83luxiBzoX5ngEZ/D7ldeVXea1krMqsrq/SZHocDAaDwWAwGAwq
6NxcP1c4wEejksvXHx8Bz+ICWbv7HszVOoL90s9EFWer9mO+ZzyLC8z2MiuyuIDu2dX9/yfrV7UV
sTa9nnFu2J97ngdy6HXnIne4PNJUa/TOLpke9FygcqSVvm7lG0/g++/VPlXsj5gTfmOHI1Q/o/Er
ruueefbve7xR+cIsjyxenXFGHS9Yxft2OLou1qlnE+HXM33tyLjiAk9Q+X/sjwx+biXjaFUH3kc0
Dqfn+Chf+4VzbnxXfVRnJnheY+v0kyxG7f2Ftsf5FbDD0a24DvKr9LUr44oLPMHK/yMrfS/jVXc4
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
sya82zrLmeuJdY/1Ztaa+rpShfc61r1MK21Xx/QZkFdeox6nxHol90mXve6lMp+j7pdsb6P+z1ob
tmY/vms09le83Mct6COs860JP1Yv7JdjXv+3IfchEHsZdcy1yrRVptnzGtm3/xNBnNH9kf9HZT5H
ff4/xf8Zf/b+kHbinL0Zjvgz/8lYE35qvfqcl3sC+HpUp/RBt09ez/LKsNE+E/ezP3OdeY/KfK62
8H/fRymfUKY8LzHWMX4yltGe14afUi/CGDf4jwAb074Qc233fx9zco/ymP/5fyLzKPX73f+zMp+r
Y/7PuR079H6SdS318Sl9g7+Iyzy2Vfgxu2cYtuT9OudhxnDiYue0NXud+DP3KI+Vg39r8SFtJ23K
ntnI/6Myn/MuyH5b1il9R9/OumKP0VhF3Eyv59f92fvBmnDCluqVYdSDuaT7N+fy0TcYz/fnRnn1
MNpA34tMGxM/856Vufe1S2hpvUA9vvS/UkoppZRSSimllFJKXU07ERERERERERERERERERERERER
ERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERER
EREREREREZE75B+Hl45q2TuOnAAAAVNta0JU+s7K/gB/pYUAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAHic7dbhaYNgFIZR
B3ERB3EQF3EQB3ERB7G8gQu3piH/ignngUObT/vrTWzOU5IkSZIkSZIkSZIkSZIkSZIkSR/RcRzn
vu9P5znLtXf3v7pP929d13Mcx3OapsfP7Bj9LPfUvXUWy7I8XscwDH++h3TvsmOVfbNhdq3N+z21
f9U3v/6N7l+263tWOeuf5XqdffvG2b+6XtP9y3O+71//1+d5fto/1+z/fWXbeu7X79u2/frM9+e/
/b+v+h7X96v3QK7Vd/ucRdWfHddrkiRJkiRJkiRJ+vcGAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
AAAAAAAAAAAAAAAAAAAAAAD4QD8K+ay4UtoqZgAAKhdta0JU+s7K/gB/1PAAAAABAAAAAAAAAAAA
AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAHic
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
gg==
"
       id="image895"
       x="1.8227971"
       y="-0.054187231" />
  </g>
</svg>

              e se conversar comigo? ^^ 
            </a>
          </li>
           <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-5 mt-4 mb-1 text-muted">
          <span>Menu formal</span>
         
        </h6>
          <li class="nav-item">
            <a class="nav-link active" href="../conversation/">
             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-megaphone-fill" viewBox="0 0 16 16">
  <path d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0v-11zm-1 .724c-2.067.95-4.539 1.481-7 1.656v6.237a25.222 25.222 0 0 1 1.088.085c2.053.204 4.038.668 5.912 1.56V3.224zm-8 7.841V4.934c-.68.027-1.399.043-2.008.053A2.02 2.02 0 0 0 0 7v2c0 1.106.896 1.996 1.994 2.009a68.14 68.14 0 0 1 .496.008 64 64 0 0 1 1.51.048zm1.39 1.081c.285.021.569.047.85.078l.253 1.69a1 1 0 0 1-.983 1.187h-.548a1 1 0 0 1-.916-.599l-1.314-2.48a65.81 65.81 0 0 1 1.692.064c.327.017.65.037.966.06z"/>
</svg>
              Conversas e decisões 
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../proch/">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-square-heart-fill" viewBox="0 0 16 16">
  <path d="M2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2Zm6 3.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132Z"/>
</svg>
              Problemas / chamadas  
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../historic/">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-graph-down" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M0 0h1v15h15v1H0V0Zm14.817 11.887a.5.5 0 0 0 .07-.704l-4.5-5.5a.5.5 0 0 0-.74-.037L7.06 8.233 3.404 3.206a.5.5 0 0 0-.808.588l4 5.5a.5.5 0 0 0 .758.06l2.609-2.61 4.15 5.073a.5.5 0 0 0 .704.07Z"/>
</svg>
              Histórico manual
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
  <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
</svg>
              repositório github
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../events/">
             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-date-fill" viewBox="0 0 16 16">
  <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zm5.402 9.746c.625 0 1.184-.484 1.184-1.18 0-.832-.527-1.23-1.16-1.23-.586 0-1.168.387-1.168 1.21 0 .817.543 1.2 1.144 1.2z"/>
  <path d="M16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-6.664-1.21c-1.11 0-1.656-.767-1.703-1.407h.683c.043.37.387.82 1.051.82.844 0 1.301-.848 1.305-2.164h-.027c-.153.414-.637.79-1.383.79-.852 0-1.676-.61-1.676-1.77 0-1.137.871-1.809 1.797-1.809 1.172 0 1.953.734 1.953 2.668 0 1.805-.742 2.871-2 2.871zm-2.89-5.435v5.332H5.77V8.079h-.012c-.29.156-.883.52-1.258.777V8.16a12.6 12.6 0 0 1 1.313-.805h.632z"/>
</svg>
              calendario    
            </a>
          </li>
        </ul>

        
         
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Pergunta: </h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <form action="conv.php"   method="GET">  
              <input class="form-control form-control-danger w-100" type="text" placeholder="nome" name='nom_e'  >
              <input class="form-control form-control-danger w-100" type="text" placeholder="conteudo"  name='con_teudoo' >
              <input class="form-control form-control-danger w-100" type="text" placeholder="tag" name='t_g' >
              <button type="submit" class="btn btn-sm btn-outline-secondary">enviar</button>
            </form>
          </div>
         
        </div>
      </div>

     
      <h2>Conversa:  </h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">Identificador no sistema </th>
              
              <th scope="col">Nome</th>
              <th scope="col">Conteudo</th>
              <th scope="col">Tag</th>               
            </tr>
          </thead>
          <tbody>
            
            <?php





 $sql=$pdo->prepare("SELECT * FROM conv  ORDER BY id DESC LIMIT 8  ");
    
   

    $sql-> execute();

    $info = $sql -> fetchALL(); 
    foreach ($info as $key => $value ){

    
       echo "<tr>";


      echo "<td>".$value['id']."</td>";

      echo "<td>".$value['nome']."</td>";

       echo "<td>".$value['conteudo']."</td>";

        echo "<td>".$value['tag']."</td>";

      



      echo "</tr>";


    } 

?>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>


    <script src="/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>
