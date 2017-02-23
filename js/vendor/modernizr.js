/*! modernizr 3.3.1 (Custom Build) | MIT *
 * https://modernizr.com/download/?-backgroundblendmode-backgroundcliptext-backgroundsize-bgpositionshorthand-bgpositionxy-bgrepeatspace_bgrepeatround-bgsizecover-borderimage-borderradius-boxshadow-boxsizing-canvas-checked-classlist-createelementattrs_createelement_attrs-cssall-cssanimations-csscalc-csschunit-csscolumns-cssfilters-cssinvalid-cssmask-csspointerevents-csspositionsticky-csspseudoanimations-csspseudotransitions-cssreflections-cssremunit-cssresize-cssscrollbar-csstransforms-csstransforms3d-csstransitions-cssvalid-cssvhunit-cssvmaxunit-cssvminunit-cssvwunit-cubicbezierrange-dataset-display_runin-displaytable-documentfragment-flexboxtweener-flexwrap-fontface-fullscreen-hiddenscroll-htmlimports-inlinesvg-inputtypes-json-lastchild-ligatures-mediaqueries-multiplebgs-nthchild-opacity-overflowscrolling-preserve3d-regions-rgba-scrollsnappoints-shapes-siblinggeneral-smil-subpixelfont-supports-svg-svgasimg-svgclippaths-svgfilters-target-textalignlast-textshadow-touchevents-userselect-video-willchange-wrapflow-setclasses !*/
