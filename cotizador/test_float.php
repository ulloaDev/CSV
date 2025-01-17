<!DOCTYPE html>
<html lang="en-us">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <link href="public/ico/favicon.ico" rel="shortcut icon" type="image/x-icon">

    <title>
      WTF, forms?
    </title>

    <link rel="stylesheet" href="wtf-forms.css">
    <link rel="stylesheet" href="docs.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic|PT+Mono&amp;subset=latin,cyrillic">

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-146052-18', 'wtfforms.com');
      ga('send', 'pageview');
    </script>
  </head>
  <body>

    <header class="masthead">
  <div class="container">
    <span class="icon">✈</span>
    <h1>WTF, forms?</h1>
    <p class="lead">Friendlier HTML form controls with a little CSS magic. Designed for IE9+, as well as the latest Chrome, Safari, and Firefox.</p>
    <p class="lead">Created by <a href="https://twitter.com/mdo/">@mdo</a>.</p>

    <p class="masthead-links">
      <a href="https://github.com/mdo/wtf-forms/">
        <span class="icon icon-github-circled"></span>
      </a>
      <a href="https://twitter.com/mdo/">
        <span class="icon icon-twitter"></span>
      </a>
    </p>
  </div>
</header>


    <div class="container">
      <script type="text/javascript" src="//cdn.fusionads.net/fusion.js?zoneid=1332&serve=C6SDP2Y&placement=wtfforms" id="_fusionads_js"></script>

      <h3>Checkboxes and radios</h3>

<form class="controls-stacked">
  <label class="control checkbox">
  <input type="checkbox">
  <span class="control-indicator"></span>
  Check this custom checkbox
</label>
</form>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">&quot;control checkbox&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">&quot;checkbox&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">&quot;control-indicator&quot;</span><span class="nt">&gt;&lt;/span&gt;</span>
  Check this custom checkbox
<span class="nt">&lt;/label&gt;</span>
</code></pre></div>
<form class="controls-stacked">
  <label class="control radio">
  <input type="radio" id="radio1" name="radio">
  <span class="control-indicator"></span>
  Toggle this custom radio
</label>
<label class="control radio">
  <input type="radio" id="radio2" name="radio">
  <span class="control-indicator"></span>
  Or toggle this other custom radio
</label>
</form>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">&quot;control radio&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">&quot;radio&quot;</span> <span class="na">id=</span><span class="s">&quot;radio1&quot;</span> <span class="na">name=</span><span class="s">&quot;radio&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">&quot;control-indicator&quot;</span><span class="nt">&gt;&lt;/span&gt;</span>
  Toggle this custom radio
<span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">&quot;control radio&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">&quot;radio&quot;</span> <span class="na">id=</span><span class="s">&quot;radio2&quot;</span> <span class="na">name=</span><span class="s">&quot;radio&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">&quot;control-indicator&quot;</span><span class="nt">&gt;&lt;/span&gt;</span>
  Or toggle this other custom radio
<span class="nt">&lt;/label&gt;</span>
</code></pre></div>
<p>Each checkbox and radio is wrapped in a <code>&lt;label&gt;</code> for three reasons:</p>

<ol>
<li>It provides a larger hit areas for checking the control.</li>
<li>It provides a helpful and semantic wrapper to help us replace the default <code>&lt;input&gt;</code>s.</li>
<li>It triggers the state of the <code>&lt;input&gt;</code> automatically, meaning no JavaScript is required.</li>
</ol>

<p>We hide the default <code>&lt;input&gt;</code> with <code>opacity</code> and instead use the <code>&lt;span class=&quot;control-indicator&quot;&gt;</code> within the <code>&lt;label&gt;</code> to build a new custom form control.</p>

<p>With the sibling selector (<code>~</code>), we use the <code>:checked</code> state to trigger a makeshift checked state on the custom control.</p>

<p>In the checked states, we use <strong>base64 embedded SVG icons</strong> from <a href="http://useiconic.com/open">Open Iconic</a>. This provides us the best control for styling and positioning across browsers and devices.</p>

