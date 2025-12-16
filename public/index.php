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
                                '100%': { opacity: '1', transform: 'translateY(0)' },
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
    <body class="bg-page text-txt-main selection:bg-indigo-500/30 selection:text-white">
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
                    <div class="glass-panel rounded-3xl p-8 md:col-span-4 flex flex-col justify-between group cursor-pointer relative overflow-hidden"
                        hx-get="/router.php?page=services" 
                        hx-target="#modal-container" 
                        hx-swap="innerHTML">
                        
                        <div class="absolute top-0 right-0 w-64 h-64 bg-indigo-500/10 blur-[80px] group-hover:bg-indigo-500/20 transition-all duration-500"></div>

                        <div class="relative z-10">
                            <h3 class="text-2xl font-medium text-white mb-2">Technical Services</h3>
                            <p class="text-txt-muted max-w-sm">
                                From database optimization to complete API architecture. I solve complex backend problems.
                            </p>
                        </div>

                        <div class="mt-8 flex gap-3 opacity-60 group-hover:opacity-100 transition-opacity">
                            <div class="h-10 px-4 border border-white/10 rounded-lg flex items-center justify-center text-xs text-txt-muted bg-white/5">API Design</div>
                            <div class="h-10 px-4 border border-white/10 rounded-lg flex items-center justify-center text-xs text-txt-muted bg-white/5">Database</div>
                            <div class="h-10 px-4 border border-white/10 rounded-lg flex items-center justify-center text-xs text-txt-muted bg-white/5">Cloud</div>
                        </div>
                    </div>

                    <div class="glass-panel rounded-3xl p-8 md:col-span-2 flex flex-col justify-center items-center text-center group cursor-pointer relative"
                        hx-get="/router.php?page=about" 
                        hx-target="#modal-container" 
                        hx-swap="innerHTML">
                        
                        <div class="absolute inset-0 opacity-10" style="background-image: repeating-linear-gradient(45deg, transparent, transparent 10px, white 10px, white 11px);"></div>

                        <div class="relative z-10">
                            <div class="text-7xl font-bold text-transparent bg-clip-text bg-gradient-to-b from-indigo-300 to-indigo-600 mb-2">1+</div>
                            <div class="text-txt-muted font-medium">Years Experience</div>
                        </div>
                    </div>

                    <div class="glass-panel rounded-3xl p-8 md:col-span-3 min-h-[320px] cursor-pointer"
                        hx-get="/router.php?page=projects" 
                        hx-target="#modal-container" 
                        hx-swap="innerHTML">
                        
                        <h3 class="text-xl font-medium text-white mb-6 flex items-center gap-2">
                            <i class="ph ph-code text-indigo-400"></i> Recent Work
                        </h3>

                        <div class="space-y-2">
                            <div class="flex items-center justify-between p-3 rounded-xl bg-white/5 border border-white/5 hover:bg-white/10 transition-colors">
                                <span class="text-sm text-txt-muted">E-Commerce Monolith </span>
                                <span class="text-[10px] uppercase tracking-wider text-green-400 bg-green-400/10 px-2 py-1 rounded">Live</span>
                            </div>
                            <div class="flex items-center justify-between p-3 rounded-xl bg-white/5 border border-white/5 hover:bg-white/10 transition-colors">
                                <span class="text-sm text-txt-muted">SaaS Billing Engine</span>
                                <span class="text-[10px] uppercase tracking-wider text-purple-400 bg-purple-400/10 px-2 py-1 rounded">Case Study</span>
                            </div>
                            <div class="flex items-center justify-between p-3 rounded-xl bg-white/5 border border-white/5 hover:bg-white/10 transition-colors">
                                <span class="text-sm text-txt-muted">Legacy Data Migration</span>
                                <span class="text-[10px] uppercase tracking-wider text-yellow-400 bg-yellow-400/10 px-2 py-1 rounded">Locked</span>
                            </div>
                        </div>
                    </div>

                    <a href="#" class="glass-panel rounded-3xl p-8 md:col-span-3 flex items-center justify-between group relative overflow-hidden">
                        <div class="absolute -left-10 -bottom-24 w-64 h-64 bg-blue-500/20 blur-[60px] rounded-full"></div>
                        
                        <div class="relative z-10">
                            <h3 class="text-xl font-medium text-white">Download Resume</h3>
                            <p class="text-txt-muted text-sm mt-1">PDF Format • Last updated Dec 2025</p>
                        </div>
                        
                        <div class="relative z-10 w-12 h-12 rounded-full border border-white/20 flex items-center justify-center group-hover:bg-white group-hover:text-black transition-colors">
                            <i class="ph ph-arrow-down text-xl"></i>
                        </div>
                    </a>
                </main>

                <div id="modal-container"></div>
            </div>
    </body>
</html>