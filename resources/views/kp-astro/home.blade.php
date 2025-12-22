
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
            height: 50vh;
            width: 50vh;
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
            height: 35vh;
            width: 35vh;
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
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #e74c3c;
            padding: 10px 20px;
            border-radius: 8px;
            color: white;
            font-weight: bold;
            z-index: 2;
        }

        .house-number-2 {
            position: absolute;
            top: 10%;
            left: 15%;
            background-color: #2ecc71;
            padding: 10px 20px;
            border-radius: 8px;
            color: white;
            font-weight: bold;
            z-index: 2;
        }

        .house-number-3 {
            position: absolute;
            top: 10%;
            right: 15%;
            background-color: #3498db;
            padding: 10px 20px;
            border-radius: 8px;
            color: white;
            font-weight: bold;
            z-index: 2;
        }

        /* Add more house positions as needed
        .house-number-4 {
            position: absolute;
            top: 50%;
            right: 5%;
            transform: translateY(-50%);
            background-color: #9b59b6;
            padding: 10px 20px;
            border-radius: 8px;
            color: white;
            font-weight: bold;
            z-index: 2;
        }

        .house-number-5 {
            position: absolute;
            bottom: 10%;
            right: 15%;
            background-color: #f39c12;
            padding: 10px 20px;
            border-radius: 8px;
            color: white;
            font-weight: bold;
            z-index: 2;
        }

        .house-number-6 {
            position: absolute;
            bottom: 10%;
            left: 15%;
            background-color: #e67e22;
            padding: 10px 20px;
            border-radius: 8px;
            color: white;
            font-weight: bold;
            z-index: 2;
        }

        .house-number-7 {
            position: absolute;
            top: 50%;
            left: 5%;
            transform: translateY(-50%);
            background-color: #1abc9c;
            padding: 10px 20px;
            border-radius: 8px;
            color: white;
            font-weight: bold;
            z-index: 2;
        }

        .house-number-8 {
            position: absolute;
            bottom: 5%;
            left: 50%;
            transform: translateX(-50%);
            background-color: #34495e;
            padding: 10px 20px;
            border-radius: 8px;
            color: white;
            font-weight: bold;
            z-index: 2;
        }

        .house-number-9 {
            position: absolute;
            top: 5%;
            left: 50%;
            transform: translateX(-50%);
            background-color: #16a085;
            padding: 10px 20px;
            border-radius: 8px;
            color: white;
            font-weight: bold;
            z-index: 2;
        }

        .house-number-10 {
            position: absolute;
            top: 30%;
            left: 10%;
            background-color: #27ae60;
            padding: 10px 20px;
            border-radius: 8px;
            color: white;
            font-weight: bold;
            z-index: 2;
        }

        .house-number-11 {
            position: absolute;
            top: 30%;
            right: 10%;
            background-color: #8e44ad;
            padding: 10px 20px;
            border-radius: 8px;
            color: white;
            font-weight: bold;
            z-index: 2;
        }

        .house-number-12 {
            position: absolute;
            bottom: 30%;
            left: 10%;
            background-color: #c0392b;
            padding: 10px 20px;
            border-radius: 8px;
            color: white;
            font-weight: bold;
            z-index: 2;
        } */

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
