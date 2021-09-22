<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link href="/css/layout.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
            crossorigin="anonymous"></script>
</head>
<body>
<header class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <nav class="container-xxl flex-wrap flex-md-nowrap" aria-label="Main navigation">
        <a class="navbar-brand p-0 me-2" href="/" aria-label="Shop">
            <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-shop" fill="currentColor"
                 xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                      d="M0 15.5a.5.5 0 0 1 .5-.5h15a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zM3.12 1.175A.5.5 0 0 1 3.5 1h9a.5.5 0 0 1 .38.175l2.759 3.219A1.5 1.5 0 0 1 16 5.37v.13h-1v-.13a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.13H0v-.13a1.5 1.5 0 0 1 .361-.976l2.76-3.22z"/>
                <path
                    d="M2.375 6.875c.76 0 1.375-.616 1.375-1.375h1a1.375 1.375 0 0 0 2.75 0h1a1.375 1.375 0 0 0 2.75 0h1a1.375 1.375 0 1 0 2.75 0h1a2.375 2.375 0 0 1-4.25 1.458 2.371 2.371 0 0 1-1.875.917A2.37 2.37 0 0 1 8 6.958a2.37 2.37 0 0 1-1.875.917 2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.5h1c0 .76.616 1.375 1.375 1.375z"/>
                <path
                    d="M4.75 5.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm3.75 0a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm3.75 0a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
                <path fill-rule="evenodd"
                      d="M2 7.846V7H1v.437c.291.207.632.35 1 .409zm-1 .737c.311.14.647.232 1 .271V15H1V8.583zm13 .271a3.354 3.354 0 0 0 1-.27V15h-1V8.854zm1-1.417c-.291.207-.632.35-1 .409V7h1v.437zM3 9.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5V15H7v-5H4v5H3V9.5zm6 0a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-4zm1 .5v3h2v-3h-2z"/>
            </svg>
        </a>
        <div class="collapse navbar-collapse" id="bdNavbar">
            <ul class="navbar-nav flex-row flex-wrap bd-navbar-nav pt-2 py-md-0">
                <li class="nav-item col-6 col-md-auto">
                    <a class="nav-link p-2 {{ request()->is('/*') ? 'active' : null }}" aria-current="page" href="/"
                       onclick="ga('send', 'event', 'Navbar', 'Community links', 'Bootstrap');">Главная</a>
                </li>
                <li class="nav-item col-6 col-md-auto">
                    <a class="nav-link p-2 {{ request()->is('shop') ? 'active' : null }}" href="/shop"
                       onclick="ga('send', 'event', 'Navbar', 'Community links', 'Docs');">Магазин</a>
                </li>
                <li class="nav-item col-6 col-md-auto">
                    <a class="nav-link p-2 {{ request()->is('about') ? 'active' : null }}" href="/about"
                       onclick="ga('send', 'event', 'Navbar', 'Community links', 'Examples');">О нас</a>
                </li>
            </ul>
            <hr class="d-md-none text-white-50">
            <ul class="navbar-nav flex-row flex-wrap ms-md-auto">
                <li class="nav-item col-6 col-md-auto">
                    <a class="nav-link p-2" href="#" target="_blank" rel="noopener">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                             class="navbar-nav-svg d-inline-block align-text-top" viewBox="0 0 512 499.36" role="img">
                            <title>GitHub</title>
                            <path fill="currentColor" fill-rule="evenodd"
                                  d="M256 0C114.64 0 0 114.61 0 256c0 113.09 73.34 209 175.08 242.9 12.8 2.35 17.47-5.56 17.47-12.34 0-6.08-.22-22.18-.35-43.54-71.2 15.49-86.2-34.34-86.2-34.34-11.64-29.57-28.42-37.45-28.42-37.45-23.27-15.84 1.73-15.55 1.73-15.55 25.69 1.81 39.21 26.38 39.21 26.38 22.84 39.12 59.92 27.82 74.5 21.27 2.33-16.54 8.94-27.82 16.25-34.22-56.84-6.43-116.6-28.43-116.6-126.49 0-27.95 10-50.8 26.35-68.69-2.63-6.48-11.42-32.5 2.51-67.75 0 0 21.49-6.88 70.4 26.24a242.65 242.65 0 0 1 128.18 0c48.87-33.13 70.33-26.24 70.33-26.24 14 35.25 5.18 61.27 2.55 67.75 16.41 17.9 26.31 40.75 26.31 68.69 0 98.35-59.85 120-116.88 126.32 9.19 7.9 17.38 23.53 17.38 47.41 0 34.22-.31 61.83-.31 70.23 0 6.85 4.61 14.81 17.6 12.31C438.72 464.97 512 369.08 512 256.02 512 114.62 397.37 0 256 0z"></path>
                        </svg>
                        <small class="d-md-none ms-2">GitHub</small>
                    </a>
                </li>
                <li class="nav-item col-6 col-md-auto">
                    <a class="nav-link p-2" href="#" target="_blank" rel="noopener">
                        <svg xmlns="" width="36" height="36" class="navbar-nav-svg d-inline-block align-text-top"
                             viewBox="0 0 512 416.32" role="img"><title>Twitter</title>
                            <path fill="currentColor"
                                  d="M160.83 416.32c193.2 0 298.92-160.22 298.92-298.92 0-4.51 0-9-.2-13.52A214 214 0 0 0 512 49.38a212.93 212.93 0 0 1-60.44 16.6 105.7 105.7 0 0 0 46.3-58.19 209 209 0 0 1-66.79 25.37 105.09 105.09 0 0 0-181.73 71.91 116.12 116.12 0 0 0 2.66 24c-87.28-4.3-164.73-46.3-216.56-109.82A105.48 105.48 0 0 0 68 159.6a106.27 106.27 0 0 1-47.53-13.11v1.43a105.28 105.28 0 0 0 84.21 103.06 105.67 105.67 0 0 1-47.33 1.84 105.06 105.06 0 0 0 98.14 72.94A210.72 210.72 0 0 1 25 370.84a202.17 202.17 0 0 1-25-1.43 298.85 298.85 0 0 0 160.83 46.92"></path>
                        </svg>
                        <small class="d-md-none ms-2">Twitter</small>
                    </a>
                </li>
                <li class="nav-item col-6 col-md-auto">
                    <a class="nav-link p-2" href="#" target="_blank" rel="noopener">
                        <svg width="36" height="36" class="navbar-nav-svg d-inline-block align-text-top"
                             viewBox="0 0 512 512" role="img"><title>Instagram</title>
                            <g>
                                <path
                                    d="M505,257c0,35.8,0.1,71.6,0,107.5c-0.2,52-24.4,90.5-67.6,117.7C412.1,498,384,505,354.2,505   c-65.2,0-130.3,0.3-195.5-0.1c-45.3-0.3-84.3-16.3-115.2-49.9c-19.1-20.8-30.5-45.3-33.8-73.6c-0.7-6-0.8-11.9-0.8-17.9   c0-71.3-0.1-142.6,0-213.9C9.2,97.5,33.4,59,76.6,31.8C102.1,15.9,130.3,9,160.3,9c65,0,130-0.3,195,0.1   c45.5,0.3,84.6,16.4,115.5,50.2c18.9,20.7,30.2,45.2,33.4,73.2c1.3,11,0.7,22,0.8,32.9C505.1,196,505,226.5,505,257z M46,257   c0,36.7-0.1,73.3,0,110c0.1,25.2,9.3,46.9,26.5,64.9c23.1,24.1,51.9,35.8,85,36c65.7,0.4,131.3,0.1,197,0.1   c21.2,0,41.4-4.6,59.8-15.2c34.4-19.7,53.8-48.7,53.8-89.3c0-72.2,0-144.3,0-216.5c0-25-9.1-46.6-26.2-64.5   c-22.9-24.2-51.8-36.1-84.8-36.3C290.7,45.7,224.4,46,158,46c-20.7,0-40.3,4.9-58.3,15.1C65.4,80.9,45.9,109.9,46,150.5   C46,186,46,221.5,46,257z"
                                    fill="#676767"/>
                                <path
                                    d="M257.3,363c-64.6,0-116.4-51.6-116.3-116c0.1-62.7,52.6-114.1,116.7-114c64.4,0,116.4,51.7,116.3,115.5   C373.9,311.7,321.6,363,257.3,363z M257.3,326c43.9,0,79.7-34.9,79.7-77.8c0-43.1-35.5-78.2-79.3-78.2c-43.9,0-79.7,34.9-79.7,77.8   C178,290.9,213.5,326,257.3,326z"
                                    fill="#545454"/>
                                <path
                                    d="M363,123.6c0-14.2,10.9-25.6,24.5-25.6c13.6,0,24.5,11.5,24.5,25.6c0,13.9-10.9,25.3-24.3,25.4   C374.1,149.1,363,137.8,363,123.6z"
                                    fill="#979797"/>
                            </g>
                        </svg>
                        <small class="d-md-none ms-2">Slack</small>
                    </a>
                </li>
                <li class="nav-item col-6 col-md-auto">
                    <a class="nav-link p-2" href="#" target="_blank" rel="noopener">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor"
                             fill-rule="evenodd" class="navbar-nav-svg d-inline-block align-text-top"
                             viewBox="0 0 40 41" role="img"><title>Open Collective</title>
                            <path fill-opacity=".4"
                                  d="M32.8 21c0 2.4-.8 4.9-2 6.9l5.1 5.1c2.5-3.4 4.1-7.6 4.1-12 0-4.6-1.6-8.8-4-12.2L30.7 14c1.2 2 2 4.3 2 7z"></path>
                            <path
                                d="M20 33.7a12.8 12.8 0 0 1 0-25.6c2.6 0 5 .7 7 2.1L32 5a20 20 0 1 0 .1 31.9l-5-5.2a13 13 0 0 1-7 2z"></path>
                        </svg>
                        <small class="d-md-none ms-2">Open Collective</small>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav d-none d-lg-flex ml-2 order-3">
                <li class="nav-item"><a class="nav-link" href="#">Sign in</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Sign up</a>
                </li>
            </ul>
            <ul class="navbar-nav d-lg-none">
                <li class="nav-item-divider"></li>
                <li class="nav-item"><a class="nav-link" href="#">Sign in</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Sign up</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<div class="container main_content">
    <div class="space"></div>
    @yield('main_content')
