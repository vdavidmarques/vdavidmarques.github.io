@php
  $page = $_GET['page'] ?? 'home'; 
@endphp
<header class="scroll-effect">
  @if($page === 'en' || $page === 'about' || $page === 'contact')
    <a href="/?page=en" class="title scroll-effect">
      <h1>Vinícius Marques</h1>
    </a>
  @else
    <a href="/" class="title scroll-effect">
      <h1>Vinícius Marques</h1>
    </a>
  @endif
  <nav class="navbar">
    <ul class="list">
      @if($page === 'en' || $page === 'about' || $page === 'contact')
        <li><a href="/?page=about">About</a></li>
        <li><a href="/?page=contact">Contact</a></li> 
        <li>
          <a href="/" class="scroll-effect language"> 
            PT
          </a>
        </li>
      @else
        <li><a href="/?page=sobre">Sobre</a></li>
        <li><a href="/?page=contato">Contato</a></li> 
        <li>
          <a href="/?page=en" class="scroll-effect language"> 
            EN
          </a>
        </li>
      @endif
    </ul>
  </nav>
  <div class="download">
    @if($page === 'en' || $page === 'about' || $page === 'contact')
      <a
      href="dist/docs/curiculo-vdavidmarques-en.pdf"
      class="button scroll-effect download"
      target="_blank"
      >Download CV</a>
    @else
      <a
        href="dist/docs/curiculo-vdavidmarques-sao-paulo.pdf"
        class="button scroll-effect download"
        target="_blank"
        >Download CV</a
      >
    @endif
  </div>
</header>