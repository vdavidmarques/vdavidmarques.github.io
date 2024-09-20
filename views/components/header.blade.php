@php
  $page = $_GET['page'] ?? 'home'; 
@endphp
<header class="scroll-effect">
  <h1 class="title scroll-effect">Vinícius Marques</h1>
  <nav class="navbar">
    <ul class="list">
      @if($page === 'en')
        <li><a href="/?page=about">About</a></li>
        <li><a href="/?page=contact">Contact</a></li> 
        <li>
          <a href="/" class="scroll-effect language"> 
            PT
          </a>
        </li>
      @else
        <li><a href="/?page=about">Sobre</a></li>
        <li><a href="/?page=contact">Contato</a></li> 
        <li>
          <a href="/?page=en" class="scroll-effect language"> 
            EN
          </a>
        </li>
      @endif
    </ul>
  </nav>
  <div class="download">
    @if($page === 'en')
      <a
      href="library/docs/curiculo-vdavidmarques-en.pdf"
      class="button scroll-effect download"
      target="_blank"
      >Download CV</a>
    @else
      <a
        href="library/docs/curiculo-vdavidmarques-sao-paulo.pdf"
        class="button scroll-effect download"
        target="_blank"
        >Download CV</a
      >
    @endif
  </div>
</header>