<!DOCTYPE html>
<html lang="en" class="antialiased">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Shaijo George</title>

        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://unpkg.com/htmx.org@1.9.10"></script>
        <script src="https://unpkg.com/@phosphor-icons/web"></script>

        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            page: '#000212',
                            card: 'rgba(255, 255, 255, 0.04)',
                            cardHover: 'rgba(255, 255, 255, 0.08)',
                            border: 'rgba(255, 255, 255, 0.1)',

                            // Typography
                            txt: {
                                main: '#EDEDEF',
                                muted: '#8A8F98',
                                accent: '#5E6AD2'
                            }
                        },
                        fontFamily: {
                            sans: ['Inter', 'system-ui', 'sans-serif'],
                        },
                        animation: {
                            'fade-in': 'fadeIn 0.5s ease-out forwards',
                        },
                        keyframes: {
                            fadeIn: {
                                '0%': { opacity: '0', transform: 'translateY(10px)' },
                                '100%': { opacity: '1', transform: 'translateY(0)' },'
                            }
                        }
                    }
                }
            }
        </script>

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&display=swap');
            
            body { 
                background-color: theme('colors.page'); 
                color: theme('colors.txt.main');
                font-family: 'Inter', sans-serif;
                /* top atmospheric glow */
                background-image: radial-gradient(circle at 50% 0%, rgba(120, 119, 198, 0.10) 0%, transparent 50%);
                min-height: 100vh;
            }

            /* glassmorphism utility class */
            .glass-panel {
                background-color: theme('colors.card');
                backdrop-filter: blur(12px);
                -webkit-backdrop-filter: blur(12px);
                border: 1px solid theme('colors.border');
                transition: transform 0.3s ease, background-color 0.3s ease;
            }
            
            .glass-panel:hover {
                background-color: theme('colors.cardHover');
                transform: translateY(-2px);
                border-color: rgba(255,255,255,0.15);
            }
        </style>
    </head>
    <body class="selection:bg-indigo-500/30 selection:text-white">
            <div class="fixed inset-0 z-[-1] opacity-20" 
                style="background-image: linear-gradient(#ffffff 1px, transparent 1px), linear-gradient(90deg, #ffffff 1px, transparent 1px);
                    background-size: 30px 30px;
                    mask-image: radial-gradient(circle, black 30%, transparent 70%);">
            </div>

            <div class="max-w-6xl mx-auto px-6 py-12 md:py-20 flex flex-col items-center relative">

                <div class="absolute top-10 left-1/2 -translate-x-1/2 w-[300px] h-[300px] bg-purple-600/20 blur-[100px] rounded-full pointer-events-none"></div>

                <div class="relative z-10 text-center animate-fade-in">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full border border-white/10 bg-white/5 text-xs font-medium text-purple-300 mb-6">
                        <span class="w-2 h-2 rounded-full bg-purple-500 animate-pulse"></span>
                        Available for new projects
                    </div>

                    <h1 class="text-5xl md:text-7xl font-semibold tracking-tight text-transparent bg-clip-text bg-gradient-to-b from-white via-white to-white/60 mb-6">
                        Engineered for<br>Performance.
                    </h1>

                    <p class="text-txt-muted text-lg md:text-xl max-w-2xl mx-auto leading-relaxed">
                        I build scalable backend systems that power modern businesses. <br>
                        PHP 8.2 • Symfony • High-Performance Architecture.
                    </p>
                </div>

                <main class="w-full grid grid-cols-1 md:grid-cols-6 gap-6 mt-20 animate-fade-in" style="animation-delay: 0.1s;">
                </main>

                <div id="modal-container"></div>
            </div>
    </body>
</html>