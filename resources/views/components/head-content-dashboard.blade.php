<link
      rel="icon"
      href="{{ asset('talentScope-img') }}/talentScope-mentol.svg"
      type="image/x-icon"
    />

    <!-- Fonts and icons -->
    <script src="{{ asset('template2') }}/assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
      WebFont.load({
        google: { families: ["Public Sans:300,400,500,600,700"] },
        custom: {
          families: [
            "Font Awesome 5 Solid",
            "Font Awesome 5 Regular",
            "Font Awesome 5 Brands",
            "simple-line-icons",
          ],
          urls: ["{{ asset('template2') }}/assets/css/fonts.min.css"],
        },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
    </script>

    <style>
      .logo-header[data-background-color] .btn-toggle, .logo-header[data-background-color] .more {
        color: #1a2035 !important;
      }
    </style>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('template2') }}/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ asset('template2') }}/assets/css/plugins.min.css" />
    <link rel="stylesheet" href="{{ asset('template2') }}/assets/css/kaiadmin.min.css" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="{{ asset('template2') }}/assets/css/demo.css" />