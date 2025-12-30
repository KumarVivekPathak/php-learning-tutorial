
    <style>
        body {
            background: #0f172a;
            color: #e5e7eb;
            font-family: system-ui, sans-serif;
            padding: 40px;
        }

        h1 {
            text-align: center;
            color: #fff;
            margin-bottom: 40px;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .wrapper {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 400px;
            width: 400px;
            border: 2px solid #fff;
        }

        .wrapper::before,
        .wrapper::after {
            content: '';
            position: absolute;
            background: #fff;
            pointer-events: none;
        }

        /* Diagonal line from top-left to bottom-right */
        .wrapper::before {
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(to bottom right,
                    transparent calc(50% - 1px),
                    #fff calc(50% - 1px),
                    #fff calc(50% + 1px),
                    transparent calc(50% + 1px));
        }

        /* Diagonal line from top-right to bottom-left */
        .wrapper::after {
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(to bottom left,
                    transparent calc(50% - 1px),
                    #fff calc(50% - 1px),
                    #fff calc(50% + 1px),
                    transparent calc(50% + 1px));
        }

        /* FIXED: Inner rotated square */
        .wrapper-inner {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) rotate(45deg);
            height: 280px;
            width: 280px;
            border: 2px solid #fff;
            z-index: 1;
        }

        .house {
            position: relative;
            width: 100%;
            height: 100%;
        }

        /* House numbers positioning */
        .house-number-1 {
            position: absolute;
            top: 39%;
            left: 48%;
            color: white;
            font-weight: normal;
            z-index: 2;
            font-size: 1.2rem;
        }

        .house-number-2 {
            position: absolute;
            top: 14%;
            left: 24%;
            color: white;
            font-weight: normal;
            z-index: 2;
            font-size: 1.2rem;
        }

        .house-number-3 {
            position: absolute;
            top: 18%;
            left: 20%;
            color: white;
            font-weight: normal;
            z-index: 2;
            font-size: 1.2rem;
        }

        
        .house-number-4 {
            position: absolute;
            top: 43%;
            left: 45%;
            color: white;
            font-weight: normal;
            z-index: 2;
            font-size: 1.2rem;
        }

        .house-number-5 {
            position: absolute;
            top: 68%;
            left: 20%;
            color: white;
            font-weight: normal;
            z-index: 2;
            font-size: 1.2rem;
        }

        .house-number-6 {
            position: absolute;
            top: 72%;
            left: 24%;
            color: white;
            font-weight: normal;
            z-index: 2;
            font-size: 1.2rem;
        }

        .house-number-7 {
            position: absolute;
            top: 48%;
            left: 48%;
            color: white;
            font-weight: normal;
            z-index: 2;
            font-size: 1.2rem;
        }

        .house-number-8 {
            position: absolute;
            top: 72%;
            left: 74%;
            color: white;
            font-weight: normal;
            z-index: 2;
            font-size: 1.2rem;
        }

        .house-number-9 {
            position: absolute;
            top: 68%;
            left: 77%;
            color: white;
            font-weight: normal;
            z-index: 2;
            font-size: 1.2rem;
        }

        .house-number-10 {
            position: absolute;
            top: 43%;
            left: 52%;
            color: white;
            font-weight: normal;
            z-index: 2;
            font-size: 1.2rem;
        }

        .house-number-11 {
            position: absolute;
            top: 18%;
            left: 77%;
            color: white;
            font-weight: normal;
            z-index: 2;
            font-size: 1.2rem;
        }

        .house-number-12 {
            position: absolute;
            top: 14%;
            left: 72%;
            color: white;
            font-weight: normal;
            z-index: 2;
            font-size: 1.2rem;
        } 

    </style>
</head>
<body>
    <h1>🪐 North Indian Kundli</h1>
    <article class="container">
        <div class="wrapper">
            <div class="wrapper-inner"></div>

            <article class="house">
                @for($i = 1; $i <= 12; $i++)
                    <h2 class="house-number-{{ $i }}">{{ $i }}</h2>
                @endfor
            </article>
            
        </div>
    </article>
