<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<title>Welcome to JS Bin</title>
<meta name="viewport" content="width=device-width">
<link href='https://fonts.googleapis.com/css?family=Doppio+One' rel='stylesheet' type='text/css'>
<script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
</head>
  
<body>
padding: 0;
  margin: 0;
  
  background: #3FA8C6;
  background-image: -moz-linear-gradient(top, #3fa8c6 0%, #3fa8c6 0%, #399ab2 100%);
  background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#3fa8c6), color-stop(0%,#3fa8c6), color-stop(100%,#399ab2));
  background-image: -webkit-linear-gradient(top, #3fa8c6 0%,#3fa8c6 0%,#399ab2 100%);
  background-image: -o-linear-gradient(top, #3fa8c6 0%,#3fa8c6 0%,#399ab2 100%);
  background-image: -ms-linear-gradient(top, #3fa8c6 0%,#3fa8c6 0%,#399ab2 100%);
  background-image: linear-gradient(to bottom, #3fa8c6 0%,#3fa8c6 0%,#399ab2 100%);
  color: #fff; 
  
  font-family: 'Doppio One', sans-serif; 
  text-shadow: 0 1px 0 rgba(0,0,0,.3); 
  line-height: 1.5;
  -webkit-font-smoothing: antialiased;
}

.wrapper {
  width: 50%;
  margin: 0 auto;
}

h1, h2, h3, h4, h5, h6 {
  letter-spacing: -0.03em;
  font-size: 2em;
}

a { 
  border-bottom: 1px solid #fff; 
  border-bottom: 1px solid rgba(255,255,255,0.7); 
  padding-bottom: 0.15em;
  position: relative;
  
  color: white;
  text-decoration: none; 
}

a:after {
  content: '';
  position: absolute;
  height: 1px;
  left: 0;
  right: 0;
  bottom: -2px;
  background: rgba(0,0,0,.1);
}

a:hover {
  color: #C0E3EC;
}

h1 { 
  margin: 0.667em 0 0;
  padding-left: 0.5em;
  text-align: left; 
}

h2 {
  font-size: 1.5em;
}

small {
  margin-top: 1em;
  display: block;
  font-style: italic;
  font-size: 0.667em;
}

p em {
  font-style: none;
}

#welcome {
  position: relative;
  overflow: hidden;
  padding-bottom: 1em;
  padding-left: 20px;
}

#welcome > div {
  padding-top: 1px; 
}

#dave {
  float: left;
  margin-top: 3em
}

#welcome > h2 {
  margin-top: 0.5em;
  padding-left: 0.5em;
  margin-bottom: 0;
}

.bubble p {
  line-height: 22px; 
}

.bubble {
  background: rgba(255, 255, 255, 0.1);
  border-color: rgba(255, 255, 255, 0.1);

  padding: 0.667em 1em;
  position: relative;
}

.bubble:after {
  content: "";
  position: absolute;
  
  width: 0; 
  height: 0; 
  border-top: 20px solid transparent;
  border-bottom: 20px solid transparent; 
  border-right: 20px solid white; 
  border-right-color: inherit;
  top: 50px;
  left: -20px;
}

#features {
  margin: 0.444em 0 0;
  clear: both;
}

#features > h2 {
  margin: 0;
}

#features ol {
  position: relative;
  padding: 1em 0 1.5em;
  background: rgba(0,0,0,.1);
  border-color: rgba(0,0,0,.1);
  margin: 0;
  overflow: hidden;
  list-style: none;
  counter-reset: item;
}

#features li {
  width: 30%;
  padding: 0 1.5%;
  float: left;
  text-align: center;
}

#features li:before {
  display: block;
  width: 2em;
  height: 2em;
  padding: 1em;
  margin: 0.667em auto 1em;
  
  content: counter(item);
  counter-increment: item;
  
  line-height: 2;
  text-align: center;
  
  background: rgba(0,0,0,.1);
  border-radius: 2em;
  box-shadow: inset 0 0 1em rgba(0,0,0,.1), 0 2px 2px rgba(255,255,255,.1);
}

