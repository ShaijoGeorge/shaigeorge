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
                /* The top atmospheric glow */
                background-image: radial-gradient(circle at 50% 0%, rgba(120, 119, 198, 0.10) 0%, transparent 50%);
                min-height: 100vh;
            }

            /* Glassmorphism Utility Class */
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
    </body>
</html>