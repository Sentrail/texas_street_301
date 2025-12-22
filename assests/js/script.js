// Mobile Menu Toggle + Auto-close on Link Click
document.addEventListener('DOMContentLoaded', () => {
    const btn = document.getElementById('mobile-toggle');
    const menu = document.getElementById('mobile-menu');

    if (btn && menu) {
        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });

        // Close menu when a link is clicked (improves UX on mobile)
        document.querySelectorAll('#mobile-menu a').forEach(link => {
            link.addEventListener('click', () => {
                menu.classList.add('hidden');
            });
        });
    }
});