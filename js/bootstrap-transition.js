From: "Salvo pelo Windows Internet Explorer 9"
Subject: 
Date: Tue, 28 May 2013 09:28:28 -0300
MIME-Version: 1.0
Content-Type: text/html;
	charset="Windows-1252"
Content-Transfer-Encoding: quoted-printable
Content-Location: http://twitter.github.io/bootstrap/assets/js/bootstrap-transition.js
X-MimeOLE: Produced By Microsoft MimeOLE V6.1.7601.17621

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD>
<META content=3D"text/html; charset=3Dwindows-1252" =
http-equiv=3DContent-Type>
<META name=3DGENERATOR content=3D"MSHTML 9.00.8112.16421"></HEAD>
<BODY>/* =
=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=
=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=
=3D *=20
bootstrap-transition.js v2.3.2 *=20
http://twitter.github.com/bootstrap/javascript.html#transitions *=20
=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=
=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=
=3D * Copyright 2012 Twitter,=20
Inc. * * Licensed under the Apache License, Version 2.0 (the "License"); =
* you=20
may not use this file except in compliance with the License. * You may =
obtain a=20
copy of the License at * * http://www.apache.org/licenses/LICENSE-2.0 * =
* Unless=20
required by applicable law or agreed to in writing, software * =
distributed under=20
the License is distributed on an "AS IS" BASIS, * WITHOUT WARRANTIES OR=20
CONDITIONS OF ANY KIND, either express or implied. * See the License for =
the=20
specific language governing permissions and * limitations under the =
License. *=20
=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=
=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=
=3D=3D=3D=3D=3D=3D=3D=3D */ !function ($) {=20
"use strict"; // jshint ;_; /* CSS TRANSITION SUPPORT=20
(http://www.modernizr.com/) *=20
=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=
=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=3D=
=3D=3D=3D=3D=3D */ $(function () {=20
$.support.transition =3D (function () { var transitionEnd =3D (function =
() { var el=20
=3D document.createElement('bootstrap') , transEndEventNames =3D {=20
'WebkitTransition' : 'webkitTransitionEnd' , 'MozTransition' : =
'transitionend' ,=20
'OTransition' : 'oTransitionEnd otransitionend' , 'transition' : =
'transitionend'=20
} , name for (name in transEndEventNames){ if (el.style[name] !=3D=3D =
undefined) {=20
return transEndEventNames[name] } } }()) return transitionEnd &amp;&amp; =
{ end:=20
transitionEnd } })() }) }(window.jQuery);</BODY></HTML>