<h4>Alternate icons</h4>

<p>By default, checkboxes use a checkmark and radios use an filled circle. Also included are two modifier classes, <code>.control-x</code> and <code>.control-dash</code>, to change things up should the need arise.</p>

<form class="controls-inline">
  <label class="control checkbox control-x">
  <input type="checkbox" checked>
  <span class="control-indicator"></span>
</label>
<label class="control checkbox control-dash">
  <input type="checkbox" checked>
  <span class="control-indicator"></span>
</label>
<label class="control radio control-x">
  <input type="radio" id="radioIcon1" name="radio-icon-x" checked>
  <span class="control-indicator"></span>
</label>
<label class="control radio control-dash">
  <input type="radio" id="radioIcon2" name="radio-icon-dash" checked>
  <span class="control-indicator"></span>
</label>
</form>

<p>Add the modifier classes to the <code>&lt;label&gt;</code>, like so:</p>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">&quot;control checkbox control-x&quot;</span><span class="nt">&gt;</span>...<span class="nt">&lt;/label&gt;</span>
</code></pre></div>
<p>Want to customize the icons further, or use other ones? <a href="http://useiconic.com/open">Download Open Iconic</a>—included are font files, PNGs, and SVGs.</p>

<h3>Select menu</h3>

<form class="controls-stacked">
  <label class="select">
  <select>
    <option selected>Open this select menu</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
  </select>
</label>
</form>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">&quot;select&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;select&gt;</span>
    <span class="nt">&lt;option</span> <span class="na">selected</span><span class="nt">&gt;</span>Open this select menu<span class="nt">&lt;/option&gt;</span>
    <span class="nt">&lt;option</span> <span class="na">value=</span><span class="s">&quot;1&quot;</span><span class="nt">&gt;</span>One<span class="nt">&lt;/option&gt;</span>
    <span class="nt">&lt;option</span> <span class="na">value=</span><span class="s">&quot;2&quot;</span><span class="nt">&gt;</span>Two<span class="nt">&lt;/option&gt;</span>
    <span class="nt">&lt;option</span> <span class="na">value=</span><span class="s">&quot;3&quot;</span><span class="nt">&gt;</span>Three<span class="nt">&lt;/option&gt;</span>
  <span class="nt">&lt;/select&gt;</span>
<span class="nt">&lt;/label&gt;</span>
</code></pre></div>
<p>Similar to the checkboxes and radios, we wrap the <code>&lt;select&gt;</code> in a <code>&lt;label&gt;</code> as a semantic wrapper that we can generate custom styles on with CSS&#39;s generated content.</p>

<p>The <code>&lt;select&gt;</code> has quite a few styles to override and includes a few hacks to get things done. Here&#39;s what&#39;s happening:</p>

