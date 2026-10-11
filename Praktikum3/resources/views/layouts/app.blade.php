<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | LaporBanjir</title>
    <style>
        * { box-sizing: border-box; }
        body { 
            font-family: system-ui, -apple-system, sans-serif; 
            margin: 0; 
            background: #f4f4f5; 
            color: #18181b; 
            padding: 40px 16px;
        }

        /* Container Utama di Tengah */
        .container {
            max-width: 680px;
            margin: 0 auto;
            background: #ffffff;
            border: 1px solid #e4e4e7;
            border-radius: 8px;
            overflow: hidden;
        }

        /* Header Ringkas */
        header { 
            padding: 20px 24px 12px;
            border-bottom: 1px solid #f4f4f5;
        }
        header h1 { 
            margin: 0; 
            font-size: 20px; 
            color: #09090b; 
        }
        header p { 
            margin: 2px 0 0; 
            font-size: 13px; 
            color: #71717a; 
        }

        /* Navigasi Tab Simpel */
        nav { 
            display: flex;
            border-bottom: 1px solid #e4e4e7;
            background: #fafafa;
        }
        nav a { 
            flex: 1;
            text-align: center;
            color: #71717a; 
            text-decoration: none; 
            font-size: 14px;
            font-weight: 500;
            padding: 12px; 
            border-bottom: 2px solid transparent;
        }
        nav a:hover { 
            color: #18181b; 
        }
        nav a.active { 
            color: #09090b; 
            border-bottom-color: #09090b;
            background: #ffffff;
            font-weight: 600;
        }

        /* Area Konten */
        main { 
            padding: 24px; 
            min-height: 400px;
        }

        /* Footer */
        footer { 
            text-align: center; 
            padding: 16px; 
            font-size: 12px; 
            color: #a1a1aa; 
            border-top: 1px solid #f4f4f5;
        }

        /* Element Pendukung */
        .card { 
            border: 1px solid #e4e4e7; 
            padding: 16px; 
            margin-bottom: 12px; 
            border-radius: 6px; 
        }
        .card h3 { margin: 0 0 8px; font-size: 16px; }

        .badge { display: inline-block; padding: 2px 8px; border-radius: 4px; font-weight: 600; font-size: 12px; }
        .badge-waspada { background: #fef08a; color: #854d0e; }
        .badge-siaga   { background: #fed7aa; color: #9a3412; }
        .badge-awas    { background: #fecdd3; color: #9f1239; }

        label { display: block; margin: 14px 0 4px; font-weight: 600; font-size: 13px; }
        input[type=text], input[type=number], input[type=date] { 
            width: 100%; 
            padding: 8px 12px; 
            border: 1px solid #d4d4d8; 
            border-radius: 6px; 
            font-size: 14px;
        }
        button { 
            margin-top: 16px; 
            background: #18181b; 
            color: #ffffff; 
            border: 0; 
            padding: 10px 16px; 
            border-radius: 6px; 
            cursor: pointer; 
            font-size: 14px; 
            font-weight: 500;
        }
        button:hover { background: #27272a; }

        .error { color: #dc2626; font-size: 12px; margin-top: 2px; }
        .btn-link { 
            display: inline-block; 
            margin-top: 8px; 
            padding: 6px 12px; 
            background: #18181b; 
            color: #fff; 
            text-decoration: none; 
            border-radius: 4px; 
            font-size: 13px;
        }
        table.detail td { padding: 4px 12px 4px 0; font-size: 14px; }
    </style>
</head>
<body>

    <div class="container">
        <header>
            <h1>LaporBanjir</h1>
            <p>BPBD Kabupaten Bandung</p>
        </header>

        <nav>
            <a href="{{ route('laporan.create') }}" class="{{ request()->routeIs('laporan.create') ? 'active' : '' }}">Form Pelaporan</a>
            <a href="{{ route('laporan.index') }}" class="{{ request()->routeIs('laporan.index') ? 'active' : '' }}">Daftar Laporan</a>
        </nav>
        
        <main>
            @yield('content')
        </main>

        <footer>
            &copy; {{ date('Y') }} BPBD Kabupaten Bandung
        </footer>
    </div>

</body>
</html>