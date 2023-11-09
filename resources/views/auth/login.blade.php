
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Log in | {{ config('app.name') }}</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

<link rel="stylesheet" href="/adminIte/plugins/fontawesome-free/css/all.min.css">

<link rel="stylesheet" href="/adminIte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

<link rel="stylesheet" href="/adminIte/dist/css/adminlte.min.css?v=3.2.0">
<script nonce="18beb942-127e-4812-95fa-4ca93c6b9b4c">(function(w,d){!function(t,u,v,w){t[v]=t[v]||{};t[v].executed=[];t.zaraz={deferred:[],listeners:[]};t.zaraz.q=[];t.zaraz._f=function(x){return async function(){var y=Array.prototype.slice.call(arguments);t.zaraz.q.push({m:x,a:y})}};for(const z of["track","set","debug"])t.zaraz[z]=t.zaraz._f(z);t.zaraz.init=()=>{var A=u.getElementsByTagName(w)[0],B=u.createElement(w),C=u.getElementsByTagName("title")[0];C&&(t[v].t=u.getElementsByTagName("title")[0].text);t[v].x=Math.random();t[v].w=t.screen.width;t[v].h=t.screen.height;t[v].j=t.innerHeight;t[v].e=t.innerWidth;t[v].l=t.location.href;t[v].r=u.referrer;t[v].k=t.screen.colorDepth;t[v].n=u.characterSet;t[v].o=(new Date).getTimezoneOffset();if(t.dataLayer)for(const G of Object.entries(Object.entries(dataLayer).reduce(((H,I)=>({...H[1],...I[1]})),{})))zaraz.set(G[0],G[1],{scope:"page"});t[v].q=[];for(;t.zaraz.q.length;){const J=t.zaraz.q.shift();t[v].q.push(J)}B.defer=!0;for(const K of[localStorage,sessionStorage])Object.keys(K||{}).filter((M=>M.startsWith("_zaraz_"))).forEach((L=>{try{t[v]["z_"+L.slice(7)]=JSON.parse(K.getItem(L))}catch{t[v]["z_"+L.slice(7)]=K.getItem(L)}}));B.referrerPolicy="origin";B.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(t[v])));A.parentNode.insertBefore(B,A)};["complete","interactive"].includes(u.readyState)?zaraz.init():t.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script></head>
<body class="hold-transition login-page">
<div class="login-box">
<div class="login-logo">
<a href="{{ url('/')}}"><b>Hotel</b> Adinda</a>
</div>

<div class="card">
<div class="card-body login-card-body">
<p class="login-box-msg">Masuk Untuk Memulai Sesi Anda</p>

<form action="?" method="post">
<div class="input-group mb-3">
<input type="text" name="username" class="form-control{{ $errors->has('username') ? ' is-invalid':'' }}" placeholder="Username">
<div class="input-group-append">
<div class="input-group-text">
<span class="fas fa-user"></span>
</div>
</div>
@error('username')
 <div class="invalid-feedback">{{ $message }}</div>
@enderror
</div>
<div class="input-group mb-3">
<input type="password" name="password" class="form-control{{ $errors->has('username') ? ' is-invalid':'' }}" placeholder="Password">
<div class="input-group-append">
<div class="input-group-text">
<span class="fas fa-lock"></span>
</div>
</div>
@error('password')
 <div class="invalid-feedback">{{ $message }}</div>
@enderror
</div>
<div class="row">
<div class="col-8">
<div class="icheck-primary">
<input type="checkbox" name="remember" id="remember">
<label for="remember">
Ingatkan saya
</label>
</div>
</div>

<div class="col-4">
<button type="submit" class="btn btn-primary btn-block">
 <i class="fas fa-sign-in-alt"></i>Log In
</button>
</div>

</div>
</form>

</div>

</div>
</div>


<script src="/adminIte/plugins/jquery/jquery.min.js"></script>

<script src="/adminIte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="/adminIte/dist/js/adminlte.min.js?v=3.2.0"></script>
</body>
</html>
