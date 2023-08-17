! function(a) {
  "use strict";

  function s() {
      for (var e = document.getElementById("topnav-menu-content").getElementsByTagName("a"), t = 0, n = e.length; t < n; t++) "nav-item dropdown active" === e[t].parentElement.getAttribute("class") && (e[t].parentElement.classList.remove("active"), e[t].nextElementSibling.classList.remove("show"))
  }

  function t(e) {
      1 == a("#light-mode-switch").prop("checked") && "light-mode-switch" === e ? (a("html").removeAttr("dir"), a("#dark-mode-switch").prop("checked", !1), a("#rtl-mode-switch").prop("checked", !1), a("#bootstrap-style").attr("href", "assets/css/bootstrap.min.css"), a("#app-style").attr("href", "assets/css/app.min.css"), sessionStorage.setItem("is_visited", "light-mode-switch")) : 1 == a("#dark-mode-switch").prop("checked") && "dark-mode-switch" === e ? (a("html").removeAttr("dir"), a("#light-mode-switch").prop("checked", !1), a("#rtl-mode-switch").prop("checked", !1), a("#bootstrap-style").attr("href", "assets/css/bootstrap-dark.min.css"), a("#app-style").attr("href", "assets/css/app-dark.min.css"), sessionStorage.setItem("is_visited", "dark-mode-switch")) : 1 == a("#rtl-mode-switch").prop("checked") && "rtl-mode-switch" === e && (a("#light-mode-switch").prop("checked", !1), a("#dark-mode-switch").prop("checked", !1), a("#bootstrap-style").attr("href", "assets/css/bootstrap-rtl.min.css"), a("#app-style").attr("href", "assets/css/app-rtl.min.css"), a("html").attr("dir", "rtl"), sessionStorage.setItem("is_visited", "rtl-mode-switch"))
  }

  function e() {
      document.webkitIsFullScreen || document.mozFullScreen || document.msFullscreenElement || (console.log("pressed"), a("body").removeClass("fullscreen-enable"))
  }
  var n;
  a("#side-menu").metisMenu(), a(".vertical-menu-btn").on("click", function(e) {
          e.preventDefault(), a("body").toggleClass("sidebar-enable"), 992 <= a(window).width() ? a("body").toggleClass("vertical-collpsed") : a("body").removeClass("vertical-collpsed")
      }), a("#sidebar-menu a").each(function() {
          var e = window.location.href.split(/[?#]/)[0];
          this.href == e && (a(this).addClass("active"), a(this).parent().addClass("mm-active"), a(this).parent().parent().addClass("mm-show"), a(this).parent().parent().prev().addClass("mm-active"), a(this).parent().parent().parent().addClass("mm-active"), a(this).parent().parent().parent().parent().addClass("mm-show"), a(this).parent().parent().parent().parent().parent().addClass("mm-active"))
      }), 
      
      a('[data-bs-toggle="fullscreen"]').on("click", function(e) {
          e.preventDefault(), a("body").toggleClass("fullscreen-enable"), document.fullscreenElement || document.mozFullScreenElement || document.webkitFullscreenElement ? document.cancelFullScreen ? document.cancelFullScreen() : document.mozCancelFullScreen ? document.mozCancelFullScreen() : document.webkitCancelFullScreen && document.webkitCancelFullScreen() : document.documentElement.requestFullscreen ? document.documentElement.requestFullscreen() : document.documentElement.mozRequestFullScreen ? document.documentElement.mozRequestFullScreen() : document.documentElement.webkitRequestFullscreen && document.documentElement.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT)
      }), document.addEventListener("fullscreenchange", e), document.addEventListener("webkitfullscreenchange", e), document.addEventListener("mozfullscreenchange", e), a(".navbar-nav a").each(function() {
          var e = window.location.href.split(/[?#]/)[0];
          this.href == e && (a(this).addClass("active"), a(this).parent().addClass("active"), a(this).parent().parent().addClass("active"), a(this).parent().parent().parent().addClass("active"), a(this).parent().parent().parent().parent().addClass("active"), a(this).parent().parent().parent().parent().parent().addClass("active"))
      }), a(".right-bar-toggle").on("click", function(e) {
          a("body").toggleClass("right-bar-enabled")
      }), a(document).on("click", "body", function(e) {
          0 < a(e.target).closest(".right-bar-toggle, .right-bar").length || a("body").removeClass("right-bar-enabled")
      }),
      function() {
          if (document.getElementById("topnav-menu-content")) {
              for (var e = document.getElementById("topnav-menu-content").getElementsByTagName("a"), t = 0, n = e.length; t < n; t++) e[t].onclick = function(e) {
                  "#" === e.target.getAttribute("href") && (e.target.parentElement.classList.toggle("active"), e.target.nextElementSibling.classList.toggle("show"))
              };
              window.addEventListener("resize", s)
          }
      }(),
      function() {
          [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]')).map(function(e) {
              return new bootstrap.Tooltip(e)
          }), [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]')).map(function(e) {
              return new bootstrap.Popover(e)
          });
          var n = a(this).attr("data-delay") ? a(this).attr("data-delay") : 100,
              s = a(this).attr("data-time") ? a(this).attr("data-time") : 1200;
          a('[data-plugin="counterup"]').each(function(e, t) {
              a(this).counterUp({
                  delay: n,
                  time: s
              })
          })
      }(), window.sessionStorage && ((n = sessionStorage.getItem("is_visited")) ? (a(".right-bar input:checkbox").prop("checked", !1), a("#" + n).prop("checked", !0), t(n)) : sessionStorage.setItem("is_visited", "light-mode-switch")), a("#light-mode-switch, #dark-mode-switch, #rtl-mode-switch").on("change", function(e) {
          t(e.target.id)
      }), a(window).on("load", function() {
          a("#status").fadeOut(), a("#preloader").delay(350).fadeOut("slow")
      }), Waves.init()
}(jQuery);