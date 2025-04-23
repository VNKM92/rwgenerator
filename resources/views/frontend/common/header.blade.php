        <nav id="w0" class="rwd_navbar navbar-fixed-top navbar">
          <div class="container">
              <div class="navbar-header"><button type="button" class="navbar-toggle" data-toggle="collapse"
                      data-target="#w0-collapse"><span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span></button><a class="navbar-brand" href="{{ url('/') }}">Random Word
                      Generator</a></div>
              <div id="w0-collapse" class="collapse navbar-collapse">
                  <ul id="w1" class="navbar-nav navbar-right menu_nav nav">
                      <li class="active"><a href="index.html">Word</a></li>
                      <li><a href="{{ url('noun') }}">Noun</a></li>
                      <li><a href="{{ url('verb') }}">Verb</a></li>
                      <li><a href="{{ url('name') }}">Name</a></li>
                      <li><a href="{{ url('sentence') }}">Sentence</a></li>
                      <li><a href="{{ url('phrase') }}">Phrase</a></li>
                      <li><a href="{{ url('number') }}">Number</a></li>
                      <li><a href="{{ url('letter') }}">Letter</a></li>
                      <li><a href="{{ route('login') }}">Login</a></li>
                  </ul>
              </div>
          </div>
        </nav>