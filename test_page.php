<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CoinsXpansion</title>
    <meta name="author" content="zhixin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="test_page.css">
</head>
<body>
<a class="sr-only" href="#content">Skip to main content</a>
<header class="navbar navbar-inverse navbar-fixed-top bs-docs-nav">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse"
                    data-target=".bs-navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#home">
                CoinsXpansion
            </a>
        </div>
        <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
            <ul class="nav navbar-nav">
                <li>
                    <a href="#documentation" data-zh="文档">Documentation</a>
                </li>
                <li>
                    <a href="#usage" data-zh="例子">Usage</a>
                </li>
                <li>
                    <a href="#examples" data-zh="例子">Examples</a>
                </li>
                <li id="login3" data-toggle="login" data-type="dropdown" data-lang="en">
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#documentation">Link 1</a>
                </li>
                <li>
                    <a href="#usage">Link 2</a>
                </li>
                <li>
                    <a href="#examples">Link 3</a>
                </li>
            </ul>
        </nav>
    </div>
</header>

<div class="bs-header">
    <div class="container">
        <h1 id="home">Bootstrap Login</h1>
        <p>Login plugin from for bootstrap.</p>
    </div>
</div>

<div class="container">
    <div class="page-header">
        <h2 id="documentation">Documentation</h2>
    </div>
    <p>Options can be passed via data attributes or JavaScript. For data attributes, append the option name to <code>data-</code>, as in <code>data-type="dropdown"</code>.</p>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Name</th>
            <th>Attribute</th>
            <th>Description</th>
            <th>Default</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>-</td>
            <td>data-toggle</td>
            <td>Activate bootstrap login without writing JavaScript.</td>
            <td><code>login</code></td>
        </tr>
        <tr>
            <td>lang</td>
            <td>data-lang</td>
            <td>The language of login form, support <code>zh_CN</code> or <code>en</code>.</td>
            <td><code>zh_CN</code></td>
        </tr>
        <tr>
            <td>title</td>
            <td>data-title</td>
            <td>The title of login form.</td>
            <td><code>Bootstrap Login</code></td>
        </tr>
        <tr>
            <td>type</td>
            <td>data-type</td>
            <td>The type of login form, support <code>normal</code> or <code>dropdown</code>.</td>
            <td><code>normal</code></td>
        </tr>
        <tr>
            <td>action</td>
            <td>data-action</td>
            <td>The action of login form, use RESTful default.</td>
            <td><code>''</code></td>
        </tr>
        <tr>
            <td>onSubmit</td>
            <td>-</td>
            <td>Fires when submit the form.</td>
            <td><code>function() { return false; }</code></td>
        </tr>
        </tbody>
    </table>

    <div class="page-header">
        <h2 id="usage">Usage</h2>
    </div>
    <div class="page-header">
        <h3>Via data attributes</h3>
    </div>
    <p>Activate bootstrap login without writing JavaScript. Set data-toggle="login" on a normal element.</p>
    <pre><code>&lt;div data-toggle="login"&gt;&lt;/div&gt;

&lt;div data-toggle="login"
     data-lang="en"
     data-title="GitHub"
     data-action="https://github.com/"&gt;&lt;/div&gt;

&lt;li data-toggle="login" data-type="dropdown" data-lang="en"&gt;</code></pre>

    <div class="page-header">
        <h3>Via JavaScript</h3>
    </div>
    <p>Call a bootstrap login with id table with JavaScript.</p>

    <pre><code>$(function() {
    $('#login').bootstrapLogin();
    // use submit
    $('#login).bootstrapLogin({
        onSubmit: function(username, password) {
            if (username === 'admin' && password === 'admin') {
                location.href = 'http://wenzhixin.net.cn';
                return true;
            }
            return false;
        }
    });
});</code></pre>

    <div class="page-header">
        <h2 id="examples">Examples</h2>
    </div>
    <div>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Name</th>
            <th>Attribute</th>
            <th>Description</th>
            <th>Default</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>-</td>
            <td>data-toggle</td>
            <td>Activate bootstrap login without writing JavaScript.</td>
            <td><code>login</code></td>
        </tr>
        <tr>
            <td>lang</td>
            <td>data-lang</td>
            <td>The language of login form, support <code>zh_CN</code> or <code>en</code>.</td>
            <td><code>zh_CN</code></td>
        </tr>
        <tr>
            <td>title</td>
            <td>data-title</td>
            <td>The title of login form.</td>
            <td><code>Bootstrap Login</code></td>
        </tr>
        <tr>
            <td>type</td>
            <td>data-type</td>
            <td>The type of login form, support <code>normal</code> or <code>dropdown</code>.</td>
            <td><code>normal</code></td>
        </tr>
        <tr>
            <td>action</td>
            <td>data-action</td>
            <td>The action of login form, use RESTful default.</td>
            <td><code>''</code></td>
        </tr>
        <tr>
            <td>onSubmit</td>
            <td>-</td>
            <td>Fires when submit the form.</td>
            <td><code>function() { return false; }</code></td>
        </tr>
        </tbody>
    </table>
    </div>
</div>

<footer class="bs-footer" role="contentinfo">
    <div class="container">
        <p>Copyright © 2012-2014, Bootstrap Table is licensed under the The MIT License. Coded by wenzhixin. </p>
        <ul class="footer-links">
            <li>Currently: v1.0.0</li>
            <li class="muted">·</li>
            <li><a href="http://wenzhixin.net.cn">My website</a></li>
            <li class="muted">·</li>
            <li><a href="http://repos.wenzhixin.net.cn">My repos</a></li>
            <li class="muted">·</li>
            <li><a href="https://github.com/wenzhixin">Github (@wenzhixin)</a></li>
            <li class="muted">·</li>
            <li><a href="https://github.com/wenzhixin/bootstrap-login/issues?state=open">Issues</a></li>
            <li class="muted">·</li>
            <li><a href="mailto:wenzhixin2010@gmail.com">Email</a></li>
        </ul>
    </div>
</footer>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>