#next > div {
  width: 45%;
  float: left;
  padding: 0 2.5%;
}

img {
  z-index: 1;
  -webkit-transition: -webkit-transform 2s ease-in-out;
 -moz-transition: -moz-transform 2s ease-in-out;
 -o-transition: -o-transform 2s ease-in-out;
 -ms-transition: -ms-transform 2s ease-in-out;
 transition: transform 2s ease-in-out;
 position: relative;
}

img:active {
  -webkit-transform: rotate(1440deg) scale(1.2);
  -moz-transform: rotate(1440deg) scale(1.2);
  -o-transform: rotate(1440deg) scale(1.2);
  -ms-transform: rotate(1440deg) scale(1.2);
  transform: rotate(1440deg) scale(1.2);
}

@media screen and (max-width: 1200px) {
  .wrapper {
    width: 80%;
  }
}

@media screen and (max-width: 768px) {
  .wrapper {
    width: auto;
    margin: 0;
  }
  #welcome {
    margin-right: 2.5%;
  }
}

@media screen and (max-width: 500px) {
  .wrapper {
    text-align: center;
  }
  #dave {
    float: none;
  }
  
  #welcome {
	padding: 0 1.5em;
    margin: 0;
  }
  
  h1 {
    text-align: center;
    margin-bottom: 0;
    padding-left: 0;
    font-size: 1.8em;
  }
  #welcome > h2 {
    margin-bottom: 0.667em;
  }
  .bubble {
    text-align: center;
  }
  .bubble:after {
    display: none;
  }
  #features li {
    width: 47%;
  }
  #features li:last-child {
    float: none;
    clear: both;
    margin: 0 auto;
  }
  
  #next > div {
    float none;
    width: auto;
  }
}








  <aside class="right-side">
	    <section class="content">

  <div class="wrapper">
    
    <img id="dave" src="https://static.jsbin.com/images/logo.png" alt="Dave, the JS Bin bot">
    
    <div id="welcome">
      <h1>Welcome to JS Bin!</h1>
      <p class="bubble"><strong>Hello</strong>, I'm <em><strong>Dave</strong> the <strong>JS Bin</strong> bot</em>. <br/>JS Bin is a JavaScript, HTML and CSS playground. If you want to experiment, learn or help your friends with a problem, then JS Bin is for you.<br/>Have a play and build something <strong>cool</strong>!<small id="message">Oh, and please don't press me, I get dizzy...</small></p>
      <h2>But what can I do?</h2>
    </div>
    
    <div id="features">
      <ol>
        <li>As you type, HTML and CSS is automagically rendered <em>live</em> in this window. I'll save a new bin for you too.</li>
        <li>If you're <a class="open" href="#register">registered</a> and logged in, I'll remember all your bins and give you a nice complete list with quick previews.</li>
        <li>You can even use keyboard shortcuts to help you get around faster - just <a class="open" href="#keyboardHelp">hit ctrl+?</a> for the full list.</li>
      </ol>
    </div>
    
    <div id="next">
      <div>
        <h2>Get meddling!</h2>
        <p>Open the <a class="open" href="#css">CSS</a> panel and try changing things about! You'll see this window update <em>live</em> (and get your own unique copy of this <em>bin</em> right away).</p>
        <p>You won't see this message again by default, but if you do want a reminder, you can either use the <a class="open" href="#helpmenu">help</a> or visit <a href="https://jsbin.com/welcome">jsbin.com/welcome</a>.</p>
      </div>
      <div>
        <h2>Help out</h2>
        <p>JS Bin is an open source project available on <a href="https://github.com/remy/jsbin">github</a> with instructions on how to host it yourself.</p>
        <p>If you're in the running workshops (or teaching to a much wider audience), you can get a custom skin and starting templates &ndash; like <a target="_blank" href="https://sebly.jsbin.com">this</a> one. Just <a target="_blank" href="https://leftlogic.com/contact">get in touch</a> and ask for Rem.</p>
      </div>
    </div>
    
  </div>
  </section>
  </aside>
</body>
</html>