<ul>
<li>The <code>appearance</code> is reset to <code>none</code> for nearly all styles to correctly apply across modern browsers (meaning not IE9).</li>
<li>The <code>:-moz-focusring</code> is overridden so that on focus there&#39;s no inner border in Firefox.</li>
<li>The arrow is hidden in Firefox with a media query hack. (There&#39;s a <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=649849">longstanding open bug</a> for a native method of addressing this.)</li>
<li>The arrow is hidden in IE10+ with a simple selector.</li>
<li>The arrow is hidden in IE9 with a separate media query hack which generates another pseudo-element to literally mask it. Not ideal, but doable.</li>
</ul>

<p><strong>Heads up!</strong> This one comes with some quirks right now:</p>

<ul>
<li>Clickability is limited in IE9.</li>
<li>Firefox&#39;s dropdown of <code>option</code>s looks rather ugly.</li>
<li>The custom caret is unable to receive the selected state&#39;s <code>color</code>.</li>
</ul>

<p>Any ideas on improving these are most welcome.</p>

<h3>Multiple select</h3>

<form class="controls-stacked">
  <label class="select-multiple">
    <select multiple>
      <option selected>Open this select menu</option>
      <option value="1">One</option>
      <option value="2">Two</option>
      <option value="3">Three</option>
    </select>
  </label>
</form>

<h3>File browser</h3>

<form class="controls-stacked">
  <label class="file">
  <input type="file" id="file">
  <span class="file-custom"></span>
</label>
</form>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">&quot;file&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">&quot;file&quot;</span> <span class="na">id=</span><span class="s">&quot;file&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">&quot;file-custom&quot;</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;/label&gt;</span>
</code></pre></div>
<p>The file input is the most gnarly of the bunch. Here&#39;s how it works:</p>

<ul>
<li>We wrap the <code>&lt;input&gt;</code> in a <code>&lt;label&gt;</code> so the custom control properly triggers the file browser.</li>
<li>We hide the default file <code>&lt;input&gt;</code> via <code>opacity</code>.</li>
<li>We use <code>:after</code> to generate a custom background and directive (<em>Choose file...</em>).</li>
<li>We use <code>:before</code> to generate and position the <em>Browse</em> button.</li>
<li>We declare a <code>height</code> on the <code>&lt;input&gt;</code> for proper spacing for surrounding content.</li>
</ul>

<p>In other words, it&#39;s an entirely custom element, all generated via CSS.</p>

<p><strong>Heads up!</strong> The custom file input is currently unable to update the <em>Choose file...</em> text with the filename. Without JavaScript, this might not be possible to change, but I&#39;m open to ideas.</p>

<h3>FAQs</h3>

<h4>What about every other form control?</h4>

<p>For the time being, <strong>WTF, forms?</strong> is limited to checkboxes, radio buttons, select menus, and file inputs. Additional custom inputs will depend on browser support.</p>

<h4>Why are there no <code>for</code> attributes?</h4>

<p>We nest our <code>&lt;input&gt;</code>s and <code>&lt;select&gt;</code>s within a <code>&lt;label&gt;</code>, so there&#39;s no need to specify a <code>for</code> attribute as the browser will automatically associate the two.</p>

<h4>What about <code>hover</code> states?</h4>

<p>Basic hover styles have been included, but they&#39;ve been commented out because they are sticky on iOS. Uncomment if you really need it.</p>

<h4>Does this require JavaScript?</h4>

<p>Not for the time being, however, the file input might be better off with it.</p>

<h4>Will this be added to Bootstrap?</h4>

<p>Possibly, but not until v4 at the earliest.</p>

<h4>Is this screen reader friendly?</h4>

<p>Honestly, no idea right now.</p>

<h3>Changelog</h3>

<p>For a full changelog, visit the <a href="https://github.com/mdo/wtf-forms/releases">releases page on GitHub</a>.</p>

<p>This project utilizes <a href="http://semver.org">SemVer</a> for versioning releases for maximum backward compatibility.</p>

    </div>

    <footer class="footer">
  <p>&lt;3</p>
  <p>Made with all the love in the world by <a href="https://twitter.com/mdo/">@mdo</a>.</p>
  <p>Open sourced under MIT. Copyright 2014.</p>
  <p>Icons for checkbox and radio from <a href="http://useiconic.com/open">Open Iconic</a>.</p>

  <ul class="quick-links">
    <li>
      <iframe class="github-btn" src="http://ghbtns.com/github-btn.html?user=mdo&amp;repo=wtf-forms&amp;type=watch&amp;count=true" allowtransparency="true" frameborder="0" scrolling="0" width="112" height="20"></iframe>
    </li>
    <li>
      <iframe class="github-btn" src="http://ghbtns.com/github-btn.html?user=mdo&amp;repo=wtf-forms&amp;type=fork&amp;count=true" allowtransparency="true" frameborder="0" scrolling="0" width="98" height="20"></iframe>
    </li>
  </ul>
  <ul class="quick-links">
    <li class="follow-btn">
      <a href="https://twitter.com/mdo/" class="twitter-follow-button" data-link-color="#0069D6" data-show-count="true">Follow @mdo</a>
    </li>
    <li class="tweet-btn">
      <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://wtfforms.com/" data-count="horizontal" data-via="mdo">Tweet</a>
    </li>
  </ul>
</footer>


    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>

  </body>
</html>