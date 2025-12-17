<?php

$page = $_GET['page'] ?? '';

// Modal Wrapper
function wrapModal($content) {
    return "
    <div class='fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/80 backdrop-blur-sm animate-fade-in'
        onclick='this.remove()'>
        
        <div class='w-full max-w-2xl bg-[#0F1119] border border-white/10 rounded-2xl shadow-2xl relative overflow-hidden'
            onclick='event.stopPropagation()'> 
            <div class='absolute top-0 inset-x-0 h-px bg-gradient-to-r from-transparent via-indigo-500/50 to-transparent'></div>

            <div class='p-8 md:p-10 text-gray-300'>
                $content
            </div>

            <div class='bg-white/5 px-8 py-4 flex justify-between items-center border-t border-white/5'>
                <span class='text-xs text-gray-500 font-mono'>CMD+W TO CLOSE</span>
                <button onclick='this.closest(\".fixed\").remove()' class='text-sm font-medium text-white hover:text-indigo-400 transition-colors'>
                    Close
                </button>
            </div>
        </div>
    </div>
    ";
}

// Content Logic
$content = match ($page) {
    'services' => "
        <h2 class='text-2xl font-medium text-white mb-6'>Engineering Services</h2>
        <div class='space-y-6'>
            <div class='flex gap-4'>
                <div class='w-10 h-10 rounded-lg bg-white/5 flex items-center justify-center text-indigo-400 border border-white/5'>
                    <i class='ph ph-database text-xl'></i>
                </div>
                <div>
                    <h3 class='text-white font-medium'>Backend Architecture</h3>
                    <p class='text-sm text-gray-500 mt-1'>Designing scalable schemas in MySQL/PostgreSQL. I ensure your data integrity survives high traffic.</p>
                </div>
            </div>
            <div class='flex gap-4'>
                <div class='w-10 h-10 rounded-lg bg-white/5 flex items-center justify-center text-indigo-400 border border-white/5'>
                    <i class='ph ph-plugs text-xl'></i>
                </div>
                <div>
                    <h3 class='text-white font-medium'>API Development</h3>
                    <p class='text-sm text-gray-500 mt-1'>RESTful and GraphQL APIs built with PHP 8.2. Secure, documented, and versioned.</p>
                </div>
            </div>
        </div>
    ",

    'about' => "
        <h2 class='text-2xl font-medium text-white mb-4'>The Developer</h2>
        <p class='leading-relaxed text-gray-400 mb-6'>
            I am a backend specialist who values <span class='text-white'>precision over speed</span>. While frameworks change, the fundamentals of good architecture do not.
        </p>
        <div class='grid grid-cols-2 gap-4'>
            <div class='p-4 rounded-xl bg-white/5 border border-white/5'>
                <div class='text-xs text-gray-500 uppercase tracking-widest mb-1'>Location</div>
                <div class='text-white'>Remote / Worldwide</div>
            </div>
            <div class='p-4 rounded-xl bg-white/5 border border-white/5'>
                <div class='text-xs text-gray-500 uppercase tracking-widest mb-1'>Availability</div>
                <div class='text-green-400'>Open for Contract</div>
            </div>
        </div>
    ",

    'projects' => "
        <h2 class='text-2xl font-medium text-white mb-6'>Selected Case Study</h2>
        <div class='border border-white/10 rounded-xl overflow-hidden'>
            <div class='bg-white/5 p-4 border-b border-white/5 flex justify-between items-center'>
                <span class='text-white font-medium'>E-Commerce Optimization</span>
                <span class='text-xs text-gray-500'>2024</span>
            </div>
            <div class='p-6'>
                <div class='grid grid-cols-1 md:grid-cols-2 gap-8'>
                    <div>
                        <h4 class='text-sm text-indigo-400 font-bold uppercase mb-2'>The Challenge</h4>
                        <p class='text-sm text-gray-400'>Client experienced 504 Timeouts during flash sales. Database CPU usage hit 100% at 500 concurrent users.</p>
                    </div>
                    <div>
                        <h4 class='text-sm text-green-400 font-bold uppercase mb-2'>The Solution</h4>
                        <p class='text-sm text-gray-400'>Implemented Redis caching layer, optimized N+1 queries in Laravel, and set up Read/Write database replicas.</p>
                    </div>
                </div>
            </div>
        </div>
    ",

    default => "<div class='text-red-400'>Content not found.</div>"
};

echo wrapModal($content);
?>