! function(e, t, n) {
  function i(e, t) {
    return typeof e === t
  }

  function r() {
    var e, t, n, r, s, o, a;
    for (var d in b)
      if (b.hasOwnProperty(d)) {
        if (e = [], t = b[d], t.name && (e.push(t.name.toLowerCase()), t.options && t.options.aliases && t.options.aliases.length))
          for (n = 0; n < t.options.aliases.length; n++) e.push(t.options.aliases[n].toLowerCase());
        for (r = i(t.fn, "function") ? t.fn() : t.fn, s = 0; s < e.length; s++) o = e[s], a = o.split("."), 1 === a.length ? Modernizr[a[0]] = r : (!Modernizr[a[0]] || Modernizr[a[0]] instanceof Boolean || (Modernizr[a[0]] = new Boolean(Modernizr[a[0]])), Modernizr[a[0]][a[1]] = r), T.push((r ? "" : "no-") + a.join("-"))
      }
  }

  function s(e) {
    var t = z.className,
      n = Modernizr._config.classPrefix || "";
    if (k && (t = t.baseVal), Modernizr._config.enableJSClass) {
      var i = new RegExp("(^|\\s)" + n + "no-js(\\s|$)");
      t = t.replace(i, "$1" + n + "js$2")
    }
    Modernizr._config.enableClasses && (t += " " + n + e.join(" " + n), k ? z.className.baseVal = t : z.className = t)
  }

  function o() {
    return "function" != typeof t.createElement ? t.createElement(arguments[0]) : k ? t.createElementNS.call(t, "http://www.w3.org/2000/svg", arguments[0]) : t.createElement.apply(t, arguments)
  }

  function a(e, t) {
    return e - 1 === t || e === t || e + 1 === t
  }

  function d(e) {
    return e.replace(/([a-z])-([a-z])/g, function(e, t, n) {
      return t + n.toUpperCase()
    }).replace(/^-/, "")
  }

  function l(e, t) {
    if ("object" == typeof e)
      for (var n in e) j(e, n) && l(n, e[n]);
    else {
      e = e.toLowerCase();
      var i = e.split("."),
        r = Modernizr[i[0]];
      if (2 == i.length && (r = r[i[1]]), "undefined" != typeof r) return Modernizr;
      t = "function" == typeof t ? t() : t, 1 == i.length ? Modernizr[i[0]] = t : (!Modernizr[i[0]] || Modernizr[i[0]] instanceof Boolean || (Modernizr[i[0]] = new Boolean(Modernizr[i[0]])), Modernizr[i[0]][i[1]] = t), s([(t && 0 != t ? "" : "no-") + i.join("-")]), Modernizr._trigger(e, t)
    }
    return Modernizr
  }

  function c() {
    var e = t.body;
    return e || (e = o(k ? "svg" : "body"), e.fake = !0), e
  }

  function u(e, n, i, r) {
    var s, a, d, l, u = "modernizr",
      p = o("div"),
      f = c();
    if (parseInt(i, 10))
      for (; i--;) d = o("div"), d.id = r ? r[i] : u + (i + 1), p.appendChild(d);
    return s = o("style"), s.type = "text/css", s.id = "s" + u, (f.fake ? f : p).appendChild(s), f.appendChild(p), s.styleSheet ? s.styleSheet.cssText = e : s.appendChild(t.createTextNode(e)), p.id = u, f.fake && (f.style.background = "", f.style.overflow = "hidden", l = z.style.overflow, z.style.overflow = "hidden", z.appendChild(f)), a = n(p, e), f.fake ? (f.parentNode.removeChild(f), z.style.overflow = l, z.offsetHeight) : p.parentNode.removeChild(p), !!a
  }

  function p(e, t) {
    return !!~("" + e).indexOf(t)
  }

  function f(e, t) {
    return function() {
      return e.apply(t, arguments)
    }
  }

  function h(e, t, n) {
    var r;
    for (var s in e)
      if (e[s] in t) return n === !1 ? e[s] : (r = t[e[s]], i(r, "function") ? f(r, n || t) : r);
    return !1
  }

  function m(e) {
    return e.replace(/([A-Z])/g, function(e, t) {
      return "-" + t.toLowerCase()
    }).replace(/^ms-/, "-ms-")
  }

  function g(t, i) {
    var r = t.length;
    if ("CSS" in e && "supports" in e.CSS) {
      for (; r--;)
        if (e.CSS.supports(m(t[r]), i)) return !0;
      return !1
    }
    if ("CSSSupportsRule" in e) {
      for (var s = []; r--;) s.push("(" + m(t[r]) + ":" + i + ")");
      return s = s.join(" or "), u("@supports (" + s + ") { #modernizr { position: absolute; } }", function(e) {
        return "absolute" == getComputedStyle(e, null).position
      })
    }
    return n
  }

  function v(e, t, r, s) {
    function a() {
      c && (delete B.style, delete B.modElem)
    }
    if (s = i(s, "undefined") ? !1 : s, !i(r, "undefined")) {
      var l = g(e, r);
      if (!i(l, "undefined")) return l
    }
    for (var c, u, f, h, m, v = ["modernizr", "tspan", "samp"]; !B.style && v.length;) c = !0, B.modElem = o(v.shift()), B.style = B.modElem.style;
    for (f = e.length, u = 0; f > u; u++)
      if (h = e[u], m = B.style[h], p(h, "-") && (h = d(h)), B.style[h] !== n) {
        if (s || i(r, "undefined")) return a(), "pfx" == t ? h : !0;
        try {
          B.style[h] = r
        } catch (y) {}
        if (B.style[h] != m) return a(), "pfx" == t ? h : !0
      }
    return a(), !1
  }

  function y(e, t, n, r, s) {
    var o = e.charAt(0).toUpperCase() + e.slice(1),
      a = (e + " " + M.join(o + " ") + o).split(" ");
    return i(t, "string") || i(t, "undefined") ? v(a, t, r, s) : (a = (e + " " + $.join(o + " ") + o).split(" "), h(a, t, n))
  }

  function x(e, t, i) {
    return y(e, n, n, t, i)
  }
  var T = [],
    b = [],
    w = {
      _version: "3.3.1",
      _config: {
        classPrefix: "",
        enableClasses: !0,
        enableJSClass: !0,
        usePrefixes: !0
      },
      _q: [],
      on: function(e, t) {
        var n = this;
        setTimeout(function() {
          t(n[e])
        }, 0)
      },
      addTest: function(e, t, n) {
        b.push({
          name: e,
          fn: t,
          options: n
        })
      },
      addAsyncTest: function(e) {
        b.push({
          name: null,
          fn: e
        })
      }
    },
    Modernizr = function() {};
  Modernizr.prototype = w, Modernizr = new Modernizr, Modernizr.addTest("json", "JSON" in e && "parse" in JSON && "stringify" in JSON), Modernizr.addTest("svg", !!t.createElementNS && !!t.createElementNS("http://www.w3.org/2000/svg", "svg").createSVGRect);
  var C = "CSS" in e && "supports" in e.CSS,
    S = "supportsCSS" in e;
  Modernizr.addTest("supports", C || S), Modernizr.addTest("target", function() {
    var t = e.document;
    if (!("querySelectorAll" in t)) return !1;
    try {
      return t.querySelectorAll(":target"), !0
    } catch (n) {
      return !1
    }
  }), Modernizr.addTest("svgfilters", function() {
    var t = !1;
    try {
      t = "SVGFEColorMatrixElement" in e && 2 == SVGFEColorMatrixElement.SVG_FECOLORMATRIX_TYPE_SATURATE
    } catch (n) {}
    return t
  });
  var z = t.documentElement;
  Modernizr.addTest("cssall", "all" in z.style), Modernizr.addTest("willchange", "willChange" in z.style), Modernizr.addTest("classlist", "classList" in z), Modernizr.addTest("documentfragment", function() {
    return "createDocumentFragment" in t && "appendChild" in z
  });
  var k = "svg" === z.nodeName.toLowerCase();
  Modernizr.addTest("canvas", function() {
    var e = o("canvas");
    return !(!e.getContext || !e.getContext("2d"))
  }), Modernizr.addTest("video", function() {
    var e = o("video"),
      t = !1;
    try {
      (t = !!e.canPlayType) && (t = new Boolean(t), t.ogg = e.canPlayType('video/ogg; codecs="theora"').replace(/^no$/, ""), t.h264 = e.canPlayType('video/mp4; codecs="avc1.42E01E"').replace(/^no$/, ""), t.webm = e.canPlayType('video/webm; codecs="vp8, vorbis"').replace(/^no$/, ""), t.vp9 = e.canPlayType('video/webm; codecs="vp9"').replace(/^no$/, ""), t.hls = e.canPlayType('application/x-mpegURL; codecs="avc1.42E01E"').replace(/^no$/, ""))
    } catch (n) {}
    return t
  }), Modernizr.addTest("bgpositionshorthand", function() {
    var e = o("a"),
      t = e.style,
      n = "right 10px bottom 10px";
    return t.cssText = "background-position: " + n + ";", t.backgroundPosition === n
  }), Modernizr.addTest("multiplebgs", function() {
    var e = o("a").style;
    return e.cssText = "background:url(https://),url(https://),red url(https://)", /(url\s*\(.*?){3}/.test(e.background)
  }), Modernizr.addTest("csspointerevents", function() {
    var e = o("a").style;
    return e.cssText = "pointer-events:auto", "auto" === e.pointerEvents
  }), Modernizr.addTest("regions", function() {
    if (k) return !1;
    var e = Modernizr.prefixed("flowFrom"),
      t = Modernizr.prefixed("flowInto"),
      i = !1;
    if (!e || !t) return i;
    var r = o("iframe"),
      s = o("div"),
      a = o("div"),
      d = o("div"),
      l = "modernizr_flow_for_regions_check";
    a.innerText = "M", s.style.cssText = "top: 150px; left: 150px; padding: 0px;", d.style.cssText = "width: 50px; height: 50px; padding: 42px;", d.style[e] = l, s.appendChild(a), s.appendChild(d), z.appendChild(s);
    var c, u, p = a.getBoundingClientRect();
    return a.style[t] = l, c = a.getBoundingClientRect(), u = parseInt(c.left - p.left, 10), z.removeChild(s), 42 == u ? i = !0 : (z.appendChild(r), p = r.getBoundingClientRect(), r.style[t] = l, c = r.getBoundingClientRect(), p.height > 0 && p.height !== c.height && 0 === c.height && (i = !0)), a = d = s = r = n, i
  }), Modernizr.addTest("cssremunit", function() {
    var e = o("a").style;
    try {
      e.fontSize = "3rem"
    } catch (t) {}
    return /rem/.test(e.fontSize)
  }), Modernizr.addTest("rgba", function() {
    var e = o("a").style;
    return e.cssText = "background-color:rgba(150,255,150,.5)", ("" + e.backgroundColor).indexOf("rgba") > -1
  }), Modernizr.addTest("preserve3d", function() {
    var e = o("a"),
      t = o("a");
    e.style.cssText = "display: block; transform-style: preserve-3d; transform-origin: right; transform: rotateY(40deg);", t.style.cssText = "display: block; width: 9px; height: 1px; background: #000; transform-origin: right; transform: rotateY(40deg);", e.appendChild(t), z.appendChild(e);
    var n = t.getBoundingClientRect();
    return z.removeChild(e), n.width && n.width < 4
  }), Modernizr.addTest("createelementattrs", function() {
    try {
      return "test" == o('<input name="test" />').getAttribute("name")
    } catch (e) {
      return !1
    }
  }, {
    aliases: ["createelement-attrs"]
  }), Modernizr.addTest("dataset", function() {
    var e = o("div");
    return e.setAttribute("data-a-b", "c"), !(!e.dataset || "c" !== e.dataset.aB)
  });
  var _ = o("input"),
    E = "search tel url email datetime date month week time datetime-local number range color".split(" "),
    R = {};
  Modernizr.inputtypes = function(e) {
    for (var i, r, s, o = e.length, a = "1)", d = 0; o > d; d++) _.setAttribute("type", i = e[d]), s = "text" !== _.type && "style" in _, s && (_.value = a, _.style.cssText = "position:absolute;visibility:hidden;", /^range$/.test(i) && _.style.WebkitAppearance !== n ? (z.appendChild(_), r = t.defaultView, s = r.getComputedStyle && "textfield" !== r.getComputedStyle(_, null).WebkitAppearance && 0 !== _.offsetHeight, z.removeChild(_)) : /^(search|tel)$/.test(i) || (s = /^(url|email)$/.test(i) ? _.checkValidity && _.checkValidity() === !1 : _.value != a)), R[e[d]] = !!s;
    return R
  }(E);
  var P = w._config.usePrefixes ? " -webkit- -moz- -o- -ms- ".split(" ") : ["", ""];
  w._prefixes = P, Modernizr.addTest("csscalc", function() {
    var e = "width:",
      t = "calc(10px);",
      n = o("a");
    return n.style.cssText = e + P.join(t + e), !!n.style.length
  }), Modernizr.addTest("cubicbezierrange", function() {
    var e = o("a");
    return e.style.cssText = P.join("transition-timing-function:cubic-bezier(1,0,0,1.1); "), !!e.style.length
  }), Modernizr.addTest("opacity", function() {
    var e = o("a").style;
    return e.cssText = P.join("opacity:.55;"), /^0.55$/.test(e.opacity)
  }), Modernizr.addTest("csspositionsticky", function() {
    var e = "position:",
      t = "sticky",
      n = o("a"),
      i = n.style;
    return i.cssText = e + P.join(t + ";" + e).slice(0, -e.length), -1 !== i.position.indexOf(t)
  });
  var N = {
    elem: o("modernizr")
  };
  Modernizr._q.push(function() {
    delete N.elem
  }), Modernizr.addTest("csschunit", function() {
    var e, t = N.elem.style;
    try {
      t.fontSize = "3ch", e = -1 !== t.fontSize.indexOf("ch")
    } catch (n) {
      e = !1
    }
    return e
  });
  var A = {}.toString;
  Modernizr.addTest("svgclippaths", function() {
    return !!t.createElementNS && /SVGClipPath/.test(A.call(t.createElementNS("http://www.w3.org/2000/svg", "clipPath")))
  }), Modernizr.addTest("smil", function() {
    return !!t.createElementNS && /SVGAnimate/.test(A.call(t.createElementNS("http://www.w3.org/2000/svg", "animate")))
  });
  var j;
  ! function() {
    var e = {}.hasOwnProperty;
    j = i(e, "undefined") || i(e.call, "undefined") ? function(e, t) {
      return t in e && i(e.constructor.prototype[t], "undefined")
    } : function(t, n) {
      return e.call(t, n)
    }
  }(), w._l = {}, w.on = function(e, t) {
    this._l[e] || (this._l[e] = []), this._l[e].push(t), Modernizr.hasOwnProperty(e) && setTimeout(function() {
      Modernizr._trigger(e, Modernizr[e])
    }, 0)
  }, w._trigger = function(e, t) {
    if (this._l[e]) {
      var n = this._l[e];
      setTimeout(function() {
        var e, i;
        for (e = 0; e < n.length; e++)(i = n[e])(t)
      }, 0), delete this._l[e]
    }
  }, Modernizr._q.push(function() {
    w.addTest = l
  }), l("htmlimports", "import" in o("link")), Modernizr.addTest("svgasimg", t.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#Image", "1.1")), Modernizr.addTest("inlinesvg", function() {
    var e = o("div");
    return e.innerHTML = "<svg/>", "http://www.w3.org/2000/svg" == ("undefined" != typeof SVGRect && e.firstChild && e.firstChild.namespaceURI)
  });
  var W = w.testStyles = u;
  Modernizr.addTest("hiddenscroll", function() {
    return W("#modernizr {width:100px;height:100px;overflow:scroll}", function(e) {
      return e.offsetWidth === e.clientWidth
    })
  }), Modernizr.addTest("touchevents", function() {
    var n;
    if ("ontouchstart" in e || e.DocumentTouch && t instanceof DocumentTouch) n = !0;
    else {
      var i = ["@media (", P.join("touch-enabled),("), "heartz", ")", "{#modernizr{top:9px;position:absolute}}"].join("");
      W(i, function(e) {
        n = 9 === e.offsetTop
      })
    }
    return n
  }), Modernizr.addTest("checked", function() {
    return W("#modernizr {position:absolute} #modernizr input {margin-left:10px} #modernizr :checked {margin-left:20px;display:block}", function(e) {
      var t = o("input");
      return t.setAttribute("type", "checkbox"), t.setAttribute("checked", "checked"), e.appendChild(t), 20 === t.offsetLeft
    })
  }), W("#modernizr{display: table; direction: ltr}#modernizr div{display: table-cell; padding: 10px}", function(e) {
    var t, n = e.childNodes;
    t = n[0].offsetLeft < n[1].offsetLeft, Modernizr.addTest("displaytable", t, {
      aliases: ["display-table"]
    })
  }, 2);
  var I = function() {
    var e = navigator.userAgent,
      t = e.match(/applewebkit\/([0-9]+)/gi) && parseFloat(RegExp.$1),
      n = e.match(/w(eb)?osbrowser/gi),
      i = e.match(/windows phone/gi) && e.match(/iemobile\/([0-9])+/gi) && parseFloat(RegExp.$1) >= 9,
      r = 533 > t && e.match(/android/gi);
    return n || r || i
  }();
  I ? Modernizr.addTest("fontface", !1) : W('@font-face {font-family:"font";src:url("https://")}', function(e, n) {
    var i = t.getElementById("smodernizr"),
      r = i.sheet || i.styleSheet,
      s = r ? r.cssRules && r.cssRules[0] ? r.cssRules[0].cssText : r.cssText || "" : "",
      o = /src/i.test(s) && 0 === s.indexOf(n.split(" ")[0]);
    Modernizr.addTest("fontface", o)
  }), Modernizr.addTest("cssinvalid", function() {
    return W("#modernizr input{height:0;border:0;padding:0;margin:0;width:10px} #modernizr input:invalid{width:50px}", function(e) {
      var t = o("input");
      return t.required = !0, e.appendChild(t), t.clientWidth > 10
    })
  }), W("#modernizr div {width:100px} #modernizr :last-child{width:200px;display:block}", function(e) {
    Modernizr.addTest("lastchild", e.lastChild.offsetWidth > e.firstChild.offsetWidth)
  }, 2), W("#modernizr div {width:1px} #modernizr div:nth-child(2n) {width:2px;}", function(e) {
    for (var t = e.getElementsByTagName("div"), n = !0, i = 0; 5 > i; i++) n = n && t[i].offsetWidth === i % 2 + 1;
    Modernizr.addTest("nthchild", n)
  }, 5), W("#modernizr{overflow: scroll; width: 40px; height: 40px; }#" + P.join("scrollbar{width:0px} #modernizr::").split("#").slice(1).join("#") + "scrollbar{width:0px}", function(e) {
    Modernizr.addTest("cssscrollbar", 40 == e.scrollWidth)
  }), Modernizr.addTest("siblinggeneral", function() {
    return W("#modernizr div {width:100px} #modernizr div ~ div {width:200px;display:block}", function(e) {
      return 200 == e.lastChild.offsetWidth
    }, 2)
  }), W("#modernizr{position: absolute; top: -10em; visibility:hidden; font: normal 10px arial;}#subpixel{float: left; font-size: 33.3333%;}", function(t) {
    var n = t.firstChild;
    n.innerHTML = "This is a text written in Arial", Modernizr.addTest("subpixelfont", e.getComputedStyle ? "44px" !== e.getComputedStyle(n, null).getPropertyValue("width") : !1)
  }, 1, ["subpixel"]), Modernizr.addTest("cssvalid", function() {
    return W("#modernizr input{height:0;border:0;padding:0;margin:0;width:10px} #modernizr input:valid{width:50px}", function(e) {
      var t = o("input");
      return e.appendChild(t), t.clientWidth > 10
    })
  }), W("#modernizr { height: 50vh; }", function(t) {
    var n = parseInt(e.innerHeight / 2, 10),
      i = parseInt((e.getComputedStyle ? getComputedStyle(t, null) : t.currentStyle).height, 10);
    Modernizr.addTest("cssvhunit", i == n)
  }), W("#modernizr1{width: 50vmax}#modernizr2{width:50px;height:50px;overflow:scroll}#modernizr3{position:fixed;top:0;left:0;bottom:0;right:0}", function(t) {
    var n = t.childNodes[2],
      i = t.childNodes[1],
      r = t.childNodes[0],
      s = parseInt((i.offsetWidth - i.clientWidth) / 2, 10),
      o = r.clientWidth / 100,
      d = r.clientHeight / 100,
      l = parseInt(50 * Math.max(o, d), 10),
      c = parseInt((e.getComputedStyle ? getComputedStyle(n, null) : n.currentStyle).width, 10);
    Modernizr.addTest("cssvmaxunit", a(l, c) || a(l, c - s))
  }, 3), W("#modernizr1{width: 50vm;width:50vmin}#modernizr2{width:50px;height:50px;overflow:scroll}#modernizr3{position:fixed;top:0;left:0;bottom:0;right:0}", function(t) {
    var n = t.childNodes[2],
      i = t.childNodes[1],
      r = t.childNodes[0],
      s = parseInt((i.offsetWidth - i.clientWidth) / 2, 10),
      o = r.clientWidth / 100,
      d = r.clientHeight / 100,
      l = parseInt(50 * Math.min(o, d), 10),
      c = parseInt((e.getComputedStyle ? getComputedStyle(n, null) : n.currentStyle).width, 10);
    Modernizr.addTest("cssvminunit", a(l, c) || a(l, c - s))
  }, 3), W("#modernizr { width: 50vw; }", function(t) {
    var n = parseInt(e.innerWidth / 2, 10),
      i = parseInt((e.getComputedStyle ? getComputedStyle(t, null) : t.currentStyle).width, 10);
    Modernizr.addTest("cssvwunit", i == n)
  });
  var L = function() {
    var t = e.matchMedia || e.msMatchMedia;
    return t ? function(e) {
      var n = t(e);
      return n && n.matches || !1
    } : function(t) {
      var n = !1;
      return u("@media " + t + " { #modernizr { position: absolute; } }", function(t) {
        n = "absolute" == (e.getComputedStyle ? e.getComputedStyle(t, null) : t.currentStyle).position
      }), n
    }
  }();
  w.mq = L, Modernizr.addTest("mediaqueries", L("only all"));
  var B = {
    style: N.elem.style
  };
  Modernizr._q.unshift(function() {
    delete B.style
  });
  var O = "Moz O ms Webkit",
    M = w._config.usePrefixes ? O.split(" ") : [];
  w._cssomPrefixes = M;
  var V = function(t) {
    var i, r = P.length,
      s = e.CSSRule;
    if ("undefined" == typeof s) return n;
    if (!t) return !1;
    if (t = t.replace(/^@/, ""), i = t.replace(/-/g, "_").toUpperCase() + "_RULE", i in s) return "@" + t;
    for (var o = 0; r > o; o++) {
      var a = P[o],
        d = a.toUpperCase() + "_" + i;
      if (d in s) return "@-" + a.toLowerCase() + "-" + t
    }
    return !1
  };
  w.atRule = V;
  var $ = w._config.usePrefixes ? O.toLowerCase().split(" ") : [];
  w._domPrefixes = $;
  var F = w.testProp = function(e, t, i) {
    return v([e], n, t, i)
  };
  Modernizr.addTest("textshadow", F("textShadow", "1px 1px")), w.testAllProps = y;
  var q = w.prefixed = function(e, t, n) {
    return 0 === e.indexOf("@") ? V(e) : (-1 != e.indexOf("-") && (e = d(e)), t ? y(e, t, n) : y(e, "pfx"))
  };
  Modernizr.addTest("fullscreen", !(!q("exitFullscreen", t, !1) && !q("cancelFullScreen", t, !1))), Modernizr.addTest("backgroundblendmode", q("backgroundBlendMode", "text")), Modernizr.addTest("wrapflow", function() {
      var e = q("wrapFlow");
      if (!e || k) return !1;
      var t = e.replace(/([A-Z])/g, function(e, t) {
          return "-" + t.toLowerCase()
        }).replace(/^ms-/, "-ms-"),
        i = o("div"),
        r = o("div"),
        s = o("span");
      r.style.cssText = "position: absolute; left: 50px; width: 100px; height: 20px;" + t + ":end;", s.innerText = "X", i.appendChild(r), i.appendChild(s), z.appendChild(i);
      var a = s.offsetLeft;
      return z.removeChild(i), r = s = i = n, 150 == a
    }), w.testAllProps = x, Modernizr.addTest("ligatures", x("fontFeatureSettings", '"liga" 1')), Modernizr.addTest("cssanimations", x("animationName", "a", !0)), Modernizr.addTest("csspseudoanimations", function() {
      var t = !1;
      if (!Modernizr.cssanimations || !e.getComputedStyle) return t;
      var n = ["@", Modernizr._prefixes.join("keyframes csspseudoanimations { from { font-size: 10px; } }@").replace(/\@$/, ""), '#modernizr:before { content:" "; font-size:5px;', Modernizr._prefixes.join("animation:csspseudoanimations 1ms infinite;"), "}"].join("");
      return Modernizr.testStyles(n, function(n) {
        t = "10px" === e.getComputedStyle(n, ":before").getPropertyValue("font-size")
      }), t
    }), Modernizr.addTest("backgroundcliptext", function() {
      return x("backgroundClip", "text")
    }), Modernizr.addTest("bgpositionxy", function() {
      return x("backgroundPositionX", "3px", !0) && x("backgroundPositionY", "5px", !0)
    }), Modernizr.addTest("bgrepeatround", x("backgroundRepeat", "round")), Modernizr.addTest("bgrepeatspace", x("backgroundRepeat", "space")), Modernizr.addTest("backgroundsize", x("backgroundSize", "100%", !0)), Modernizr.addTest("bgsizecover", x("backgroundSize", "cover")), Modernizr.addTest("borderimage", x("borderImage", "url() 1", !0)), Modernizr.addTest("borderradius", x("borderRadius", "0px", !0)), Modernizr.addTest("boxshadow", x("boxShadow", "1px 1px", !0)), Modernizr.addTest("boxsizing", x("boxSizing", "border-box", !0) && (t.documentMode === n || t.documentMode > 7)),
    function() {
      Modernizr.addTest("csscolumns", function() {
        var e = !1,
          t = x("columnCount");
        try {
          (e = !!t) && (e = new Boolean(e))
        } catch (n) {}
        return e
      });
      for (var e, t, n = ["Width", "Span", "Fill", "Gap", "Rule", "RuleColor", "RuleStyle", "RuleWidth", "BreakBefore", "BreakAfter", "BreakInside"], i = 0; i < n.length; i++) e = n[i].toLowerCase(), t = x("column" + n[i]), ("breakbefore" === e || "breakafter" === e || "breakinside" == e) && (t = t || x(n[i])), Modernizr.addTest("csscolumns." + e, t)
    }(), Modernizr.addTest("displayrunin", x("display", "run-in"), {
      aliases: ["display-runin"]
    }), Modernizr.addTest("cssfilters", function() {
      if (Modernizr.supports) return x("filter", "blur(2px)");
      var e = o("a");
      return e.style.cssText = P.join("filter:blur(2px); "), !!e.style.length && (t.documentMode === n || t.documentMode > 9)
    }), Modernizr.addTest("flexboxtweener", x("flexAlign", "end", !0)), Modernizr.addTest("flexwrap", x("flexWrap", "wrap", !0)), Modernizr.addTest("cssmask", x("maskRepeat", "repeat-x", !0)), Modernizr.addTest("overflowscrolling", x("overflowScrolling", "touch", !0)), Modernizr.addTest("cssreflections", x("boxReflect", "above", !0)), Modernizr.addTest("cssresize", x("resize", "both", !0)), Modernizr.addTest("scrollsnappoints", x("scrollSnapType")), Modernizr.addTest("shapes", x("shapeOutside", "content-box", !0)), Modernizr.addTest("textalignlast", x("textAlignLast")), Modernizr.addTest("csstransforms", function() {
      return -1 === navigator.userAgent.indexOf("Android 2.") && x("transform", "scale(1)", !0)
    }), Modernizr.addTest("csstransforms3d", function() {
      var e = !!x("perspective", "1px", !0),
        t = Modernizr._config.usePrefixes;
      if (e && (!t || "webkitPerspective" in z.style)) {
        var n, i = "#modernizr{width:0;height:0}";
        Modernizr.supports ? n = "@supports (perspective: 1px)" : (n = "@media (transform-3d)", t && (n += ",(-webkit-transform-3d)")), n += "{#modernizr{width:7px;height:18px;margin:0;padding:0;border:0}}", W(i + n, function(t) {
          e = 7 === t.offsetWidth && 18 === t.offsetHeight
        })
      }
      return e
    }), Modernizr.addTest("csstransitions", x("transition", "all", !0)), Modernizr.addTest("csspseudotransitions", function() {
      var t = !1;
      if (!Modernizr.csstransitions || !e.getComputedStyle) return t;
      var n = '#modernizr:before { content:" "; font-size:5px;' + Modernizr._prefixes.join("transition:0s 100s;") + "}#modernizr.trigger:before { font-size:10px; }";
      return Modernizr.testStyles(n, function(n) {
        e.getComputedStyle(n, ":before").getPropertyValue("font-size"), n.className += "trigger", t = "5px" === e.getComputedStyle(n, ":before").getPropertyValue("font-size")
      }), t
    }), Modernizr.addTest("userselect", x("userSelect", "none", !0)), r(), s(T), delete w.addTest, delete w.addAsyncTest;
  for (var G = 0; G < Modernizr._q.length; G++) Modernizr._q[G]();
  e.Modernizr = Modernizr
}(window, document);