</div>
<div class="container py-5 bg-dark text-white">
    <div class="row">
        <div class="col-lg-3 mb-3">
            <a class="d-inline-flex align-items-center mb-2 link-dark text-decoration-none" href="/"
               aria-label="Bootstrap">
                <svg width="2.5em" height="2.5em" viewBox="0 0 19 19" class="bi bi-shop text-white"
                     fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M0 15.5a.5.5 0 0 1 .5-.5h15a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zM3.12 1.175A.5.5 0 0 1 3.5 1h9a.5.5 0 0 1 .38.175l2.759 3.219A1.5 1.5 0 0 1 16 5.37v.13h-1v-.13a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.13H0v-.13a1.5 1.5 0 0 1 .361-.976l2.76-3.22z"/>
                    <path
                        d="M2.375 6.875c.76 0 1.375-.616 1.375-1.375h1a1.375 1.375 0 0 0 2.75 0h1a1.375 1.375 0 0 0 2.75 0h1a1.375 1.375 0 1 0 2.75 0h1a2.375 2.375 0 0 1-4.25 1.458 2.371 2.371 0 0 1-1.875.917A2.37 2.37 0 0 1 8 6.958a2.37 2.37 0 0 1-1.875.917 2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.5h1c0 .76.616 1.375 1.375 1.375z"/>
                    <path
                        d="M4.75 5.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm3.75 0a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm3.75 0a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
                    <path fill-rule="evenodd"
                          d="M2 7.846V7H1v.437c.291.207.632.35 1 .409zm-1 .737c.311.14.647.232 1 .271V15H1V8.583zm13 .271a3.354 3.354 0 0 0 1-.27V15h-1V8.854zm1-1.417c-.291.207-.632.35-1 .409V7h1v.437zM3 9.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5V15H7v-5H4v5H3V9.5zm6 0a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-4zm1 .5v3h2v-3h-2z"/>
                </svg>
                <span class="fs-5 text-white">Shop</span>
            </a>
            <ul class="list-unstyled small text-muted">
                <li class="mb-2">Designed and built with all the love in the world by the <a
                        href="/docs/5.1/about/team/">Bootstrap team</a> with the help of <a
                        href="https://github.com/twbs/bootstrap/graphs/contributors">our contributors</a>.
                </li>
                <li class="mb-2">Code licensed <a href="https://github.com/twbs/bootstrap/blob/main/LICENSE"
                                                  target="_blank" rel="license noopener">MIT</a>, docs <a
                        href="https://creativecommons.org/licenses/by/3.0/" target="_blank"
                        rel="license noopener">CC BY 3.0</a>.
                </li>
                <li class="mb-2">Currently v5.1.1.</li>
            </ul>
        </div>
        <div class="col-6 col-lg-2 offset-lg-1 mb-3">
            <h5>Links</h5>
            <ul class="list-unstyled ">
                <li class="mb-2"><a href="/">Home</a></li>
                <li class="mb-2"><a href="/docs/5.1/">Docs</a></li>
                <li class="mb-2"><a href="/docs/5.1/examples/">Examples</a></li>
                <li class="mb-2"><a href="https://themes.getbootstrap.com/">Themes</a></li>
                <li class="mb-2"><a href="https://blog.getbootstrap.com/">Blog</a></li>
            </ul>
        </div>
        <div class="col-6 col-lg-2 mb-3">
            <h5>Guides</h5>
            <ul class="list-unstyled">
                <li class="mb-2"><a href="/docs/5.1/getting-started/">Getting started</a></li>
                <li class="mb-2"><a href="/docs/5.1/examples/starter-template/">Starter template</a></li>
                <li class="mb-2"><a href="/docs/5.1/getting-started/webpack/">Webpack</a></li>
                <li class="mb-2"><a href="/docs/5.1/getting-started/parcel/">Parcel</a></li>
            </ul>
        </div>
        <div class="col-6 col-lg-2 mb-3">
            <h5>Projects</h5>
            <ul class="list-unstyled">
                <li class="mb-2"><a href="https://github.com/twbs/bootstrap">Bootstrap 5</a></li>
                <li class="mb-2"><a href="https://github.com/twbs/bootstrap/tree/v4-dev">Bootstrap 4</a></li>
                <li class="mb-2"><a href="https://github.com/twbs/icons">Icons</a></li>
                <li class="mb-2"><a href="https://github.com/twbs/rfs">RFS</a></li>
                <li class="mb-2"><a href="https://github.com/twbs/bootstrap-npm-starter">npm starter</a></li>
            </ul>
        </div>
        <div class="col-6 col-lg-2 mb-3">
            <h5>Community</h5>
            <ul class="list-unstyled">
                <li class="mb-2"><a href="https://github.com/twbs/bootstrap/issues">Issues</a></li>
                <li class="mb-2"><a href="https://github.com/twbs/bootstrap/discussions">Discussions</a></li>
                <li class="mb-2"><a href="https://github.com/sponsors/twbs">Corporate sponsors</a></li>
                <li class="mb-2"><a href="https://opencollective.com/bootstrap">Open Collective</a></li>
                <li class="mb-2"><a href="https://bootstrap-slack.herokuapp.com/">Slack</a></li>
                <li class="mb-2"><a href="https://stackoverflow.com/questions/tagged/bootstrap-5">Stack
                        Overflow</a></li>
            </ul>
        </div>
    </div>
</div>
</body>
</html>
